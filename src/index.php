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
    <link href="./output.css" rel="stylesheet" />
  </head>
  <body class="relative w-[100%]">
    <!-- mobile header -->
     <header
           class="  absolute md:right-[10rem]  top-5 right-5  z-10"

     >
       <div class="flex items-center relative">
            <input
              type="text"
              class="pl-3 bg-[#7b787892] h-[2.5rem] w-[17rem] rounded-md capitalize outline-none text-white"
              placeholder="search for player"
            />
            <label class="absolute right-4" for=""
              ><i class="fa-solid fa-magnifying-glass"></i
            ></label>
</div>
     </header>
  
<!-- aside -->
 <aside 
   class="bg-[#580a21] flex fixed h-[100vh] justify-center w-[5rem] left-0 rounded-br-[3rem] rounded-tr-[3rem] bg-[#4f4a4ac6] z-10 ">
<ul class="text-[#cec3c3] flex flex-col items-center justify-center gap-9 text-[1.6rem] ">
          <li>
            <a href="./index.html"
              ><i
                class="fa-solid fa-house px-3 py-3 bg-[#580a21] rounded-[50%]"
              ></i
            ></a>
          </li>
          <li>
            <a href="./pages/squad_builder.html"
              ><i class="fa-solid fa-futbol py-3"></i
            ></a>
          </li>
          <li>
            <a href="./pages/squads.html"
              ><i class="fa-solid fa-people-group py-3"></i
            ></a>
          </li>
          <li>
            <a href="./pages/about.html"
              ><i class="fa-solid fa-circle-info py-3"></i
            ></a>
          </li>
          <li>
            <a href="./pages/players_list.html"
              ><i class="fa-solid fa-magnifying-glass py-3"></i
            ></a>
          </li>
        </ul>
           <div
          class="w-[fit] absolute z-5 flex justify-center items-center"
        >
          <img
            src="./assets/img/soccer-red-removebg-preview.png"
            class="animate-spin w-[6rem] "
            alt=""
          />
        </div>
 </aside>
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
       <div id="cards" class="w-[80%] h-[12rem]  m-auto flex justify-between">
           <div id="card-total-players" class="w-[25%] h-full bg-[#918383] rounded-lg"></div>
           <div id="card-total-players" class="w-[25%] h-full bg-[#918383] rounded-lg"></div>
           <div id="card-total-players" class="w-[25%] h-full bg-[#918383] rounded-lg"></div>

         </div>
   
        <table
          class="w-[80%] m-auto text-left rounded-lg overflow-hidden  text-sm  bg-[white] mt-14 ">
          <thead
            class="border-b  bg-white font-medium border-white uppercase">
            <tr>
              <th scope="col" class="px-6 py-4">name</th>
              <th scope="col" class="px-6 py-4">position</th>
              <th scope="col" class="px-6 py-4">rating</th>
              <th scope="col" class="px-6 py-4">club</th>
                      <th scope="col" class="px-6 py-4">nationality</th>

            </tr>
          </thead>
          <tbody>
          <?php
          
         $query = "SELECT players.name_player, players.position, players.rating, clubs.name_club AS club_name, nationalities.name_nationality AS nationality_name 
    FROM players
    INNER JOIN clubs
        ON players.club_id = clubs.id
    INNER JOIN nationalities
        ON players.nationality_id = nationalities.id
";
          $result= mysqli_query($connection,$query);
          if(!$result){
            die("query failed".mysql_error());
          }else{
                   while($row=mysqli_fetch_assoc($result)){
                    echo '<tr
              class="border-[#7c77779a] border-solid border-[1px]">
              <td class="whitespace-nowrap px-6 py-4 font-medium">'.$row['name_player'].'</td>
              <td class="whitespace-nowrap px-6 py-4">'.$row['position'].'</td>
              <td class="whitespace-nowrap px-6 py-4">'.$row['rating'].'</td>
              <td class="whitespace-nowrap px-6 py-4">'.$row['club_name'].'</td>
               <td class="whitespace-nowrap px-6 py-4">'.$row['nationality_name'].'</td>
            </tr>';
                   }
          }
          ?>
         
          </tbody>
        </table>
    
    </section>  
    </main>
  </body>
</html>