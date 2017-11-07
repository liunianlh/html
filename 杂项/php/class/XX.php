<?php
  ?>
    
<?php

 function hanshu($x,$y)
   {
     ?>
  <table border="1">
     
           <?php 
          
             for($i=1; $i<=$x; $i++)
             {
               echo "<tr>";
               for($j=1; $j<=$y;$j++)
               {
                   $num = $j+($i-1)*7;
                   echo "<td>{$num}</td>";
               }
               echo "</tr>";  
            };
           
          
           ?>
   <table/>
<?php

                   }
                   ?>
        <?php
        hanshu(6,7);
     
        ?>    