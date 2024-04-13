<?php 


include 'connection.php';

if(isset($_REQUEST['sub']))
{   

    $Login_ID = $_REQUEST['Login_ID'];
    $Passwored = $_REQUEST['Passwored'];
    $C_Passwored = $_REQUEST['C_Passwored'];


    $Salutation = $_REQUEST['Salutation'];
  


    $Middile_Mane = $_REQUEST['Middile_Mane'];

    $Resient_Status = $_REQUEST['Resient_Status'];
    $new_Rese_Stat ="";


    $Email = $_REQUEST['Email'];
    $First_Name = $_REQUEST['First_Name'];
    $Last_Name = $_REQUEST['Last_Name'];


    $Country = $_REQUEST['Country'];


    $Mobile_No = $_REQUEST['Mobile_No'];
    $Account_No = $_REQUEST['Account_No'];
    $Nick_Name = $_REQUEST['Nick_Name'];


    $isert_query = "insert into individuale_registration (Login_ID,Passwored,C_Passwored,Salutation,Middile_Mane,Resient_Status,Email,First_Name,Last_Name,Country,Mobile_No,Account_No,Nick_Name)values('$Login_ID','$Passwored','$C_Passwored','$Salutation','$Middile_Mane','$Resient_Status','$Email','$First_Name','$Last_Name','$Country','$Mobile_No','$Account_No','$Nick_Name')";           //aa line qury bnava mate
    $insrt = $con->query($isert_query);           //aa line query ne database ma insert krva mate
    // echo $insert_query;


    if($insrt)
    {
    echo  '<script> alert("Data Enterd...!")</script>';
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <stylsubmit>

</head>
<body>
<h3 style="text-align: center; background-color: aqua;color: crimson;">Individuale Registration</h3>

<form method="post" enctype="multipart/form-data">
<div action=""><div style="text-align: center;">
    <h4 style="text-align: left;color: darkred;">User Particulars</h4>
    <div style="margin-right: 100px;">
    <div><label >&midast;Login ID</label> <input type="text" name="Login_ID" ><br></div>
    <div><label >&midast;Passwored</label> <input type="text" name="Passwored"><br></div> 
    <div><label>&midast;Conform Passwored</label> <input type="text" name="C_Passwored" ></div>
</div></div>


    <h4 style="text-align: left;color: darkred;">personal Particular</h4><br>
    <div style="margin-right: 100px; display: flex ; justify-content: space-around;">

    <div><div><label for="Jaimin">Salutation</label>

        <select name="Salutation" id="cars">
          <option value="volvo" name="Salutation[]" >select</option>
          <option value="saab" name="Salutation[]">Saab</option>
          <option value="mercedes" name="Salutation[]">Mercedes</option>
          <option value="audi" name="Salutation[]">Audi</option>
        </select>
        </div>
    <div><label >&midast;Middile mane</label> <input type="text" name="Middile_Mane"><br></div> 


    <div><label for="Jaimin">Resient Status</label>

        <select name="Resient_Status" id="cars">
          <option value="volvo" name="Resient_Status[]">select</option>
          <option value="saab"name="Resient_Status[]">Saab</option>
          <option value="mercedes"name="Resient_Status[]">Mercedes</option>
          <option value="audi"name="Resient_Status[]">Audi</option>
        </select>
        </div>
    <div><label>&midast;Email-id</label> <input type="text" name="Email"></div></div>

    <div><div><label >&midast;First Name</label> <input type="text" name="First_Name"><br></div>
    <div><label >&midast;Last Name</label> <input type="text" name="Last_Name"><br></div> 
    <div><label for="Jaimin">country</label>

        <select name="Country" id="cars">
          <option value="volvo" name="Country[]">select</option>
          <option value="saab"  name="Country[]">Saab</option>
          <option value="mercedes" name="Country[]">Mercedes</option>
          <option value="audi" name="Country[]">Audi</option>
        </select>
        </div>



    <div><label>&midast;Mobile No</label> <input type="text" name="Mobile_No"></div></div>

</div>

<h4 style="text-align: left;color: darkred;">Account Pratcicular</h4><br>
<div style="margin-right: 100px; display: flex ; justify-content: space-around;">

<div>
<div><label >&midast;15 Digits Account No</label> <input type="text" name="Account_No" ><br></div>

<div><label for="Jaimin">Salutation</label>

    <select name="jaimin" id="cars">
      <option value="volvo">select</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select>
    </div>

</div>

<div><div><label >&midast;Nick name</label> <input type="text" name="Nick_Name" ><br></div></div>
</div>
<h4 style="text-align: left;color: darkred;">Declaration</h4><br>
<div style="margin-right: 100px; display: flex ; justify-content: space-around;">
</div>


<p>i have read , understood and hereby agree to the terms and conditions in respect of all products and channels.</p>

<p>
i usderstand that any changes in the terms and conditions applicable to this relationship would be made available to me on request at any IOB branches. i confirm that all accounts under this login name are operated singly and in case of joint account operated by either or survivior/ anyone or surviviore(s) under his/her joint name respectivily. i do hereby declare that information furnished in this form is true to the best of my knowledge and belief.</p>

<div style="display: flex;justify-content: center;gap: 30PX;">
    <input type="submit" name="sub"> <br>
    <button>Reset</button>
    <a href="Display_Data.php"><button type="button" class="btn btn-primary btn-sm">See Users</button></a>

    
    
    
</div>
</form>


<style>
        label{
            margin-left: 150px;
            text-align: right;
            display: inline-block;
            width: 200px;
        }

        form{
            background-color:#6CEDF7;
            padding: 30px 40px;
            border: 2px solid #0093FF;
        }
        input, select

        {
            margin-bottom: 3px;
        }
    </style>
   
</body>
</html>