<html>
<title>STUDENT MARKS UPDATION</title>

<center>
<head></head>
<body>
<?php
     include 'phpconnect.php';
        
          
               $REG_NO = $_POST['REG_NO'];
               $rollno = $_POST['rollno'];

                $name = $_POST['name'];
                 $div = $_POST['div'];  
                 $DS1 =$_POST['DS1'];
                   $OOPM1 = $_POST['OOPM1'];
                     $ECCF1 = $_POST['ECCF1'];
                       $DLDA1 = $_POST['DLDA1'];
                  $DIS1 = $_POST['DIS1'];
                    $AM_3_1 = $_POST['AM_3_1'];
                  
         mysql_select_db('student');
            $sql = "INSERT INTO `student`.`stud_termtest` (`reg_no`, `roll_no`, `name`, `div`, `ds1`, `oopm1`, `eccf1`, `dlda1`, `dis1`, `maths1`) VALUES ('$REG_NO', $rollno, '$name','$div','$DS1','$OOPM1','$ECCF1','$DLDA1','$DIS1','$AM_3_1');";
               
            
            $retval = mysql_query( $sql, $conn );
     
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
             
                header("Location: marksupdate.php");
            mysql_close($conn);
      
    
      
         }
         else
         {
          ?>
            
<font face=courier size=6><u>STUDENTS MARKS ENTRY</u></FONT>
</center>
<form action="http://localhost/marksupdate.php" method="post">
<font face=system size=4>
<pre><label>REG NO:          </label><input type=text name="REG_NO" id="REG_NO" required><br></pre>
<pre><label>Rollno:          </label><input type=text name="rollno" id="rollno" required><br></pre>
<pre><label>NAME:            </label><input type=text name="name" id="name"><br></pre>
<pre><label>DIV:             </label><input type=text name="div" id="div"><br></pre> 
<pre><label>TERM TEST:             </label><select name="TERMTEST">
<option value="1">1</option>
<option value="2">2</option>
 </select><br></pre>

 <!--if($TT=='1')
{
<pre><label>DATA STRUCTURES1         </label><input type=text name="DS" id="DS1"><br></pre>
<pre><label>OOPM1                    </label><input type=text name="OOPM" id="OOPM1"><br></pre>
<pre><label>ECCF1                     </label><input type=text name="ECCF" id="ECCF1"><br></pre>
<pre><label>DLDA1                     </label><input type=text name="DLDA" id="DLDA1"><br></pre>
<pre><label>DIS1                      </label><input type=text name="DIS" id="DIS1"><br></pre>
<pre><label>AM3_1                     </label><input type=text name="AM_3"  id="AM_3_1"><br></pre>
}
elseif($TT=='2')
{
<pre><label>DATA STRUCTURES          </label><input type=text name="DS" id="DS2"><br></pre>
<pre><label>OOPM                     </label><input type=text name="OOPM" id="OOPM2"><br></pre>
<pre><label>ECCF                     </label><input type=text name="ECCF" id="ECCF2"><br></pre>
<pre><label>DLDA                     </label><input type=text name="DLDA" id="DLDA2"><br></pre>
<pre><label>DIS                      </label><input type=text name="DIS" id="DIS2"><br></pre>
<pre><label>AM_3                     </label><input type=text name="AM_3"  id="AM_3_2"><br></pre>
-->
<pre><label>DS1                    </label><input type=text name="DS1" id="DS1"><br></pre>
<pre><label>OOPM1                    </label><input type=text name="OOPM1" id="OOPM1"><br></pre>
<pre><label>ECCF1                     </label><input type=text name="ECCF1" id="ECCF1"><br></pre>
<pre><label>DLDA1                     </label><input type=text name="DLDA1" id="DLDA1"><br></pre>
<pre><label>DIS1                      </label><input type=text name="DIS1" id="DIS1"><br></pre>
<pre><label>AM3_1                     </label><input type=text name="AM_3_1"  id="AM_3_1"><br></pre>


</font>
<br><br>
<font size=4>

  <font size=2><input type="submit" name="submit" id="submit" value="Submit"></font>
  </form>
     
         <?php
       }
       ?>
       <p><a href="http://localhost/report.php">GENERATE REPORT</a></p>
        <p><a href="http://localhost/home.html">HOME</a></p>
    </body>
</html>