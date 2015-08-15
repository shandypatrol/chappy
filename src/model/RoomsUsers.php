<?php

/**
 * Class RoomsUsers
 *
 * Relationship between rooms and users.
 */
class RoomsUsers
{

    /**
     * @ManyToOne(targetEntity="Room", fetch="LAZY")
     **/
    private $rooms;


    /**
     * @ManyToOne(targetEntity="User", fetch="LAZY")
     **/
    private $users;


    /**
     * Construct method.
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->rooms = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Returns the list of users.
     *
     * @return Room[]
     */
    public function getRooms()
    {
        return $this->users;
    }


    /**
     * Returns the list of users.
     *
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }
}