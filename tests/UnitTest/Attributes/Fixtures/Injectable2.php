<?php

declare(strict_types=1);

namespace DI\Test\UnitTest\Attributes\Fixtures;

use DI\Attribute\Injectable;

#[Injectable(lazy: true)]
class Injectable2
{
}
