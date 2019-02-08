<?php

require_once('FileReader.php');
require_once('BenefitsCalculator.php');

session_start();

$uploaddir = getcwd().'/';
$filename = $_FILES['fileToUpload']['name'];
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
    //get information
    $fileReader = new FileReader($filename);
   
    //get dependent info
    $depArray = $fileReader->$dependentsArray;
    $totalDependents = $fileReader->getNumDep();
    $numDepA = $fileReader->numDepStartWithA();
    $numDepNormal = $totalDependents - $numDepA;
    
    $_SESSION['depArray'] = $depArray;

    //get employee info form file
    $employees = $fileReader->getEmpList();
    $totalEmployees = sizeof($employees);
    $numEmpA = $fileReader->numEmpStartWithA();
    $numEmpNormal = $totalEmployees - $numEmpA;
    
    //perform calculations
    $costCalculator = new BenefitsCalculator(1000, 500, 0.1);
    
    //calculate annual employee benefits cost
    $annualCostEmpDis = $costCalculator->annualCostEmpDiscount($numEmpA);
    $annualCostEmpNormal=$costCalculator->annualCostEmployeesNormal(
                            $numEmpNormal);
    $annualCostEmpAll = $costCalculator->annualCostEmployeesAll($numEmpA,
                            $numEmpNormal);
    
    
    $_SESSION['annualCostEmpDis'] = $annualCostEmpDis;
    $_SESSION['annualCostEmpNorm'] = $annualCostEmpNormal;
    $_SESSION['annualCostEmpAll'] = $annualCostEmpAll;

    //calculate annual dependents benefits cost
    $annualCostDepDiscount = 
                $costCalculator->annualCostDependentsDiscount($numDepA);
    $annualCostDepNormal =
                $costCalculator->annualCostDependentsNormal($numDepNormal);
    $annualCostDepAll = 
            $costCalculator->annualCostDependentsAll($numDepA,$numDepNormal);


    $_SESSION['annualCostDepDis'] = $annualCostDepDiscount;
    $_SESSION['annualCostDepNorm'] = $annualCostDepNormal;
    $_SESSION['annualCostDepAll'] = $annualCostDepAll;

    //annual total cost
    $annualTotal = $costCalculator->
        annualCostTotal($numEmpA,$numEmpNormal, $numDepA, $numDepNormal);
    
    $_SESSION['annualCostTotal'] = $annualTotal;
    
    //payperiod employee cost
    $payperiodCostEmpDis =
        $costCalculator->payperiodAdjustment($annualCostEmpDis);
    $payperiodCostEmpNormal =
        $costCalculator->payperiodAdjustment($annualCostEmpNormal);
    $payperiodCostEmpAll =
        $costCalculator->payperiodAdjustment($annualCostEmpAll);
    

    $_SESSION['payperiodCostEmpDis'] = $payperiodCostEmpDis;
    $_SESSION['payperiodCostEmpNorm'] = $payperiodCostEmpNormal;
    $_SESSION['payperiodCostEmpAll'] = $payperiodCostEmpAll;

    //payperiod dependent cost
    $payperiodCostDepDiscount =
        $costCalculator->payperiodAdjustment($annualCostDepDiscount);
    $payperiodCostDepNormal =
        $costCalculator->payperiodAdjustment($annualCostDepNormal);
    $payperiodCostDepAll =
        $costCalculator->payperiodAdjustment($annualCostDepAll);


    $_SESSION['payperiodCostDepDis'] = $payperiodCostDepDiscount;
    $_SESSION['payperiodCostDepNorm'] = $payperiodCostDepNormal;
    $_SESSION['payperiodCostDepAll'] = $payperiodCostDepAll;

    //total payperiod cost
    $payperiodCostTotal = $costCalculator->payperiodAdjustment($annualTotal);
    
    $_SESSION['payperiodTotal'] = $payperiodCostTotal;
    
    header("Location: resultsPage.php");

} else {
    header("Location: index.php");    
}
echo '</pre>';
?>
