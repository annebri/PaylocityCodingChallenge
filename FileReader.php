<?php
class FileReader {
    private $dependentsArray;
    function __construct($filename){
        $row = 0;
        if (($handle = fopen($filename, "r")) !== FALSE) {
            $d = fgetcsv($handle, 1000, ",");//skip first row of labels
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                for ($c=1; $c < $num; $c++) {
                    if($data[$c] !=''){
                        $this->$dependentsArray[strtolower($data[0])][$c] = strtolower($data[$c]);
                    }
                }
            }
            fclose($handle);
        }
    }
    function getNumDep(){
        $total = 0;
        foreach($this->$dependentsArray as $dep){
            $total += sizeof($dep);
        }
        return $total;
    }

    function getEmpList(){
        return array_keys($this->$dependentsArray);
    }

    function numDepStartWithA(){
        $numStart = 0;
        foreach($this->$dependentsArray as $depList){
            foreach($depList as $dep){
                if($dep[0] == 'a'){
                    $numStart++;
                }
            }
        }
        return $numStart;
    }

    function numEmpStartWithA(){
        $numEmp=0;
        $employees = $this->getEmpList();
        foreach($employees as $employee){
            if($employee[0]=='a'){
                $numEmp++;
            }
        }
        return $numEmp;
    }
}
?>
