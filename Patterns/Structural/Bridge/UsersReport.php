<?php

namespace Patterns\Structural\Bridge;

class UsersReport extends BaseReport
{

    public function generateStatistics(): array
    {
        $this->setStatistics([
            'visitors' => 100,
            'unique_visitors' => 75,
            'registered' => 25,
            'non_registered' => 50,
        ]);
    }
}
