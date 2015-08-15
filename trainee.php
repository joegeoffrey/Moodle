<?php

require_once('C:/wamp/www/moodle/config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Trainee page");
$PAGE->set_heading("Trainee");
$PAGE->set_url($CFG->wwwroot . '/trainee.php');


echo $OUTPUT->header();

// Actual content goes here
echo "WELCOME";
?>

<html>
<head>
<style type="text/css">
  @font-face { font-family: Century; src: url('GOTHIC.ttf'); 
  } 
  body{ font-family: Century; 
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

  	.tileMido{
  		width: 200px;
  	}

  	.tileMido:hover{
  		transform:scale(1.2);

  	}

    .amarelo{ 
    	background-color: #009933 
    	} 

    .vermelho{ 
    	background:#0099FF; 
    	} 

    .azul{ 
    	background:#FF0000; 
    	} 

    .verde{ 
    	background-color: #9900CC; 
    	}

    .verticalLine {
        border-left: thick solid #000000;
        float: left;
        padding-left: 10px;       
    } 

    p.upper{
          text-transform: uppercase;
          color: #00CC66;
        }

#dialogoverlay{
  display: none;
  opacity: .8;
  position: fixed;
  top: 0px;
  left: 0px;
  background: #FFF;
  width: 100%;
  z-index: 10;
}
#dialogbox{
  display: none;
  position: fixed;
  background: green;
  border-radius:7px; 
  width:550px;
  z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #666; font-size:19px; padding:10px; color:#CCC; }
#dialogbox > div > #dialogboxbody{ background:#333; padding:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; }
  </style>
    <link href="metro.css" rel="stylesheet"/> 
    <meta charset="UTF-8"/> 
    <script type="text/javascript" src="<http://code.jquery.com/jquery-1.7.2.min.js>"></script> 
    <script type="text/javascript" src="script.js"></script>
    <script>
function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "You are not registered for this course";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
  this.ok = function(){
    document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}
var Alert = new CustomAlert();
</script> 
</head> 
<body> 
    <p class="upper"style="font-size: 25px;">Welcome <?php echo $USER->username;?></p>
    <pre><h4 style="color: #33CC33;">MY COURSE           OTHER COURSES</h4></pre>  
    <div class="pagina"> 
        <div class="linha">
           <div class="tile tileMido amarelo"><span class="titulo">TRAINING</span><br/></div>
           <div class="verticalLine">
           <div id="dialogoverlay"></div>
           <div id="dialogbox">
           <div>
           <div id="dialogboxhead"></div>
           <div id="dialogboxbody"></div>
           <div id="dialogboxfoot"></div>
           </div>
           </div>
           <button onclick="Alert.render('Feel free to contact your course Facilitator')">
           <div class="tile verde"><span class="titulo">INCUBATION</span><br/></div>
           <div class="tile azul"><span class="titulo">HACKATHON</span><br/></div>
           <div class="tile vermelho"><span class="titulo">APP DEV'T</span><br/></div>
           </button>
        </div>
        </div>
        </div>
    </div>
    </body>
    </html>

    <?php
    echo $OUTPUT->footer();
    ?>