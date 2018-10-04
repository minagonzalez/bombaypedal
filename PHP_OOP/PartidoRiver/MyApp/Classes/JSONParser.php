<?php

class JsonConverter
{
    public static function convert($file)
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

