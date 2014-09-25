<?php
namespace Timetable\Entity;
/*
 * 
 * 
 */

class StudentGroup {
    
    protected $id;
    
    protected $numberOfStudents;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getNumberOfStudents() {
        return $this->numberOfStudents;
        
    }

    public function setNumberOfStudents($numberOfStudents) {
        $this->numberOfStudents = $numberOfStudents;
        return $this;
    }


    
}
?>
