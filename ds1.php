<?php
//DS1 no of students appeared
  $sql="SELECT count(*) as count FROM student.stud_termtest WHERE ds1 >=0 AND ds1 <=20";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $ds1_A= $row['count'];
} else
    $ds1_A="0";
  //DS1 no of students absent
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE ds1 ='NULL'";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $ds1_B= $row['count'];
} else
    $ds1_B="0";

    
    //ds1 no of students passed
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE ds1 >=8";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $ds1_C= $row['count'];
} else
    $ds1_C="0";
    

 // DS1 no of students between 60% - 70%
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE ds1 >=12 AND ds1 <=14";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $ds1_D= $row['count'];
} else
    $ds1_D="0";

    //DS1 no of students above 70%
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE ds1 >14 ";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    
   if($row = mysql_fetch_assoc($result)) 
       $ds1_E= $row['count'];
} else
    $ds1_E="0";
    
    //DS1 u-percent of students passed
    $ds1_F=($ds1_C/$ds1_A)*100;
    //DS1 -percent of students between 60 to 70 percent
    $ds1_G=($ds1_D/$ds1_A)*100;
    //DS1 u-percent of students above 70 percent
    $ds1_H=($ds1_E/$ds1_A)*100;
    ?>