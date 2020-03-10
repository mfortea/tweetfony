<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Entity\Tweet;
use App\Entity\User;

class ApiController extends AbstractController
{

    function getTweet($id) {
        // Obtenemos el tweet
        $entityManager = $this->getDoctrine()->getManager();
        $tweet = $entityManager->getRepository(Tweet::class)->findOneById($id);
        // Si el tweet no existe devolvemos un error con código 404.
        if ($tweet == null) {
        return new JsonResponse([
        'error' => 'Tweet not found'
        ], 404);
        }
        // Creamos un objeto genérico y lo rellenamos con la información.
        $result = new \stdClass();
        $result->id = $tweet->getId();
        $result->date = $tweet->getDate();
        $result->text = $tweet->getText();
        // Para enlazar al usuario, añadimos el enlace API para consultar su infor
        $result->user = $this->generateUrl('api_get_user', [
        'id' => $tweet->getUser()->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        // Para enlazar a los usuarios que han dado like al tweet, añadimos sus en
        $result->likes = array();
        foreach ($tweet->getLikes() as $user) {
        $result->likes[] = $this->generateUrl('api_get_user', [
        'id' => $user->getId(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        }
        // Al utilizar JsonResponse, la conversión del objeto $result a JSON se ha
        return new JsonResponse($result);
        }

    function getTweetfonyUser($id) {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneById($id);
        if ($user == null) {
            return new JsonResponse([
            'error' => 'User not found'
            ], 404);
        }
        $result = new \stdClass();
        $result->id = $user->getId();
        $result->name = $user->getName();
        $result->user_name = $user->getUserName();

        $result->tweets = array();
        foreach ($user->getTweets() as $tweet) {
        $result->tweets[] = $this->generateUrl('api_get_tweet', [
            'id' => $tweet->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        }     

        $result->likes = array();
        foreach ($user->getLikes() as $like) {
        $result->likes[] = $this->generateUrl('api_get_tweet', [
            'id' => $like->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        }        
        return new JsonResponse($result);
    }

    // function getTweets() {
    //     $repository = $this->getDoctrine()->getRepository(Tweet::class);
    //     $result = array();
    //     foreach ($tweets = $repository->findAll() as $tweet) {
    //         $result[] = $this->generateUrl('api_get_tweet', [
    //             'id' => $tweet->getId(),
    //             ], UrlGeneratorInterface::ABSOLUTE_URL);
    //     }    
    //     return new JsonResponse($result);
    // }


    function getTweets() {
        $entityManager = $this->getDoctrine()->getManager();
        $tweets = $entityManager->getRepository(Tweet::class)->findAll();
        $result = array();
        $user = new \stdClass();
        $likes = array();
        foreach ($tweets as $tweet) {
            // En los tweets, los likes son usuarios
            foreach ($tweet->getLikes() as $like){
                $likes[] = ['id' => $like->getId(), 'name' => $like->getName(),
                'userName' => $like->getUserName()];

            }

            // Creación del objeto usuario de cada tweet
            $user->id=$tweet->getUser()->getId();
            $user->name=$tweet->getUser()->getName();
            $user->userName=$tweet->getUser()->getUserName();

            $result[] = ['id' => $tweet->getId(),'date' => $tweet->getDate(),
            'text' => $tweet->getText(), 'user' => $user,'likes' => $likes];
        }    
        return new JsonResponse($result);
    }


    function getUsers() {
        $users = $this->getDoctrine()->getRepository(User::class);
        $result = array();
        $tweets = array();
        $likes = array();
        foreach ($users = $users->findAll() as $user) {
            foreach ($user->getTweets() as $tweet){
                $tweets[]=['id' => $tweet->getId(), 'date' => $tweet->getDate(), 
                'text' => $tweet->getText()];
            }
            // En los usuarios, los likes son tweets
            foreach ($user->getLikes() as $like){
                $likes[]=['id' => $like->getId(),'date' => $like->getDate(),
                'text' => $like->getText() ];
            }

            $result[] = ['id'=> $user->getId(), 'name'=> $user->getName(), 'userName'=> $user->getUserName(), 
            'tweets'=> $tweets , 'likes'=> $likes];
        }    
        return new JsonResponse($result);
    }

    function postTweetfonyUser(Request $request) {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneByUserName($request->request->get("userName"));
        if ($user) {
            return new JsonResponse([
            'error' => 'UserName already exists'
            ], 409);
        }
        $user = new User();
        $user->setName($request->request->get("name"));
        $user->setUserName($request->request->get("userName"));
        $entityManager->persist($user);
        $entityManager->flush();
        // Creación del objeto que devuelve
        $result = new \stdClass();
        $result->id = $user->getId();
        $result->name = $user->getName();
        $result->userName = $user->getUserName();
        $result->likes = array();
        foreach ($user->getLikes() as $tweet) {
            $result->likes[] = $this->generateUrl('api_get_tweet', [
            'id' => $tweet->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        }
        $result->tweets = array();
        foreach ($user->getTweets() as $tweet) {
            $result->tweets[] = $this->generateUrl('api_get_tweet', [
            'id' => $tweet->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
        }
        return new JsonResponse($result, 201);
        }


        function postTweet(Request $request){
            $entityManager = $this->getDoctrine()->getManager();
            $tweet = new Tweet();
            $idUser = $request->request->get("user");
            $user = $entityManager->getRepository(User::class)->findOneById($idUser);
            if ($user == null) {
                return new JsonResponse([
                'error' => 'User does not exist'
                ], 404);
            }
            $tweet->setUser($user);
            $tweet->setText($request->request->get("text"));
            $date = \DateTime::createFromFormat('d-m-Y', $request->request->get("date"));
            $tweet->setDate($date);

            $entityManager->persist($tweet);
            $entityManager->flush();

            // Creación del objeto que devuelve
            $result = new \stdClass();
            $result->id = $tweet->getId();
            $result->date = $tweet->getDate();
            $result->text = $tweet->getText();
            $result->user = $this->generateUrl('api_get_user', [
            'id' => $tweet->getUser()->getId(),
            ], UrlGeneratorInterface::ABSOLUTE_URL);
            $result->likes = array();
            foreach ($tweet->getLikes() as $user) {
                $result->likes[] = $this->generateUrl('api_get_user', [
                'id' => $user->getId(),
                ], UrlGeneratorInterface::ABSOLUTE_URL);
            }

            return new JsonResponse($result, 201);
            }
    

        function putTweetfonyUser(Request $request, $id) {
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findOneById($id);
            if ($user == null) {
                return new JsonResponse([
                'error' => 'User not found'
                ], 404);
            }
            if ($user->getUserName() != $request->request->get("userName")) {
                $user2 = $entityManager->getRepository(User::class)->findOneByUserName($request->request->get("userName"));
                if ($user2) {
                    return new JsonResponse([
                    'error' => 'UserName already in use'
                    ], 409);
                }
            }
            $user->setName($request->request->get("name"));
            $user->setUserName($request->request->get("userName"));
            $entityManager->flush();
            $result = new \stdClass();
            $result->id = $user->getId();
            $result->name = $user->getName();
            $result->userName = $user->getUserName();
            $result->likes = array();
            foreach ($user->getLikes() as $tweet) {
                $result->likes[] = $this->generateUrl('api_get_tweet', [
                'id' => $tweet->getId(),
                ], UrlGeneratorInterface::ABSOLUTE_URL);
            }
            $result->tweets = array();
            foreach ($user->getTweets() as $tweet) {
                $result->tweets[] = $this->generateUrl('api_get_tweet', [
                'id' => $tweet->getId(),
                ], UrlGeneratorInterface::ABSOLUTE_URL);
            }
            return new JsonResponse($result);
            }


            function putTweet(Request $request, $id) {
                $entityManager = $this->getDoctrine()->getManager();
                $tweet = $entityManager->getRepository(Tweet::class)->findOneById($id);
                if ($tweet == null) {
                    return new JsonResponse([
                    'error' => 'Tweet not found'
                    ], 404);
                }
                $idUser = $request->request->get("user");
                $user = $entityManager->getRepository(User::class)->findOneById($idUser);
                if ($user == null) {
                    return new JsonResponse([
                    'error' => 'User does not exist'
                    ], 404);
                }
                $tweet->setUser($user);
                $tweet->setText($request->request->get("text"));
                $date = \DateTime::createFromFormat('d-m-Y', $request->request->get("date"));
                $tweet->setDate($date);
                $entityManager->persist($tweet);
                $entityManager->flush();

                // Creación del objeto que devuelve
                $result = new \stdClass();
                $result->id = $tweet->getId();
                $result->date = $tweet->getDate();
                $result->text = $tweet->getText();
                $result->user = $this->generateUrl('api_get_user', [
                'id' => $tweet->getUser()->getId(),
                ], UrlGeneratorInterface::ABSOLUTE_URL);
                $result->likes = array();
                foreach ($tweet->getLikes() as $user) {
                    $result->likes[] = $this->generateUrl('api_get_user', [
                    'id' => $user->getId(),
                    ], UrlGeneratorInterface::ABSOLUTE_URL);
                }

                return new JsonResponse($result, 201);
                }


            function deteleTweetfonyUser(Request $request, $id) {
                $entityManager = $this->getDoctrine()->getManager();
                $user = $entityManager->getRepository(User::class)->findOneById($id);
                if ($user == null) {
                    return new JsonResponse([
                    'error' => 'User does not exist'
                    ], 404);
                }
                $entityManager->remove($user);
                $entityManager->flush();
                return new JsonResponse(null, 204);

            }

            function deleteTweet(Request $request, $id) {
                $entityManager = $this->getDoctrine()->getManager();
                $tweet = $entityManager->getRepository(Tweet::class)->findOneById($id);
                if ($tweet == null) {
                    return new JsonResponse([
                    'error' => 'Tweet does not exist'
                    ], 404);
                }
                $entityManager->remove($tweet);
                $entityManager->flush();
                return new JsonResponse(null, 204);

            }
    
    function feedback(Request $request, $idUser, $idTweet){
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneById($idUser);
        $tweet = $entityManager->getRepository(Tweet::class)->findOneById($idTweet);

        if ($tweet == null) {
            return new JsonResponse([
            'error' => 'Tweet not found'
            ], 404);
        }

        if ($user == null) {
            return new JsonResponse([
            'error' => 'User not found'
            ], 404);
        }
        
        if ($request->request->get("like") == "true"){
            $tweet->addLike($user);
        }elseif ($request->request->get("like") == "false") {
            $tweet->removeLike($user);
        }

        $entityManager->flush();
        return new JsonResponse("ok", 204);
    

    }

    function index() {
        $result = array();
        $result['users'] = $this->generateUrl('api_get_users',array(),UrlGeneratorInterface::ABSOLUTE_URL);
        $result['tweets'] = $this->generateUrl('api_get_tweets',array(), UrlGeneratorInterface::ABSOLUTE_URL);  
        return new JsonResponse($result);
        }
}