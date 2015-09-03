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

    /**
     * Returns the message id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Returns the message content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * Sets the content of the message
     *
     * @param string $content
     *
     * @return Message
     */
    public function setContent($content)
    {
        Shandy\TypeHelper::getInstance()->assertStringNotEmpty($content, "$content");
        $this->content = $content;
        return $this;
    }


    /**
     * Returns the time of creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }


} 