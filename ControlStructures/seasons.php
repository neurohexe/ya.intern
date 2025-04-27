$m = 12;

if($m == 1 || $m == 2 || $m == 12) {
    echo "Зима";
} else if ($m>=3 && $m<=5){
    echo "Весна";
} else if ($m>=6 && $m<=8){
    echo "Лето";
} else if ($m>=9 && $m<=11){
    echo "Осень";
}