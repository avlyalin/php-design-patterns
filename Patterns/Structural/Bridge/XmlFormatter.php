<?php

namespace Patterns\Structural\Bridge;

use Generator;

class XmlFormatter implements Formatter
{

    public function format(array $data): string
    {
        $xml = '<?xml version="1.0"?>';
        $xml .= '<root>';
        foreach ($this->getXmlLine($data) as $xmlLine) {
            $xml .= $xmlLine;
        }
        $xml .= '</root>';
        return $xml;
    }

    /**
     * @param array $data
     * @return Generator
     */
    private function getXmlLine(array $data): Generator
    {
        foreach ($data as $key => $value) {
            yield "<line id=\"$key\">$value</line>";
        }
    }

}
