<?php

namespace Timetable\Entity;

/*
 * Room has capacity
 * 
 */

class Room {

    /**
     *
     * @var string 
     */
    protected $id;

    /**
     * Number of students room can accomodate
     * @var int 
     */
    protected $capacity;

    /**
     * \Timetable\Entity\Session
     * @var array 
     */
    protected $sessions;

    /**
     * 
     * @return type
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param type $id
     * @return \Timetable\Entity\Room
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getCapacity() {
        return $this->capacity;
    }

    /**
     * 
     * @param type $capacity
     * @return \Timetable\Entity\Room
     */
    public function setCapacity($capacity) {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function getSessions() {
        return $this->sessions;
    }

    /**
     * 
     * @param \Timetable\Entity\Session $session
     * @param \Timetable\Entity\Day $day
     */
    public function addSession(Session $session, Day $day) {
        if ($this->valid($session, $day)) {
            $this->sessions[] = $session;
        }
    }

    /**
     * You can't have 2 sessions running in the same room at the same time
     * 
     * @param Session $sessions
     * @param Day $day
     * 
     */
    public function valid(Session $day) {
        // $this->sessions[] = $day;
    }



}
