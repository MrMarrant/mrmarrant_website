<?php

namespace App\Tests\Services;

use App\Services\utils\DataHelper;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Classe utilitaire pour les données.
 */
class DataHelperIntegrationTest extends KernelTestCase 
{
    public function testIntegrationgetJsonData() 
    {
        $kernel = self::bootKernel();
        $service = $kernel->getContainer()->get(DataHelper::class);

        $data = $service->getJsonData(); // Trouve pas le path
        $this->assertInstanceOf("mixed", $data);
    }
}
