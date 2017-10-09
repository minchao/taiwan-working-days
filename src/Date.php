<?php

namespace TaiwanWorkingDays;

class Date extends \DateTime
{
    /**
     * @var bool
     */
    protected $isWorkingDay = false;

    /**
     * @var string
     */
    protected $note;

    /**
     * @return bool
     */
    public function isWorkingDay()
    {
        return $this->isWorkingDay;
    }

    /**
     * @param bool $isWorkingDay
     *
     * @return $this
     */
    public function setIsWorkingDay($isWorkingDay)
    {
        $this->isWorkingDay = $isWorkingDay;

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
     * @param bool $isWorkingDay
     * @param string $note
     *
     * @return Date
     */
    public static function create($date, $isWorkingDay, $note = '')
    {
        $d = new self($date, new \DateTimeZone('Asia/Taipei'));
        $d->isWorkingDay = $isWorkingDay;
        $d->note = $note;

        return $d;
    }
}
