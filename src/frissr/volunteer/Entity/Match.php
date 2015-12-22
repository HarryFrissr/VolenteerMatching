<?php
/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelligence Group
 * Date: 17-12-15
 * Time: 11:57
 */

namespace Frissr\Volunteer\Entity;

/**
 * Sample of a one to one
 * Class Match
 * @package Frissr\Volunteer\Entity
 */
class Match {

    private $volunteer = null;
    private $refugee = null;

    /**
     * @param Volunteer $volunteer
     * @param Refugee $refugee
     */
    public function __construct(Volunteer $volunteer = null, Refugee $refugee = null ) {
        $this->refugee = $refugee;
        $this->volunteer = $volunteer;
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->volunteer . ' match to ' . $this->refugee ;
    }

    /**
     * @return Refugee|null
     */
    public function getRefugee()
    {
        return $this->refugee;
    }

    /**
     * @return Volunteer|null
     */
    public function getVolunteer()
    {
        return $this->volunteer;
    }


} 