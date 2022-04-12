<?php

$salary = (int)readline("Enter the salary of the employee: ");
$rate_emp = (int)readline("Enter the rate (Employer Contribution): ");
$rate_eml = (int)readline("Enter the rate (Employee Contribution): ");

function emp_contri($salary, $rate){
    return ($salary*$rate)/100;
}
function eml_contri($salary, $rate){
    return ($salary*$rate)/100;
}
function yearly_salary($salary){
    return (($salary*12*10)/100)+$salary;
}
$amount_emp = ($salary * $rate_emp)/100;
$amount_eml = ($salary * $rate_eml)/100;
$sum = $amount_emp + $amount_eml;
$rem = $salary - $sum;
echo "The Expected salary of the Employee: ".$salary."\n";
echo "Employee's Contribution: ".emp_contri($salary, $rate_emp)."\n";
echo "Employer's Contribution: ".eml_contri($salary, $rate_eml)."\n";
echo "Actual salary of the Employee: ".$rem."\n";
echo "Yearly salary of the Employee: ".yearly_salary($rem)."\n";
?>