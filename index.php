
<?php include('connect.php')  ?>
<?php 
//   session_start(); 
  if (!isset($_SESSION['user'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signuppage.php');
  }else {
    $query = "SELECT * FROM `signin` WHERE username = '".mysqli_real_escape_string($db, $_SESSION['user'])."'";
    $new = mysqli_query($db, $query);
    $fetch = mysqli_fetch_array($new);

  if (array_key_exists('Logout', $_GET)) {
      session_destroy();
      unset($_SESSION['user']);
      // setcookie('username', time() - 60 * 60);
  }
  }

//   else if (array_key_exists('user', $_SESSION) && $_SESSION['user']) {
//     header("Location: index.php");
//   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tega</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Font-Awesome-master/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
</head>
<body>


    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>
      <div class="worktoge">
            <header  >
                        <div class="header">
                            <div class="name1"><h3 class="span ">Tega<p>Code</p></h3></div>
                        <div class="navbar">
                            <!-- <span id="bar4"></span>
                            <span id="bar2"></span>
                            <span id="bar3"></span> -->
                            <div class="class">
                            <div id="line"></div>
                            </div>
                            <nav id="nav">
                                <ul><a href="#about">About</a></ul>
                                <ul><a href="#skills">Skills</a></ul>
                                <ul><a href="#hieMe">Work</a></ul>
                                <ul><a href="#contactmain">Contact</a></ul>
                                <ul><a href="signuppage.php?Logout=1">Log Out</a></ul>
                            </nav>
                        </div>
                
                    </div>
            </header>
                
                <div class="content">
                    <div id="forImage" class="animate-hedimg"></div>
                    <!-- <img src="./img/No_Background/images__9_-removebg-preview.png" alt=""> -->
                    <div class="discripetion">
                        <div id="h4">
                            <h4 class="animate-header">i build beautiful & </h4>
                            <h4 class="animate-header">functional wed apps</h4>
    
                            <?php if (isset($_SESSION['user'])) { ?>
                                <h3 class="php">Welcome <strong> <?php echo $_SESSION['user']; ?> </strong> </h3>
                           <?php } ?>
                        </div>
                        <buttton class="animate-header" id="resume">Download Resume</buttton>
                    </div>
                </div>
      </div>
      
      
      <div class="worktoge1">
        <div id="about" class="animate-yy">
            <h3 id="h3" class="animate-about">About Me</h3>
            <p class="animate-about"> Hi 👋 My name is Umurhurhu Oghenetega, I am a self-taught Full-stack developer.</p>
                 <p class="animate-about">I build functional and user-friendly Web Apps for companies and businesses. I am the software chef the code is my ingredient, I love to cook delicious Meals for users to consume.
            </p>
        </div>
        <div class="mywork ">
            <div id="myworks" class="animate-work">
                <h3 id="h3">My Works</h3>
            </div>
            <div id="gridstyle">
                <div id="sample1" class="animate-card">
                    <div id="image"><img id='img' src="img/Background/trian.jpeg" alt="train_site"><div id="text"><p>form</p><h4>RailWay station</h4></div></div>
                    
                    <!-- <div id="back"><p>Boys int. is an imaginary imaginary intentional form created for this club to register new members and accept registration fee with the help of Paystack API</p>
                         <a href="#">PHP</a>
                         <a href="#">React</a>
                         <a href="#">Javascript</a>
                         <div id="bottom">
                             <a href="#" target="_blank" rel="noopener noreferrer">Github</a>
                             <a href="#" target="_blank" rel="noopener noreferrer">Live link</a>
                         </div>
                    </div> -->
                </div>
                <div id="sample1" class="animate-card">
                    <div id="image2" ><img id='img' src="img/Background/c0afc820-5d5f-47e0-a286-ffeac92888fb.jpeg" alt="train_site"><div id="text"><p>form</p><h4>RailWay station</h4></div></div>
                    
                    <!-- <div id="back">
                        <p>Boys int. is an imaginary imaginary intentional form created for this club to register new members and accept registration fee with the help of Paystack API</p>
                        <a href="#">PHP</a>
                        <a href="#">React</a>
                        <a href="#">Javascript</a>
                        <div id="bottom">
                            <a href="#" target="_blank" rel="noopener noreferrer">Github</a>
                            <a href="#" target="_blank" rel="noopener noreferrer">Live link</a>
                        </div>
                   </div> -->
                </div>
                <div id="sample1" class="animate-card">
                    <div id="image3"><img id='img' src="img/Background/image_processing20211128-29608-v99cgq.png" alt="train_site">   <div id="text"><p>form</p><h4>RailWay station</h4></div></div>
                 
                    <!-- <div id="back"><p>Boys int. is an imaginary imaginary intentional form created for this club to register new members and accept registration fee with the help of Paystack API</p>
                        <a href="#">PHP</a>
                        <a href="#">React</a>
                        <a href="#">Javascript</a>
                        <div id="bottom">
                            <a href="#" target="_blank" rel="noopener noreferrer">Github</a>
                            <a href="#" target="_blank" rel="noopener noreferrer">Live link</a>
                        </div>
                   </div> -->
                </div>
                <div id="sample1" class="animate-card">
                    <div id="image4"><img id='img' src="img/Background/photo-1623934199716-dc28818a6ec7.jpeg" alt="train_site">  <div id="text"><p>form</p><h4>RailWay station</h4></div></div>
                  
                    <!-- <div id="back"><p>Boys int. is an imaginary imaginary intentional form created for this club to register new members and accept registration fee with the help of Paystack API</p>
                        <a href="#">PHP</a>
                        <a href="#">React</a>
                        <a href="#">Javascript</a>
                        <div id="bottom">
                            <a href="#" target="_blank" rel="noopener noreferrer">Github</a>
                            <a href="#" target="_blank" rel="noopener noreferrer">Live link</a>
                        </div>
                   </div> -->
                </div>
            </div>
    
        </div>
    
        <div id="skills">
            <h3 id="h3" class="barss1">Skills</h3>
            <div class="skills_bars">
                <div class="barss barss1" id="skills1"><a href="#">HTML5</a></div>
                <div class="barss barss1" id="skills2"><a href="#">CSS</a></div>
                <div class="barss barss1" id="skills3"><a href="#">JAVASCRIPT</a></div>
                <div class="barss barss1" id="skills4"><a href="#">PHP</a></div>
                <div class="barss barss1" id="skills5"><a href="#">SQL</a></div>
                <div class="barss barss1" id="skills6"><a href="#">REACT</a></div>
            </div>
        </div>

    
        <div id="hieMe">
            <h3 id="h3" class="mails">Hire Me</h3>
            <p class="mails">Feel free to contact me at anytime</p>
            
        <?php if(isset($fetch)) {?>
            <div id="hieMe1">
                <div id="inputf" class="input1 " >
                    <label for="Namefeild" class="mails">Name</label>
                    <input class="mails" value="<?php echo $fetch['username']; ?>" type="text" id='Namefeild'>
                </div>
                <div id="inputf"  class="input2">
                    <label class="mails" for="Emailfeild">Email</label>
                    <input class="mails" value="<?php echo $fetch['email']; ?>" type="text" id='Emailfeild'>
                </div>
                <div id="inputf"  class="input2">
                    <label class="mails" for="Subjectfeild">Subject</label>
                    <input class="mails" type="text" for='Subjectfeild' id="Subjectfeild">
                </div>
                <div id="inputf" class="input3">
                    <label class="mails" for="Messagefeild">Message</label>
                    <textarea class="mails" name="Messagefeild" id="Messagefeild" cols="40" rows="15"></textarea>
                </div>
                <div>
                <button class="mails" name="Submitfeild" id="Submitfeild" type="submit">Submit</button>
                </div>
            </div>
        <?php }?>

          </div>
    
        <div class="direction" id="contactmain">
            <div id="media">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
            <div id="contact">
                <a href="#">
                    <i class="fas fa-phone"></i>
                    <p>+234-8163481913</p>
                </a>
                <a href="#" id="tega"> &copy tegaumurhurhu@gmail.com</a>
            </div>
        </div>
    </div>

    <!-- <video width="600" height="500" controls>
        <source src="Video/www.tfpdl.com-Kingsglaive Final Fantasy XV 2016.mkv">
    </video> -->
    
<?php include('footer.php')  ?>
<!--     
   <script src="js/scrpit.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="js/scrolTrigger.js"></script>
</body>
</html> -->

