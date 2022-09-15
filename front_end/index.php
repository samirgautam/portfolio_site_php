<?php
    include("connection.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samir Gautam</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Radley&display=swap" rel="stylesheet">

       <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <header>
        <nav>
           <div class="leftNav">
            <img class="logo" src="img/logo.png" alt="">
            <p>Samir</p>
           </div>
           <div class="rightNav">
               <ul>
                   <li><a href="index.html">Home</a></li>
                   <li><a href="about.html">About Me</a></li>
                   <li><a href="portfolio.html">Portfolio</a></li>
                   <li><a href="contact.html">Contact</a></li>
               </ul>
           </div>

        </nav>
    </header>
    <section>
        <div  class="cover">
            <div data-aos = "fade-right" class="ellipse">
                <img src="img/hero.jpg" alt="">
            </div>
            <div class="coverDesc">
                <p data-aos="fade-down" class="subtitle">Front End Developer</p>
                <h2 data-aos="fade-down">Samir Gautam</h2>
                <p data-aos="fade-up">
                    An undergraduate student studying BSC.CSIT at Godawari College. I'm a passionate learner and tech enthusiast. I love to deploy my imagination onto websites and applications.
                </p>
                <button data-aos="zoom-in"  class="firstButton">
                 <a  data-aos = "zoom-in" data-aos-anchor-placement ="bottom-bottom"  href="#">Download CV</a>
                </button>
                <button data-aos="zoom-in" >
                 <a data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" href="#">Contact</a>
                </button>
            </div>
        </div>
    </section>

    <hr>
    <section data-aos="fade-up" class="aboutBody">
        <h1 class="aboutTitle">About Me</h1>
    
    <div class="about">
          
       <div class="education">
           <div class="blockTitle">
            <h3 >Education</h3>
           </div>
      
       

        <div  class="exp">
                <p class="expDuration">2019-Present</p> <span>Tribhuvan University</span>
           <div  class="expDetail">
            <h6>BSc.CSIT</h6>
            <p>Learning the theoretical and practical methods to 
                participate in solving the complex problem of the IT 
                industry.</p>
           </div>
        </div>

        <div  class="exp">
                <p class="expDuration">2017-2019</p> <span>Sukuna Multiple Campus</span>
            <div class="expDetail">
                <h6>+2 Science</h6>
                <p>
                    Studied the fundamentals of pure Science and
                    Mathematics
                </p>
            </div>
        </div>    
    </div>
       <div class="experience">
        <h3>Experience</h3>
        <div class="exp">
       
            <p class="expDuration">May 2022- Aug 2022</p> <span>Samir & Co.</span>
        <div class="expDetail">
            <h6>Software Engineering Intern</h6>
            <p>Worked collaboratively in providing resources and
                processes in the project to rapidly develop and
                operate them</p>
        </div>
        
    </div>
    </div>
    </div>   

    <div data-aos = "fade-right" class="statCon">
        <h3>My stats</h3>
        <div class="progressBars">
            <div class="progressBar">
                <p class="progressTitle">HTML</p>
                <div class="progressCon">
                    <p class="progText">90%</p>
            
                    <div class="progress">
                        <span class="html"></span>
                    </div>
                </div>
            </div>
            <div class="progressBar">
                <p class="progressTitle">CSS</p>
                <div class="progressCon">
                    <p class="progText">80%</p>
            
                    <div class="progress">
                        <span class="css"></span>
                    </div>
                </div>
            </div>
            <div class="progressBar">
                <p class="progressTitle">JavaScript</p>
                <div class="progressCon">
                    <p class="progText">70%</p>
            
                    <div class="progress">
                        <span class="javaScript"></span>
                    </div>
                </div>
            </div>
            <div class="progressBar">
                <p class="progressTitle">C/C++</p>
                <div class="progressCon">
                    <p class="progText">60%</p>
            
                    <div class="progress">
                        <span class="cpp"></span>
                    </div>
                </div>
            </div>
            <div class="progressBar">
                <p class="progressTitle">Photoshop</p>
                <div class="progressCon">
                    <p class="progText">85%</p>
            
                    <div class="progress">
                        <span class="photoshop"></span>
                    </div>
                </div>
            </div>
            <div class="progressBar">
                <p class="progressTitle">NodeJS</p>
                <div class="progressCon">
                    <p class="progText">55%</p>
            
                    <div class="progress">
                        <span class="nodejs"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </section>     


    <section>
        <section class="aboutBody">
            <h1 class="aboutTitle">My Portfolio</h1>
        </section>
            <div data-aos="fade-up" class="portfolios">
                <div class="portfolioItem">
                <div class="image">
                    <img src="img/port1.jpg" alt="">
                </div>
                <div class="hover-items">
                    <h3>Memory Game</h3>
                    <div class="icons">
                        <a href="https://github.com/samirgautam/weather-app" target="_blank" class="icon">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank" class="icon">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
        
                </div>
                </div>
                <div class="portfolioItem">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Todo List</h3>
                        <div class="icons">
                            <a href="https://github.com/samirgautam/todo-list" target="_blank" class="icon">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.youtube.com" target="_blank" class="icon">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
        
                    </div>
                    </div>
                    <div class="portfolioItem">
                        <div class="image">
                            <img src="img/port3.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Weather App</h3>
                            <div class="icons">
                                <a href="https://github.com/samirgautam/weather-app" target="_blank" class="icon">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.youtube.com" target="_blank" class="icon">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
        
                        </div>
        
                        </div>
                    <div class="portfolioItem">
                        <div class="image">
                            <img src="img/port4.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Quiz App</h3>
                            <div class="icons">
                                <a href="https://github.com/samirgautam/quiz-app" target="_blank" class="icon">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.youtube.com" target="_blank" class="icon">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
        
                        </div>
                        </div>
                    <div class="portfolioItem">
                        <div class="image">
                            <img src="img/port5.jpg" alt="">
                        </div>
                        <div class="hover-items">
                            <h3>Porfolio Site</h3>
                            <div class="icons">
                                <a href="https://github.com/samirgautam/" target="_blank" class="icon">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.youtube.com" target="_blank" class="icon">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
        
                        </div>
                        </div>
            </div>
    </section>

    <section>
        <div data-aos = "fade-up" class="contact">
        
            <div class="contact-details">
                <p>Mobile: <span>9817973638</span></p>
                <p>Email: <span>Samirgautam003@gmail.com</span></p>
                <p>Address: <span>Gauradaha-9, Jhapa</span></p>
            </div>
            <div class="contactPar">
                <div class="contact-form">
        
                    <div class="inputLeft">
        
                        <input type="text" required placeholder="Full Name">
                        <input type="text" required placeholder="Email Address">
                        <input type="text" required placeholder="Subject">
                    </div>
                    <div class="inputRight">
                       <textarea name="" id="" cols="50" rows="10" placeholder="Message"></textarea>
                    </div>
        
                </div>
                <div class= "submit">
        
                    <button>submit</button>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <a href="https://wwww.facebook.com">Facebook</a>
        <a href="https://wwww.github.com">Github</a>
        <a href="https://wwww.twitter.com">Twitter</a>
        <div class="rightFooter">
            <p>&#169  2021 - <?php echo date ("Y"); ?> All rights reserved. </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
</body>


</html>
