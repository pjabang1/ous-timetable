<?php

namespace Timetable\Entity;

class Term {

    protected $id;

    /**
     * array of Days
     * @var array 
     */
    protected $days;

    /**
     *
     * @var \DateTime 
     */
    protected $startDate;

    /**
     * 
     * @var \DateTime
     */
    protected $endDate;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getDays() {
        return $this->days;
    }

    public function setDays($days) {
        $this->days = array();
        foreach ($days AS $key => $day) {
            $key = strtolower($key);
            $this->days[$key] = $day;
        }
        return $this;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate;
    }

}
