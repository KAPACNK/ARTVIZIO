<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Book;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use App\Form\AddBookType;
use App\Form\EditBookType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BookListController extends AbstractController
{
    /**
     * @Route("/", name="book_list")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository(Book::class)->findAll();
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/BookListController.php',
        // ]);
        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    /**
     * @Route("/create", name="book_add")
     */
    public function create(Request $request){
        $book = new Book();
        $form = $this->createForm(AddBookType::class, $book, ['attr' => ['class' => 'form-group']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $book = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute('book_list');
        }
        return $this->render('book/add_form.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/update/{id}", name="book_update")
     */
    public function update(Request $request, $id){
        $book = new Book();
        $book = $this->getDoctrine()->getRepository(Book::class)->find($id);


        $form = $this->createForm(EditBookType::class, $book,
        ['action' => $this->generateUrl('book_update', 
            ['id' => $book->getId()]), 
        'method' => 'POST',
        ]);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()){
            $book = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('book_list');
        }
        return $this->render('book/update_form.html.twig',
            ['form' => $form->createView()]
        );
    }
}
