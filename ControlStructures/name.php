$name = 'Роман';
$gen = 'm';

switch ($gen) {
    case "m":
        echo "Его зовут ", $name;
        break;
    
    case "f":
        echo "Её зовут ", $name;
        break;

    default:
        echo "Неправильно указан пол";
}