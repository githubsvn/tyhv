<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu Language
 *
 * @ORM\Table(name="mtx_menu_language")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\MenuLanguageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class MenuLanguage
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Menu", inversedBy="menu_languages", cascade={"persist"})
     */
    private $menu;

    /**
     * @ORM\ManyToOne(targetEntity="Language")
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=255, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    
    /**
     * Get the name with tree level
     * 
     * @return string
     */
    public function getTreeName()
    {
        //the space is chr(255)
        $treeName = str_repeat('    ', $this->getPage()->getLevel() - 1) .
                            ($this->getPage()->getLevel() == 1 ? '' : '└') .
                            ' ' .
                            $this->getName();
        return $treeName;
    }


}