<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; // Call the AbstractController
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController { // extends your class

    /**
     * @Route("/")
     */

    public function homepage() {
        return new Response('What a bewitching controller we have conjured!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug) {

        // Added an array inside the method
        // I can use it inside my templates
        // but before you have to pass it as 
        // parameter into the render()
        $answers = [
            'Make sure your cat is sitting purfectly still',
            'Honestly, I like furry shoes better than my cat',
            'Maye...try saying the spell backwards?'
        ];

        // path of the template, inside the array you can 
        // add some variables like query database
        // Render method return a 'Response object'
        return $this->render('question/show.html.twig', [ 
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }

}

