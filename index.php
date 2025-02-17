<?php

require 'function/functions.php';
$blog = query("SELECT * FROM blog");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abraham Tumbel Personal Website</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header>
        <h1 style="text-align:center;">Home</h1>
            <nav>
                <ul>
                    <li><a href="#A1">About</a></li>
                    <li><a href="#A2">Article</a></li>
                    <li><a href="#A3">Gallery</a></li>
                    <li><a href="#A5">Contact</a></li>
                </ul>
            </nav>
    </header>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    
    <section>
        <img src="images\OldRoll_1655212569646.jpg" id="profile">
        <h2 id="write">Abraham Tumbel</h2>
        <h3 id="sub">welcome to website</h3>
     </section>
    <article style="text-align: left;">
        <div class="About" id="#A1"></div>
        <title>About Me</title>
        <body>
            <section class="about">
                <div class="main">
                    <img src="images\profil.jpeg">
                    <div class="about-text">
                        <h1>About Me</h1>
                        <h5>Informatic Engineering Student</h5>
                        <p> Hi!, nama saya adalah abraham tumbel saya adalah mahasiswa fakultas teknik elektro
                            dengan program studi informatika. Sekarang saya menduduki bangku semester 4.
                            Enjoy di website ini !!</p>
                    </div>
                </div>
            </section>
        </body>
        
    </article>
    <body>
    
        
        <article>
            <section class="blog" id="A2">
                <div class="blog-heading">
                    <h1 id="A2">A r t i c l e</h1>
                </div>  <br><br>
                
                <div class="blog-container">
                    <article class="blog-box">
                        <div class="blog-img">
                        <img src="images\Mike-Tyson.jpg" alt="Mike-Tyson">
                        </div>
                        <h2>THE IRON MIKE</h2>
                        <div class="blog-text">
                            <p>
                                Mike Tyson became the youngest heavyweight boxing champion of the world in 1986, at age 20. He lost the title in 1990 and later served three years in prison for rape charges. He subsequently earned further notoriety by biting Evander Holyfield's ear during a rematch in 1997. Tyson has gone on to appear in several films and a Broadway show on his life, become a best-selling author and launch a successful cannabis business.
                                Michael Gerard Tyson was born on June 30, 1966, in Brooklyn, New York, to parents Jimmy Kirkpatrick and Lorna Tyson. When Michael was two years old his father abandoned the family, leaving Lorna to care for Michael and his two siblings, Rodney and Denise. Struggling financially, the Tyson family moved to Brownsville, Brooklyn, a neighborhood known for its high crime. Small and shy, Tyson was often the target of bullying. To combat this, he began developing his own style of street fighting, which ultimately transitioned into criminal activity. 
                                His gang, known as the Jolly Stompers, assigned him to clean out cash registers while older members held victims at gunpoint. He was only 11 years old at the time. He frequently ran into trouble with police over his petty criminal activities, and by the age of 13, he had been arrested more than 30 times. Tyson's bad behavior landed him in the Tryon School for Boys, a reform school in upstate New York. At Tryon, Tyson met counselor Bob Stewart, who had been an amateur boxing champion. Tyson wanted Stewart to teach him how to use his fists. 
                                Stewart reluctantly agreed, on the condition that Tyson would stay out of trouble and work harder in school. Previously classified as learning disabled, Tyson managed to raise his reading abilities to the seventh-grade level in a matter of months. He also became determined to learn everything he could about boxing, often slipping out of bed after curfew to practice punches in the dark.
                            </p>
                            <a href="https://www.biography.com/athletes/mike-tyson">Read More</a>
                        </div>
                    </article><br>
        
            <article class="blog-box">
                <div class="blog-img">
                    <img src="images\MJ.jpg" alt="MJ">
                </div>
                <h2>THE GOAT</h2>
                <div class="blog-text">
                    <p>
                        Michael Jeffrey Jordan was born on February 17, 1963, in Brooklyn, New York. His mother, Deloris, was a bank teller who has since written several books. His father, James, was a maintenance worker turned manager at General Electric. Jordan, the fourth child of Deloris and James, has four siblings: James Jr. (known as Ronnie), Deloris, Larry, and Roslyn.
                        Growing up in Wilmington, North Carolina, Jordan developed a competitive edge at an early age. It was James who introduced his son Michael to baseball and built a basketball court in their backyard. Michael idolized his brother Larry, and the two would often play one-on-one into the night. Michael wanted to win every game he played.
                        Jordan attended Laney High School in Wilmington. He was notably assigned to the school’s junior varsity basketball team as a sophomore—he was still under 6 feet tall then—before developing into one of the countrys top recruits. During a basketball camp in the summer of 1980, Jordan grabbed the attention of legendary University of North Carolina at Chapel Hill head coach Dean Smith and his staff. He signed his letter of intent with the school in 1981.
                    </p>
                    <a href="https://www.biography.com/athletes/michael-jordan">Read More</a>
                </div>
            </article><br>
     
            <article class="blog-box">
                <div class="blog-img">
                    <img src="images\rival.jpg" alt="rival">
                </div>
                <h2>THE GREATEST RIVALITY</h2>
                <div class="blog-text">
                    <p>
                        The Messi Ronaldo rivalry, or Ronaldo Messi rivalry, is a sporting rivalry in football propelled by the media and fans that involves Argentine footballer Lionel Messi and Portuguese footballer Cristiano Ronaldo, mainly for being contemporaries and due to their similar records and sporting successes.
                        They spent nine seasons in the prime of their careers facing off regularly while playing for rival clubs Barcelona and Real Madrid. Together they have achieved various historical milestones in the sport, coming to be considered as two of the best players of all time. They are two of the most decorated footballers ever, having won a combined 79 official trophies (Messi 44, Ronaldo 35) during their senior careers thus far, and have regularly broken the 50-goal barrier in a single season. 
                        They are the only two players to score over 800 goals each in their careers for club and country. Ronaldo holds the record for most official goals in a career. A cigarette strap bin titled in Polish "Who is the better player?" in an attempt to establish who the best player is among the duo Journalists and pundits regularly argue the individual merits of both players in an attempt to establish who they believe is the best player in modern football or ever. Regardless of preference, football critics generally agree that they are both the best players of their generation, outperforming their peers by a significant margin.
                        Ronaldo has received praise for his physical attributes, goalscoring skills, leadership and performance under pressure, while Messi is lauded for his combination of dribbling, playmaking, passing and goalscoring.[3] It has been compared to past global sports rivalries such as the Muhammad Ali Joe Frazier rivalry in boxing,
                    </p>
                    <a href="https://en.wikipedia.org/wiki/Messi%E2%80%93Ronaldo_rivalry">Read More</a>
                </div>
            </article>
        </div>
    </section>

    <body>
       </div>
         <div class="photo" id="A3">
             <div class="gallery">
                 <div class="img-box"><h3>Kobe Bryant</h3></div>
                 <div class="img-box"><h3>Christiano Ronaldo</h3></div>
                 <div class="img-box"><h3>Muhammad Ali</h3></div>
                 <div class="img-box"><h3>Mike Tyson</h3></div>
                 <div class="img-box"><h3>Lebron James</h3></div>
                 <div class="img-box"><h3>Lionel Messi</h3></div>
                 <div class="img-box"><h3>Michael Jordan</h3></div>
             </div>
         </div>

    </body>
    

    

     </footer>
     <section class="contact" id="A5">
        <div class="end-section">
           <h4>Abraham Tumbel</h4>
           <p>Copyright 2024 </p><p>contact me down below guys!
         </p>
           <div class="end-icons">
            <a href="https://web.facebook.com/abraham.tumbel.71"><i class='bx bxl-facebook-square'></i></a>
            <a href="https://www.instagram.com/abrahamvict_/"><i class='bx bxl-instagram-alt'></i></a>
            <a href="https://youtube.com/@abrahamtumbel8346?si=TYMK63jn8aKsadLs"><i class='bx bxl-youtube'></i></a>
            <a href="#"><i class='bx bxl-gmail'></i></a>
        </div>
    </section>
    </footer>
    <!--Footer-->

    <!--scroll bttn-->
    <a href="#" class="scroll-bttn"><i class='bx bx-chevron-up' ></i></a>
</body>

</html>