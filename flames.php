<?php
if (isset($_POST["boy"]) || isset($_POST["girl"])) {
    $boy = $_POST["boy"];
    $girl = $_POST["girl"];
    $boy_lower_case = strtolower($boy);
    $girl_lower_case = strtolower($girl);
    $b_res = [];
    $g_res = [];
    for ($i = 0; $i < strlen($boy_lower_case); $i++) {
        $b_res[$i] = $boy_lower_case[$i];
    }
    for ($j = 0; $j < strlen($girl_lower_case); $j++) {
        $g_res[$j] = $girl_lower_case[$j];
    }
    for ($i = 0; $i < strlen($boy_lower_case); $i++) {
        for ($j = 0; $j < strlen($girl_lower_case); $j++) {
            if ($boy_lower_case[$i] == $girl_lower_case[$j]) {
                if ((!in_array($girl_lower_case[$j], $g_res)) || (!in_array($boy_lower_case[$i], $b_res))) {
                    continue;
                } else {
                    $gbi = array_search($boy_lower_case[$i], $b_res);
                    $ggi = array_search($girl_lower_case[$j], $g_res);
                    array_splice($b_res, $gbi, 1);
                    array_splice($g_res, $ggi, 1);
                    break;
                }
            }
        }
    }
    $total_chars = array_merge($b_res, $g_res);
    $remaining_chars = count($total_chars);
    $flames = ['F', 'L', 'A', 'M', 'E', 'S'];
    $actual = count($flames);
    while ($actual > 1) {
        $k = array_splice($flames, ($remaining_chars % $actual) - 1, 1);
        $actual -= 1;
    }
    $result = $flames[0];
    switch ($result) {
        case "F":
            echo "The Relation Between " . $boy . " and " . $girl . " is " . "Friendship";
            break;
        case "L":
            echo "The Relation Between " . $boy . " and " . $girl . " is " . "Love";
            break;
        case "A":
            echo "The Relation Between " . $boy . " and " . $girl . " is " . "Affection";
            break;
        case "M":
            echo "The Relation Between " . $boy . " and " . $girl . " is " . "Marriage";
            break;
        case "E":
            echo "The Relation Between " . $boy . " and " . $girl . " is " . "Enemies";
            break;
        case "S":
            echo "The Relation Between " . $boy . " and " . $girl . " are " . "Siblings";
            break;
        default:
            echo "Error In Program !!! ";
    }
}
