<?php
include("primeLIb.php");
class PrimeMultiplication extends Prime {

//$count = (empty($argv[2])) ? 10 : $argv[2];
    private $length = 0;
	private $primes = array();
   function __construct($n) 
    {
        /* increment for display of primes */
        $this->length = $n + 1;
        $this->primes = $this->get_prime_number($n);
		$this->print_prime_number();
    }
     public function get_value($i, $j)
    {
        if ($j < $i) {
            return $this->get_value($j, $i);
        } else {
            if ($i == 0) {
                return $j == 0 ? null : $this->primes[$j - 1];
            } else {
                return $this->primes[$i - 1] * $this->primes[$j - 1];
            }
        }
    }
    public function print_border($padding)
    {
        for($j = 0; $j < $this->length; $j++) {
            print(sprintf("%'_" . $padding . "s", "_"));
        }
        print(sprintf("%'_" . $padding . "s", "_"));
        print("\n");
    }


     public function print_prime_number()
    {
        /* Add some padding for readability */
        $padding = strlen($this->get_value($this->length - 1, $this->length - 1)) + 4;
        for($i = 0; $i < $this->length; $i++) {
            $this->print_border($padding);
            print("\n");
            for($j = 0; $j < $this->length; $j++) {
                /* base case: blank will be converted to zero */
                if ($j == 0 && $i == 0) {
                    print(sprintf("%' " . $padding . "s", ""));
                } else {
                    print(sprintf("%' " . $padding . "d", $this->get_value($i, $j)));
                }
            }
            print("\n");
        }
       $this->print_border($padding);
    }
	
}



$obj = new  PrimeMultiplication(10);



?>