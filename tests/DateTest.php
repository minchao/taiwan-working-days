<?php

namespace Tests;

use TaiwanWorkingDays\Date;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testConstruct()
    {
        $target = Date::create('20170101', true, '開國紀念日');

        $this->assertEquals('20170101', $target->format('Ymd'));
        $this->assertEquals(new \DateTimeZone('Asia/Taipei'), $target->getTimezone());
        $this->assertTrue($target->isWorkingDay());
        $this->assertEquals('開國紀念日', $target->getNote());
    }
}
