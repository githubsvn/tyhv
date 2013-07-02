<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SM\Bundle\AdminBundle\Entity\News;
use SM\Bundle\AdminBundle\Form\NewsType;
use SM\Bundle\AdminBundle\Utilities;

/**
 * News controller.
 *
 */
class NewsController extends Controller
{
    /**
     * Lists all Products entities.
     *
     */
    public function indexAction($page, $lang)
    {
        if ($this->getRequest()->isMethod('POST')) {
            $_SESSION['lang'] = $this->getRequest()->request->get('language', '');
            $_SESSION['name'] = $this->getRequest()->request->get('name', '');
            $_SESSION['category'] = $this->getRequest()->request->get('category', null);
        }

        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $lang;
        $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        $catId = isset($_SESSION['category']) ? $_SESSION['category'] : '';

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
                ->getRepository("SMAdminBundle:NewsLanguage")
                ->getTotalByLangAndNameAndCategory($lang, $name, $catId);

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:NewsLanguage")
                ->findByLangAndNameAndCategory($lang, $name, $catId, $perPage, ($page - 1) * $perPage);

        //Get branch and product group
        $criteria = array();
        $criteria[] = array('op' => '>', 'fieldName' => 'lft', 'fieldValue' => '1');
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => '1');
        $repCat = $this->getDoctrine()->getRepository('SMAdminBundle:Category');
        $optCats = $repCat->getList(null, null, $criteria, array('lft' => 'ASC'));
        foreach ($optCats as $oItem) {
            $oItem->setLanguage($currentLanguage);
        }

        return $this->render('SMAdminBundle:News:index.html.twig', array(
            'entities' => $entities,
            'lastPage' => $lastPage,
            'previousPage' => $previousPage,
            'currentPage' => $page,
            'nextPage' => $nextPage,
            'total' => $total,
            'lang' => intval($lang),
            'name' => $name,
            'catId' => $catId,
            'langList' => $langList,
            'optCats' => $optCats,
        ));
    }

    /**
     * Finds and displays a Products entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Products entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:News:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new Products entity.
     *
     */
    public function newAction()
    {
        $entity = new News();
        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                $oLanguage = new \SM\Bundle\AdminBundle\Entity\NewsLanguage();
                $oLanguage->setLanguage($language);
                $oLanguage->setNews($entity);
                $entity->addNewsLanguage($oLanguage);

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

        $form = $this->createForm(new NewsType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setCreated($currUser);
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getNewsLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();

                    if (empty($name)) {
                        $entity->removeNewsLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                //Upload logo for company
                if (!empty($entity->image)) {
                    $newName = Utilities::renameForFile($entity->image->getClientOriginalName());
                    //get upload dir
                    $uploadPath = $this->container->getParameter('upload');
                    $webDir = $this->container->get('kernel')->getRootDir() . '/../web';
                    $uploadDir = $webDir . $uploadPath;
                    //upload file
                    $entity->image->move($uploadDir, $newName);
                    //set new name
                    $entity->setImage($newName);
                }

                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'News insert successfull!');

                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {
                    return $this->redirect(
                        $this->generateUrl('admin_news')
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

        //Get media category name that to display add news
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();
        foreach ($langList as $langData) {
            $isDefault = $langData->getIsDefault();
            if ($isDefault == 1) {
                $lang = $langData->getId();
                break;
            }
        }
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        $criteria = array();
        $criteria[] = array('op' => '>', 'fieldName' => 'lft', 'fieldValue' => '1');
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => '1');
        $listMediaCats = $this->getDoctrine()
                ->getRepository("SMAdminBundle:MediaCategory")
                ->getList(null, null, $criteria, array('lft' => 'ASC'));
        foreach ($listMediaCats as $theCat) {
            $theCat->setLanguage($currentLanguage);
        }

        return $this->render('SMAdminBundle:News:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage,
            'optMedias' => $optMedias,
            'selectedMedias' => array(),
            'mediaPath' => '/web/' . $this->container->getParameter('upload'),
            'optMediaTypes' => $listMediaCats
        ));
    }

    /**
     * Displays a form to edit an existing Products entity.
     *
     */
    public function editAction($id)
    {
        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:News")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()->getSession()->getFlashBag()
                    ->add('sm_flash_error', 'Could not find page with id ' . $id);

            return $this->redirect($this->generateUrl('admin_news'));
        }

        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                if (!$entity->hasLanguage($language)) {
                    $oLanguage = new \SM\Bundle\AdminBundle\Entity\NewsLanguage();
                    $oLanguage->setLanguage($language);
                    $oLanguage->setNews($entity);

                    $entity->addNewsLanguage($oLanguage);
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

        $image = $entity->getImage();
        $form = $this->createForm(new NewsType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getNewsLanguages() as $oLanguage) {
                    $name = $oLanguage->getName();

                    if (empty($name)) {
                        $entity->removeNewsLanguage($oLanguage);
                        $entityManager->remove($oLanguage);
                    }
                }

                //Upload logo for company
                if (!empty($entity->image)) {
                    $newName = Utilities::renameForFile($entity->image->getClientOriginalName());
                    $uploadDir = $webDir . $uploadPath;
                    //upload file
                    $entity->image->move($uploadDir, $newName);
                    //set new name
                    $entity->setImage($newName);

                    //Delete old logo file
                    $oldFileImage = $webDir . $uploadPath . '/' . $image;
                    if (file_exists($oldFileImage)) {
                        @unlink($oldFileImage);
                    }
                } else {
                    //Check input delImgs if exist we need to delete logo of the company
                    if (!empty($_POST['delImgs'])) {
                        foreach ($_POST['delImgs'] as $img) {
                            $fileImage = $webDir . $uploadPath . '/' . $img;
                            if (file_exists($fileImage)) {
                                @unlink($fileImage);
                                $entity->setImage('');
                            }
                        }
                    } else {
                        //we dont'want to remove logo. we need to get old logo
                        $entity->setImage($image);
                    }
                }


                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'News insert successfull!');
                $referrer = $this->getRequest()->getSession()->get('referrer');
                if (!$referrer) {
                    return $this->redirect(
                                    $this->generateUrl('admin_news')
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

        //Get media category name that to display add news
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();
        foreach ($langList as $langData) {
            $isDefault = $langData->getIsDefault();
            if ($isDefault == 1) {
                $lang = $langData->getId();
                break;
            }
        }
        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);
        $criteria = array();
        $criteria[] = array('op' => '>', 'fieldName' => 'lft', 'fieldValue' => '1');
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => '1');
        $listMediaCats = $this->getDoctrine()
                ->getRepository("SMAdminBundle:MediaCategory")
                ->getList(null, null, $criteria, array('lft' => 'ASC'));
        foreach ($listMediaCats as $theCat) {
            $theCat->setLanguage($currentLanguage);
        }

        return $this->render('SMAdminBundle:News:edit.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage,
            'arrImgs' => array($image),
            'imgPath' => '/web/' . $uploadPath,
            'optMedias' => $optMedias,
            'mediaPath' => '/web/' . $this->container->getParameter('upload'),
            'optMediaTypes' => $listMediaCats,
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
                ->getRepository("SMAdminBundle:NewsLanguage");

        $rst = $rep->deleteByIds(array($id));

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if (!$referrer) {
            return $this->redirect(
                $this->generateUrl('admin_news')
            );
        } else {
            return $this->redirect($referrer);
        }
    }
}
