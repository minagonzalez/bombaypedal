<?php

require 'Classes/loader.php';

$timelineLalo = new Timeline();
$timelineBort = new Timeline();
$timelineAle = new Timeline();
$timelineNico = new Timeline();
$timelineMarce = new Timeline();

$user1 = new User(1, "lalolanda", "/img/users/lalo.jpg", $timelineLalo);
$user2 = new User(2, "bort", "/img/users/bort.jpg", $timelineBort);
$user3 = new User(3, "ale23", "/img/users/ale23.jpg", $timelineAle);
$user4 = new User(4, "nico", "/img/users/nico.jpg", $timelineNico);
$user5 = new User(5, "marce@gmail.com", "/img/users/marce.jpg", $timelineMarce);

$user1->setTimeline($timelineLalo);

$contenidoNuevo = new Text("Descripcion", $user1, "Argentina’s tough IMF-backed “zero deficit” budget has enough support to pass congress despite plunging poll ratings and a worsening economy");

$timelineLalo->setContent($contenidoNuevo);

$user1->setFriends($user2);
$user1->setFriends($user3);
$user1->setFriends($user4);


$user_methods = get_class_methods('User');


var_dump(get_object_vars($user1));