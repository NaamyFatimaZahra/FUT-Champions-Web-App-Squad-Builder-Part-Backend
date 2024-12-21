<div id="cards" class="w-[80%] h-[12rem]  m-auto flex justify-between">
           <div id="card-total-players" class="flex justify-center flex-col items-center w-[25%] h-full bg-[#918383] rounded-lg">
            <h1 class="uppercase font-semibold text-[#510505ed]">players:</h1>
            <p class="font-bold text-[2rem]"><?php 
             $totalQuery = "SELECT count(*) from players";
          $total= mysqli_query($connection,$totalQuery);
          while($row=mysqli_fetch_assoc($total)){
          echo implode(" ",$row);}
            ?></p>
           </div>
          <div id="card-total-players" class="flex justify-center flex-col items-center w-[25%] h-full bg-[#918383] rounded-lg">
            <h1 class="uppercase font-semibold text-[#510505ed]">clubs:</h1>
            <p class="font-bold text-[2rem]"><?php 
             $totalQuery = "SELECT count(*) from clubs";
          $total= mysqli_query($connection,$totalQuery);
          while($row=mysqli_fetch_assoc($total)){
          echo implode(" ",$row);}
            ?></p>
           </div>          
        <div id="card-total-players" class="flex justify-center flex-col items-center w-[25%] h-full bg-[#918383] rounded-lg">
            <h1 class="uppercase font-semibold text-[#510505ed]">nationalities:</h1>
            <p class="font-bold text-[2rem]"><?php 
             $totalQuery = "SELECT DISTINCT COUNT(players.nationality_id) from players,nationalities WHERE nationalities.id=players.nationality_id
          GROUP BY nationalities.name_nationality";
          $total= mysqli_query($connection,$totalQuery);
          $sumArray=0;
          while($row=mysqli_fetch_assoc($total)){
            
         $sumArray += array_sum($row);
          
        }
        echo $sumArray ;
            ?></p>
           </div>
         </div>