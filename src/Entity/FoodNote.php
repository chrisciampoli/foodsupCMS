<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="food_note")
 */
class FoodNote
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $userAvatarFilename;

    /**
     * @ORM\Column(type="text")
     */
    private $note;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="Food", inversedBy="notes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $food;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUserAvatarFilename()
    {
        return $this->userAvatarFilename;
    }

    public function setUserAvatarFilename($userAvatarFilename)
    {
        $this->userAvatarFilename = $userAvatarFilename;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function setFood(Food $food)
    {
        $this->food = $food;
    }

    public function getId()
    {
        return $this->id;
    }
}
