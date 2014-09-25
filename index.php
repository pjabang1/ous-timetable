<?php

ini_set('date.timezone', 'Europe/London');
ini_set("memory_limit", "750M");

require_once __DIR__ . '/vendor/autoload.php';

$post = array();

$post['term'] = array(
    'days' => array(
        'monday' => array('start_time' => '09:00', 'end_time' => '17:00'),
        'tuesday' => array('start_time' => '09:00', 'end_time' => '17:00'),
        'wednesday' => array('start_time' => '09:00', 'end_time' => '17:00'),
        'thursday' => array('start_time' => '09:00', 'end_time' => '17:00'),
        'friday' => array('start_time' => '09:00', 'end_time' => '17:00')
    ),
    'start_date' => '01 October 2014',
    'end_date' => '30 January 2015'
);

$post['subjects'][] = array(
    'id' => 'Chemistry101',
    'credit_hours' => 50,
    'hours_per_lesson' => 2,
    'lecturer' => 'Ousman Jammeh'
);

$post['subjects'][] = array(
    'id' => 'Physics101',
    'credit_hours' => 50,
    'hours_per_lesson' => 2,
    'lecturer' => 'James Smith'
);

$post['subjects'][] = array(
    'id' => 'ComputerScience101',
    'credit_hours' => 49,
    'hours_per_lesson' => 2,
    'lecturer' => 'Jane Doe'
);


$post['rooms'][] = array(
    'id' => 'Room101',
    'capacity' => 20
);

$post['rooms'][] = array(
    'id' => 'Room102',
    'capacity' => 20
);


$post['rooms'][] = array(
    'id' => 'Room103',
    'capacity' => 30
);

/**
  $post['student_groups'][] = array(
  'id' => 'ScienceStudents1',
  'total' => 19
  );
 **/
$post['student_groups'][] = array(
    'id' => 'CommerceStudents1',
    'total' => 29
);


$hydrator = new Timetable\Hydrator\PostHydrator();

$sessions = $hydrator->hydrator($post);
// print_r($sessions);

$rooms = array();

foreach ($post['rooms'] AS $value) {
    $room = new \Timetable\Entity\Room();
    $room->setId($value['id']);
    $room->setCapacity($value['capacity']);
    $rooms[] = $room;
}

$term = new \Timetable\Entity\Term();
$term->setDays($post['term']['days']);
$term->setStartDate(new \DateTime($post['term']['start_date']));
$term->setEndDate(new \DateTime($post['term']['end_date']));

$going = false;

$scheduler = new \Timetable\Scheduler();
$scheduler->setTerm($term);
// while ($going) {

$scheduler->schedule($sessions, $rooms);

// }










