<?php
$cars = [
    ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
    ['name' => 'Такси 6', 'position' => 500, 'isFree' => 1],
    ['name' => 'Такси 7', 'position' => 500, 'isFree' => 1],
];

$passenger = rand(0, 1000);

/* ===== Ваш код ниже ===== */

$go = [];
foreach ($cars as $key) {

    $position = abs($key['position'] - $passenger);

    if ($key['isFree']){
        $isFree = '(свободен)';
        $go[$key['name']] = $position;
        asort($go);
    }else{
        $isFree = '(занят)';
    }

    $data[$key['name']] = $key['name'] . ", стоит на " . $key['position'] . ", до пассажира " . $position . " км " . $isFree;

}

foreach ($data as $taxi => $val) {
    if(array_key_first($go) == $taxi){
        echo $val . " - едет это такси";
        echo "<br>";
    }else{
        echo $val;
        echo "<br>";
    }

}

$num = 1000;
$arr = [];
$run = '';

foreach ($cars as $keys){
    $str =  "{$keys['name']}, стоит на {$keys['position']} км, ";
    $res = $keys['position'] - $passenger;
    if ($res < 0 )
        $res += 1000;
    $str .= "до пассажира {$res} км ";
    if (!$keys['isFree'])
        $str .= "(занят)";
    else {
        $str .= "(свободен)";
        if ($res < $num){
            $run = $keys['name'];
            $num = $res;
        }
    }
    $arr[$keys['name']] = $str;
}

foreach ($arr as $keys => $value){
    if ($keys == $run)
        $value .= " - едет это такси";
    echo $value;
    echo "<br>";
}

    // "Такси 1, стоит на 15 км, до пассажира 3 км (занят)"
    // "Такси 2, стоит на 0 км, до пассажира 12 км (свободен) - едет это такси"
    // "Такси 3, стоит на 300 км, до пассажира 288 км (свободен)"