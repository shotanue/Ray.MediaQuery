<?php

declare(strict_types=1);

namespace Demo;

use Ray\MediaQuery\Annotation\DbQuery;

interface UserAddInterface
{
    #[DbQuery('user_add')]
    public function add(string $id, string $name): void;
}
