<?php
    
         
        
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass='';
            $conn = mysql_connect($dbhost, $dbuser,$dbpass);
            if(! $conn )
            {
              echo("hello");
          die('Could not connect: ' . mysql_error());

        }
        
        ?>