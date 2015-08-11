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
	<title>Facilitator_Signup</title>
  <style type="text/css">
label{
    display: inline-block;
    float: left;
    clear: left;
    width: 250px;
    text-align: right;
}
input {
  display: inline-block;
  float: left;
}
  </style>
</head>
<body>
<form method="post" action="/index.php">
  <fieldset><h4 style="color: #33CC33;">SIGN UP AS A FACILITATOR</h4>
    <label for="firstname">Firstname:</label><input type="text" name="firstname" id="firstname" /><br><br>
    <label for="surname">Surname:</label><input type="text" name="surname" id="surname" /></br><br>
    <label for="addresss">Address:</label><input type="text" name="address" id="address" /></br><br>
    <label for="email">Email:</label><input type="Email" name="email" id="email" /></br><br>
    <label for="username">Username:</label><input type="text" name="username" id="username" /></br><br>
    <label for="password">Password:</label><input type="password" name="password" id="password" /></br><br>

    <?php
      $SampleCaptcha = new Captcha("SampleCaptcha");
      $SampleCaptcha->UserInputID = "CaptchaCode";
      echo $SampleCaptcha->Html();
    ?>
    <input name="CaptchaCode" id="CaptchaCode" type="text" />
  </fieldset>
  <fieldset>
    <input type="submit" name="submit" value="Signup" />
  </fieldset>
</form>
</body>
</html>

<?php
echo $OUTPUT->footer();
?>