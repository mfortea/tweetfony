<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Tweet;

class TweetController extends AbstractController
{
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Tweet::class);
        $tweets = $repository->findAll();
        return $this->render('index.html.twig', array(
            'tweets' => $tweets,
        ));
    }

    public function verTweet($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Tweet::class)->find($id);
        $tweet= $entityManager->getRepository(Tweet::class)->find($id);
        if (!$tweet){
            throw $this->createNotFoundException(
            'No existe ningún tweet con el id  '.$id
            );
        }
        return $this->render('verTweet.html.twig'
        , array(
            'tweet' => $tweet,
        ));

    }

    public function demo() {
        return $this->render('demo.html.twig');
    }

    public function demoTweet() {
        return $this->render('demoTweet.html.twig');
    }
}
