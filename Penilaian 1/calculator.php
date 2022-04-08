<?php 

class Calculator {
    public $battery;

    function __construct(){
        $this->battery = 0;

    }

    public function __destruct()
    {
        echo PHP_EOL . "---------- End of Program ----------" . PHP_EOL;
    }

    function powerBattery(){
        echo("Baterry = {$this->battery} % \n");
    }

    function checkBatteryPower(){
        if ($this->battery > 10){
            return True;
        } else {
            return False;
        }
    }

    function chargeBattery($power){
        $this->battery += $power;
        if ($this->battery > 100){
            return $this->battery = 100;
        }
    }

    function usePowerBattery(){
        $this->battery -= 10;
    }

    function plus($a, $b){
        if ($this->checkBatteryPower()){
            $result = $a + $b;
            $echoResult = "Result $a + $b = $result";
            $this->usePowerBattery();
        } else {
            $echoResult = "Battery is lowbat";
        }
        $this->powerBattery();
        echo("{$echoResult}\n\n");
    }
    function minus($a, $b){
        if ($this->checkBatteryPower()){
            $result = $a - $b;
            $echoResult = "Result $a - $b = $result";
            $this->usePowerBattery();
        } else {
            $echoResult = "Battery is low";
        }
        $this->powerBattery();
        echo("{$echoResult}\n\n");
    }
    function divide($a, $b){
        if ($this->checkBatteryPower()){
            $result = $a / $b;
            $echoResult = "Result $a : $b = $result";
            $this->usePowerBattery();
        } else {
            $echoResult = "Battery is low";
        }
        $this->powerBattery();
        echo("{$echoResult}\n\n");
    }
    function multiple($a, $b){
        if ($this->checkBatteryPower()){
            $result = $a * $b;
            $echoResult = "Result $a x $b = $result";
            $this->usePowerBattery();
        } else {
            $echoResult = "Battery is low";
        }
        $this->powerBattery();
        echo("{$echoResult}\n\n");
    }
}

class EcoCalculator extends Calculator{
    function checkBatteryPower(){
        if ($this->battery > 5){
            return True;
        } else {
            return False;
        }
    }
    function usePowerBattery(){
        $this->battery -= 5;
    }

// ------------Main Function---------------
    function squared($a, $b){
        if ($this->checkBatteryPower()){
            if ($b != 0){
                $result = 1;
                for ($i = 1; $i <= $b; $i ++){
                    $result *= $a;
                }
                if ($result < 1000000){
                    $echoResult = "Result of $a ^ $b = $result";
                } else {
                    $echoResult = "Value outside the specified limit";
                }
            } else {
                $echoResult = "Result of $a ^ $b = 1";
            }
            $this->usePowerBattery();
        } else {
            $echoResult = "Battery is low";
        }
        $this->powerBattery();
        echo("{$echoResult}\n\n");
    }
}
  
    $calculator = new Calculator(0);

    $calculator->chargeBattery(15);

    $calculator->plus(1,2);
    $calculator->minus(100,20);
    
    $calculator->chargeBattery(70);
    
    $calculator->divide(1,2);
    $calculator->multiple(6,3);

    $ecoCalculator = new EcoCalculator(0);
    
    $ecoCalculator->chargeBattery(30);

    $ecoCalculator->squared(2,2);

?>