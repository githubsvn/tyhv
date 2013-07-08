<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * CategoryLanguageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MediaCategoryLanguageRepository extends EntityRepository {

    /**
     * @param type $criteria criteria
     *
     * @return type
     */
    public function getTotal($criteria = array()) {
        $rst = $this->findBy($criteria);

        return count($rst);
    }

    /**
     * @param type $comtypeId comtypeId
     *
     * @return type
     */
    public function findByMediaCategoyId($catId) {
        $rst = array();
        if (!empty($catId)) {
            $rst = $this->findBy(array('mediacategory' => $catId));
        }

        return $rst;
    }

    /**
     * Delete language by array id
     *
     * @param array $ids
     *
     * @return array
     */
    public function deleteByIds($ids = array()) {
        $em = $this->getEntityManager();
        $repCat = $em->getRepository('SMAdminBundle:MediaCategory');

        $rst = array();
        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                $idCat = $entity->getMediacategory()->getId();

                $em->remove($entity);

                //Get all company type language by idComtype
                //If to have 1 item we need to delete company type too
                //else we need delete company type language
                $lstCatLangs = $this->findByMediaCategoyId($idCat);
                if (count($lstCatLangs) == 1) {
                    if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                        $rst[] = $id;
                    }
                    $em->persist($entity);
                    //delete article too
                    $em->flush();
                    //delete article language
                    $repCat->deleteByIds(array($idCat));
                } else {
                    if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                        $rst[] = $id;
                    }
                    //Onlye delete article language
                    $em->flush();
                }
            }
        }

        return $rst;
    }

}
