<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 11-12-15
 * Time: 13:45
 */

namespace Frissr\Volunteer\Entity;

class Event {

    protected $title;
    protected $description;
    protected $date;
    protected $time;
    protected $maxNumberOfParticipants;
    protected $numberOfParticipants;
    protected $organiser;
    protected $location;

    public function __construct($title , $date=0) {
        $this->title = $title;
        $this->date = $date;
    }

    /**
     * @return mixed
     */

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */

    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */

    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */

    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */

    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */

    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return integer
     */

    public function getMaxNumberOfParticipants()
    {
        return $this->maxNumberOfParticipants;
    }

    /**
     * @param integer $maxNumberOfParticipants
     */

    public function setMaxNumberOfParticipants($maxNumberOfParticipants)
    {
        $this->maxNumberOfParticipants = $maxNumberOfParticipants;
    }

    /**
     * @param integer $numberOfParticipants
     */

    public function getNumberOfParticipants()
    {
        return $this->numberOfParticipants;
    }

    /**
     * @return Person
     */

    public function setNumberOfParticipants($numberOfParticipants)
    {
        $this->numberOfParticipants = $numberOfParticipants;
    }

    /**
     * @param integer $numberOfParticipants
     */

    public function getOrganiser()
    {
        return $this->organiser;
    }

    /**
     * @param Person $organiser
     */

    public function setOrganiser(Person $organiser)
    {
        $this->organiser = $organiser;
    }

    /**
     * @return Location
     */

    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }

}