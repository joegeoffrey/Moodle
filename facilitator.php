<?php

require_once ('C:/wamp/www/moodle/config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Facilitator");
$PAGE->set_heading("Facilitator");
$PAGE->set_url($CFG->wwwroot . '/facilitator.php');


echo $OUTPUT->header();

// Actual content goes here
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facilitator</title>
</head>
<body>
<form method="post" action="facilitator_page.php">
  <fieldset><h4 style="color: #33CC33;">LOG IN AS A FACILITATOR</h4>
    <label for="username">Username:</label><input type="text" name="username" id="username" />
    <label for="password">Password:</label><input type="password" name="password" id="password" />
  </fieldset>
  <fieldset>
    <input type="submit" name="submit" value="Log in" />
  </fieldset>
  <fieldset>
    <a href="facilitator_signup.php">Sign Up</a>
  </fieldset>
</form>
</body>
</html>

<?php
echo $OUTPUT->footer();
?>