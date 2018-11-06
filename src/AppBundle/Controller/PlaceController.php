<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use FOS\RestBundle\View\RouteRedirectView;

use FOS\RestBundle\Controller\FOSRestController;

use AppBundle\Form\PlaceType;


use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\Place;

class PlaceController extends FOSRestController
{


 	  /**
     * @Rest\Get(
     *     path = "/places"
     * )
     * @Rest\View
     */
 public function getPlacesAction(Request $request){

 	    $places =  $this->getDoctrine()->getRepository('AppBundle:Place')->findAll();
      return $places;
 }



 	  /**
     * @Rest\Get(
     *     path = "/places/{id}",
     *     requirements = {"id"="\d+"}
     * )
     * @Rest\View
     */
 public function getPlaceAction(Request $request){

 	$place = $this->getDoctrine()->getRepository('AppBundle:Place')->find($request->get('id'));

 	 if (empty($place)) {
            return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
        }

        return $place;
 }


    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/places")
     */
    public function postPlacesAction(Request $request)
    {

        $form = $this->createForm(PlaceType::class, null, [
            'csrf_protection' => false,        
        ]);

        $form->submit($request->request->all());
        
        if (!$form->isValid()) {
            return $form;
        }

        $place = $form->getData();
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($place);
        $em->flush();

        $routeOptions = [
            'id' => $place->getId(),
            '_format' => $request->get('_format'),
        ];

        return $this->routeRedirectView('get_place', $routeOptions, Response::HTTP_CREATED);

    }

}
