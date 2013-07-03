<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SM\Bundle\AdminBundle\Entity\Media;
use SM\Bundle\AdminBundle\Form\MediaType;
use SM\Bundle\AdminBundle\Utilities;

/**
 * Media controller.
 *
 */
class MediaController extends Controller
{

    /**
     * list action
     *
     * @param type $page page
     *
     * @return type
     */
    public function indexAction($page)
    {
        $rep = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Media");

        $total = $rep->getTotal();

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $rep->getList($perPage, ($page - 1) * $perPage);

        //get upload dir
        $uploadPath = $this->container->getParameter('upload');
        return $this->render('SMAdminBundle:Media:index.html.twig', array(
            'entities' => $entities,
            'lastPage' => $lastPage,
            'previousPage' => $previousPage,
            'currentPage' => $page,
            'nextPage' => $nextPage,
            'total' => $total,
            'imgPath' => '/web/' . $uploadPath
        ));
    }

    /**
     * index action
     *
     * @param type $id the id
     *
     * @return type
     *
     * @throws type
     */
    public function showAction($id)
    {
        $entity = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Media")
                ->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:Media:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * new action
     *
     * @return type
     */
    public function newAction()
    {
        $entity = new Media();
        $form = $this->createForm(new MediaType(), $entity);

        return $this->render('SMAdminBundle:Media:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * create action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request request
     *
     * @return type
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()
                ->getEntityManager();

        $entity = new Media();
        $form = $this->createForm(new MediaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            if (is_object($entity)) {
                if (!empty($entity->file)) {
                    $newName = Utilities::renameForFile($entity->file->getClientOriginalName());
                    //get upload dir
                    $uploadPath = $this->container->getParameter('upload');
                    $webDir = $this->container->get('kernel')->getRootDir() . '/../web';
                    $uploadDir = $webDir . $uploadPath;
                    //upload file
                    $entity->file->move($uploadDir, $newName);
                    //set new name
                    $entity->setName($newName);
                }
                //saving data
                $em->persist($entity);
                $em->flush();
            }

            return $this->redirect(
                $this->generateUrl(
                        'admin_media', array('id' => $entity->getId()
                ))
            );
        }

        return $this->render('SMAdminBundle:Media:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * edit action
     *
     * @param type $id the id
     *
     * @return type
     *
     * @throws type
     */
    public function editAction($id)
    {
        $entity = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Media")
                ->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }
        $editForm = $this->createForm(new MediaType(array('requiredFile' => 1)), $entity);

        $deleteForm = $this->createDeleteForm($id);

        return $this->render(
            'SMAdminBundle:Media:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * update action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request request
     * @param type                                      $id      id
     *
     * @return type
     *
     * @throws type
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()
                ->getEntityManager();

        $entity = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Media")
                ->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Media entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MediaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            if (is_object($entity)) {
                if (!empty($entity->file)) {
                    $newName = Utilities::renameForFile($entity->file->getClientOriginalName());
                    //get upload path
                    $uploadPath = $this->container->getParameter('upload');
                    $webDir = $this->container->get('kernel')->getRootDir() . '/../web';
                    $uploadDir = $webDir . $uploadPath;
                    //upload file
                    $entity->file->move($uploadDir, $newName);
                    //set new name
                    $entity->setName($newName);
                }
                //saving data
                $em->persist($entity);
                $em->flush();
            }

            return $this->redirect(
                $this->generateUrl(
                    'admin_media_edit', array('id' => $id)
                )
            );
        }

        return $this->render(
            'SMAdminBundle:Media:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * delete action
     *
     * @param \Symfony\Component\HttpFoundation\Request $request request
     * @param type                                      $id      the id
     *
     * @return type
     */
    public function deleteAction(Request $request, $id)
    {
        $rst = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Media")
                ->deleteByIds(array($id));

        return $this->redirect(
            $this->generateUrl('admin_media')
        );
    }

    /**
     * create delete form
     *
     * @param type $id the id
     *
     * @return type
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm();
    }

    public function getMediaByCatAction($catId)
    {
        $rep = $this->getDoctrine()->getRepository("SMAdminBundle:Media");
        $options = array();
        if (!empty($catId)) {
            $options = $rep->getObjectOptionByCatId($catId);
        }
        return new Response(json_encode($options));
    }

}