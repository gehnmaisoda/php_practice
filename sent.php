<p>送信先ファイル</p>

<?php 
  echo $_POST["text"];
?>

<?php
$num1 = $_POST["rps"];
// echo $_POST["rps"];
$num2 = rand(1, 3);
$hand1 = numIntoRps($num1);
$hand2 = numIntoRps($num2);

function numIntoRps($num){
  if ($num == 1){
    return "Rock";
  }elseif ($num == 2){
    return "Scissors";
  }else{
    return "Paper";
  }
}

function rpsJudge($num1, $num2){
  $sub = $num1 - $num2;
  if ($sub == 0){
    echo "Draw";
  }elseif ($sub == -1 || $sub == 2){
    echo "You Win!!";
  }else{
    echo "You Lose!!";
  }
}

echo "<h1>Your Hand : {$hand1}</h1> ";
echo "<h1>His Hand : {$hand2} </h1> ";
echo rpsJudge($num1, $num2);
?>
