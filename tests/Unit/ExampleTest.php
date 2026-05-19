<?php

namespace Tests\Unit;

use App\Http\Controllers\OperationsController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_addition_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->addition(a: 4, b: 9);

        $this->assertIsInt($result);
        $this->assertNotNull($result);
        $this->assertEquals(13, $result);
        $this->assertGreaterThan(0, $result);
    }
}
