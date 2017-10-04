<?php

namespace TaiwanWorkingDays;

/**
 * Class Date
 * @package TaiwanWorkingDays
 */
class Date extends \DateTime
{
    /**
     * @var bool
     */
    protected $isHoliday = false;

    /**
     * @var string
     */
    protected $note;

    /**
     * @return bool
     */
    public function isHoliday()
    {
        return $this->isHoliday;
    }

    /**
     * @param bool $isHoliday
     *
     * @return $this
     */
    public function setIsHoliday($isHoliday)
    {
        $this->isHoliday = $isHoliday;

        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @param string $date
     * @param bool $isHoliday
     * @param string $note
     *
     * @return Date
     */
    public static function create($date, $isHoliday, $note = '')
    {
        $d = new self($date, new \DateTimeZone('Asia/Taipei'));
        $d->isHoliday = $isHoliday;
        $d->note = $note;

        return $d;
    }
}
