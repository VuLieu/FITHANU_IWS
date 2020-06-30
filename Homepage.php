<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Profile </title>	
        <link href ="css/bootstrap.min.css" rel =" "Stylesheet>
        <link href ="css/custom.css" rel ="stylesheet">
        <link href ="css/plugins/.css" rel ="stylesheet">
        <link href ="css/Style.css" rel ="Stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    </head>
    <body>
        <div id = "main-wrapper">
            <header>
                <div class="header"> 
                    <div class ="headerColor"></div>
                    <div class ="headerImage"></div>
                    <div class = "Link">
                        <li><a href ="#">Home</a></li>
                        <li><a href ="#">About</a></li>
                        <li><a href ="#">Portfolio</a></li>
                        <li><a href ="#">FAQ</a></li>
                        <li><a href ="#">Contact</a></li>
                    </div>
                </div>
            </header>
            <div class ="content>"
                 <div class="row">
                    <div class="col-sm-3" id = "sidebar">
                        <p>About me</p>
                        <div id ="image"></div>
                        <p></p>
                        <p>Welcome! I'm Willow</p>                          

                        <div class =" Location">
                            <h2>Location</h2>
                            <?php include 'Weather.php' ?>
                        </div>
                    </div>
                    <div class="col-sm-7" id="main_content">

                        <div class ="information">
                            <h2>Information</h2>
                            <div class ="detail" 
                                 <p>Name: Vu Thi Lieu</p>
                                <p>University: Hanoi University</p>
                                <p>Student ID: 1701040093</p>
                            </div>
                        </div>
                        <div class ="allCourse">
                            <h2>All courses </h2>
                            <div class ="detail">
                                <li>Database</li>
                                <li>System analysis and design</li>
                                <li>Internet and web services</li>
                                <li>Computer graphic</li>
                                <li>Project management</li>
                            </div>
                        </div>
                        <div class ="Skills">
                            <h2> Soft Skills </h2>
                            <div class ="detail">
                                <li>Presentation</li>
                                <li>Teamwork</li>
                                <li>Singing</li>
                            </div>
                        </div>
                        <div class = "book">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
