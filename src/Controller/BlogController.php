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
            'videos' => $video,
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
     * @Route("/blog/new", name="video_create") 
     */
    public function create(Request $request, EntityManagerInterface $manager){
        $video = new Video();

        $form = $this->createformBuilder($video)
                    ->add('nom')
                    ->add('game')
                    ->add('description', TextAreaType::class)
                    ->add('image')
                    ->add('video')
                    ->add('serie')
                    ->getform();

        $form->handleRequest($request);
        if ($form->isSubmitted() and $form->isValid()) {

            $manager->persist($video);
            $manager->flush();

            return $this->redirectToRoute('blog_show', [
                'id' => $video->getId()
                ]);
        }


        return $this->render('blog/create.html.twig' , [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show($id){
        $repos = $this->getDoctrine()->getRepository(Video::class);
        $video = $repos->find($id);
        return $this->render('blog/show.html.twig', [
            'video' => $video
        ]);
    }

    /**
     * @Route("/serie", name="serie")
     */
    public function serie_list(){
        $repo = $this->getDoctrine()->getRepository(Video::class);
        $serie = $repo->findBy([
            'serie' => true
        ]);
        return $this->render('blog/serie.html.twig', [
            'controller_name' => 'BlogController',
            'series' => $serie,
        ]);
    }
    /**
     * @Route("/opening", name="opening")
     */
    public function opening_list(){
        $repo = $this->getDoctrine()->getRepository(Video::class);
        $opening = $repo->findBy([
            'opening' => true
        ]);
        return $this->render('blog/opening.html.twig', [
            'controller_name' => 'BlogController',
            'openings' => $opening
        ]);
    }
}
