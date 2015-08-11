<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("View page");
$PAGE->set_heading("View");
$PAGE->set_url($CFG->wwwroot . '/view.php');


echo $OUTPUT->header();

echo "Email sent";
 echo $OUTPUT->footer();
 ?>