<?php

namespace Tests;

use TaiwanWorkingDays\Calendar;
use PHPUnit\Framework\TestCase;

class SmokeTest extends TestCase
{
    /**
     * @test
     */
    public function shouldBeOkWhenSmokeTest()
    {
        $target = new Calendar();

        $this->assertInstanceOf(Calendar::class, $target);
    }
}
