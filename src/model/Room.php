<?php

/**
 * Class Room
 *
 * @Entity @Table(name="rooms")
 */
class Room {

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $name;
} 