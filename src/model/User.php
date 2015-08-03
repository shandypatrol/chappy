<?php

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
} 