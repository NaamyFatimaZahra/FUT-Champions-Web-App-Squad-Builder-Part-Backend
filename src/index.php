<?php
include ('../DataBase/connect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />
    <link href="./output.css" rel="stylesheet"/>
  </head>
  <body class="relative w-[100%]">
    <!-- mobile header -->
     <?php include("./components/header.php");?>
  
<!-- aside -->
     <?php include("./components/aside.php");?>

    <main>
      <section class="w-[100%] h-[100vh] fixed z-[-1] ">
        <video
          autoplay
          loop
          class="h-[100vh] w-[100%] object-cover hidden md:block  fixed "
        >
          <source src="./assets/img/stad-foot.mp4" type="video/mp4" />
        </video>
        <div class="md:hidden">
          <img
            src="./assets/img/stud-red.svg"
            class="h-[100vh] w-[100%] object-cover brightness-[50%] "
            alt=""
          />
        </div>
        <div
          class="md:bg-[#7c00005e] w-[100%] h-[100vh] absolute top-0 left-0  flex justify-center items-center"
        >
        
        </div>
        
     
      </section>

    <section class=" w-[100%] h-[fit] pt-[12rem] ">
       <!-- statistiques -->
        <?php include("./components/statistique.php");?>
        <?php include("./components/all_players.php");?>

           
    
    </section>  
    </main>
  </body>
</html>