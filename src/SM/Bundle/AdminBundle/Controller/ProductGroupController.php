<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SM\Bundle\AdminBundle\Entity\ProductGroup;
use SM\Bundle\AdminBundle\Entity\ProductGroupLanguage;
use SM\Bundle\AdminBundle\Form\ProductGroupType;

/**
 * ProductGroup controller.
 *
 */
class ProductGroupController extends Controller {

    /**
     * Lists all ProductGroup entities.
     *
     */
    public function indexAction($page, $lang) {
        //get list language
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();

        if (is_null($lang)) {
            foreach ($langList as $langData) {
                $isDefault = $langData->getIsDefault();
                if ($isDefault == 1) {
                    $lang = $langData->getId();
                    break;
                }
            }
        }

        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);

        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductGroup")
                ->getTotal();

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductGroup")
                ->getList($perPage, ($page - 1) * $perPage);
        foreach ($entities as $theBranch) {
            $theBranch->setLanguage($currentLanguage);
        }
        return $this->render('SMAdminBundle:ProductGroup:index.html.twig', array(
                    'entities' => $entities,
                    'lastPage' => $lastPage,
                    'previousPage' => $previousPage,
                    'currentPage' => $page,
                    'nextPage' => $nextPage,
                    'total' => $total,
                    'lang' => intval($lang),
                    'langList' => $langList,
                ));
    }

    /**
     * Finds and displays a ProductGroup entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:ProductGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProductGroup entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:ProductGroup:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new ProductGroup entity.
     *
     */
    public function newAction() {
        $entity = new ProductGroup();

        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                $oLanguage = new \SM\Bundle\AdminBundle\Entity\ProductGroupLanguage();
                $oLanguage->setLanguage($language);
                $oLanguage->setProductgroup($entity);

                $entity->addProductgroupLanguage($oLanguage);

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

        $form = $this->createForm(new ProductGroupType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setCreated($currUser);
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getProductgroupLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();
                    if (empty($name)) {
                        $entity->removeProductgroupLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Product Group insert successfull!');

                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {
                    return $this->redirect(
                                    $this->generateUrl('admin_productgroup')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Form invalid');
            }
        }

        return $this->render('SMAdminBundle:ProductGroup:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'langList' => $langList,
                    'defaultLanguage' => $defaultLanguage
                ));
    }

    /**
     * Displays a form to edit an existing Branch entity.
     *
     */
    public function editAction($id) {
        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:ProductGroup")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()->getSession()->getFlashBag()
                    ->add('sm_flash_error', 'Could not find product group with id ' . $id);

            return $this->redirect($this->generateUrl('admin_productgroup'));
        }

        //get list language
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                if (!$entity->hasLanguage($language)) {
                    $oLanguage = new ProductGroupLanguage();
                    $oLanguage->setLanguage($language);
                    $oLanguage->setProductgroup($entity);
                    $entity->addProductgroupLanguage($oLanguage);
                }
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

        $form = $this->createForm(new ProductGroupType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {
                $entityManager = $this->getDoctrine()->getEntityManager();
                foreach ($entity->getProductgroupLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();
                    if (empty($name)) {
                        $entity->removeProductgroupLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                //Set created
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setUpdated($currUser);

                $entityManager->persist($entity);

                $entityManager->flush();
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Product group edit successfull!');
                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {
                    return $this->redirect(
                        $this->generateUrl('admin_productgroup')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Form invalid');
            }
        }

        return $this->render('SMAdminBundle:ProductGroup:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage,
        ));
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request request
     * @param int                                       $id      the id
     *
     * @return type
     */
    public function deleteAction(Request $request, $id) {
        $rep = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductGroupLanguage");

        $rst = $rep->deleteByIds(array($id));

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if (!$referrer) {
            return $this->redirect(
                $this->generateUrl('admin_productgroup')
            );
        } else {
            return $this->redirect($referrer);
        }
    }

}
