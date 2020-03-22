<?php

declare(strict_types=1);

namespace App\Controller;

final class FizzBuzzController extends TransformationController
{
    public function processAction(int $value): void
    {
        $this->getView()->out(
            $this->getTransformator()->transform(
                $value
            )
        );
    }
}
