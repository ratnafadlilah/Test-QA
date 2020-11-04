<DOCTYPE html>
<html>
<body>

<?php
class Company {
    var $name;
    function setCompanyName($name){
        $this->name = $name;
    }
    function getCompanyName(){
        return $this->name;
    }
}

class Department {
    var $name;
    function setDepartmentName($name){
        $this->name = $name;
    }
    function getDepartmentName(){
        return $this->name;
    }
}

class Employee {
    var $name;
    var $title;
    var $salary;
    function setEmployeeName($name){
        $this->name = $name;
    }
    function getEmployeeTitle(){
        return $this->title;
    }
    function getEmployeeProfile(){
        return array($this->name, $this->title);
    }
    function getEmployeeMonthlySalary(){
        return $this->salary;
    }
}

$name = new Company();
$setCompanyName = $name->setCompanyName("DOT");
$getCompanyName = $name->getCompanyName();
echo $getCompanyName;

$name = new Department();
$setDepartmentName = $name->setDepartmentName("QA Engineer");
$getDepartmentName = $name->getDepartmentName();
echo $getDepartmentName;

$name = new Employee();
$setEmployeeName = $employee->setEmployeeName("Siti Ratna Fadlilatussa'adah");
$getEmployeeTitle = $employee->getEmployeeTitle();
$getEmployeeProfile = $employee->getEmployeeProfile();
$getEmployeeMonthlySalary = $employee->getEmployeeMonthlySalary();
echo $getEmployeeTitle;
echo $getEmployeeProfile[0]."".$getEmployeeProfile[1];
echo $getEmployeeMonthlySalary;

?>
</body>
</html>