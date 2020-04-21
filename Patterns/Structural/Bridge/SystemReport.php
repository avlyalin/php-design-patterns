<?php

namespace Patterns\Structural\Bridge;

class SystemReport extends BaseReport
{

    public function generateStatistics(): array
    {
        $this->setStatistics([
            'load_average_1' => 0.1,
            'load_average_5' => 0.4,
            'load_average_15' => 0.02,
            'disk_usage_mb' => 1024,
        ]);
    }
}
