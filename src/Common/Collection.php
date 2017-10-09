<?php

namespace TaiwanWorkingDays\Common;

interface Collection extends \IteratorAggregate, \Countable
{
    /**
     * @return array
     */
    public function all();

    /**
     * @return bool
     */
    public function isEmpty();

    /**
     * @param $key
     *
     * @return bool
     */
    public function has($key);

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * @param string $key
     * @param mixed $element
     */
    public function set($key, $element);

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function remove($key);
}
