<?php
echo "\n";
echo "\n";
echo "\n";
echo 'Enter one of + , - , / , x , mod or ^ ';
$operator= readline('Please enter an operator : ');
$num1= readline('Enter first number ');
$num2= readline('Enter second number ');


echo "\n";
echo "\n";
echo "\n";

if($operator=='+'){
  echo $num1 + $num2. "\n";
}
elseif($operator=='-'){
  echo $num1 - $num2. "\n";
}

elseif($operator=='/' )

{if ($num2=='0') {
 echo 'Undefined'. "\n";
} else {
   echo $num1 / $num2. "\n";
}

 
  
}

  
  
// }
elseif($operator=='x'){
  echo $num1 * $num2. "\n";
}
elseif($operator=='mod'){
  echo $num1 % $num2. "\n";
}
elseif($operator=='^'){
  echo $num1 ** $num2. "\n";
}
echo "\n";
echo "\n";
echo "\n";





?>