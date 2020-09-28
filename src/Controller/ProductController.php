<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\ProductBundle\Repository\ProductRespositoryDoctrineAdapter;
use App\ProductBundle\DTO\CreateProductResponseDto;
use App\ProductBundle\DTO\CreateProductRequestDto;
use App\Form\CreateProductRequestType;

/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class ProductController
{
    // /**
    //  * Get specifict product.
    //  * @Rest\Get("/product/$id")
    //  *
    //  * @return Response
    //  */
    public function getProduct($id)
    {
        $repository = new ProductRespositoryDoctrineAdapter(new EntityManager());
    }
    // public function getMovieAction()
    // {
    //     $repository = $this->getDoctrine()->getRepository(Movie::class);
    //     $movies = $repository->findall();
    //     return $this->handleView($this->view($movies));
    // }
    // /**
    //  * Create Movie.
    //  * @Rest\Post("/movie")
    //  *
    //  * @return Response
    //  */
    // public function postMovieAction(Request $request)
    // {
    //     $movie = new Movie();
    //     $form = $this->createForm(MovieType::class, $movie);
    //     $data = json_decode($request->getContent(), true);
    //     $form->submit($data);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($movie);
    //         $em->flush();
    //         return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
    //     }
    //     return $this->handleView($this->view($form->getErrors()));
    // }
}
