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
        // TODO
        return new JsonResponse();
    }

}