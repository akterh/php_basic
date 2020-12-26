<?php
session_start(
    ['cookie_lifetime' => 60]
);
session_destroy();
if (isset($_POST['uName']) && ($_POST['pass'])) {
    if ('admin' == ($_post['uName']) && 'catsy' == ($_POST['pass'])) {
        $_SESSION['loggedin'] == true;
    } else {
        $_SESSION['loggedin'] == false;
    }
}
if (isset($_POST['logout'])) {
    session_destroy();
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    .mar {
        margin-left: 300px;
    }

    .mar2 {
        margin-bottom: 30px;
    }

    .button {
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-md-6 mar">
                <h2>Simple Auth Program</h2>
            </div>
        </div>
        <div class="row">

            <div class="col col-md-6 mar mt-5 ">
                <?php
                if (true == $_SESSION['loggedin']) {
                    echo "hello Admin Boss,Welcome !";
                } else {
                    echo "Hello boss,Login Below";
                }

                ?>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6 mar">
                <?php
                if (false == $_SESSION['loggedin']) :
                ?>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="uName ">User Name</label>
                        <input class="form-control mar2 " type="Username" name="uName" id="uName">
                        <label for="Pass">Password</label>
                        <input class="form-control mb-4" type="password" name="pass" id="pass">
                        <button type="submit" class="btn btn-success button" name="submit">Log In</button>
                    </div>
                </form>
                <?php
                else :

                ?>
                <form action="session.php" class="form-group" method="POST">
                    <input type="hidden" class="form-control" name="logout" value="1">
                </form>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>

</html>