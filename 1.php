<?php
    class Member{
        private $name,$age,$phone,$address,$salary;
        function setMemberDetails($name,$age,$phone,$address,$salary){
            $this->name=$name;
            $this->age=$age;
            $this->phone=$phone;
            $this->address=$address;
            $this->salary=$salary;
        }
        function printMemberDetails(){
            echo"Name= $this->name <br> Age= $this->age <br> Phone= $this->phone <br> 
            Address= $this->address <br> Salary= $this->salary<br>";
        }
    }
    class Employee extends Member{
        private $specialization;
        function setSpecialization($specialization){
            $this->specialization=$specialization;
        }
        function printSpecialization(){
            echo"Specialization= $this->specialization<br>";
        }
    }
    class Manager extends Member{
        private $department;
        function setDepartment($department){
            $this->department=$department; 
        }
        function printDepartment(){
            echo"Department= $this->department";
        }
    }
    $obj=new Employee();
    $obj->setMemberDetails("Bivek Nepal",20,9842269340,"Mechinagar-10",20000);
    $obj->setSpecialization("Coding");
    $obj->printMemberDetails();
    $obj->printSpecialization();
    $data=new Manager();
    $data->setDepartment("Backend");
    $data->printDepartment();
?>