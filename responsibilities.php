<?php 
require_once ('C:/wamp/www/moodle/config.php');
$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Responsibilities");
$PAGE->set_heading("Responsibilities");
$PAGE->set_url($CFG->wwwroot . '/Responsibilities.php');


echo $OUTPUT->header();
// Actual content goes here
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{color:#444;}
</style>
	<title>RESPOSIBILITIES</title>
</head>
<body>
<form action="view.php">
First name:<br>
<input type="text" name="firstname">
<br>
Surname:<br>
<input type="text" name="surname">
<br><br>
Marital status:<br>
<input type="text" name="status">
<br><br>
Gender:<br>
<input type="text" name="sex">
<br><br>
Email:<br>
<input type="text" name="email">
<br><br>
Roles:<br>
 <textarea rows="4" cols="50">
</textarea><br><br>
<input type="submit" value="Submit">

</form>

<?php
echo $OUTPUT->footer();
?>