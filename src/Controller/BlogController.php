<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Video;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Video::class);
        $video = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'video' => $video,
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig');
    }

    /**
     * @Route("/blog/new", name="personnage_create") 
     */
    public function create(Request $request, EntityManagerInterface $manager){
        $personnage = new Video();

        $form = $this->createformBuilder($personnage)
                    ->add('nom')
                    ->add('game')
                    ->add('description', TextAreaType::class)
                    ->add('image')
                    ->getform();

        $form->handleRequest($request);

        dump($personnage);

        if ($form->isSubmitted() and $form->isValid()) {

            $manager->persist($personnage);
            $manager->flush();

            return $this->redirectToRoute('blog_show', [
                'id' => $personnage->getId()
                ]);
        }


        return $this->render('blog/create.html.twig' , [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show($id)
    {
        $repos = $this->getDoctrine()->getRepository(Video::class);
        $personnage = $repos->find($id);
        return $this->render('blog/show.html.twig', [
            'personnage' => $personnage
        ]);
    }
}
