<?php

namespace SM\Bundle\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Branch
 *
 * @ORM\Table(name="mtx_branch")
 * @ORM\Entity(repositoryClass="SM\Bundle\AdminBundle\Repository\BranchRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Branch
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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean")
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="BranchLanguage", mappedBy="branch", cascade={"all"})
     */
    protected $branch_languages;

    /**
     * @var Language
     */
    private $language;

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        if (!$this->getCreatedAt()) {
            $this->created_at = new \DateTime();
            $this->updated_at = new \DateTime();
        }
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
     * Set status
     *
     * @param boolean $status
     * @return Branch
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
     * Set user
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $user
     * @return Branch
     */
    public function setCreated($created)
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
     * Set user
     *
     * @param \SM\Bundle\AdminBundle\Entity\User $user
     * @return Branch
     */
    public function setUpdated(\SM\Bundle\AdminBundle\Entity\User $updated)
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

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Branch
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
     * @return Branch
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
     * Constructor
     */
    public function __construct()
    {
        $this->branch_languages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = null;
    }

    /**
     * Add branch_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\BranchLanguage $branchLanguages
     * @return Branch
     */
    public function addBranchLanguage(\SM\Bundle\AdminBundle\Entity\BranchLanguage $branchLanguages)
    {
        $this->branch_languages[] = $branchLanguages;

        return $this;
    }

    /**
     * Remove branch_languages
     *
     * @param \SM\Bundle\AdminBundle\Entity\BranchLanguage $branchLanguages
     */
    public function removeBranchLanguage(\SM\Bundle\AdminBundle\Entity\BranchLanguage $branchLanguages)
    {
        $this->branch_languages->removeElement($branchLanguages);
    }

    /**
     * Get branch_languages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBranchLanguages()
    {
        return $this->branch_languages;
    }

    public function getCurrentLanguage()
    {
        $objLanguages = $this->branch_languages->toArray();
        if (is_array($objLanguages)) {
            if (null !== $this->language) {
                foreach ($objLanguages as $oLanguage) {
                    if ($oLanguage->getLanguage()->getId() == $this->language->getId()) {
                        return $oLanguage;
                    }
                }
            }
        }

        return null;
    }

    public function hasLanguage(Language $language)
    {
        $result = false;
        if (count($this->branch_languages->toArray()) > 0) {
            foreach ($this->branch_languages as $plTemp) {
                if ($language->getId() == $plTemp->getLanguage()->getId()) {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }

    public function __toString()
    {
        $objLanguages = $this->branch_languages->toArray();
        if (is_array($objLanguages)) {
            if (isset($objLanguages[0])) {
                return $objLanguages[0]->getName();
            }
        }
        return '';
    }

    /**
     * Set Language
     *
     * @param \SM\Bundle\AdminBundle\Entity\Language $language
     */
    public function setLanguage(Language $language) {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \SM\Bundle\AdminBundle\Entity\Language
     */
    public function getLanguage() {
        return $this->language;
    }

}