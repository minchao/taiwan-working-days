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
     * @param string $dateStr
     * @param bool $isWorkingDay
     * @param string $note
     *
     * @return Date
     */
    public static function create($dateStr, $isWorkingDay, $note = '')
    {
        $date = new self($dateStr, new \DateTimeZone('Asia/Taipei'));
        $date->isWorkingDay = $isWorkingDay;
        $date->note = $note;

        return $date;
    }
}
