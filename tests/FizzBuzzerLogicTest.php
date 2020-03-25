<?php

declare(strict_types=1);

use App\Logic\FizzBuzzer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

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

    /**
     * @dataProvider dataProvider
     * @param string $value
     * @param string $expected
     */
    public function testFizzBuzz(int $value, string $expected): void
    {
        self::assertSame(
            $expected,
            $this->fizzBuzzer->transform($value)
        );
    }

    /**
     * @SuppressWarnings(StaticAccess)
     */
    public function dataProvider()
    {
        return Yaml::parseFile(__DIR__ . "/data.yaml");
    }
}
