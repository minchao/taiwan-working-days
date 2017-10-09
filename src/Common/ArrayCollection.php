<?php

namespace TaiwanWorkingDays\Common;

class ArrayCollection implements Collection
{
    /**
     * @var array
     */
    private $elements;

    /**
     * ArrayCollection constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->elements = $elements;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->elements);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->elements);
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->elements;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->count() === 0;
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->elements);
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->elements)) {
            return null;
        }

        return $this->elements[$key];
    }

    /**
     * @param string $key
     * @param mixed $element
     */
    public function set($key, $element)
    {
        $this->elements[$key] = $element;
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function remove($key)
    {
        if (!array_key_exists($key, $this->elements)) {
            return null;
        }

        $removed = $this->elements[$key];
        unset($this->elements[$key]);

        return $removed;
    }
}
