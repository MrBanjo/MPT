<?php

namespace AppBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use AppBundle\Form\PlatType;
use AppBundle\Entity\Plat;


class PlatAdminController extends Controller
{
    /**
     * @Route("/admin/plat", name="plat_admin")
     */
    public function indexAction()
    {

        $liste_plat = $this->getDoctrine()->getManager()->getRepository('AppBundle:Plat')->getPlatAdmin();

        $params = array('liste_plat' => $liste_plat);

        return $this->render('admin/plat_admin.html.twig', $params);

    }

    /**
     * @Route("/admin/plat/edit/{id}", name="edit_plat_admin")
     */
    public function editAction(Request $request,$id)
    {

        $plat = $this->getDoctrine()->getManager()->getRepository('AppBundle:Plat')->find($id);
        $message = '';

        if($plat == null) 
        {
            $plat = new Plat();
        }

        $form = $this->createForm(new PlatType(), $plat);

        if ($form->handleRequest($request)->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($plat);
            $em->flush();

            $message = 'Le plat a été créé !';     
        }

        return $this->render('admin/edit.html.twig', array(
              'form' => $form->createView(),
              'id' => $plat->getId(),
              'message' => $message
            ));

    }

    /**
     * @Route("/admin/plat/erase", name="plat_erase")
     */
    public function eraseAction(Request $request)
    {

        if($request->request->get('erase'))
        {

            $plat = $this->getDoctrine()->getManager()->getRepository('AppBundle:Plat')->find($request->request->get('erase'));

            $em = $this->getDoctrine()->getManager();
            $em->remove($plat);
            $em->flush();
        }

        return new RedirectResponse($this->generateUrl('plat_admin'));
    }

}
