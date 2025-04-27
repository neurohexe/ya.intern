$name = 'Роман';
$gen = 'm';
$age = 33;

if($gen == 'm') {
    $place = 'Его';
    $place2 = 'Ему';
} else {
    $place = 'Ее';
    $place2 = 'Ей';
}

$god = $age%10;

if($god == 1){
    $years = 'год';
} else if($god>=2 && $god<=4){
    $years = 'года';
} else {
    $years = 'лет';
}

echo $place, " зовут ", $name, ", ", $place2, " ",$age, " ",$years;