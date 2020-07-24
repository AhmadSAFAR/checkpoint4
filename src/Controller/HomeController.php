<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EventRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     */
    public function index(EventRepository $eventRepository): Response
    {
        $limit=3;
        return $this->render('home/index.html.twig', [
            'events' => $eventRepository->findBy([], ['eventDate' => 'desc'], $limit),
        ]);
    }

}
