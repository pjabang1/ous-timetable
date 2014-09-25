<?php

namespace Timetable;

/*
 *
 * 
 */

class Scheduler {

    /**
     *
     * @var Entity\Term
     */
    protected $term;

    public function schedule(Collection\SessionCollection $sessions, $rooms) {

        $start = $this->getTerm()->getStartDate();
        $end = $this->getTerm()->getEndDate();

        // print_r($days);
        $i = 0;

        while ($start <= $end) {
            $i++;



            try {
                $startEndTime = $this->isValidDate($this->getTerm(), $start);

                $day = new Entity\Day();

                $day->setStartTime(
                        new \DateTime($start->format("Y-m-d") . " " . $startEndTime['start_time'])
                )->setEndTime(
                        new \DateTime($start->format("Y-m-d") . " " . $startEndTime['end_time'])
                );



                foreach ($rooms AS $room) {

                    $sessionsToSchedule = $sessions->getFromQueueForRoom($room, $day);
                    
                    $addedSessions = array();
                    foreach ($sessionsToSchedule AS $session) {
                        try {
                            $room->addSessions($session, $day);
                            $addedSessions[] = $session;
                        } catch (\Exception $e) {
                            
                        }
                    }

                    $sessions->deleteFromQueue($sessions);
                    // = 
                }
                echo $start->format("Y-m-d H:i:s") . "\n";
            } catch (\Exception $e) {
                
            }

            $start->modify("+1 day");
        }
    }

    public function getStartAndEndTime(Entity\Term $term, \DateTime $date) {
        $days = $term->getDays();
        $day = strtolower($date->format('l'));
        if (!isset($days[$day])) {
            throw new \Exception('Invalid day');
        }

        return $days[$day];
    }

    public function getTerm() {
        return $this->term;
    }

    /**
     * 
     * @param \Timetable\Entity\Term $term
     */
    public function setTerm(Entity\Term $term) {
        $this->term = $term;
    }

}

