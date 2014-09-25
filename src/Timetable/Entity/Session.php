<?php
namespace Timetable\Entity;
/*
 * 
 * A session is a taught subject attended by a group of students, taught by a lecturer in a room
 */

class Session {
    
    /**
     *
     * @var string 
     */
    protected $id;
    
    /**
     * number of credit hours 
     * @var double 
     */
    protected $creditHours;
    
    /**
     *
     * @var boolean 
     */
    protected $hoursPerDay;


    /**
     *
     * @var boolean 
     */
    protected $roomRequired;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getCreditHours() {
        return $this->creditHours;
    }

    public function setCreditHours($creditHours) {
        $this->creditHours = $creditHours;
        return $this;
    }

    public function getRoomRequired() {
        return $this->roomRequired;
        
    }

    public function setRoomRequired($roomRequired) {
        $this->roomRequired = $roomRequired;
        return $this;
    }

    public function getHoursPerDay() {
        return $this->hoursPerDay;
    }

    public function setHoursPerDay($hoursPerDay) {
        $this->hoursPerDay = $hoursPerDay;
        return $this;
    }

}
