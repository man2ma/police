<?php 
foreach($statement_return->result() as $statement){
        $statementnow=$statement->minute_file;
     }  
     $urlnor = base_url()."uploads/".$statementnow;
     echo"<td colspan='2'>"; echo anchor($urlnor,'Statement/Minute'); echo"</td>";

     
    ?>
