<?php
abstract class empleadotest extends \PHPUnit\Framework\TestCase
{
   public function_construct($nombre="luis", $apellido ="Gonzales",$dni = 2245598, $salario = 40000)
    {
       $re = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario);
       return $re;
    }
}