<?php
//OOPM1 no of students appeared
  $sql="SELECT count(*) as count FROM student.stud_termtest WHERE oopm1 >=0 AND oopm1 <=20";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $oopm1_A= $row['count'];
} else
    $oopm1_A="0";
  //OOPM1 no of students absent
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE oopm1 ='NULL'";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $oopm1_B= $row['count'];
} else
    $oopm1_B="0";

    
    //oopm1 no of students passed
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE oopm1 >=8";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $oopm1_C= $row['count'];
} else
    $oopm1_C="0";
    

 // oopm1 no of students between 60% - 70%
     $sql="SELECT count(*) as count FROM student.stud_termtest WHERE oopm1 >=12 AND oopm1 <=14";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    // output data of each row
   if($row = mysql_fetch_assoc($result)) 
       $oopm1_D= $row['count'];
} else
    $oopm1_D="0";

    //oopm1 no of students above 70%
    $sql="SELECT count(*) as count FROM student.stud_termtest WHERE ds1 >14 ";
 
   $result = mysql_query($sql,$conn);

   if (mysql_num_rows($result) > 0) {
    
   if($row = mysql_fetch_assoc($result)) 
       $oopm1_E= $row['count'];
} else
    $oopm1_E="0";
    
    //oopm1 u-percent of students passed
    $oopm1_F=($oopm1_C/$oopm1_A)*100;
    //oopm1 -percent of students between 60 to 70 percent
    $oopm1_G=($oopm1_D/$oopm1_A)*100;
    //oopm1 u-percent of students above 70 percent
    $oopm1_H=($oopm1_E/$oopm1_A)*100;
    

 ?>