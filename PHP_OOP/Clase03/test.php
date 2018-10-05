<?php

require 'MyApp/User.php';
require 'MyApp/FreeUser.php';
require 'RegisterUtils/User.php';

use MyApp\FreeUser;

$user = new FreeUser("skream466", "1234", "skream@undernet.net");

var_dump($user);