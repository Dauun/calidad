<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        $consumer = new Dummy();
        $consumer->setNombre('Said');
        $consumer->setApellido('Dawn');
        $result = $consumer->nombreCompleto();
        $this->assertEquals('Said Dawn', $result);
    }
}
