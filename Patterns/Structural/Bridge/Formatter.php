<?php

namespace Patterns\Structural\Bridge;

interface Formatter
{
    public function format(array $data): string;
}
