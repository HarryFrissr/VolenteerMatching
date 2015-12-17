<?php namespace Frissr\Volunteer\Entity;

/**
 * Created by PhpStorm.
 * User: Harry van der Valk - The Hague Intelliguence Group
 * Date: 11-12-15
 * Time: 13:39
 */

/**
 * Class Person
 * @package Frissr\Volunteer\Entity
 */
class Person {

    protected $name;
    protected $dateOfBirth;
    protected $profilePicture;
    protected $password;

    /**
     * @param $name
     */
    public function __construct($name, $dateOfBirth = null, $profilePicture = null, $password = null) {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->profilePicture = $profilePicture;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->ProfilePicture;
    }

    /**
     * @param mixed $ProfilePicture
     */
    public function setProfilePicture($ProfilePicture)
    {
        $this->ProfilePicture = $ProfilePicture;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }





}