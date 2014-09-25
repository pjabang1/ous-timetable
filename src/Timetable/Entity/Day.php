<?php

namespace Timetable\Entity;

/**
 * A day of Lectures
 */

class Day {
    
    /**
     *
     * @var string 
     */
    protected $id;
    /**
     *
     * @var \DateTime 
     */
    protected $startTime;
    
    /**
     *
     * @var \DateTime 
     */
    protected $endTime;
    
    /**
     * array of breaks
     * @var array 
     */
    protected $breaks;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

        
    public function getStartTime() {
        return $this->startTime;
    }

    public function setStartTime(\DateTime $startTime) {
        $this->startTime = $startTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }

    public function setEndTime(\DateTime $endTime) {
        $this->endTime = $endTime;
        return $this;
    }
    
    /**
     * @todo you can extend to add breaks
     * @param \DateTime $startTime
     * @param \DateTime $endTime
     */
    public function addBreak(\DateTime $startTime, \DateTime $endTime) {
        // $this->breaks[] = array();
    }

}

