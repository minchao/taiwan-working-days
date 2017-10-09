<?php

namespace Tests\Common;

use TaiwanWorkingDays\Common\ArrayCollection;

class ArrayCollectionTest extends BaseArrayCollectionTest
{
    protected function buildCollection(array $elements = [])
    {
        return new ArrayCollection($elements);
    }
}
