<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SM\Bundle\AdminBundle\Entity\Products;
use SM\Bundle\AdminBundle\Form\ProductsType;
use SM\Bundle\AdminBundle\Utilities;

/**
 * Products controller.
 *
 */
class ProductsController extends Controller
{

    /**
     * Lists all Products entities.
     *
     */
    public function indexAction($page, $lang)
    {
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
                ->getRepository("SMAdminBundle:Products")
                ->getTotal();

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Products")
                ->getList($perPage, ($page - 1) * $perPage);
        foreach ($entities as $ent) {
            $ent->setLanguage($currentLanguage);
        }
        
        //Get branch and product group
        $repBranch = $this->getDoctrine()->getRepository('SMAdminBundle:Branch');
        $optBranchs = $repBranch->getList();
        foreach ($optBranchs as $oItem) {
            $oItem->setLanguage($currentLanguage);
        }
        $repProductGroup = $this->getDoctrine()->getRepository('SMAdminBundle:ProductGroup');
        $optProductGroups = $repProductGroup->getList();
        foreach ($optProductGroups as $oItem) {
            $oItem->setLanguage($currentLanguage);
        }
        
        return $this->render('SMAdminBundle:Products:index.html.twig', array(
                    'entities' => $entities,
                    'lastPage' => $lastPage,
                    'previousPage' => $previousPage,
                    'currentPage' => $page,
                    'nextPage' => $nextPage,
                    'total' => $total,
                    'lang' => intval($lang),
                    'langList' => $langList,
                    'optBranchs' => $optBranchs,
                    'optProductGroups' => $optProductGroups,
                ));
    }
    
    /**
     * Search company and show result
     */
    public function searchAction()
    {
        $lang = $this->getRequest()->request->get('language', null);
        $name = $this->getRequest()->request->get('name', '');
        $branchId = $this->getRequest()->request->get('branch', null);
        $productgroupId = $this->getRequest()->request->get('productgroup', null);
        
        if (is_null($lang)) {
            foreach ($langList as $langData) {
                $isDefault = $langData->getIsDefault();
                if ($isDefault == 1) {
                    $lang = $langData->getId();
                    break;
                }
            }
        }
        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByLangAndNameAndBranchAndProductGroup($lang, $name, $branchId, $productgroupId);
        return $this->render('SMAdminBundle:Products:search.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    /**
     * Finds and displays a Products entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:Products')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Products entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:Products:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Products entity.
     *
     */
    public function newAction()
    {
        $entity = new Products();
        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                $oLanguage = new \SM\Bundle\AdminBundle\Entity\ProductLanguage();
                $oLanguage->setLanguage($language);
                $oLanguage->setProduct($entity);
                $entity->addProductLanguage($oLanguage);

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

        $form = $this->createForm(new ProductsType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setCreated($currUser);
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getProductLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();

                    if (empty($name)) {
                        $entity->removeProductLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                //Upload logo for company
                if (!empty($entity->thumb)) {
                    $newName = Utilities::renameForFile($entity->thumb->getClientOriginalName());
                    //get upload dir
                    $uploadPath = $this->container->getParameter('upload');
                    $webDir = $this->container->get('kernel')->getRootDir() . '/../web';
                    $uploadDir = $webDir . $uploadPath;
                    //upload file
                    $entity->thumb->move($uploadDir, $newName);
                    //set new name
                    $entity->setThumb($newName);
                }

                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Product insert successfull!');

                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {
                    return $this->redirect(
                                    $this->generateUrl('admin_products')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Form invalid');
            }
        }

        //get Medias
        $optMedias = $this->getDoctrine()->getRepository("SMAdminBundle:Media")
                ->findAll();
        
        //Get branch and product group
        $repMediaCat = $this->getDoctrine()->getRepository('SMAdminBundle:MediaCategory');
        $optMediaCats = $repMediaCat->getList();
        
        
        return $this->render('SMAdminBundle:Products:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'langList' => $langList,
                    'defaultLanguage' => $defaultLanguage,
                    'optMedias' => $optMedias,
                    'selectedMedias' => array(),
                    'mediaPath' => '/web/' . $this->container->getParameter('upload'),
                    'optMediaTypes' => $optMediaCats
                ));
    }

    /**
     * Displays a form to edit an existing Products entity.
     *
     */
    public function editAction($id)
    {
        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:Products")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()->getSession()->getFlashBag()
                    ->add('sm_flash_error', 'Could not find page with id ' . $id);

            return $this->redirect($this->generateUrl('admin_products'));
        }

        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                if (!$entity->hasLanguage($language)) {
                    $oLanguage = new \SM\Bundle\AdminBundle\Entity\ProductLanguage();
                    $oLanguage->setLanguage($language);
                    $oLanguage->setProduct($entity);

                    $entity->addProductLanguage($oLanguage);
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

        //get upload dir
        $uploadPath = $this->container->getParameter('upload') ;
        $webDir = $this->container->get('kernel')->getRootDir() . '/../web';

        $thumb = $entity->getThumb();
        $form = $this->createForm(new ProductsType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getProductLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();

                    if (empty($name)) {
                        $entity->removeProductLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                //Upload logo for company
                if (!empty($entity->thumb)) {
                    $newName = Utilities::renameForFile($entity->thumb->getClientOriginalName());
                    $uploadDir = $webDir . $uploadPath;
                    //upload file
                    $entity->thumb->move($uploadDir, $newName);
                    //set new name
                    $entity->setThumb($newName);

                    //Delete old logo file
                    $oldFileThumb = $webDir . $uploadPath . '/' . $thumb;
                    if (file_exists($oldFileThumb)) {
                        @unlink($oldFileThumb);
                    }
                } else {
                    //Check input delImgs if exist we need to delete logo of the company
                    if (!empty($_POST['delImgs'])) {
                        foreach ($_POST['delImgs'] as $img) {
                            $fileThumb = $webDir . $uploadPath . '/' . $img;
                            if (file_exists($fileThumb)) {
                                @unlink($fileThumb);
                                $entity->setThumb('');
                            }
                        }
                    } else {
                        //we dont'want to remove logo. we need to get old logo
                        $entity->setThumb($thumb);
                    }
                }


                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Product insert successfull!');
                $referrer = $this->getRequest()->getSession()->get('referrer');
                if (!$referrer) {
                    return $this->redirect(
                                    $this->generateUrl('admin_products')
                    );
                } else {
                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Form invalid');
            }
        }

        $optMedias = $this->getDoctrine()->getRepository("SMAdminBundle:Media")
            ->findAll();

        return $this->render('SMAdminBundle:Products:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage,
            'arrImgs' => array($thumb),
            'imgPath' => '/web/' . $uploadPath,
            'optMedias' => $optMedias,
            'mediaPath' => '/web/' . $this->container->getParameter('upload'),
        ));
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request request
     * @param int                                       $id      the id
     *
     * @return type
     */
    public function deleteAction(Request $request, $id)
    {
        $rep = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage");

        $rst = $rep->deleteByIds(array($id));

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if (!$referrer) {
            return $this->redirect(
                $this->generateUrl('admin_products')
            );
        } else {
            return $this->redirect($referrer);
        }
    }
}
