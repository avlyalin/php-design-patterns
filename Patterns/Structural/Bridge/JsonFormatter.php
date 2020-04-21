<?php

namespace Patterns\Structural\Bridge;

class JsonFormatter implements Formatter
{

    public function format(array $data): string
    {
        return json_encode($data, JSON_FORCE_OBJECT);
    }
}
