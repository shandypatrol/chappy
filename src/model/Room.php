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


    /**
     * Returns the room id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Returns the room name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Sets the name of the room.
     *
     * @param string $name
     *
     * @return Room
     */
    public function setName($name)
    {
        Shandy\TypeHelper::getInstance()->assertStringNotEmpty($name, "$name");
        $this->name = $name;
        return $this;
    }


} 