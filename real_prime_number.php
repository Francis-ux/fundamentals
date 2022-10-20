<?php
// $question ="if y=2x^4 + 5x + 10 ,find y, when x=10";
// $x =10;
// $y =2*$x*$x*$x*$x + 5*$x +10;
// echo  $question . " then  y= " . $y  ;
?>

<?php
function IsPrime($n)
{
  for ($x = 2; $x < $n; $x++) {
    if ($n % $x == 0) {
      return 0;
    }
  }
  return 1;
}
$a = IsPrime(11);
if ($a == 0)
  echo 'This is not a Prime Number.....' . "\n";
else
  echo 'This is a Prime Number..' . "\n";
?>