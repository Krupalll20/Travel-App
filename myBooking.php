<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: linear-gradient(white, rgb(133, 133, 133));
        box-sizing: border-box;
    }

    .main {
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(white, rgb(147, 145, 145));
        height: 100vh
    }

    .form-div {
        text-align: center;
    }

    .form {
        box-shadow: 5px 5px 10px black;
        /* padding-left: 50px; */
        padding-top: 50px;
        padding-bottom: 50px;
        color: rgb(43, 41, 41);
        font-size: 20px;
        font-weight: bold;
        width: 450px;
    }

    .email {
        height: 35px;
        margin-top: -10px;
        width: 80%;
        padding-left: 20px;
    }

    .submit {
        height: 40px;
        width: 90px;
        background-color: rgb(223, 18, 18);
        color: white;
        border: 0px;
        border-radius: 5px;
        font-size: 16px;
    }

    .submit:hover {
        height: 45px;
        width: 95px;
    }
    </style>
</head>

<body>
    <div class="main">
        <div class="form-div">
            <form action="show.php" class="form" method="get">
                <h2>Enter valid e-mail :</h2>
                <input type="email" name="email" class="email" id="email" placeholder="Enter registered email" required>
                <br><br><br>
                <button type="submit" name="submit" class="submit">show</button>
            </form>
        </div>
    </div>
</body>

</html>