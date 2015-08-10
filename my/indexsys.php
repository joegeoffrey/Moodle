<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * My Moodle -- a user's personal dashboard
 *
 * - each user can currently have their own page (cloned from system and then customised)
 * - only the user can see their own dashboard
 * - users can add any blocks they want
 * - the administrators can define a default site dashboard for users who have
 *   not created their own dashboard
 *
 * This script implements the user's view of the dashboard, and allows editing
 * of the dashboard.
 *
 * @package    moodlecore
 * @subpackage my
 * @copyright  2010 Remote-Learner.net
 * @author     Hubert Chathi <hubert@remote-learner.net>
 * @author     Olav Jordan <olav.jordan@remote-learner.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../config.php');
require_once($CFG->dirroot . '/my/lib.php');
require_once($CFG->libdir.'/adminlib.php');

$edit   = optional_param('edit', null, PARAM_BOOL);    // Turn editing on and off

require_login();

$header = "$SITE->shortname: ".get_string('myhome')." (".get_string('mypage', 'admin').")";

$PAGE->set_blocks_editing_capability('moodle/my:configsyspages');
admin_externalpage_setup('mypage', '', null, '', array('pagelayout' => 'mydashboard'));

// Override pagetype to show blocks properly.
$PAGE->set_pagetype('my-index');

$PAGE->set_title($header);
$PAGE->set_heading($header);
$PAGE->blocks->add_region('content');

// Get the My Moodle page info.  Should always return something unless the database is broken.
if (!$currentpage = my_get_page(null, MY_PAGE_PRIVATE)) {
    print_error('mymoodlesetup');
}
$PAGE->set_subpage($currentpage->id);

echo $OUTPUT->header();

echo $OUTPUT->custom_block_region('content');
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
