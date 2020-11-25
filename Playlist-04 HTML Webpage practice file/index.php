<?php
        include_once "functions.php";
        $fruits=['mango','apple','orange','guava'];
?>

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
                <p>
                  <?php if (isset($_POST['userName']) && !empty($_POST['userName'])): ?>
                    userName : <?php echo $_POST ['userName'];?> <br>
                 <?php endif; ?>
                 <?php if (isset($_POST['emailId']) && !empty($_POST['emailId'])): ?>
                    Email    : <?php echo $_POST ['emailId'];?> <br>
                 <?php endif; ?>
                </p>
                <form action="" method="POST">
                    <div class="form-group " >
                        <label for="name">Name</label>
                        <input class="form-control" type="text" id="name" name="userName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input class="form-control" type="email" id="email" name="emailId" placeholder="Enter email">
                        <small>Your email will not be shared with anyone</small>    
                    </div>
                    <p>
                        <?php
                        $sfruits= filter_input( INPUT_POST,'fruits',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);        //this line is for  filtering input
                        $sfruits= $_POST['fruits'] ?? array();                    //this is for selcting multiple value
                        if(count($sfruits)>0){
                            echo "you have selected :".join(",",$sfruits);


                        }



                            // if(isset($_POST['fruits']) && $_POST['fruits']!='' ){    //this for selecting single value
                            //     printf("You have selected:%s", filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));


                            // }
                            
                        
                        
                        ?>
                    </p>
                    <pre>
                        <p>
                            <?php
                            print_r($_POST) 


                            ?>
                        </p>
                    </pre>
            <div class="form-group">
                        <label for="gender">fruits name</label>
                        <select class="form-control" name="fruits[]" id="fruits" multiple>
                            <option value="" disabled selected >select item</option>
                                        <!-- <option>mango</option>
                                        <option>apple</option>
                                        <option>orange</option> -->
                                        <?php 
                                            displayOption($fruits);
                                                
                                            
                                        ?>
                        </select>
            </div>
            <div class="form-group">
                <label for="file">File input</label>
                <input class="form-control-file" type="file" id="file">
                <small id="fileHelp">Max 3mb size</small>
            </div>
           
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>   
        </div>
        <!-- <form>    
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" placeholder="Password" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender">
                <option>Male</option>
                <option>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="file">File input</label>
                <input class="form-control-file" type="file" id="file">
                <small id="fileHelp">Max 3mb size</small>
            </div>

            <fieldset class="form-group">
                <legend>What are you using this service for?</legend>
                <div class="form-check">
                <label class="form-check-label" >
                    <input class="form-check-input" type="radio" value="option1">
                    Personal
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" value="option2">
                    Commercial Use
                </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" value="option3" disabled>
                   Testing
                </label>
                </div>
            </fieldset>
            <div class="form-check">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox">
                    Sign up for newsletter
                </label>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>

        <br><br>

        <!-- INLINE FORM -->
        <!-- <form class="form-inline">
            <input class="form-control mr-2" type="text" id="username" placeholder="Enter username">
            <input class="form-control mr-2" type="text" id="password" placeholder="Password">
            <div class="form-check">
                <label class="form-check-label mr-2\    ">
                    <input class="form-check-input mr-2" type="checkbox"> Remember me
                </label>
            </div>

            <button class="btn btn-warning"  type="submit">Submit</button>
        </form>

        <br><br>

        <!-- VALIDATION -->
        <!-- <div>
            <label for="username">Username</label>
            <input type="text" id="username">
            <div>Username available</div>
            <small>Must be at least 8 characters</small>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" id="password">
            <div>That password is not safe</div>
            <small>Please use a strong password</small>
        </div> --> 
    </div>
    <div style="margin-top:500px;"></div>
    

    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
