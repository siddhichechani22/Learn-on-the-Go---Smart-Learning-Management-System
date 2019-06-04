<?php
//dis1 no of students appeared
  $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dis1 >=0 AND dis1 <=20";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dis1_A= $row['count'];
} else
    $dis1_A="0";
  //dis1 no of students absent
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dis1 ='NULL'";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dis1_B= $row['count'];
} else
    $dis1_B="0";

    
    //dis1 no of students passed
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dis1 >=8";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dis1_C= $row['count'];
} else
    $dis1_C="0";
    

 // dis1 no of students between 60% - 70%
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dis1 >=12 AND dis1 <=14";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $dis1_D= $row['count'];
} else
    $dis1_D="0";

    //dis1 no of students above 70%
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE dis1 >14 ";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    
   if($row = mysql_fetch_assoc($result)) 
       $dis1_E= $row['count'];
} else
    $dis1_E="0";
    
    //dis1 u-percent of students passed
    $dis1_F=($dis1_C/$dis1_A)*100;
    //dis1 -percent of students between 60 to 70 percent
    $dis1_G=($dis1_D/$dis1_A)*100;
    //dis1 u-percent of students above 70 percent
    $dis1_H=($dis1_E/$dis1_A)*100;
    
?>