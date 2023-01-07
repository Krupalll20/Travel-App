<?php
$server="localhost";
$user="root";
$pass="";
$database="travelapp";

$conn=mysqli_connect($server,$user,$pass,$database);
if(!$conn)
{
    die("sorry we failed to connect : ".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $heading=$_POST['heading'];
    $email=$_POST['email'];
    $no=$_POST['no'];
    $person=$_POST['person'];
    $month=$_POST['month'];
    
    $sql="INSERT INTO registration (email,phone_no,place,no_of_people,month,date_of_registration) VALUES ('$email',$no,'$heading',$person,'$month',CURRENT_TIMESTAMP)";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:index.html");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Document</title>
</head>

<body>
    <div class="main">

        <div class="form-div">
        <?php
            $heading=$_GET['heading'];
            echo "<h1 class='head'>You are registering for <span>$heading</span></h1>";
        ?>
        
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="form" id="form-id">
                Email : <br><input type="email" placeholder="Enter e-mail" name="email" class="email"
                    required><br><br>

                Phone No. : <br><input type="text" placeholder="Enter phone no. " name="no" class="no"
                    required><br><br>

                No. of Person : <br><input type="number" placeholder="Enter no. of person " name="person"
                    class="person" required><br><br>

                Month-name : <br><input type="text" placeholder="Enter month " name="month" class="month"
                    required><br><br>

                <?php echo "<input type='hidden' name='heading' value='$heading'>" ?>
                <button type="submit" name="submit" class="submit">Submit</button>
            </form>

        </div>
    </div>

</body>

</html>