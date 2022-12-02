<?php include('header.php')  ?>
<?php include('connect.php')  ?>

    <div class="login_feild">
        <div id="login_details">
            <div id="lenght">   

         <div class="centertop">
                <?php echo  "<p class='gold'>$messages</p>" ?> 
         </div>
                <div id="head">
                    <h3> Welcome to TegaCode</h3>
                    <p>Create your account</p>
                </div>
                <form action="signuppage.php" method="post">
                    <div id="login_items">
                        <div>
                            <label for="User">Username</label>
                            <input type="text" name="User" id="User" class="input">
                        </div>
                        <div>
                            <label for="mail">Email</label>
                            <input type="email" name="mail" id="mail" class="input">
                        </div>
                        <div>
                            <label for="pass1">Password</label>
                            <input type="password" name="pass1" id="pass1" class="input">
                        </div>
                        <div>
                            <label for="pass2">Corfim Password</label>
                            <input type="password" name="pass2" id="pass2" class="input">
                        </div>
                        <div class="split">
                            <div>
                                <input type="checkbox" name="checkme" id="checkme">
                                <label for="checkme">Remember me for 30 days</label>
                            </div>
                            <div>
                                <p class="gold">Forget Password</p>
                            </div>
                        </div>
                        <div>
                            <!-- <input type="submit" name="createAnAccount" value="createAnAccount"> -->
                            <button id="button" name="createAnAccount">Create An account</button>
                        </div>
                        <div class="split">
                            <div>
                                <p id="split2">Sign Up with</p>
                                <i class="fab fa-apple"></i>
                                <i class="fab fa-google"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="split1">
                            <p>Have an account? <span>
                                <a class='gold'href="loginpage.php">LogIn</a></span></p>
                        </div>
                 </div>
                </form>
              
            </div>
        </div>
        <div class="login_details_output">
            <div id="head">
                <h3>SingIn Individual</h3>
                <p>See the analytics and grow your date for task remotely,<p>from anywhere!</p> </p>
            </div>
            <div id="placeimg">
                <img src="img/Background/5-Best-Programming-Languages-to-Learn-for-Cybersecurity-Professionals-768x432.jpg" alt="">
            </div>
        </div>
    </div>
    
<?php include('footer.php')  ?>
