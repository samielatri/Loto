<?php

namespace App\Tests;

use App\Entity\WebMaster;
use PHPUnit\Framework\TestCase;

class WebMasterTest extends TestCase
{
    public function testIsTrue(): void
    {
        $webMaster = new WebMaster();

        $webMaster->setEmail("true@test.com")
                  ->setPassword("password");

        $this->assertTrue($webMaster->getEmail() === "true@test.com");
        $this->assertTrue($webMaster->getPassword() === "password");
    }

    public function testIsFalse(): void
    {
        $webMaster = new WebMaster();

        $webMaster->setEmail("true@test.com")
                  ->setPassword("password");

        $this->assertFalse($webMaster->getEmail() === "false@test.com");
        $this->assertFalse($webMaster->getPassword() === "false");
    }

    public function testIsEmpty(): void
    {
        $webMaster = new WebMaster();

        $this->assertEmpty($webMaster->getEmail());
    }
}
