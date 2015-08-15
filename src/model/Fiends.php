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

} 