<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Book;
use Symfony\Component\Routing\Annotation\Route;

class BookListController extends AbstractController
{
    /**
     * @Route("/", name="book_list")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository(Book::class)->findAll();
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BookListController.php',
        ]);
    }
}
