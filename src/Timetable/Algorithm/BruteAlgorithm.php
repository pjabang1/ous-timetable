<?php
namespace Timetable\Algorithm;
/*
 * The master schedule (assignment of the classes to the teachers) is first built, 
 * taking in consideration all the constraints that each teacher has while minimizing 
 * the possibility of conflicts for the students (based of their course requests). 
 * The students are then scheduled in the classes using the same method.
 * 
 * Features : 
 * To be completed the shortest period of time
 * 
 * Compress, If monday to friday
 * 
 * Improvements 
 * What if certain Lessons can only be taught in certain rooms ?
 *  
 * 
 */

class BruteAlgorithm implements AlgorithmInterface {
    
    public function draw(\Timetable\Entity\Term $term, \Timetable\Entity\StudentGroup $studentGroup, $lessons, $rooms) {
        
    }
    
}

