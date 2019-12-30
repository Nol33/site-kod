<?php


// Représente l'architecture pour aller à la classe
namespace App\Controller;

use App\Repository\PaysRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DanemarkController extends AbstractController
{

    /**
     * @Route("/danemark", name="danemark")
     */


    public function danemark (PaysRepository $paysRepository)
    {

        return $this->render('danemark.html.twig', [

        ]);
        // on retourne un fichier twig en lui envoyant la variable qui contient le danemark
    }
}