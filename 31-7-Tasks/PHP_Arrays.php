<?php 
$colors = array('white', 'green', 'red') ;
echo "<ul> ";
foreach ($colors as $color){
    echo "<li> $color </li> " ;
}

echo "<br><br> .................................... <br><br>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort( $cities);
foreach ($cities as $x => $value){

    echo "The capital of $x is $value <br><br>";
}
echo "<br><br> .................................... <br><br>";

$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color[4];

echo "<br><br> .................................... <br><br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $x => $y) {
     echo " $x = $y  <br><br>";
}

echo "<br><br> .................................... <br><br>";

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$shortest = strlen($words[0]);
$longest = strlen($words[0]);

foreach ($words as $word) {
    $length = strlen($word);
    if ($length < $shortest) {
        $shortest = $length;
    }
    if ($length > $longest) {
        $longest = $length;
    }
}

echo "The shortest array length is $shortest. The longest array length is $longest.";
