<?php

namespace Proxies\__CG__\SM\Bundle\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \SM\Bundle\AdminBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setFullname($fullname)
    {
        $this->__load();
        return parent::setFullname($fullname);
    }

    public function getFullname()
    {
        $this->__load();
        return parent::getFullname();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setCurrentPassword($password)
    {
        $this->__load();
        return parent::setCurrentPassword($password);
    }

    public function getCurrentPassword()
    {
        $this->__load();
        return parent::getCurrentPassword();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function addRoleCollection(\SM\Bundle\AdminBundle\Entity\Role $roleCollection)
    {
        $this->__load();
        return parent::addRoleCollection($roleCollection);
    }

    public function removeRoleCollection(\SM\Bundle\AdminBundle\Entity\Role $roleCollection)
    {
        $this->__load();
        return parent::removeRoleCollection($roleCollection);
    }

    public function getRoleCollection()
    {
        $this->__load();
        return parent::getRoleCollection();
    }

    public function addGroup(\SM\Bundle\AdminBundle\Entity\Group $group)
    {
        $this->__load();
        return parent::addGroup($group);
    }

    public function removeGroup(\SM\Bundle\AdminBundle\Entity\Group $group)
    {
        $this->__load();
        return parent::removeGroup($group);
    }

    public function getGroup()
    {
        $this->__load();
        return parent::getGroup();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function isEqualTo(\Symfony\Component\Security\Core\User\AdvancedUserInterface $user)
    {
        $this->__load();
        return parent::isEqualTo($user);
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function updatedTimestamps()
    {
        $this->__load();
        return parent::updatedTimestamps();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'fullname', 'salt', 'password', 'email', 'created_at', 'updated_at', 'active', 'role_collection', 'group');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}