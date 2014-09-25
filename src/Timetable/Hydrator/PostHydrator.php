<?php

namespace Timetable\Hydrator;

/**
 * 
 */
class PostHydrator {
    
    /**
     *
     * @var array 
     */
    private $subjects;
    
    /**
     *
     * @var array 
     */
    private $studentGroups;

    /**
     * 
     * @param array $post
     */
    public function hydrator($post) {
        $sessions = array();
        $this->subjects = array();
        $this->studentGroups = array();

        foreach ($post['student_groups'] AS $student_group) {
            foreach ($post['subjects'] AS $subject) {
                while ($subject['credit_hours'] > 0) {
                    $subject['credit_hours'] -= $subject['hours_per_lesson'];
                    $hrs = $subject['hours_per_lesson'];
                    if ($subject['credit_hours'] < 0) {
                        $hrs = $subject['credit_hours'] + $subject['hours_per_lesson'];
                    }
                    
                    // $session = new \Timetable\Entity\Session();
                    // $session->setSubject($id);
                    
                    $sessions[$subject['id']][] = array(
                        'subject' => $subject['id'],
                        'hrs' => $hrs,
                        'student_group' => $student_group['id'],
                    );
                }
            }
        }
        return $sessions;
    }
    
    protected function createSubject() {
        
    }
    
    protected function createSudentGroup() {
        
    }
 
}

?>
