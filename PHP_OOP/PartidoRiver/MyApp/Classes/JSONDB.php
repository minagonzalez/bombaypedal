<?php
require 'JSONParser.php';

class JSONDB extends DB
{
    public function dbConnect($array)
    {
        return $array;
    }
    public function dbEmailSearch($email)
    {
        $users = dbConnect();

            foreach($users as $user) {
                if($user['email'] === $email) {
                    return $user;
                }
            }
        return null;
    }

    public function saveUser($user)
    {
        $jsonUser = json_encode($user);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

}

$db = new JSONDB();
$json = JSONConverter::convert('users.json');
$db->dbConnect($json);

if($_POST) {

    $errors = $validator->Validate();

    $usuario = $db->createUser($_POST);

    if(count($errors) == 0) {
        $db->saveUser($usuario);
        Helpers::redirect('login.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>