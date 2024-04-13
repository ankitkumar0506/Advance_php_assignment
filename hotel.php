<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Hotel room booking system</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
<div class="container d-flex justify-content-center ">
  <nav class="">
    <a class="navbar-brand" href="#"><h1>Hotel Room Booking System</h1></a>
  </nav>
</div>
</nav>


<div class="container d-flex justify-content-center">
    <form method="get" action="">

<h4 class="text-center my-4">Book room (select day)</h4>

    <button name="full" class="btn btn-dark" >Full Day</button> 
    <button name="half" class="btn btn-dark">Half Day</button> 
    <button name="custom" class="btn btn-dark" >Custom Day</button>

    <?php
    if(isset($_REQUEST['full']))                          //using isset method for choosing day mode
    {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label>
    
      <p><button name="fullselect">Submit</button></p>

    
    <?php }
    ?>
    <?php 
  if(isset($_REQUEST['fullselect']))          //printing the input value in form
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?>              
  
  <?php }
  ?>

<?php 
    if(isset($_REQUEST['half']))
    {?>
        <br><br><label>
          Select slot :
        </label>
        <button name="morning">Morning</button> <button name="evening">Evening</button>

    <?php }?>

<?php 
    if(isset($_REQUEST['morning']))
   {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label>
    
      <p><button name="mor">Submit</button></p>

    
    <?php }
    ?>
    
    <?php 
  if(isset($_REQUEST['mor']))
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?>
      <br>
      Slot selected : Morning (8AM TO 6PM)
  
  <?php }
  ?>

<?php 
    if(isset($_REQUEST['evening']))
   {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label>
    
      <p><button name="eve">Submit</button></p>

    
    <?php }
    ?>
    
    <?php 
  if(isset($_REQUEST['eve']))
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?> <br>
      Slot selected : Evening (7PM TO 6AM)
  
  <?php }
  ?>

  
<?php 
    if(isset($_REQUEST['custom']))
   {?>
        <br><br><label>
        Select date for bookng :
        <input type="date" name="date" />
      </label><br>
      <label for="timefrom">Booking from </label>
<input type="time" id="timefrom" name="timefrom"> <br>


<label for="timefrom">Booking till  </label>
<input type="time" id="booktill" name="booktill"> <br>
  

      

    
      <p><button name="cus">Submit</button></p>

    
    <?php }
    ?>

<?php 
  if(isset($_REQUEST['cus']))
  {?>
      <br><br>
      Thank you for booking with us !! <br>
      booked date : <?php echo $_REQUEST['date'];?> <br>
      selected time : <br>
      from : <?php echo $_REQUEST['timefrom'];?> <br>
      from : <?php echo $_REQUEST['booktill'];?> <br>
  
  <?php }
  ?>

  

 