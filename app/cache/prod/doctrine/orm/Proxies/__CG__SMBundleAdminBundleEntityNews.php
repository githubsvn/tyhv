<?php

namespace Proxies\__CG__\SM\Bundle\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class News extends \SM\Bundle\AdminBundle\Entity\News implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setCreatedAtValue()
    {
        $this->__load();
        return parent::setCreatedAtValue();
    }

    public function getCurrentLanguage()
    {
        $this->__load();
        return parent::getCurrentLanguage();
    }

    public function hasLanguage(\SM\Bundle\AdminBundle\Entity\Language $language)
    {
        $this->__load();
        return parent::hasLanguage($language);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setLanguage(\SM\Bundle\AdminBundle\Entity\Language $language)
    {
        $this->__load();
        return parent::setLanguage($language);
    }

    public function getLanguage()
    {
        $this->__load();
        return parent::getLanguage();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
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

    public function setImage($image)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function setCategory(\SM\Bundle\AdminBundle\Entity\Category $category = NULL)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function setCreated(\SM\Bundle\AdminBundle\Entity\User $created = NULL)
    {
        $this->__load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->__load();
        return parent::getCreated();
    }

    public function setUpdated(\SM\Bundle\AdminBundle\Entity\User $updated = NULL)
    {
        $this->__load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->__load();
        return parent::getUpdated();
    }

    public function addNewsLanguage(\SM\Bundle\AdminBundle\Entity\NewsLanguage $newsLanguages)
    {
        $this->__load();
        return parent::addNewsLanguage($newsLanguages);
    }

    public function removeNewsLanguage(\SM\Bundle\AdminBundle\Entity\NewsLanguage $newsLanguages)
    {
        $this->__load();
        return parent::removeNewsLanguage($newsLanguages);
    }

    public function getNewsLanguages()
    {
        $this->__load();
        return parent::getNewsLanguages();
    }

    public function addMediaId(\SM\Bundle\AdminBundle\Entity\Media $mediaId)
    {
        $this->__load();
        return parent::addMediaId($mediaId);
    }

    public function removeMediaId(\SM\Bundle\AdminBundle\Entity\Media $mediaId)
    {
        $this->__load();
        return parent::removeMediaId($mediaId);
    }

    public function getMediaId()
    {
        $this->__load();
        return parent::getMediaId();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'status', 'created_at', 'updated_at', 'image', 'category', 'created', 'updated', 'news_languages', 'media_id');
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