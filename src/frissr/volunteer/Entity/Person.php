<?php namespace Frissr\Volunteer\Entity;

/**
 * Created by PhpStorm.
 * User: Jan Rezelman
 * Date: 11-12-15
 * Time: 13:39
 */

/**
 * Class Person
 * @package Frissr\Volunteer\Entity
 */

class Person {

    protected $id;
    protected $firstName;
    protected $lastName;
    protected $dateOfBirth;
    protected $email;
    protected $password;
    // TODO Add profile picture attribute

    // TODO id hoort niet in de constructor. Je weet het id van de klasse niet op het moment van aanmaken.
    // TODO Haal Id uit de constructor
    // TODO Maak getter/setter!! voor id
    // TODO Maak een Entity base klasse met daarin - onder andere - id
    public function __construct($id, $firstName = null, $lastName = null, $dateOfBirth = null, $email = null, $password = null) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;
        $this->password = $password;
    }

    public function setName($firstName, $lastname = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastname;
    }

    public function getName() {
        return trim($this->firstName . ' ' . $this->lastName);
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param null $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param null $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param null $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
<<<<<<< HEAD
        return $this->profilePicture;
=======
        return $this->email;
>>>>>>> 9349b1a7f34eb58e7ce29469a72376902fcfe490
    }

    /**
     * @param null $email
     */
<<<<<<< HEAD
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
=======
    public function setEmail($email)
    {
        $this->email = $email;
>>>>>>> 9349b1a7f34eb58e7ce29469a72376902fcfe490
    }

    /**
     * @return null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}