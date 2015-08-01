<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class User
 *
 * @Entity @Table(name="users")
 */
class User {

    protected $messages;
    protected $friends;
    /**
     * @ManyToMany(targetEntity="Room")
     **/
    protected $rooms;


    /**
     * Assign user to room.
     *
     * @param Room  $room
     */
    public function assignToRoom($room)
    {
        $this->rooms[] = $room;
    }

    /**
     * Returns the list of rooms
     *
     * @return Room[]
     */
    public function getRooms()
    {
        return $this->rooms;
    }


    /**
     * Construct method.
     */
    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->friends = new ArrayCollection();

    }


    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string") **/
    protected $name;
    /** @Column(type="string") **/
    protected $password;
    /** @Column(type="string") **/
    protected $email;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }



} 