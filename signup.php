<?php
$conn = mysqli_connect("localhost","root","","automobile_insurance");
if(!$conn)
{
    die(mysqli_error());
}

$N_ame=$_POST["name"];
$E_mail=$_POST["email"];
$P_assword=$_POST["password"];
$C_onfirm=$_POST["confirm_password"];
$sql="insert INTO signup(Full_Name,Email_Address,Password,Confirm_Password) values ('$N_ame','$E_mail','$P_assword','$C_onfirm')";
if(mysqli_query($conn,$sql))
{
   
}
else{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>