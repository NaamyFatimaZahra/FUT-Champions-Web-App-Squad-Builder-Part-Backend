   <table
          class="w-[80%] m-auto text-left rounded-lg overflow-hidden  text-sm  bg-[white] my-14  ">
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
          
         $query = "SELECT  players.id as id,players.name_player as name_player , players.position as position, players.rating as rating, clubs.name_club AS club_name, nationalities.name_nationality AS nationality_name 
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
               <td class="whitespace-nowrap px-6 py-4 flex justify-around items-center "> 
               <a href=""
                class="w-fit py-3 px-3 mb-4 bg-[#70182e] uppercase text-white rounded-md hover:bg-[#421212bf]"
              >
                update
              </a>
              <a href=".\components\delete.php?id='.$row['id'].'"
                class="w-fit py-3 px-3 mb-4 bg-[#70182eb3] uppercase  text-white rounded-md hover:bg-[#421212bf]"
              >
                Delete
              </a>
               <a href=""
                class="w-fit py-3 px-3 mb-4 bg-[#70182eb3] uppercase text-white rounded-md hover:bg-[#421212bf]"
              >
                add
              </a>
              </td>

            </tr>';
                   }
          }
          ?>
         
          </tbody>
        </table>