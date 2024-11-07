<?php

class Employee
{
    var $name;
    var $email;
    var $salary;
    var $isManager = true;
    var $address = [];


    public function role(): string
    {
        return $this->isManager ? "Manager" : "Employee";
    }

    public function roleStyle(): string
    {
        return $this->isManager ? "text-danger" : "text-success";
    }

    public function salaryStyle(): string
    {
        return $this->salary > 9000 ? "text-primary font-weight-bold" : "text-warning";
    }
}
