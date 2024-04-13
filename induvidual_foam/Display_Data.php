<?php

include('./connection.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displat Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center my-4">USER DATA</h1>
    <a href="Assiment_module_2.php"><button type="button" class="btn btn-primary btn-sm">Add Users</button></a>

    <div class="container mt-5 d-flex justify-content-center">
        <table class="table table-bordered w-50">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sireal No</th>
                    <th scope="col">Login_ID</th>
                    <th scope="col">Passwored</th>
                    <th scope="col">C_Passwored</th>
                    <th scope="col">Salutation</th>
                    <th scope="col">Middile_Mane</th>
                    <th scope="col">Resient_Status</th>
                    <th scope="col">Email</th>
                    <th scope="col">First_Name</th>
                    <th scope="col">Last_Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Mobile_No</th>
                    <th scope="col">Account_No</th>
                    <th scope="col">Nick_Name</th>

                    <th scope="col">Action</th>
                    <button></button>
                </tr>
            </thead>
            <tbody>


                <?php $sql = "Select * from individuale_registration";
                $result = $con->query($sql);
                // $result=mysqli_query($con,$sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];

                    $Login_ID = $row['Login_ID'];
                    $Passwored = $row['Passwored'];
                    $C_Passwored = $row['C_Passwored'];
                    $Salutation = $row['Salutation'];
                    $Middile_Mane = $row['Middile_Mane'];
                    $Resient_Status = $row['Resient_Status'];
                    $Email = $row['Email'];
                    $First_Name = $row['First_Name'];
                    $Last_Name = $row['Last_Name'];
                    $Country = $row['Country'];
                    $Mobile_No = $row['Mobile_No'];
                    $Account_No = $row['Account_No'];
                    $Nick_Name = $row['Nick_Name'];

                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $Login_ID . '</td>
                    <td>' . $Passwored . '</td>
                    <td>' . $C_Passwored . '</td>
                    <td>' . $Salutation . '</td>
                    <td>' . $Middile_Mane . '</td>
                    <td>' . $Resient_Status . '</td>
                    <td>' . $Email . '</td>
                    <td>' . $First_Name . '</td>
                    <td>' . $Last_Name . '</td>
                    <td>' . $Country . '</td>
                    <td>' . $Mobile_No . '</td>
                    <td>' . $Account_No . '</td>
                    <td>' . $Nick_Name . '</td>

                    <td>
                        <a href="Edite_Data.php?ankitEditeid='.$id.'"><button class="btn  btn-primary" >EDIET</button></a>
                        <a href="Delete_Data.php?ankitDeleteid='.$id.'"><button class="btn btn-danger" >DELETE</button></a>
                    </td>
                    
                    </tr>';
                }



                ?>


                <!-- <td>
                    <a href="Edite_Data.php"><button class="btn  btn-primary">EDIET</button></a>
                    <a href="Delete_Data.php"><button class="btn btn-danger">DELETE</button></a>
                </td> -->

            </tbody>
        </table>
    </div>

</body>

</html>