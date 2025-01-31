<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Lego;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function lego()
    {
        $lego = new Lego(10252, "La coccinelle Volkwagen", "Creator Expert", "Construis une réplique LEGO® Creator Expert de l'automobile la plus populaire 
au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le 
charme et la personnalité de la voiture, notamment un coloris bleu ciel, des ailes arrondies, 
des jantes blanches avec des enjoliveurs caractéristiques, des phares ronds et des 
clignotants montés sur les ailes.", 94.99 , 1167, "LEGO_10252_Box.png ", " LEGO_10252_Main.jpg");
        
        return $this -> render('lego.html.twig', ['lego' => $lego]);
    }
}
