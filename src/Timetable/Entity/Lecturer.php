<?php
namespace Timetable\Entity;
/*
 * 
 * Lecturer teaches a lesson/class 
 */

class Lecturer { 
    
    /**
     *
     * @var string 
     */
    protected $id;
   
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }
 
    
}
?>
