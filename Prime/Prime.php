<?php
namespace Prime;

class Prime {
final public function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
final public function get_prime_number($number){
     if ($number == 0) { return 0;}
        $result = Array();
        $i = 2;
        do {
            if ($this->primeCheck($i)) {
                $result[] = $i;
                $number--;
            }
            $i++;
        } while ($number > 0);
        return $result;
}
}
?>