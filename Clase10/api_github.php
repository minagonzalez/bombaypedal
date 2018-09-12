<?php
$opts = [
        'http' => [
                'method' => 'GET',
                'header' => [
                        'User-Agent: PHP'
                ]
        ]
];

$context = stream_context_create($opts);
$apicallJson = file_get_contents("https://api.github.com/users/vvolfkind", false, $context);
$apicallArr = json_decode($apicallJson, true);
    // echo "<ul>";
foreach ($apicallArr as $key => $value) {
    echo "<h1>" . $key . ': ' . $value . "</h1>";
}
    // echo "</ul>";
// var_dump($apicallArr);


