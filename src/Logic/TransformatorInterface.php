<?php

declare(strict_types=1);

namespace App\Logic;

interface TransformatorInterface
{
    public function transform(int $value): string;
}
