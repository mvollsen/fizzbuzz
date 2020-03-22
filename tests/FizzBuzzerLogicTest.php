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
        self::assertEquals(
            1,
            $this->fizzBuzzer->transform(1)
        );
    }

    public function testFizz(): void
    {
        self::assertEquals(
            'Fizz',
            $this->fizzBuzzer->transform(3)
        );
    }

    public function testBuzz(): void
    {
        self::assertEquals(
            'Buzz',
            $this->fizzBuzzer->transform(5)
        );
    }

    public function testBizzBuzz(): void
    {
        self::assertEquals(
            'FizzBuzz',
            $this->fizzBuzzer->transform(15)
        );
    }
}
