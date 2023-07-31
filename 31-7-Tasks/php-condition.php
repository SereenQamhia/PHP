<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

function printLeapYearMessage($year) {
    if (isLeapYear($year)) {
        echo "The year $year is a leap year.\n";
    } else {
        echo "The year $year is not a leap year.\n";
    }
}

// Sample Input
$year = 2013;

// Sample Output
printLeapYearMessage($year);

echo "<br><br> .................................... <br><br>";

function whatistheseason( $temp ){
    if ($temp<20){
        echo "It's winter ";
    }
    else {  echo "It is summertime!";
    }
}

$tempreture = 39 ;
whatistheseason( $tempreture );

echo "<br><br> .................................... <br><br>";


function sum ($x , $y) {
      if ($x == $y ){
        $triple  = ($x + $y) *3;
        echo $triple; 
      }
      else {
        $z = $x + $y;
        echo $z ;
      }

}

sum(5, 5);

echo "<br><br> .................................... <br><br>";

function sum2 ($x , $y) {
    $z = $x + $y;
    if ($z == 30 ){
      echo $z; 
    }
    else {
      echo "false";
    }

}

sum2(5, 5);

echo "<br><br> .................................... <br><br>";

function multipleof3 ($x ) {
    if ($x%3 == 0) {
        echo "Yes";  
    }
    else {
        echo "No";
    }
}

multipleof3 (9);

echo "<br><br> .................................... <br><br>";

function isInRange($number) {
   if($number >= 20 && $number <= 50){
    echo "true";
} else {
    echo "false";
}
   }

isInRange(45);

echo "<br><br> .................................... <br><br>";

function findLargestNumber($numbers) {

    $largestNumber = $numbers[0];

    foreach ($numbers as $number) {
        if ($number > $largestNumber) {
            $largestNumber = $number;
        }
    }

    echo $largestNumber;
}

// Sample Input
$inputNumbers = [1, 5, 9];
findLargestNumber($inputNumbers);

echo "<br><br> .................................... <br><br>";


function electricalbill ($x) {
   if ($x< 50){
    echo $x * 2.5;
   }
   else if ( $x < 150){
      $y  = $x -50 ;
     echo 50*2.5 + $y*5;
   }
   else if ( $x < 250){
    $y  = $x -150 ;
   echo 50*2.5 + 100*5 + $y*6.2;
 }
 else {
    $y  = $x -250 ;
   echo 50*2.5 + 100*5 + 100*6.2 + $y*7.5;
 }
}

electricalbill (300);


echo "<br><br> .................................... <br><br>";

function isEligibleToVote($age) {
    if ($age >= 18) {
        echo "You are eligible to vote!";
    } else {
        echo "You are not eligible to vote yet.";
    }
}

isEligibleToVote(23);


echo "<br><br> .................................... <br><br>";

function checkNumberType($number) {
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

// Sample Input
$number = -60;

// Sample Output
$result = checkNumberType($number);
echo $result;

echo "<br><br> .................................... <br><br>";
$num1=5 ;
$num2=6; 

switch ('add') {
    case 'add':
        $result = $num1 + $num2;
        break;
    case 'subtract':
        $result = $num1 - $num2;
        break;
    case 'multiply':
        $result = $num1 * $num2;
        break;
    case 'divide':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Error: Cannot divide by zero!";
        }
        break;
    default:
        $result = "Error: Invalid operator!";
}
echo 'result ='. $result;

echo "<br><br> .................................... <br><br>";

function calculateAverage($scores) {
    $totalSubjects = count($scores);
    $totalScore = array_sum($scores);
    return $totalScore / $totalSubjects;
}

function calculateGrade($average) {
    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

// Sample Input
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

// Calculate Average
$averageScore = calculateAverage($scores);

// Calculate Grade
$grade = calculateGrade($averageScore);

// Sample Output
echo $grade;

