<?php

namespace Hexlet\Php\Runner;

use Tightenco\Collect\Support\Collection;

function run(): Collection
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}