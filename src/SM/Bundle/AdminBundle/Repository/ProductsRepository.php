<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * ProductsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductsRepository extends EntityRepository
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
        $em = $this->getEntityManager();
        $rst = array();
        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                $em->remove($entity);
                if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                    $rst[] = $id;
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

}
