<?php

namespace App\Controller;

use App\Repository\CarRepository;
use App\Repository\DriverRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(CarRepository $carRepository,DriverRepository $driverRepository ): Response
    {
        $allCar = $carRepository->findAll();
        $allDriver = $driverRepository->findAll();

        return $this->render('home/index.html.twig', [
            'allCar' => $allCar,
            'allDriver' => $allDriver
        ]);
    }
}
