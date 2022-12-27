<?php
class myCalculator {
    private $_firstValue, $_secondValue;
    public function __construct($firstValue, $secondValue){
        $this->_firstValue = $firstValue;
        $this->_secondValue = $secondValue;

    }
    // add first value to secondValue
    public function add(){
        return $this->_firstValue + $this->_secondValue;
    }
    // substract firstValue value to secondValue
    public function substract(){
        return $this->_firstValue - $this->_secondValue;
    }
    // multiply firstValue to secondValue
    public function multiply(){
        return $this->_firstValue * $this->_secondValue;
    }
    // divide firstvalue to secondValue
    public function divide(){
        return $this->_firstValue / $this->_secondValue;
    }
}
$myCalculator = new MyCalculator(12, 6);
echo $myCalculator->add()."<br>";
echo $myCalculator->substract()."<br>";
echo $myCalculator->multiply()."<br>";
echo $myCalculator->divide()."<br>";

?>