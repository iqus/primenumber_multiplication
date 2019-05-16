<?php
use Prime\PrimeMultiplication as primeM;

if (isset($argc)) {
    for ($i = 0; $i < $argc; $i++) {
        echo "Argument #" . $i . " - " . $argv[$i] . "\n";
    }
}
else {
    echo "argc and argv disabled\n";
}
require_once __DIR__ . '/autoload.php';

$option = 10;
$validity_check = "valid";
if(!empty($argv) && count($argv) > 1){
    $option = $argv[1];
    $validity_check = (count($argv) >= 3) ? "invalid" : "valid"; 
}

if (is_numeric($option)) {
    if ($option < 2 || $option > 1000) {
        print("option  is limited to 2 <= N <= 10^3 \n");
    } else if ($validity_check == "valid") {
        $primeMultiplication = new primeM($option);
        $primeMultiplication->print_prime_number();
    } else {
        $primeMultiplication = new primeM($option);
        $primeMultiplication->prime_catch_error();
    }
}else{
       print("argumnet must be number \n");
}


?>