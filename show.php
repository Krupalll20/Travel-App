<?php
$server="localhost";
$user="root";
$pass="";
$database="travelapp";

$conn=mysqli_connect($server,$user,$pass,$database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .div-error{
            /* background-image: linear-gradient(white,rgb(133, 133, 133)); */
            /* height:100vh; */
            color:red;
            text-align:center;
            padding-top:100px;
            text-decoration: none;
        }
        .btn{
            height: 40px;
            width: 90px;
            background-color: rgb(0, 128, 255);
            color: white;
            border: 0px;
            border-radius: 5px;
            font-size: 16px;
            margin-top:50px;
        }
        .btn a{
            color: white;
            text-decoration: none;
            font-weight:bold;
        }
        .btn:hover{
            height: 45px;
            width: 96px;
        }
        .table{
            background-image: linear-gradient(white,rgb(133, 133, 133));
            height:90vh;
            text-align:center;
            padding-top:100px;
        }
        .mt{
            margin-left:550px;
            font-size:20px;
            column-gap:100px;
        }
        .mt thead{
            color: rgb(223, 18, 18);
        }
        .delete{
            height: 30px;
            width: 170px;
            background-color: rgb(223, 18, 18);
            color: white;
            border: 0px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            font-weight:bold;
            padding:5px 10px 5px 10px;
        }
        .goback{
            height: 40px;
            width: 200px;
            background-color: rgb(0, 128, 255);
            color: white;
            border: 0px;
            border-radius: 5px;
            font-size: 16px;
            margin-top:50px;
        }
        .goback a{
            text-decoration: none;
            font-weight:bold;
            color:white;
        }
        .goback:hover{
            height:45px;
            width:210px;    
        }
        
    </style>
</head>
<body>

    <div class="table">
        <table style="border-spacing:30px;" class="mt">
    <?php
        $email=$_GET["email"];
        $sql="select phone_no,place,no_of_people,month from registration where email='$email'";
        $result=mysqli_query($conn,$sql);

        if(!mysqli_num_rows($result))
        {
            echo "<div class='div-error'>
            <h1 class='error'>Yon don't have regestration on $email</h1>
            <button class='btn'><a href='myBooking.php'>Go back</a></button>
            </div>";
        }
    
        else{
            echo "<thead>
                    <tr>
                        <th>Phone_no.</th>
                        <th>Place</th>
                        <th>No._of_People</th>
                        <th>Month</th>
                    </tr>
                </thead>";
        }
        ?>
        <tbody>
            <?php
                    while($row=mysqli_fetch_assoc($result)){
                        $place=$row['place'];
                        echo "<tr>

                            <td>".$row['phone_no']."</td>

                            <td>".$row['place']."</td>

                            <td>".$row['no_of_people']."</td>

                            <td>".$row['month']."</td>";

                            echo "<td><a class='delete' href='show.php?place=$place&email=$email'>Delete</a></td>

                            </tr>";
                    }
            ?>
        </tbody>
        </table>
            <button class="goback"><a href="index.html">Go back to main page</a></button>
        </div>
        <?php
            if(isset($_GET['place']))
            {
                $place=$_GET['place'];
                $email=$_GET['email'];
                $query="delete from registration where place='$place' and email='$email'";
                $resultx=mysqli_query($conn,$query);
                if($resultx)
                {
                    header("Location:show.php?email=$email");
                }
            } 
        ?>
</body>
</html>