<?php

declare(strict_types=1);

namespace App\Logic;

final class FizzBuzzer implements TransformatorInterface
{
    public function transform(int $value): string
    {
        return $this->isFizzBuzz($value) ?
            'FizzBuzz' :
            (
                $this->isFizz($value) ?
                    'Fizz' :
                    (
                        $this->isBuzz($value) ?
                            'Buzz' :
                            (string) $value
                    )
            );
    }

    private function isFizz(int $value): bool
    {
        return 0 === $value % 3;
    }

    private function isBuzz(int $value): bool
    {
        return 0 === $value % 5;
    }

    private function isFizzBuzz(int $value): bool
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}
