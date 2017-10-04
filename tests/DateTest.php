<?php

namespace Tests;

use TaiwanWorkingDays\Date;
use PHPUnit\Framework\TestCase;

/**
 * Class DateTest
 * @package Tests
 */
class DateTest extends TestCase
{
    public function testConstruct()
    {
        $date = Date::create('20170101', true, '開國紀念日');

        $this->assertEquals('20170101', $date->format('Ymd'));
        $this->assertEquals($date->getTimezone(), new \DateTimeZone('Asia/Taipei'));
        $this->assertEquals($date->isHoliday(), true);
        $this->assertEquals($date->getNote(), '開國紀念日');
    }
}
