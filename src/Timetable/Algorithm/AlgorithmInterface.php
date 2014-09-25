<?php
namespace Timetable\Algorithm;
use Timetable\Entity\Term;
use Timetable\Entity\StudentGroup;
/*
 * 
 * 
 */

interface AlgorithmInterface {
    
    public function draw(Term $term, StudentGroup $studentGroup, $lessons, $rooms);
}

