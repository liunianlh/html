<?php

 header('content-type:text/html;charset=utf-8');
    echo "<table border='1' width='500'>";
        echo <<<th
        <tr style="background-color:#ccc;">
            <th style="color:red;">星期天</th>
            <th>星期一</th>
            <th>星期二</th>
            <th>星期三</th>
            <th>星期四</th>
            <th>星期五</th>
            <th style="color:green;">星期六</th>
        </tr>
th;
         $b=1;
        for($a=1;$a<=5;$a++)
        {
            echo "<tr>";
          for($i=1;$i<=7;$i++)
          {
         
           echo "<th>{$b}</th>";  
           $b++;
           if($b>31)
              {
               break;
              }    
          }
         echo "</tr>";
        }
    echo "</table>";
