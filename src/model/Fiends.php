<?php

/**
 * Class Fiends
 *
 * @Entity @Table(name="friends")
 */
class Fiends {

    /**
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="userId", referencedColumnName="id")
     * @Id @Column(type="integer")
     */
    private $userId;

    /**
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="friendId", referencedColumnName="id")
     * @Id @Column(type="integer")
     */
    private $friendId;

    /** @Column(type="string") **/
    private $state;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }


    /**
     * @return mixed
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * @param int $friendId
     *
     * @return Fiends
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return Fiends
     */
    public function setState($state)
    {
        Shandy\TypeHelper::getInstance()->assertStringNotEmpty($state, "$state");
        $this->state = $state;
        return $this;
    }



} 