<?php

declare(strict_types=1);

namespace App\View;

final class DumpView implements ViewInterface
{
    public function out(string $value): void
    {
        echo $value . "\n";
    }
}
