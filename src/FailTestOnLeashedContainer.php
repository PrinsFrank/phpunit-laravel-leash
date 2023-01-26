<?php
declare(strict_types=1);

namespace PrinsFrank\PHPUnitLaravelLeash;

use PHPUnit\Framework\Assert;
use PrinsFrank\LaravelLeash\OnLeashedContainer;

class FailTestOnLeashedContainer implements OnLeashedContainer
{
    public function __invoke(string $methodName, array $args): void
    {
        Assert::fail('Accessing the Laravel container in tests is not allowed. (method "' . $methodName . '" with arguments "' . var_export($args, true) . '"');
    }
}
