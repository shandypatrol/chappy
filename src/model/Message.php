<?php

/**
 * Class Message
 *
 * @Entity @Table(name="messages")
 */
class Message {


    /**
     * @Id @Column(type="integer") @GeneratedValue *
     */
    private $id;

    /**
     * @Column(type="string") *
     */
    private $content;


    /**
     * @Column(type="datetime")
     **/
    private $created;


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