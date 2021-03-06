<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommentController extends AbstractController {

    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote($id, $direction) {

        // todo use id to query database

        // use real logic here to save this to the database
        if ($direction === 'up') {
            $currentVoteCount = rand(7, 100);
        } else {
            $currentVoteCount = rand(0, 5);
        }

        return $this->json(['votes', $currentVoteCount]);

    }

}