<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\RouteRedirectView;

use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\UserType;

use FOS\RestBundle\Controller\FOSRestController;

use FOS\RestBundle\Controller\Annotations as Rest;


use AppBundle\Entity\Place;

class UserController extends FOSRestController
{
    /**
     * @Rest\Get("/users")
     * @Rest\View
     */
    public function getUsersAction(Request $request)
    {
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();

        return $users;
    }

    /**
     * @Rest\Get("/users/{id}")
     * @Rest\View
     */
    public function getUserAction(Request $request)
    {
        $user = $this->get('doctrine.orm.entity_manager')
                ->getRepository('AppBundle:User')
                ->find($request->get('id'));
        
        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        return $user;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/users")
     */
    public function postUsersAction(Request $request)
    {

        $form = $this->createForm(UserType::class, null, [
            'csrf_protection' => false,        
        ]);

        $form->submit($request->request->all());
        
        if (!$form->isValid()) {
            return $form;
        }

        $user = $form->getData();
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $routeOptions = [
            'id' => $user->getId(),
            '_format' => $request->get('_format'),
        ];

        return $this->routeRedirectView('get_user', $routeOptions, Response::HTTP_CREATED);
    }

}
