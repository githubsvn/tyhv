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
                ->getRepository("SMAdminBundle:Company")
                ->getTotal();

        $perPage = $this->container->getParameter('per_item_page');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Company")
                ->getList($perPage, ($page - 1) * $perPage);
        foreach ($entities as $theCompanytype) {
            $theCompanytype->setLanguage($currentLanguage);
        }

        return $this->render('SMAdminBundle:Company:index.html.twig', array(
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
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
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
     * Displays a form to edit an existing Company entity.
     *
     */
    public function editAction($id)
    {
        $entity = $this->getDoctrine()->getRepository("SMAdminBundle:Company")
                ->find($id);

        if (!$entity) {
            //go to page index with error
            $this->getRequest()->getSession()->getFlashBag()
                    ->add('sm_flash_error', 'Could not find page with id ' . $id);

            return $this->redirect($this->generateUrl('admin_company'));
        }

        //get list language
        $repLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();

        if (is_array($langList)) {
            foreach ($langList as $language) {
                if (!$entity->hasLanguage($language)) {
                    $companyLanguage = new CompanyLanguage();
                    $companyLanguage->setLanguage($language);
                    $companyLanguage->setCompany($entity);

                    $entity->addCompanyLanguage($companyLanguage);
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

        $form = $this->createForm(new CompanyType(), $entity);

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());

            if ($form->isValid()) {

                //Set created and updated user
                $currUser = $this->get('security.context')->getToken()->getUser();
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

        return $this->render('SMAdminBundle:Company:edit.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'langList' => $langList,
                    'defaultLanguage' => $defaultLanguage
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
                ->getRepository("SMAdminBundle:CompanyLanguage");

        $rst = $rep->deleteByIds(array($id));

        // set referrer redirect
        $referrer = $this->getRequest()->server->get('HTTP_REFERER');

        if (!$referrer) {
            return $this->redirect(
                $this->generateUrl('admin_company')
            );
        } else {
            return $this->redirect($referrer);
        }
    }

}
