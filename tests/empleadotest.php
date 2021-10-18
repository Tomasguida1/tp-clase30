<?php
abstract class empleadotest extends \PHPUnit\Framework\TestCase
{
   public function construct($nombre="luis", $apellido ="Gonzales",$dni = 2245598, $salario = 40000)
    {
       $re = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario);
       return $re;
    }
   public function nombrevacio() 
   {
    $this->expectException(\Exception::class);
    $r = $this->construct("");
 }
   public function apellidovacio() 
   {
    $this->expectException(\Exception::class);
    $r = $this->construct("luis", "");
 }
}