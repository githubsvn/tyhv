<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupsLanguage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Entity\GroupsLanguageRepository")
 */
class GroupsLanguage
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
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="groups", type="string", length=255)
     */
    private $groups;

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
     * Set language
     *
     * @param string $language
     * @return GroupsLanguage
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set groups
     *
     * @param string $groups
     * @return GroupsLanguage
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    
        return $this;
    }

    /**
     * Get groups
     *
     * @return string 
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GroupsLanguage
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
}
