<!-- 

Find sum of digits of a number just add all the digits

Eg:
14597 = 1 + 4 + 5 + 9 + 7  
14597 = 26   

Logic:
Take the number.
Divide the number by 10.
Add the remainder to a variable.
Repeat the process until remainder is 0.

-->

<?php  
    $num = 12345;
    $sum = 0;
    $rem = 0;

    for($i = 0; $i <= strlen($num); $i++){
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = $num/10;
    }
    echo "Sum is $sum";
?>