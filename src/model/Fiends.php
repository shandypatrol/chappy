<?php

/**
 * Class Fiends
 *
 * @Entity @Table(name="friends")
 */
class Fiends {

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $userId;
    /** @Column(type="string") **/
    protected $state;

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }


} 