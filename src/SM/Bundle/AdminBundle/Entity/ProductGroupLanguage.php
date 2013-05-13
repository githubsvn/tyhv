<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Branch
 *
 * @ORM\Table(name="mtx_productgroup_language")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\ProductGroupLanguageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ProductGroupLanguage {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Language")
     */
    private $language;

    /**
     * @ORM\ManyToOne(targetEntity="ProductGroup")
     */
    private $productgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return ProductGroupLanguage
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     * @return ProductGroupLanguage
     */
    public function setLanguage(\SM\Bundle\AdminBundle\Entity\Language $language = null)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return \SM\Bundle\AdminBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set productgroup
     *
     * @param \SM\Bundle\AdminBundle\Entity\ProductGroup $productgroup
     * @return ProductGroupLanguage
     */
    public function setProductgroup(\SM\Bundle\AdminBundle\Entity\ProductGroup $productgroup = null)
    {
        $this->productgroup = $productgroup;
    
        return $this;
    }

    /**
     * Get productgroup
     *
     * @return \SM\Bundle\AdminBundle\Entity\ProductGroup 
     */
    public function getProductgroup()
    {
        return $this->productgroup;
    }
}