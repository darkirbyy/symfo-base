<?php

declare(strict_types=1);

namespace App\Tests\Inte;

use App\Repository\FakeRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class FakeInteTest extends KernelTestCase
{
    public function testFake(): void
    {
        self::bootKernel();
        $container = static::getContainer()->get(FakeRepository::class);
        $this->assertInstanceOf(FakeRepository::class, $container);
    }
}
