$n = 5;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial = $i * $factorial;
    echo $factorial."\n";
}

echo "\n";
echo $factorial;