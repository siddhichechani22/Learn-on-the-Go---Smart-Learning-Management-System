<?php
//eccf1 no of students appeared
  $sql="SELECT count(*) as count FROM student.stud_termtest WHERE eccf1 >=0 AND eccf1 <=20";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $eccf1_A= $row['count'];
} else
    $eccf1_A="0";
  //eccf1 no of students absent
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE eccf1 ='NULL'";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $eccf1_B= $row['count'];
} else
    $eccf1_B="0";

    
    //eccf1 no of students passed
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE eccf1 >=8";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $eccf1_C= $row['count'];
} else
    $eccf1_C="0";
    

 // eccf1 no of students between 60% - 70%
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE eccf1 >=12 AND eccf1 <=14";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $eccf1_D= $row['count'];
} else
    $eccf1_D="0";

    //eccf1 no of students above 70%
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE eccf1 >14 ";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    
   if($row = mysql_fetch_assoc($result)) 
       $eccf1_E= $row['count'];
} else
    $eccf1_E="0";
    
    //eccf1 u-percent of students passed
    $eccf1_F=($eccf1_C/$eccf1_A)*100;
    //eccf1 -percent of students between 60 to 70 percent
    $eccf1_G=($eccf1_D/$eccf1_A)*100;
    //eccf1 u-percent of students above 70 percent
    $eccf1_H=($eccf1_E/$eccf1_A)*100;
    
?>