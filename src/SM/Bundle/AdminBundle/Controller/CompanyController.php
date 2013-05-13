<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SM\Bundle\AdminBundle\Entity\Company;
use SM\Bundle\AdminBundle\Entity\CompanyLanguage;
use SM\Bundle\AdminBundle\Form\CompanyType;

/**
 * Company controller.
 *
 */
class CompanyController extends Controller
{
    /**
     * Lists all Company entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SMAdminBundle:Company')->findAll();

        return $this->render('SMAdminBundle:Company:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Company entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:Company:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Company entity.
     *
     */
    public function newAction()
    {
        $entity = new Company();
        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                $companyLanguage = new CompanyLanguage();
                $companyLanguage->setLanguage($language);
                $companyLanguage->setCompany($entity);

                $entity->addCompanyLanguage($companyLanguage);

                if ($language->getIsDefault()) {
                    $defaultLanguage = $language;
                }
            }
        }

        if (!$this->getRequest()->isMethod('POST')) {
            // set referrer redirect
            $session = $this->getRequest()->getSession();
            $session->set('referrer', $this->getRequest()->server->get('HTTP_REFERER'));
        }

        $form = $this->createForm(new CompanyType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            
            if ($form->isValid()) {
                
                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setCreated($currUser);
                $entity->setUpdated($currUser);
                
                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getCompanyLanguages() as $companyLanguage) {
                    $name = $companyLanguage->getName();
                    
                    if (empty($name)) {
                        $entity->removeCompanyLanguage($companyLanguage);
                        $entityManager->remove($companyLanguage);
                    }
                }

                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Company insert successfull!');

                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {
                    return $this->redirect(
                        $this->generateUrl('admin_company')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Form invalid');
            }
        }

        return $this->render('SMAdminBundle:Company:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage
        ));
    }
    

    /**
     * Creates a new Company entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Company();
        $form = $this->createForm(new CompanyType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_company_show', array('id' => $entity->getId())));
        }

        return $this->render('SMAdminBundle:Company:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Company entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $editForm = $this->createForm(new CompanyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:Company:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Company entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CompanyType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_company_edit', array('id' => $id)));
        }

        return $this->render('SMAdminBundle:Company:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Company entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SMAdminBundle:Company')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Company entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_company'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
