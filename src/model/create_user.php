<?php

include_once "../../bootstrap.php";

$user = new User();
$user->setName('Shandy');
$user->setEmail('shandy@chappy.com');
$user->setPassword('123456');

$entityManager->persist($user);
$entityManager->flush();
