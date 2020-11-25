<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Forms | Bootstrap 4</title>
</head>
<body>
      <h1 class="display-3 text-center my-4">Forms</h1>
      <div class="container">
        <!--########################START HERE#########################-->

        <!-- FORM -->
       
        <div class="row content-align-center">
            <div class=" col-4 " style="margin-left:400px" >
                <?php
                    $uName='';
                    $mail ='';

               ?>

                <p>
                  <?php if (isset($_REQUEST['userName']) && !empty($_REQUEST['userName'])) {

                    //   $uName= htmlspecialchars($_REQUEST['userName']);
                    $uName= filter_input(INPUT_POST,'userName' ,FILTER_SANITIZE_FULL_SPECIAL_CHARS );
                  }
                    
                    ?>
                   
                 
                 <?php if (isset($_REQUEST['emailId']) && !empty($_REQUEST['emailId'])) {

                        // $mail= htmlspecialchars($_REQUEST['emailId']);
                        $mail= filter_input(INPUT_POST,'emailId',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                 }
                  ?>
                 <p>
                 userName: <?php echo $uName;  ?> <br>
                 email: <?php echo $mail; ?><br>
                 </p>
                    
                 
                </p>
                <form action="" method="POST">
                    <div class="form-group " >
                        <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="userName" placeholder="Enter name" value="<?php echo $uName; ?>"
                            >
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                            <input class="form-control" type="email" id="email" name="emailId" placeholder="Enter email" value="<?php echo $mail; ?>" >
                        <small>Your email will not be shared with anyone</small>    
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>   
        </div>
        </div>
    <div style="margin-top:500px;"></div>

    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>