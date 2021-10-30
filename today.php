<?php
include("home.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>korastream</title>
    <link rel="stylesheet" href="home-build-nav.css">
    <link rel="stylesheet" href="home-build-containe.css">
    
</head>
<body>
    <div class="navigtion_home">
        <ul>
           
           <a href='today.php'>مباريات اليوم</a>
           
        </ul>
      <div style="display: flex;
      flex-direction: row;
      align-items: center;"><button class="btn-follwing">متابع</button><p style="
      padding-inline-end: 10px;
      padding-inline-start: 6px;
      font-size: 18px;
      "
      >  </p></div>  
  </div> 
  
  <div class="containe_home">
  <div class="titel">مباريات اليوم </div>
   <?php 
   
   for ($i=0; $i <=5 ; $i++) { 
    

echo "<div id='showgame'class='game'>
<div class='logoAndName'>
    <div  class='logoOfclub'>".$_SESSION['logo1'][$i]."</div>
    <div style='margin-left: 10px;'class='nameclub'>". $_SESSION['club1'][$i]."</div>
</div>
<div class='timeAndcommenter'>
 <div  class='live'>
 

<form  method='GET' action='stream.php'>
<input  hidden name='index' type='text' value='".$i."'>
<input class='btn_submit' value='مشاهدة المبارة'  type='submit'>
</form>


 
 </div>  
 <div><div class='timeOfgame'>".$_SESSION['time'][$i]."</div>
    <div class='commentaire'>jawad bada</div></div>
</div>
<div style='justify-content: flex-end;' class='logoAndName'>
 <div  class='nameclub'>".$_SESSION['club2'][$i]."</div>
 <div   class='logoOfclub'>".$_SESSION['logo2'][$i]."</div>

 



</div>
</div> 


";
}

?>
   
   



 

  


</div>

    <script src='today.js'></script>
  </body>
  </html>