<?php

namespace SM\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use SM\Bundle\AdminBundle\Entity\Menu;
use SM\Bundle\AdminBundle\Entity\MenuLanguage;
use SM\Bundle\AdminBundle\Form\MenuType;
use SM\Bundle\AdminBundle\Form\MenuLanguageType;

/**
 * Menu controller.
 *
 */
class MenuController extends Controller
{
    /**
     *
     * @param type $page
     * @param type $lang
     * @return type
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

        //get root
        $root = $this->getDoctrine()->getRepository("SMAdminBundle:Menu")->getPageRoot();
        $rst = array();

        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Menu")
                ->getTotal();
        if (!empty($root)) {
            $total -= 1;
        }

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Menu")
                ->getList($perPage, ($page - 1) * $perPage, array(), array('lft' => 'ASC'));

        foreach ($entities as $theCat) {
            $theCat->setLanguage($currentLanguage);
            if ($root->getId() != $theCat->getId()) {
                $rst[] = $theCat;
            }
        }
        return $this->render('SMAdminBundle:Menu:index.html.twig', array(
            'entities' => $rst,
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
     * Finds and displays a CompanyType entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SMAdminBundle:Menu')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CompanyType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SMAdminBundle:Menu:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to create a new CompanyType entity.
     *
     */
    public function newAction() {
        $entity = new Menu();
        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                $catLanguage = new MenuLanguage();
                $catLanguage->setLanguage($language);
                $catLanguage->setMenu($entity);

                $entity->addMenuLanguage($catLanguage);

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

        $form = $this->createForm(new MenuType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setCreated($currUser);
                $entity->setUpdated($currUser);

                $entityManager = $this->getDoctrine()->getEntityManager();
                $entityManager->persist($entity);
                foreach ($entity->getMenuLanguages() as $catLanguage) {
                    $name = $catLanguage->getName();
                    if (empty($name)) {
                        $entity->removeMenuLanguage($catLanguage);
                        $entityManager->remove($catLanguage);
                    }
                }

                $entityManager->flush();

                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Thao tác thành công!');

                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {

                    return $this->redirect(
                        $this->generateUrl('admin_menu')
                    );
                } else {

                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Dữ liệu không hợp lệ.');
            }
        }

        return $this->render('SMAdminBundle:Menu:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
            'langList' => $langList,
            'defaultLanguage' => $defaultLanguage
        ));
    }

    /**
     * Displays a form to edit an existing CompanyType entity.
     *
     */
    public function editAction($id) {

        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:Menu")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()->getSession()->getFlashBag()
                    ->add('sm_flash_error', 'Could not find page with id ' . $id);

            return $this->redirect($this->generateUrl('admin_menu'));
        }

        //get list language
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                if (!$entity->hasLanguage($language)) {
                    $catLanguage = new MenuLanguage();
                    $catLanguage->setLanguage($language);
                    $catLanguage->setMenu($entity);
                    $entity->addMenuLanguage($ctLanguage);
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

        $form = $this->createForm(new MenuType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {
                $entityManager = $this->getDoctrine()->getEntityManager();
                foreach ($entity->getMenuLanguages() as $catLanguage) {
                    $name = $catLanguage->getName();
                    if (empty($name)) {
                        $entity->removeMenuLanguage($catLanguage);
                        $entityManager->remove($catLanguage);
                    }
                }

                //Set created
                $currUser = $this->get('security.context')->getToken()->getUser();
                $entity->setUpdated($currUser);

                $entityManager->persist($entity);

                $entityManager->flush();
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Thao tác thành công!');
                $referrer = $this->getRequest()->getSession()->get('referrer');

                if (!$referrer) {

                    return $this->redirect(
                        $this->generateUrl('admin_menu')
                    );
                } else {

                    return $this->redirect($referrer);
                }
            } else {
                $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_error', 'Dữ liệu không nhập lệ.');
            }
        }

        return $this->render('SMAdminBundle:Menu:edit.html.twig', array(
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
                ->getRepository("SMAdminBundle:MenuLanguage");

        $rst = $rep->deleteByIds(array($id));
        if ($rst) {
            $this->getRequest()->getSession()->getFlashBag()->add('sm_flash_success', 'Thao tác thành công.');
        }
        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if (!$referrer) {

            return $this->redirect(
                $this->generateUrl('admin_menu')
            );
        } else {

            return $this->redirect($referrer);
        }
    }

    /**
     * up action
     *
     * @param type $id
     *
     * @return type
     */
    public function upAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('SMAdminBundle:Menu');
        $oCat = $repo->findOneById($id);
        if ($oCat->getParent()) {
            $repo->moveUp($oCat);
        }

        return $this->redirect(
            $this->getRequest()->headers->get('referer')
        );

    }

    /**
     * down action
     *
     * @param type $id
     *
     * @return type
     */
    public function downAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repo = $em->getRepository('SMAdminBundle:Menu');
        $oCat = $repo->findOneById($id);
        if ($oCat->getParent()) {
            $repo->moveDown($oCat);
        }

        return $this->redirect(
            $this->getRequest()->headers->get('referer')
        );
    }
    
    /**
     * get param of the menu type by caled ajax with param is type
     * 
     * @param type $type
     * @return Response 
     */
    public function getParamAction($type)
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $em = $this->getDoctrine()->getEntityManager();
        
        $mnuTypeCompanyCat = $container->getParameter('menu_type_company_category');
        $mnuTypeCompanyDetail = $container->getParameter('menu_type_company_detail');
        $mnuTypeProductBranch = $container->getParameter('menu_type_product_branch');
        $mnuTypeProductGroup = $container->getParameter('menu_type_product_group');
        $mnuTypeProductDetail = $container->getParameter('menu_type_product_detail');
        $mnuTypeNewsCat = $container->getParameter('menu_type_news_category');
        $mnuTypeNewsDetail = $container->getParameter('menu_type_news_detail');
        $mnuTypePageDetail = $container->getParameter('menu_type_page_detail');
        
        $options = array();
        switch ($type) {
            case $mnuTypeCompanyCat:
                $repo = $em->getRepository('SMAdminBundle:CompanyType');
                $options = $repo->getOptions();
                break;
            case $mnuTypeCompanyDetail:
                $repo = $em->getRepository('SMAdminBundle:Company');
                $options = $repo->getOptions();
                break;
            case $mnuTypeProductBranch:
                $repo = $em->getRepository('SMAdminBundle:Branch');
                $options = $repo->getOptions();
                break;
            case $mnuTypeProductGroup:
                $repo = $em->getRepository('SMAdminBundle:ProductGroup');
                $options = $repo->getOptions();
                break;
            case $mnuTypeProductDetail:
                $repo = $em->getRepository('SMAdminBundle:Products');
                $options = $repo->getOptions();
                break;
            case $mnuTypeNewsCat:
                $repo = $em->getRepository('SMAdminBundle:Category');
                $options = $repo->getOptions();
                break;
            case $mnuTypeNewsDetail:
                break;
            case $mnuTypePageDetail:
                break;
            
        }
        
        return new Response(json_encode($options)); 
    }  
}