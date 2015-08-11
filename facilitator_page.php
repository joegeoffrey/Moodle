<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('standard');
$PAGE->set_title("Facilitator page");
$PAGE->set_heading("Facilitator");
$PAGE->set_url($CFG->wwwroot . '/about.php');


echo $OUTPUT->header();

// Actual content goes here
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  @font-face { font-family: Century; src: url('GOTHIC.ttf'); 
  } 

  body{ 
    font-family: Century; 
    color: #fff; 
    padding:20px; 
    }

    .tile:hover{
        transform:scale(1.2);
    }
    
    .tileLargo:hover{
        transform:scale(1.2);
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
    .tileLargo{ 
        width:210px;
        transition: all 0.7s ease; 
 
    }

    .amarelo{ 
        background-color: #000099;
        background-repeat: no-repeat;
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
        p.upper{
          text-transform: uppercase;
          color: #00CC66;
          font-variant: small-caps;
        }

  </style>
    <link rel="stylesheet" href="estilo.css"/> 
    <meta charset="UTF-8"/> 
    <script type="text/javascript" src="<http://code.jquery.com/jquery-1.7.2.min.js>"></script> 
    <script type="text/javascript" src="script.js"></script> 
</head>
<body>
<p class="upper" style="font-size: 20px;"><b>Welcome Facilitator <?php echo $USER->username;?></b></p>
    <div class="pagina"> 
        <div class="linha">
          <a href="http://127.0.0.1/moodle/course/edit.php?category=1&returnto=topcat">
           <div class="tile amarelo">
              <span class="titulo">RULES AND AGENDA</span><br/></div>
          </a>
          <a href="http://127.0.0.1/moodle/responsibilities.php">
           <div class="tile tileLargo vermelho">
               <span class="titulo">RESPONSIBILITIES</span><br/></div>
          </a>
           <div class="tile azul">
               <span class="titulo">FORUM</span><br/>
        </div>
        <div class="tile verde">
               <span class="titulo">BADGES</span><br/>
           </div>
        </div> 
        <div class="linha">
           <div class="tile tileLargo amarelo">
               <span class="titulo">LATEST ANNOUNCEMENTS AND EVENTS</span><br/>
           </div>
           <div class="tile azul">
               <span class="titulo">TECHNIQUES</span><br/>
           </div>
           <div class="tile verde">
               <span class="titulo">COURSE OUTLINE</span><br/>
           </div>
           <div class="tile vermelho">
               <span class="titulo">REPORTS</span><br/>
           </div>
        </div>
        <div class="linha">
        <div class="tile azul">
               <span class="titulo">BADGES</span><br/>
           </div>

    </div> 
</body>
</html>
<?php
echo $OUTPUT->footer();

?>