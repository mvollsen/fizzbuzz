<?php

declare(strict_types=1);

use App\Logic\FizzBuzzer;
use PHPUnit\Framework\TestCase;

final class FizzBuzzerLogicTest extends TestCase
{
    /**
     * @var FizzBuzzer
     */
    private $fizzBuzzer;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->fizzBuzzer = new FizzBuzzer();

        parent::__construct($name, $data, $dataName);
    }

    public function testNotTransformed(): void
    {
        self::assertSame(
            '1',
            $this->fizzBuzzer->transform(1)
        );
    }

    public function testFizz(): void
    {
        self::assertSame(
            'Fizz',
            $this->fizzBuzzer->transform(3)
        );
    }

    public function testBuzz(): void
    {
        self::assertSame(
            'Buzz',
            $this->fizzBuzzer->transform(5)
        );
    }

    public function testFizzBuzz(): void
    {
        self::assertSame(
            'FizzBuzz',
            $this->fizzBuzzer->transform(15)
        );
    }
}
