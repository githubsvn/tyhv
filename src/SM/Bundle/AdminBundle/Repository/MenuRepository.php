<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * MenuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuRepository extends EntityRepository
{
    /**
     *
     * @param type $limit
     * @param type $offset
     * @param type $criteria ==> array(
     *                              0 => array (
     *                                  'op' => 'LIKE'
     *                                  'fieldName' => 'name'
     *                                  'fieldValue' => 'ABC'
     *                              )
     *                              1 => array (
     *                                  'op' => '>'
     *                                  'fieldName' => 'id'
     *                                  'fieldValue' => '2'
     *                              )
     *                          )
     * @param type $orderBy ==> array(
     *                              0 => array()
     *                          )
     * @return type
     */
    public function getList($limit = null, $offset = null, $criteria = array(), $orderBy = array('lft' => 'ASC'))
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select('t');

        if (!empty($limit)) {
            $qb->setMaxResults($limit);
        }

        if (!empty($offset)) {
            $qb->setFirstResult($offset);
        }

        if (is_array($criteria) && count($criteria) > 0) {
            foreach ($criteria as $key => $cri) {
                $qb->andWhere("t." . $cri['fieldName']. " ". $cri['op']." ". " ?$key");

                if ($cri['op'] == 'LIKE') {
                    $qb->setParameter($key, "%".$cri['fieldName']."%");
                } else {
                    $qb->setParameter($key, $cri['fieldValue']);
                }
            }
        }

        if (is_array($orderBy) && count($orderBy) > 0) {
            foreach ($orderBy as $fieldName => $sort) {
                $qb->orderBy("t.$fieldName", $sort);
            }
        }
        //echo $qb->getQuery()->getSQL();die;
        return $qb->getQuery()->getResult();

    }

    /**
     * get total item
     *
     * @param type $criteria
     * @return total
     */
    public function getTotal($criteria = array())
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select('COUNT(t.id) as total');
        if (is_array($criteria) && count($criteria) > 0) {
            foreach ($criteria as $key => $cri) {
                $qb->andWhere("t." . $cri['fieldName']. " ". $cri['op']." ". " ?$key");

                if ($cri['op'] == 'LIKE') {
                    $qb->setParameter($key, "%".$cri['fieldName']."%");
                } else {
                    $qb->setParameter($key, $cri['fieldValue']);
                }
            }
        }
        //echo $qb->getQuery()->getSQL();
        $rst = $qb->getQuery()->getScalarResult();
        if (!empty($rst[0]['total'])) {

            return $rst[0]['total'];
        }

        return 0;
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
     * get page root
     *
     * @return Page the entity page
     */
    public function getPageRoot()
    {
        $queryBuilder = $this->createQueryBuilder('j');
        $queryBuilder->andWhere('j.parent is NULL');
        $query = $queryBuilder->getQuery();
        $rst = $query->getResult();
        if (!empty($rst[0])) {

            return $rst[0];
        } else {
            $stmt = $this->_em
                    ->getConnection()
                    ->prepare("INSERT INTO {$this->_class->getTableName()} (lft, rgt) VALUES (0, 0)");
            $stmt->execute();
            $root = $this->_em->getRepository($this->_entityName)
                    ->find($this->_em->getConnection()->lastInsertId());

            return $root;
        }

        return null;
    }


    /**
     * getChildren
     *
     * @param type $parentId the id
     *
     * @return array
     */
    public function getChildren($parentId)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Menu')
                        ->createQueryBuilder('c')
                        ->where('c.parent = :parentId')
                        ->andWhere('c.parent != c.id')
                        ->setParameter('parentId', $parentId)
                        ->orderBy('c.lft', 'ASC')
                        ->getQuery()
                        ->getResult();
    }

    /**
     * getChildrenArray
     *
     * @param type $parentId the id
     *
     * @return array
     */
    public function getChildrenArray($parentId)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Menu')
                        ->createQueryBuilder('c')
                        ->select('c.id, c.lft, c.rgt')
                        ->where('c.parent = :parentId')
                        ->andWhere('c.parent != c.id')
                        ->setParameter('parentId', $parentId)
                        ->orderBy('c.lft', 'ASC')
                        ->getQuery()
                        ->getArrayResult();
    }

    /**
     * @param type $idPage The id of page
     * @param type $lft    Position of left
     * @param type $rgt    Position of right
     *
     * @return type
     */
    public function setLftRgt($idPage, $lft, $rgt)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Menu')
                        ->createQueryBuilder('c')
                        ->update()
                        ->set('c.lft', $lft)
                        ->set('c.rgt', $rgt)
                        ->where('c.id = :id')
                        ->setParameter('id', $idPage)
                        ->getQuery()
                        ->execute();
    }

    /**
     * @param type $idPage The id of page
     *
     * @return type
     */
    public function getEntityArray($idPage)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Menu')
                        ->createQueryBuilder('c')
                        ->select('c.id, c.lft, c.rgt')
                        ->where('c.id = :id')
                        ->setParameter('id', $idPage)
                        ->getQuery()
                        ->getArrayResult();
    }

    /**
     * @param type $options the option
     *
     * @return null
     */
    public function findOneArrayBy($options = array())
    {
        $queryBuilder = $this->getEntityManager()
                ->getRepository('SMAdminBundle:Menu')
                ->createQueryBuilder('c')
                ->select('c.id, c.lft, c.rgt');
        $num = 0;
        foreach ($options as $key => $option) {
            $queryBuilder->andWhere("c.$key = :ii$num")
                    ->setParameter("ii$num", $option);
        }
        $rerult = $queryBuilder->getQuery()->getArrayResult();
        if (is_array($rerult) and count($rerult) > 0) {

            return $rerult[0];
        }

        return null;
    }

    /**
     * @return boolean
     */
    public function rebuildLftRgt()
    {
        //get all parent tree
        $trees = $this->getEntityManager()
                ->getRepository('SMAdminBundle:Menu')
                ->createQueryBuilder('c')
                ->select('c.id, c.lft, c.rgt')
                ->where('c.parent IS NULL')
                ->getQuery()
                ->getArrayResult();
        $begin = 1;
        $end = 0;
        foreach ($trees as $tree) {
            $this->postOrderTraversal($tree, $begin, $end);
            $begin = $end + 1;
        }

        return true;
    }

    /**
     * @param type $tree  tree
     * @param type $begin begin
     * @param type &$end  end
     */
    public function postOrderTraversal($tree, $begin, &$end)
    {
        $repositor = $this->_em->getRepository('SMAdminBundle:Menu');
        //get $tree childrens
        $children = $this->_em->getRepository('SMAdminBundle:Menu')
                ->getChildrenArray($tree['id']);

        $tree['lft'] = $begin;
        $end = ++$begin;
        //Travesal the tree
        foreach ($children as $child) {
            $repositor->postOrderTraversal($child, $begin, $end);
            $begin = ++$end;
        }
        $tree['rgt'] = $end;
        $this->setLftRgt($tree['id'], $tree['lft'], $tree['rgt']);
    }

    /**
     * @param \SM\Bundle\AdminBundle\Entity\Menu $page the page
     */
    public function moveUp(\SM\Bundle\AdminBundle\Entity\Menu $page)
    {
        //get the area upper
        $entityManager = $this->_em;
        $pageArray = array(
            'id' => $page->getId(),
            'lft' => $page->getLft(),
            'rgt' => $page->getRgt(),
        );

        $repositor = $entityManager->getRepository('SMAdminBundle:Menu');
        $pageUpper = $repositor->findOneArrayBy(array('rgt' => ($pageArray['lft'] - 1)));

        if ($pageUpper) {
            $del1 = $pageArray['rgt'] - $pageArray['lft'];
            $del2 = $pageUpper['rgt'] - $pageUpper['lft'];

            //calculate new lft, rgt of 2 node and swap
            $pageArray['lft'] = $pageUpper['lft'];
            $pageArray['rgt'] = $pageArray['lft'] + $del1;
            $pageUpper['lft'] = $pageArray['rgt'] + 1;
            $pageUpper['rgt'] = $pageUpper['lft'] + $del2;
            $end = 0;
            //save new order
            $repositor->postOrderTraversal($pageUpper, $pageUpper['lft'], $end);
            $repositor->postOrderTraversal($pageArray, $pageArray['lft'], $end);
        }
    }

    /**
     * @param \SM\Bundle\AdminBundle\Entity\Menu $page the page
     */
    public function moveDown(\SM\Bundle\AdminBundle\Entity\Menu $page)
    {
        //get the area upper
        $entityManager = $this->_em;
        $pageArray = array(
            'id' => $page->getId(),
            'lft' => $page->getLft(),
            'rgt' => $page->getRgt(),
        );

        $repositor = $entityManager->getRepository('SMAdminBundle:Menu');
        $pageUnder = $repositor->findOneArrayBy(array('lft' => ($pageArray['rgt'] + 1)));
        if ($pageUnder) {
            $del1 = $pageArray['rgt'] - $pageArray['lft'];
            $del2 = $pageUnder['rgt'] - $pageUnder['lft'];

            //calculate new lft, rgt of 2 node and swap
            $pageUnder['lft'] = $pageArray['lft'];
            $pageUnder['rgt'] = $pageArray['lft'] + $del2;
            $pageArray['lft'] = $pageUnder['rgt'] + 1;
            $pageArray['rgt'] = $pageArray['lft'] + $del1;
            $end = 0;
            //save new order
            $repositor->postOrderTraversal($pageUnder, $pageUnder['lft'], $end);
            $repositor->postOrderTraversal($pageArray, $pageArray['lft'], $end);
        }
    }

    /**
     * @param type $lft lft
     * @param type $rgt rgt
     *
     * @return type
     */
    public function getAllChildren($lft, $rgt)
    {
        return $this->getEntityManager()
                ->getRepository($this->_entityName)
                ->createQueryBuilder('c')
                ->where('c.lft >= :lft')
                ->andWhere('c.rgt != :rgt')
                ->setParameters(array('lft' => $lft, 'rgt' => $rgt))
                ->orderBy('c.lft', 'ASC')
                ->getQuery()
                ->getResult();
    }

    /**
     * build option for menu type
     *
     * @return string
     */
    public function buildMenuType()
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();

        $mnuTypeCompanyCat = $container->getParameter('menu_type_company_category');
        $mnuTypeCompanyDetail = $container->getParameter('menu_type_company_detail');
        $mnuTypeProductBranch = $container->getParameter('menu_type_product_branch');
        $mnuTypeProductDetail = $container->getParameter('menu_type_product_detail');
        $mnuTypeNewsCat = $container->getParameter('menu_type_news_category');
        $mnuTypeNewsDetail = $container->getParameter('menu_type_news_detail');
        $mnuTypePageDetail = $container->getParameter('menu_type_page_detail');
        $mnuTypeText = $container->getParameter('menu_type_text');
        $mnuTypeLink = $container->getParameter('menu_type_link');

        $options = array();
        $options[0] = '-- Lựa chọn --';
        $options[$mnuTypeCompanyCat] = 'Loại công ty';
        $options[$mnuTypeCompanyDetail] = 'Thông tin công ty';
        $options[$mnuTypeProductBranch] = 'Ngành sản phẩm';
        $options[$mnuTypeProductDetail] = 'Sản phẩm';
        $options[$mnuTypeNewsCat] = 'Loại tin';
        $options[$mnuTypeNewsDetail] = 'Tin tức';
        $options[$mnuTypePageDetail] = 'Trang tỉnh';
        $options[$mnuTypeText] = 'Tiêu đề';
        $options[$mnuTypeLink] = 'Link';

        return $options;
    }

    /**
     * get option for position of the menu
     *
     * @return string
     */
    public function buildMenuPosition()
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();

        $mnuPosTop = $container->getParameter('menu_position_top');
        $mnuPosLeft = $container->getParameter('menu_position_left');
        $mnuPosRight = $container->getParameter('menu_position_right');
        $mnuPosBottom = $container->getParameter('menu_position_bottom');

        $options = array();
        $options[0] = '-- Lựa chọn --';
        $options[$mnuPosTop] = 'Phía trên';
        $options[$mnuPosLeft] = 'Bên trái';
        $options[$mnuPosRight] = 'Bên phải';
        $options[$mnuPosBottom] = 'Phía dưới';

        return $options;
    }

    /**
     * get lastest item
     *
     * @return null
     */
    public function getLastestItem()
    {
        $rst = $this->getList(1, 0, array(), array('id' => ' DESC '));
        if (!empty($rst[0])) {

            return $rst[0];
        }

        return null;
    }

    /**
     *
     * @param type $type
     * @return type
     */
    public function getOptionParam($type)
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $em = $container->get("doctrine");

        $mnuTypeCompanyCat = $container->getParameter('menu_type_company_category');
        $mnuTypeCompanyDetail = $container->getParameter('menu_type_company_detail');
        $mnuTypeProductBranch = $container->getParameter('menu_type_product_branch');
        $mnuTypeProductDetail = $container->getParameter('menu_type_product_detail');
        $mnuTypeNewsCat = $container->getParameter('menu_type_news_category');
        $mnuTypeNewsDetail = $container->getParameter('menu_type_news_detail');
        $mnuTypePageDetail = $container->getParameter('menu_type_page_detail');
        $mnuTypeText = $container->getParameter('menu_type_text');

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
            case $mnuTypeProductDetail:
                $repo = $em->getRepository('SMAdminBundle:Products');
                $options = $repo->getOptions();
                break;
            case $mnuTypeNewsCat:
                $repo = $em->getRepository('SMAdminBundle:Category');
                $options = $repo->getOptions();
                break;
            case $mnuTypeNewsDetail:
                $repo = $em->getRepository('SMAdminBundle:News');
                $options = $repo->getOptions();
                break;
            case $mnuTypePageDetail:
                $repo = $em->getRepository('SMAdminBundle:Page');
                $options = $repo->getOptions();
                break;
            case $mnuTypeText:
                break;
        }

        return $options;
    }

    /**
     *
     * @param type $type
     * @return type
     */
    public function getOptionParent($position)
    {
        $options = array();
        $std = new \stdClass();
        $std->name = "-- Lựa Chọn --";
        $std->id = "";
        $options[] = $std;

        if (empty($position)) {
            return $options;
        }
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $em = $container->get("doctrine");

        $mnuPosTop = $container->getParameter('menu_position_top');
        $mnuPosLeft = $container->getParameter('menu_position_left');
        $mnuPosRight = $container->getParameter('menu_position_right');
        $mnuPosBottom = $container->getParameter('menu_position_bottom');

        //get list language
        $langList = $em->getRepository("SMAdminBundle:Language")
                        ->findAll();

        $lang = null;
        foreach ($langList as $langData) {
            $isDefault = $langData->getIsDefault();
            if ($isDefault == 1) {
                $lang = $langData->getId();
                break;
            }
        }

        $currentLanguage = $em->getRepository("SMAdminBundle:Language")
                                ->find($lang);

        $criteria = array();
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => 1);
        switch ($position) {
            case $mnuPosTop:
                $criteria[] = array('op' => '=', 'fieldName' => 'position', 'fieldValue' => $mnuPosTop);
                break;
            case $mnuPosLeft:
                $criteria[] = array('op' => '=', 'fieldName' => 'position', 'fieldValue' => $mnuPosLeft);
                break;
            case $mnuPosRight:
                $criteria[] = array('op' => '=', 'fieldName' => 'position', 'fieldValue' => $mnuPosRight);
                break;
            case $mnuPosBottom:
                $criteria[] = array('op' => '=', 'fieldName' => 'position', 'fieldValue' => $mnuPosBottom);
                break;
        }

        $entities = $this->getList(null, null, $criteria, array('lft' => 'ASC'));
        if (is_array($entities) && count($entities) > 0) {
            foreach ($entities as $obj) {
                $obj->setLanguage($currentLanguage);
                $std = new \stdClass();
                $std->name = $obj->getCurrentLanguage()->getTreeName();
                $std->id = $obj->getId();
                $options[] = $std;
            }
        }

        return $options;
    }

}
