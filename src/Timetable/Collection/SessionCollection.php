<?php

namespace Timetable\Collection;

class SessionCollection {

    /**
     *
     * @var array 
     */
    protected $sessions;

    public function getFromQueueForRoom(\Timetable\Entity\Room $room, Timetable\Entity\Day $day) {
        
    }

    public function deleteFromQueue($subject, $id) {
        
    }

    public function getSessions() {
        return $this->sessions;
    }

    public function setSessions($sessions) {
        $this->sessions = $sessions;
    }

}

?>
