<?php 
$x=0;
for ($i = 0; $i <31 ; $i++)
 {
   $x += $i;
}
echo "The total sum of integers between 0 and 30 is: $x";

echo "<br><br> .................................... <br><br>";

$size = 5;

for ($row = 1; $row <= $size; $row++) {
    for ($col = 1; $col <= $size; $col++) {
        if ($col == $row) {
            echo $row . " " ;
        } else {
            echo "0 ";
        }
        
    }  echo "<br>"; 
}

echo "<br><br> .................................... <br><br>";

function factorial($number) {
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($number == 0) {
        return 1;
    } else {
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}
echo "The factorial of 5 is: " . factorial(5);

echo "<br><br> .................................... <br><br>";

function fibonacci($n) {
    $fibArray = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibArray[$i] = $fibArray[$i - 1] + $fibArray[$i - 2];
    }

    return implode(', ', $fibArray);
}


echo "Fibonacci sequence of length 10: " . fibonacci(10);

echo "<br><br> .................................... <br><br>";

function generateFloydTriangle($n) {
    $number = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
}

generateFloydTriangle(5);