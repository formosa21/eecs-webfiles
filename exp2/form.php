<?php

//debugging
error_reporting(E_ALL);
ini_set("display_errors", 1);


//access the global array called $_POST to get the values from the text fields

$taiwan = $_POST["taiwan"];
$ku = $_POST["ku"];
$jp = $_POST["jp"];
$hb = $_POST["hb"];
$hc = $_POST["hc"];


function getanswer($ans){
  if ($ans == "a")
    echo "I don't know.";
  elseif ($ans == "b")
    echo "Next to China";
  elseif ($ans == "c")
    echo "In Japan";
  elseif ($ans == "d")
    echo "In the U.S.";
  else
    echo "In your stomach";
}


echo "Question 1: Where is Taiwan? <br>";
echo "You answered: ",getanswer($taiwan),"<br>";
echo "Correct answer: Next to China<br><br>";

echo "Question 2: Where is the University of Kansas?<br>";
echo "You answered: ",getanswer($ku),"<br>";
echo "Correct answer: In the U.S.<br><br>";

echo "Question 3: Where is the second largest adult film industry in the world?<br>";
echo "You answered: ",getanswer($jp),"<br>";
echo "Correct answer: In Japan<br><br>";

echo "Question 4: Where is your nearest higg-boson?<br>";
echo "You answered: ",getanswer($hb),"<br>";
echo "Correct answer: I don't know.<br><br>";

echo "Question 5: Where is hydrochloric acid?<br>";
echo "You answered: ",getanswer($hc),"<br>";
echo "Correct answer: In your stomach<br><br>";

$score = 0; //default value
if ($taiwan == "b") {
  $score++;
}
if ($ku == "d") {
  $score++;
}
if ($jp == "c") {
  $score++;
}
if ($hb == "a") {
  $score++;
}
if ($hc == "e") {
  $score++;
}

echo "You scored ",$score*20,"%";

?>
