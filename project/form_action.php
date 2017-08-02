<?php
if(isset($_GET['Submit']))
{
    $name=$_GET['fname'];
    echo "Your First name is :   $name <br>" ; 

    $name=$_GET['lname'];
    echo "Your Last name is :   $name <br>" ; 
     $name=$_GET['pass'];
    echo "Your password is :  $name <br>"; 

   
    $name=$_GET['gender'];
    echo "Your Gender is : $name <br>"; 
    
    $name=$_GET['dist'];
    echo "Your Distric is : $name <br>";

 }
 // $subject=$_GET['subject'];
 // foreach ($subject as $key => $value) {
 // 	echo "Subject is :$value <br>";
 // 	# code...
 // }
?>
<!DOCTYPE html>
<html>
<head>
    <title >My first php</title>
</head>
<body>
<center>
<form action="index.html" method="GET">
<lebel for='fn'>First name</lebel>
    <input type="text" name="fname" id="fn" size="20"/>
    <br/>

    <lebel for='ln'>Last name</lebel>
    <input type="text" name="lname" id="ln" size="20"/>
    <br/>


    <label for="fn"> Password       :<input type="password" name="pass"></label>
                <br>

    <input type="radio" name="gender" value="male"/>Male
    <br/>

    <input type="radio" name="gender" value="female"/>Female
    <br/>

    <input type="radio" name="gender" value="other"/>Other
    <br/>

    <select name="dist">
        <option value="Rajshahi"> Rajshahi</option>
        <br/>

            <option value="Nawabjong">Nawabjong</option>
            <br/>

                <option value="Nator">Nator</option>
                <br/>

    </select>
    <br/>
    <input type="checkbox" name="subject[]" value="Bengali"/>Bengali
    <br/>

     <input type="checkbox" name="subject[]" value="English"/>English
    <br/>

     <input type="checkbox" name="subject[]" value="CSE"/>CSE
    <br/>

     <input type="Submit" name="Submit" value="Submit"/>
   

    </form>
    </center>
</body>
</html 