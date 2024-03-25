<?php

require_once 'Service/Calculatrice.php';

use PHPUnit\Framework\TestCase;
use Service\Calculatrice;

class CalculatriceTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculatrice();
        $result = $calculator->addition(5, 3);
        
        $this->assertEquals(8, $result);
    }

    public function testMultiplication()
    {
        $calculator = new Calculatrice();
        $result = $calculator->multiplication(5, 3);
        
        $this->assertEquals(15, $result);
    }
}
