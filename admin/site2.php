<?php

require_once(dirname(__FILE__) . '/../config.php');
require_once($CFG->dirroot . '/my/lib.php');

redirect_if_major_upgrade_required();

// TODO Add sesskey check to edit
$edit   = optional_param('edit', null, PARAM_BOOL);    // Turn editing on and off
$reset  = optional_param('reset', null, PARAM_BOOL);

require_login();

$hassiteconfig = has_capability('moodle/site:config', context_system::instance());
if ($hassiteconfig && moodle_needs_upgrading()) {
    redirect(new moodle_url('/admin/index.php'));
}

$strmymoodle = get_string('myhome');

if (isguestuser()) {  // Force them to see system default, no editing allowed
    // If guests are not allowed my moodle, send them to front page.
    if (empty($CFG->allowguestmymoodle)) {
        redirect(new moodle_url('/', array('redirect' => 0)));
    }

    $userid = null;
    $USER->editing = $edit = 0;  // Just in case
    $context = context_system::instance();
    $PAGE->set_blocks_editing_capability('moodle/my:configsyspages');  // unlikely :)
    $header = "$SITE->shortname: $strmymoodle (GUEST)";
    $pagetitle = $header;

} else {        // We are trying to view or edit our own My Moodle page
    $userid = $USER->id;  // Owner of the page
    $context = context_user::instance($USER->id);
    $PAGE->set_blocks_editing_capability('moodle/my:manageblocks');
    $header = fullname($USER);
    $pagetitle = $strmymoodle;
}

// Get the My Moodle page info.  Should always return something unless the database is broken.
if (!$currentpage = my_get_page($userid, MY_PAGE_PRIVATE)) {
    print_error('mymoodlesetup');
}

// Start setting up the page
$params = array();
$PAGE->set_context($context);
$PAGE->set_url('/my/index.php', $params);
$PAGE->set_pagelayout('mydashboard');
$PAGE->set_pagetype('my-index');
$PAGE->blocks->add_region('content');
$PAGE->set_subpage($currentpage->id);
$PAGE->set_title($pagetitle);
$PAGE->set_heading($header);
// this is the end of the not loged in to access

require_once('C:\wamp\www\moodle\config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("About page");
$PAGE->set_heading("About");
$PAGE->set_url($CFG->wwwroot . '/about.php');



echo $OUTPUT->header();

// Actual content goes here
echo "Hello World";
echo "string";


echo "<b>hey</b>";
?>
<html> 
<head>
  <style type="text/css">
  @font-face { font-family: Century; src: url('GOTHIC.ttf'); 
  } 
  body{ font-family: Century; 
  	background: rgb(51,51,51); 
  	color: #fff; 
  	padding:20px; 
  	} 
  	
  	.pagina{ 
  		width:auto; 
  		height:auto; 
  		}

  	.linha{ 
  			width:auto; 
  			padding:5px; 
  			height:auto; 
  			display:table; 
  		}

  	.tile{ 
  		height:100px; 
  		width:100px; 
  		float:left; 
  		margin:0 5px 0 0; 
  		padding:2px;
  		transition: all 0.7s ease; 
  		}
  	.tile:hover{

  		transform:scale(1.2);

  	} 

  	.tileLargo{ 
  		width:210px; 
  	}

    .amarelo{ 
    	background:#DAA520; 
    	} 

    .vermelho{ 
    	background:#CD0000; 
    	} 

    	.azul{ 
    		background:#4682B4; 
    		} 

    	.verde{ 
    		background-color: #2E8B57; 
    	} 


  </style>
    <link rel="stylesheet" href="estilo.css"/> 
    <meta charset="UTF-8"/> 
    <script type="text/javascript" src="<http://code.jquery.com/jquery-1.7.2.min.js>"></script> 
    <script type="text/javascript" src="script.js"></script> 
</head> 
<body> 
    <h1>Training </h1> 
    <div class="pagina"> 
        <div class="linha">
           <div class="tile amarelo"><span class="titulo">My course</span><br/></div>
           <div class="tile azul"></div>
           <div class="tile tileLargo vermelho"></div>
           <div class="tile verde"></div> 
           <div class="tile tileLargo amarelo"></div>
        </div> 
        <div class="linha">
           <div class="tile tileLargo amarelo"></div>
           <div class="tile azul"></div>
           <div class="tile verde"></div>
           <div class="tile vermelho"></div> 
           <div class="tile tileLargo verde"></div>
        </div> 
    </div> 
</body> 
</html>
<?php

echo $OUTPUT->footer();

?>