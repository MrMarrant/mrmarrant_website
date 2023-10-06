<?php

namespace App\Tests\Services;

use PHPUnit\Framework\TestCase;
use App\Services\utils\DataHelper;

/**
 * Classe utilitaire pour les données.
 */
class DataHelperTest extends TestCase 
{
    /**
     *  @test
     */
    public function testgetJsonData() 
    {
        $data = DataHelper::getJsonData(); // Trouve pas le path
        $this->assertInstanceOf("mixed", $data);
    }
}
