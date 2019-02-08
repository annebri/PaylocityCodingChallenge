<?php

    class BenefitsCalculator {

        private $employeeCost = 1000;
        private $dependentsCost = 500;
        private $discount = 0.9;
        
        function __construct($employeeCost, $dependentsCost, $discount){
        }

        function annualCostEmpDiscount($numDiscountEmployees){
            return $numDiscountEmployees * $this->discount* $this->employeeCost;
        }
        

        function annualCostEmployeesNormal($numEmployeesNormal){
            return $numEmployeesNormal * $this->employeeCost;
        }

        function annualCostEmployeesAll($numDiscount, $numNormal){
            $discountCost = $this->annualCostEmpDiscount($numDiscount);
            $normalCost = $this->annualCostEmployeesNormal($numNormal);
            $total = $discountCost + $normalCost;
            return $total;
        }
        
        function annualCostDependentsDiscount($numDependents){
            return $numDependents * $this->discount * $this->dependentsCost;
        }

        function annualCostDependentsNormal($numDependents){
            return $numDependents * $this->dependentsCost;
        }

        function annualCostDependentsAll($numDiscount, $numNormal){
            $discountCost = $this->annualCostDependentsDiscount($numDiscount);
            $normalCost = $this->annualCostDependentsNormal($numNormal);
            $total = $discountCost + $normalCost;
            return $total;
        }

        function annualCostTotal($numEmpDiscount, $numEmpNormal,
                                    $numDepDiscount, $numDepNormal){
            $totalEmployee = 
                $this->annualCostEmployeesAll($numEmpDiscount, $numEmpNormal);  
            $totalDependents = 
                $this->annualCostDependentsAll($numDepDiscount, $numDepNormal);
            $total = $totalEmployee + $totalDependents;
            return $total;
        }

        function payperiodAdjustment($annualCost){
            $payperiod = $annualCost / 26;
            return $payperiod;
        }
    }

?>

