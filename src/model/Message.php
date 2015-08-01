<?php

/**
 * Class Message
 *
 * @Entity @Table(name="messages")
 */
class Message {

    /**
     * @ManyToOne(targetEntity="User", inversedBy="assignedBugs")
     **/
    protected $users;


    /**
     * Returns the list of users.
     *
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }


    /**
     * @Id @Column(type="integer") @GeneratedValue *
     */
    protected $id;

    /**
     * @Column(type="string") *
     */
    protected $content;

    /**
     * @Column(type="datetime")
     **/
    protected $created;

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


} 