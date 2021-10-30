<?php 
include("home.php");

if($_SERVER["REQUEST_METHOD"]=="GET"){
   
   
 $GLOBALS["a"]= $_GET['index'];

 
   
    echo"
   <!DOCTYPE html>
   <html lang='en'>
   <head>
                       
       <meta charset='UTF-8'>
       <meta http-equiv='X-UA-Compatible' content='IE=edge'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <title>korastream</title>
       <link rel='stylesheet' href='stream.css'>
       <link rel='stylesheet' href='home-build-containe.css'>
       <meta name='descption'
       content='footaball'>
   </head>
   <body >
   
   
   <div id='d' class='containe'>
   <div class='inf_video'>
   
    "; echo"
       <div style='width:auto;' class='game'>
                  <div style='display:flex;'>
                   <div class='logoOfclub'> ". $_SESSION['logo1'][ $GLOBALS['a']] ." </div>
                   
                     <div style='margin-left: 10px;'class='nameclub'>" .$_SESSION['club1'][ $GLOBALS['a']] . "</div>
                      </div>
                      <div class='timeAndcommenter'>
                        <p  class='live'>Live</p>  
                    <div><div class='timeOfgame'>" .$_SESSION['time'][ $GLOBALS['a']] ."</div>
                       <div class='commentaire'>jawad bada</div></div>
                </div>
                   <div style='justify-content: flex-end;' class='logoAndName'>
                    <div  class='nameclub'>" . $_SESSION['club2'][ $GLOBALS['a']]. "</div>
                    <div class='logoOfclub'>".  $_SESSION['logo2'][ $GLOBALS['a']] ."</div>
                    
                </div>
               </div>";
   
   echo " 
     <div>
               <div class='pr' > 
                <h1 style='text-align:center;    color: darkblue;'>تشاهدون في هد بث المباشر مبارة بين    ".$_SESSION['club1'][$GLOBALS['a']] ."ضد".$_SESSION['club2'][$GLOBALS['a']]."</h1>               
               مرحبا في موقع كورة ستريم يتشرف المو قع
               بنقل بث المباريات الدوريات العالمية والبطولات والعالمية                          
               مرحبا في موقع كورة ستريم يتشرف المو قع
               بنقل بث المباريات الدوريات العالمية والبطولات والعالمية                          
               مرحبا في موقع كورة ستريم يتشرف المو قع
               بنقل بث المباريات الدوريات العالمية والبطولات والعالمية   
             </div>
            </div>  
            <titel style='    
            background: darkblue;
            float: right;
            width: 100%;
            text-align: center;
            height: 30px;
            color: white;
            font-family: system-ui;
            border-radius: 9px;
            font-size: large;
            font-weight: bold;
        '>    ".$_SESSION['club1'][$GLOBALS['a']]." ضد".$_SESSION['club2'][$GLOBALS['a']]."شاهد البث المباشر  لمبارة  </titel>
            <div class='videoStream'>
            ".$_SESSION['video'][$GLOBALS['a']]."
       </div>
      </div> 
    
      <section class='article'>
      
"; for ($i=0; $i <0 ; $i++) { 
  
echo"
       <a class='article-titel'href='today.php'>
       <titel class='short_titel'>
           Lorem ipsum dolor sit amet consectetur 
            adipisicing
            ipsam perferendis iste officiis 
           ullam  laborum necessitatib
           us nostrum......
       
         </titel>
       <img src='2.png'>
   </a>";


 }

 
 echo "


   </section>
   
       </div><script src='today.js'></script>
   </body>
   </html>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ";
}else{
    echo '<div style="color:red;" class="error">error : somthing error back to page home</div>';
}

          