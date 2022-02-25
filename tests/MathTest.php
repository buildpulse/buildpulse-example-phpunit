<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    public function test_sum()
    {
        $this->assertEquals(3, Math::sum(1, 2));
    }
}
