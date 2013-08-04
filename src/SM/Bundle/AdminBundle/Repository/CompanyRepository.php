<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * CompanyRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompanyRepository extends EntityRepository
{
    /**
     * @param type $limit    limit
     * @param type $offset   offset
     * @param type $criteria criteria
     * @param type $orderBy  orderBy
     *
     * @return type
     */
    public function getList($limit = null, $offset = null, $criteria = array(), $orderBy = array())
    {
        return $this->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * Delete language by array id
     *
     * @param array $ids
     *
     * @return array
     */
    public function deleteByIds($ids = array())
    {
        //Get path upload logo
        $uploadPath = $this->getContainer()->getParameter('upload') . '/logo';
        $webDir = $this->getContainer()->get('kernel')->getRootDir() . '/../web';
        $uploadDir = $webDir . $uploadPath;

        $em = $this->getEntityManager();
        $rst = array();
        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                $fileLogo = $uploadDir . '/' . $entity->getLogo();
                $em->remove($entity);
                if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                    $rst[] = $id;
                    //delete file logo
                    if (file_exists($fileLogo)) {
                        unlink($fileLogo);
                    }
                }
            }
            $em->flush();
        }

        return $rst;
    }

    /**
     * get total language
     *
     * @return type
     */
    public function getTotal()
    {
        $rst = $this->findAll();

        return count($rst);
    }

    /**
     * Get container
     * @return type
     */
    private function getContainer()
    {
        return \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
    }

    /**
     * get option that to build param in the menu type
     *
     * @return type
     */
    public function getOptions()
    {
        $options = array();

        //get list language
        $repLanguage = $this->getEntityManager()->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();
        $defaultLanguage = null;
        if (is_array($langList)) {
            foreach ($langList as $language) {
                if ($language->getIsDefault()) {
                    $defaultLanguage = $language;
                }
            }
        }
        $entities = $this->getList(null, null, array('status' => 1));
        foreach ($entities as $obj) {
            $obj->setLanguage($defaultLanguage);
            $std = new \stdClass();
            $std->name = $obj->getCurrentLanguage()->getName();
            $std->id = $obj->getId();
            $options[] = $std;
        }

        return $options;
    }

}
