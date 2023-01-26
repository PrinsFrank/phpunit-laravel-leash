<?php
declare(strict_types=1);

namespace PrinsFrank\PHPUnitLaravelLeash;

use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\Runner\BeforeTestHook;
use PrinsFrank\LaravelLeash\LaravelLeash;

class Plugin implements BeforeTestHook, BeforeFirstTestHook
{
    private string $enableForTestPattern;

    public function __construct(string $enableForTestPattern = '/\\Unit\\/')
    {
        $this->enableForTestPattern = $enableForTestPattern;
    }

    public function executeBeforeFirstTest(): void
    {
        LaravelLeash::bootstrap();
    }

    public function executeBeforeTest(string $test): void
    {
        if (preg_match($this->enableForTestPattern, $test) !== 1) {
            LaravelLeash::unLeash();

            return;
        }

        LaravelLeash::leash();
    }
}
