<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="mtx_menu")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\MenuRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Menu
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Menu", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Menu", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="MenuLanguage", mappedBy="menu", cascade={"all"})
     */
    protected $page_languages;

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     *
     * @var Language
     */
    private $language;

    public function __toString()
    {
        $pageLanguages = $this->menu_languages->toArray();
        if (is_array($pageLanguages)) {
            if (isset($pageLanguages[0])) {
                return $pageLanguages[0]->getTreeName();
            }
        }

        return '';
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menu_languages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = null;
    }


    public function getLevel()
    {
        if (null === $this->parent) {
            return 0;
        } else {
            return $this->parent->getLevel() + 1;
        }
    }


    public function getCurrentPageLanguage()
    {
        $pageLanguages = $this->page_languages->toArray();
        if (is_array($pageLanguages)) {
            if (null !== $this->language) {
                foreach ($pageLanguages as $pageLanguage) {
                    if ($pageLanguage->getLanguage()->getId() == $this->language->getId()) {
                        return $pageLanguage;
                    }
                }
            }
        }

        return null;
    }

    public function hasLanguage(Language $language)
    {
        $result = false;
        if (count($this->page_languages->toArray()) > 0) {
            foreach ($this->page_languages as $plTemp) {
                if ($language->getId() == $plTemp->getLanguage()->getId()) {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Menu
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Menu
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Menu
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Menu
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Menu
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Menu
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set parent
     *
     * @param \SM\Bundle\AdminBundle\Entity\Menu $parent
     * @return Menu
     */
    public function setParent(\SM\Bundle\AdminBundle\Entity\Menu $parent = null)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return \SM\Bundle\AdminBundle\Entity\Menu 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add children
     *
     * @param \SM\Bundle\AdminBundle\Entity\Menu $children
     * @return Menu
     */
    public function addChildren(\SM\Bundle\AdminBundle\Entity\Menu $children)
    {
        $this->children[] = $children;
    
        return $this;
    }

    /**
     * Remove children
     *
     * @param \SM\Bundle\AdminBundle\Entity\Menu $children
     */
    public function removeChildren(\SM\Bundle\AdminBundle\Entity\Menu $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add page_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\MenuLanguage $pageLanguages
     * @return Menu
     */
    public function addPageLanguage(\SM\Bundle\AdminBundle\Entity\MenuLanguage $pageLanguages)
    {
        $this->page_languages[] = $pageLanguages;
    
        return $this;
    }

    /**
     * Remove page_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\MenuLanguage $pageLanguages
     */
    public function removePageLanguage(\SM\Bundle\AdminBundle\Entity\MenuLanguage $pageLanguages)
    {
        $this->page_languages->removeElement($pageLanguages);
    }

    /**
     * Get page_languages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPageLanguages()
    {
        return $this->page_languages;
    }

    /**
     * Set created
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $created
     * @return Menu
     */
    public function setCreated(\SM\Bundle\AdminBundle\Entity\User $created = null)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \SM\Bundle\AdminBundle\Entity\User 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $updated
     * @return Menu
     */
    public function setUpdated(\SM\Bundle\AdminBundle\Entity\User $updated = null)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \SM\Bundle\AdminBundle\Entity\User 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}