<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\DBAL\Connection;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(Connection $connection): Response
    {
        try{
            $connection->getDatabase();
            $db_test = true;
        }
        catch (\Exception $e){
            $db_test = false;
        }
        return $this->render('default/index.html.twig', [
            'db_test' => $db_test,
        ]);
    }
}
