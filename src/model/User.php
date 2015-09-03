<?php

require_once "../../bootstrap.php";

/**
 * Class User
 *
 * @Entity @Table(name="users")
 */
class User {


    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $name;
    /** @Column(type="string") **/
    private $password;
    /** @Column(type="string") **/
    private $email;

    /**
     * Returns the user id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        Shandy\TypeHelper::getInstance()->assertStringNotEmpty($name, "$name");
        $this->name = $name;
        return $this;
    }

    /**
     * Returns the password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        Shandy\TypeHelper::getInstance()->assertStringNotEmpty($password, "$password");
        $this->password = $password;
        return $this;
    }

    /**
     * Returns the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email address
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        Shandy\TypeHelper::getInstance()->assertStringNotEmpty($email, "$email");
        $this->email = $email;
        return $this;
    }


} 