<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="booking")
*/
class Booking
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    public function getId(){
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
    * @ORM\Column(type="text")
    */
    protected $tour;

    public function getTour(){
        return $this->tour;
    }

    public function setTour($tour){
        $this->tour = $tour;
    }

    /**
    * @ORM\Column(type="text")
    */
    protected $fullName;

    public function getFullName(){
        return $this->fullName;
    }

    public function setFullName($fullName){
        $this->fullName = $fullName;
    }

    /**
    * @ORM\Column(type="text")
    */
    protected $email;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    /**
    * @ORM\Column(type="integer")
    */
    protected $pax;

    public function getPax()
    {
        return $this->pax;
    }

    public function setPax($pax)
    {
        $this->pax = $pax;
    }

    /**
    * @ORM\Column(type="date")
    */
    protected $date;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
    * @ORM\Column(type="text")
    */
    protected $additionalRequest;

    public function getAdditionalRequest(){
        return $this->additionalRequest;
    }

    public function setAdditionalRequest($additionalRequest){
        $this->additionalRequest = $additionalRequest;
    }
}
