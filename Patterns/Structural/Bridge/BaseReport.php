<?php

namespace Patterns\Structural\Bridge;

abstract class BaseReport
{
    /**
     * @var Formatter
     */
    protected $formatter;

    /**
     * @var array
     */
    protected $statistics = [];

    /**
     * Report constructor.
     * @param $formatter
     */
    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * @param array $statistics
     */
    public function setStatistics(array $statistics): void
    {
        $this->statistics = $statistics;
    }

    public function getReport(): string
    {
        return $this->formatter->format($this->statistics);
    }

    abstract public function generateStatistics(): array;
}
