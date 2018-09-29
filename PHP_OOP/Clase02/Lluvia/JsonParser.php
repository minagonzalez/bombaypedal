<?php

class JsonConverter
{

    public function convert($file)
    {
        $temp = file_get_contents($file);
        $arr = explode(PHP_EOL, $temp);
        array_pop($arr);

        foreach($arr as $indexJson) {
            $newArray[] = json_decode($indexJson, true);
        }

        return $newArray;

    }

}


$array = JsonConverter::convert('users.json');

var_dump($array);




interface Recargable 
{
    public function recargar();
}

abstract class Cellphone
{

}

class Iphone extends Cellphone implements Recargable
{

}




























