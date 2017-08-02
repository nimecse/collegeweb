<?php
if(isset($_GET['submit']))
{
    $name=$_GET['fname'];
    echo "Your First name is :   $name <br>" ; 

    $name=$_GET['mname'];
    echo "Your Middle name is :   $name <br>" ; 

    $name=$_GET['lname'];
    echo "Your Last name is :   $name <br>" ; 

    $name=$_GET['ename'];
    echo "Your E-mail is :   $name <br>" ; 
    
    $name=$_GET['address'];
    echo "Your Address is : $name <br>";
    
    $name=$_GET['gender'];
    echo "Your Gender is : $name <br>"; 
    
    $name=$_GET['dist'];
    echo "Your Distric is : $name <br>";
    
    
}
if(isset($_POST['submit']))
{
  $name=$_POST['pass'];
    echo "Your password is :  $name <br>"; 
    $name=$_POST['cpass'];
    echo "Your conform password is :  $name <br>";   
}


$Subject=$_GET['Subject'];

foreach($Subject as $key=>$value)
{
    echo "Subject is : $value <br>" ;
    
}

?>