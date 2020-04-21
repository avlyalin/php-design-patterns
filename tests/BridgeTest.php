<?php

namespace Tests;

use Patterns\Structural\Bridge\JsonFormatter;
use Patterns\Structural\Bridge\UsersReport;
use Patterns\Structural\Bridge\XmlFormatter;

class BridgeTest extends BaseTestCase
{
    public function testCanGenerateUsersReportUsingXmlFormatter()
    {
        $data = ['test_1' => 123, 'test_2' => 'abc'];
        $xmlFormatter = new XmlFormatter();
        $usersReport = new UsersReport($xmlFormatter);
        $usersReport->setStatistics($data);
        $expectedReport = '<?xml version="1.0"?><root><line id="test_1">123</line><line id="test_2">abc</line></root>';
        $this->assertEquals($expectedReport, $usersReport->getReport());
    }

    public function testCanGenerateUsersReportUsingJsonFormatter()
    {
        $data = ['test_1' => 123, 'test_2' => 'abc'];
        $xmlFormatter = new JsonFormatter();
        $usersReport = new UsersReport($xmlFormatter);
        $usersReport->setStatistics($data);
        $expectedReport = '{"test_1":123,"test_2":"abc"}';
        $this->assertEquals($expectedReport, $usersReport->getReport());
    }
}
