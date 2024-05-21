<?php declare(strict_types=1);
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ThousandTest extends TestCase
{
    public static function rangeOfNumbersProvider() {
        return array_fill(0, 1000, [1]);
    }

    #[DataProvider('rangeOfNumbersProvider')]
    public function testRangeOfNumbers($i): void {
        $this->assertIsInt($i);
    }
}