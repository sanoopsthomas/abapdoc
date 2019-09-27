<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        UPX|INFOSESSION
        </title>
        <link href="style.css" rel="stylesheet"> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet"> 
    </head>

    <body>
        <header class="showcase">
            <div class="content">
                <img src="th.jpg" class="logo" alt="">
                <div class="title">
                    UPX|INFOSESSION
                </div>
                <div class="text">
                    <h3 style="color: cornsilk">6 MONTH CERTIFICATION PROGRAM 
                    IN BIG DATA & DATA SCIENCE</h2>
                </div>     
                <DIV>
                    <H4 style ="color:coral;">INTERACTIVE SESSION DISCUSSING COURSE STRUCTURE CARRICULAM and
                        THINGS ABOUT UPCOMING BATCHES
                    </H3>
                </DIV>
            </div>
        </header>
<!--next section-->
        <section class="services">
            <div class="container grid-3">
                <div>
                        <i class="fa fa-chalkboard-teacher fa-3x"></i>
                    <p>Online live & interactive sessions with ue case theory and project</p>
                </div>
                <div>
                        <i class="fas fa-lightbulb fa-3x"></i>
                        <p>Hands on Experience with real world datasetd</p>
                    </div>
                    <div>
                            <i class="fas fa-award fa-3x"></i>
                            <p>Industry recognised cerificate by TECH MAHINDRA</p>
                        </div>
            </div>
        </section>
<!--Next msection-->
        <section class="about bg-light">
            <div class="container">
                <div class="grid-2">
                    <div class="center">
                        <i class="fas fa-laptop-code fa-10x"></i>
                    </div>
                    <div>
                        <h3>About UPX Academy</h3>
                        <p> In todays digital age  data has the potential to transform businesses through 
                            insight and analytics .However this power still awaits to be fully harnessed 
                            As a world class educational venture we recognize this challenge
                        </p>                    
                    </div>
                </div>
            </div>
        </section>
<section>
        <div class="contact-form">
                <h3>For Enquiries</h3>
                <h1>1800-123-1260</h1>
                <h3>ONLINE & FREE</h3>
                <h4>---------------------</h4>
                <h3>4th October 2019</h3>
                <div class="txtb">
                <label>Full Name</label>
                <input type="text" name="" value="" placeholder="Enter your name">
                </div>
                <div class="txtb">
                <label>Email</label>
                <input type="text" name="" value="" placeholder="Enter your Email">
                </div>
                <div class="txtb">
                <label>Message</label>
                <input type="text" name="" value="" placeholder="Enter your Message">
                <a class="btn">Save My Post</a>
        </div>        
        </section>
        <section class="about bg-light">
                <?php
                $countdown = strtotime("2019-10-04 21:00:00"); 
                $current=strtotime('now');
                $countdown1 =($countdown-$current);
                $days=floor($countdown1 / (60*60*24));
                echo "<marquee style=color:red;text-align:center;font-size:50px;>"."Reminder : only $days days left on UPX Infosession"."</marquee>";
                ?>
        </section>
        <h1 style="text-align: center">SPEAKERS</h1>
        <section class="about bg-spk">        
        <div class="circle">
        </div>       
        </section>        
        <section class="bg-light">
            <h1 style="text-align: center">Our Courses</h1>
                <div class="divbox">
                    <h2 style="color: cornsilk;text-align: center;">BIG DATA</h2>
                    <h3 style ="color:cornsilk;text-align:center;">HADOOP APACHE SPARK MONGODB</h3>
                    <a class="btn" style="text-align:center;">Know More</a>
                </div>
                <div class="divbox">
                        <h2 style="color: cornsilk;text-align: center;">DATA SCIENCE</h2>
                        <h3 style ="color:cornsilk;text-align:center;">DATA ANALYTICS MACHINE LEARNING TABLEAU</h3>
                        <a class="btn" style="text-align:center;">Know More</a>
                    </div>
                    <div class="divbox">
                            <h2 style="color: cornsilk;text-align: center;">BIG DATA</h2>
                            <h3 style ="color:cornsilk;text-align:center;">HADOOP APACHE SPARK MONGODB</h3>
                            <a class="btn" style="text-align:center;">Know More</a>
                        </div>
        </section>
        <footer class="left bg-dark">
            <p>www.upxacademy.com</p>
            <p>Email:info@upxacademy.com</p>
        </footer>
    </body>
</html>