<?php
    class Calculadora {
        public function suma($num1, $num2){
            return($num1 + $num2);
        }
        public function resta($num1, $num2){
            return($num1 - $num2);
        }
        public function multiplicacio($num1, $num2){
            return($num1 * $num2);
        }
        public function divisio($num1, $num2){
            if($num2 == 0) return "No es pot dividir entre 0";
            else return($num1 / $num2);
        }
    }
    $operar = new Calculadora();

    echo $operar->suma(20, 10) . "\n";
    echo $operar->resta(20, 10) . "\n";
    echo $operar->multiplicacio(20, 10) . "\n";
    echo $operar->divisio(20, 10) . "\n";

?>





 
