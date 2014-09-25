<?php

namespace Timetable\Entity;
use Timetable\Entity\Lecturer;
use Timetable\Entity\Room;
use Timetable\Entity\Lesson;
use Timetable\Entity\StudentGroup;

/**
 * 
 */

class Slot {
    
    /**
     *
     * @var \DateTime 
     */
    protected $start;
    
    /**
     *
     * @var \DateTime 
     */
    protected $end; 
    
    /**
     *
     * @var Lecturer 
     */
    protected $lecturer;
    
    /**
     *
     * @var Room 
     */
    protected $room;
    
    /**
     *
     * @var Lesson 
     */
    protected $lesson;
    
    /**
     *
     * @var StudentGroup 
     */
    protected $studentGroup;
    
    public function getStart() {
        return $this->start;
    }

    public function setStart(\DateTime $start) {
        $this->start = $start;
    }

    public function getEnd() {
        return $this->end;
    }

    public function setEnd(\DateTime $end) {
        $this->end = $end;
    }

    public function getLecturer() {
        return $this->lecturer;
    }

    public function setLecturer(Lecturer $lecturer) {
        $this->lecturer = $lecturer;
    }

    public function getRoom() {
        return $this->room;
    }

    public function setRoom(Room $room) {
        $this->room = $room;
    }

    public function getLesson() {
        return $this->lesson;
    }

    public function setLesson(Lesson $lesson) {
        $this->lesson = $lesson;
    }

    public function getStudentGroup() {
        return $this->studentGroup;
    }

    public function setStudentGroup(StudentGroup $studentGroup) {
        $this->studentGroup = $studentGroup;
    }


    
    
}
?>
