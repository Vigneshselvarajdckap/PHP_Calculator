<?php

//method 3;
$separateHistory["add"] = [];
$separateHistory["sub"] = [];
$separateHistory["multiple"] = [];
$separateHistory["divide"] = [];
//method one ;
$normalHistory = [];

for ($x = 0; $x <4; $x++) {

    $first = (int)readline('Enter first Operator: ');
    $second = (int)readline('Enter second Operator: ');
    $operand = readline('Which operation which you want you perform (+, -, /,*)');

    switch ($operand){
        case "+":
            $result=$first+$second;
            array_push($normalHistory,$first.$operand.$second."=".$result);
            array_push($separateHistory["add"],["numberone"=>$first,"numbertwo"=>$second,"operator"=>$operand,"result"=>$result]);
            break;
        case "-":
            $result=$first-$second;
            array_push($normalHistory,$first.$operand.$second."=".$result);
            array_push($separateHistory["sub"],["numberone"=>$first,"numbertwo"=>$second,"operator"=>$operand,"result"=>$result]);
            break;
        case "*":
            $result=$first*$second;
            array_push($normalHistory,$first.$operand.$second."=".$result);
            array_push($separateHistory["multiple"],["numberone"=>$first,"numbertwo"=>$second,"operator"=>$operand,"result"=>$result]);
            break;
        case "/":
            $result=$first/$second;
            array_push($normalHistory,$first.$operand.$second."=".$result);
            array_push($separateHistory["divide"],["numberone"=>$first,"numbertwo"=>$second,"operator"=>$operand,"result"=>$result]);
            break;
    }
}

//count add ,sub ,multiple
$count = [];
array_push($count,["add"=>count($separateHistory["add"]),"sub"=>count($separateHistory["sub"]),"multiple"=>count($separateHistory["multiple"]),"divide"=>count($separateHistory["divide"])]);





echo "<pre>";
print_r($normalHistory);
echo "</pre>";
echo "****************";
echo "<pre>";
print_r($count);
echo "</pre>";
echo "****************";
print_r($separateHistory);