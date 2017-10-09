<?php

namespace Tests\Common;

use TaiwanWorkingDays\Common\Collection;
use PHPUnit\Framework\TestCase;

abstract class BaseArrayCollectionTest extends TestCase
{
    /**
     * @param array $elements
     * @return Collection
     */
    abstract protected function buildCollection(array $elements = []);

    public function testTraversable()
    {
        $collection = $this->buildCollection();

        $this->assertInstanceOf(\Traversable::class, $collection);
        $this->assertInstanceOf(\ArrayIterator::class, $collection->getIterator());
    }

    public function testIterator()
    {
        $elements = [
            'key1' => 'element1',
            'key2' => 'element2',
            'key3' => 'element3',
        ];
        $collection = $this->buildCollection($elements);

        $iterations = 0;
        foreach ($collection->getIterator() as $key => $element) {
            $this->assertEquals($elements[$key], $element);
            ++$iterations;
        }

        $this->assertEquals(3, $iterations);
    }

    public function testCountable()
    {
        $collection = $this->buildCollection();

        $this->assertInstanceOf(\Countable::class, $collection);
        $this->assertCount(0, $collection);
    }

    public function testAll()
    {
        $expected = [
            'key1' => 'element1',
            'key2' => 'element2',
        ];
        $collection = $this->buildCollection($expected);

        $this->assertEquals($expected, $collection->all());
    }

    public function testIsEmpty()
    {
        $collection = $this->buildCollection();

        $this->assertTrue($collection->isEmpty());

        $collection = $this->buildCollection(['key' => 'element']);

        $this->assertFalse($collection->isEmpty());
    }

    public function testHas()
    {
        $collection = $this->buildCollection(['key' => 'element']);

        $this->assertTrue($collection->has('key'));
        $this->assertFalse($collection->has('key2'));
    }

    public function testGet()
    {
        $collection = $this->buildCollection(['key' => 'element']);

        $this->assertEquals('element', $collection->get('key'));
        $this->assertNull($collection->get('not_exist'));
    }

    public function testSet()
    {
        $collection = $this->buildCollection();
        $collection->set('key', 'element');

        $this->assertEquals('element', $collection->get('key'));
    }

    public function testRemove()
    {
        $elements = [
            'key1' => 'element1',
            'key2' => 'element2',
            'key3' => 'element3',
        ];
        $collection = $this->buildCollection($elements);

        $this->assertEquals('element1', $collection->remove('key1'));
        unset($elements['key1']);

        $this->assertFalse($collection->has('key1'));
        $this->assertNull($collection->remove('not_exist'));

        $this->assertEquals('element3', $collection->remove('key3'));
        unset($elements['key3']);

        $this->assertEquals($elements, $collection->all());
    }
}
