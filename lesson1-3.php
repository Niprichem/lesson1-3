<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$Eurasia = ['Gulo gulo', 'Panthera leo persica', 'Lepus timidus'];
$North_America = ['Mammuthus columbi', 'Rangifer tarandus', 'Vulpes lagopus'];
$South_America = ['Leopardus guigna', 'Nasua narica', 'Choloepus didactylus'];
$Africa = ['Elephantidae', 'Hippopotamus', 'Panthera pardus'];
$Australia = ['Tachyglossidae', 'Sarcophilus harrisii', 'Macropus rufus'];
$Antarctica = ['Ankylosauria', 'Cryolophosaurus', 'Hydrurga leptonyx'];

$Animals = [
    'Eurasia' => ['Gulo gulo', 'Panthera leo persica', 'Lepus timidus'],
    'North_America' => ['Mammuthus columbi', 'Rangifer tarandus', 'Vulpes lagopus'],
    'South_America' => ['Leopardus guigna', 'Nasua narica', 'Choloepus didactylus'],
    'Africa' => ['Elephantidae', 'Hippopotamus', 'Panthera pardus'],
    'Australia' => ['Tachyglossidae', 'Sarcophilus harrisii', 'Macropus rufus'],
    'Antarctica' => ['Ankylosauria', 'Cryolophosaurus', 'Hydrurga leptonyx']
];
//echo $Animals['Eurasia'][0];
$double_word_0 = [];
$double_word_1 = [];
foreach ($Animals as $elem) {
    foreach ($elem as $animal) {
        //echo $animal.', ';
        $animal_arr = explode(' ', $animal);
        if (count($animal_arr) == 2) {
            array_push($double_word_0, $animal_arr[0]);
            array_push($double_word_1, $animal_arr[1]);
        }
    }
}
//var_dump($double_word_1);
echo"<br>";
shuffle($double_word_1);
//var_dump($double_word_1);

$fantasy_animals = [];

for ($i = 0; $i < count($double_word_0); $i++) {
    array_push($fantasy_animals, $double_word_0[$i].' '.$double_word_1[$i]);
}
var_dump($fantasy_animals);

?>

</body>
</html>