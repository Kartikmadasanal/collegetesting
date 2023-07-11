<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>

    <!-- popup model -->

    <div class="popup">
        <button id="close">&times;</button>
        <div class="model_logo">
            <img class="model_logo1" src="/imgs/logofooter.png" alt="JCER logo" />
            <img class="model_logo2" src="/imgs/Visvesvaraya_Technological_University_logo.png" alt="VTU logo" />
        </div>
        <div class="middle">
            <h>Jain College of Engineering and Research</h>
            <p>(Approved by AICTE New Delhi, Afliated to VTU, Recognised by Govt. of Karnataka)</p>
        </div>
        <div class="end_div">
            <p>Welcome To JCER</p>
            <h>ADMISSIONS OPEN 2023-2024</h>
        </div>
    </div>
    <!--Script-->
    <script>window.addEventListener("load", function () {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                },
                1000
            )
        });


        window.addEventListener("load", function () {
            setTimeout(
                function close(event) {
                    document.querySelector(".popup").style.display = "none";
                },
                3000
            )
        });

        document.querySelector("#close").addEventListener("click", function () {
            document.querySelector(".popup").style.display = "none";
        });
    </script>
    <!-- popup model end -->


    <!-- Static navbar -->
    <div class="navigation-bar">
        <a href="/"><img class="navbar-logo" src="/imgs/logotop.png" alt="JCER logo"></a>
        <span class="nav-contact"><i class="fa fa-envelope"></i> principal@jcer.in <i class="fa fa-phone"></i>
            9448693987 / 8762190801
        </span>
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar"><i class="fa fa-bars" style="font-size: 22px;"></i></label>



        <nav class="navbar">

            <ul class="navbar-ul">
                <li><a class="nav-links" href="/">Home </a></li>
                <li><a class="nav-links" href="#">About <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-ul">

                        <li><a class="dropdown-links" href="">Principal</a></li>
                        <li><a class="dropdown-links" href="">Vision And Mission </a></li>
                        <li><a class="dropdown-links" href="">Objectives </a></li>
                        <li><a class="dropdown-links" href="">The JGI Team </a></li>
                        <li><a class="dropdown-links" href="">The Chairman</a></li>


                    </ul>


                </li>
                <li><a class="nav-links" href="#">Admission <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-ul">
                        <li><a class="dropdown-links" href="">Notification </a></li>
                        <li><a class="dropdown-links" href="">Intake And Fee Structure </a></li>
                        <li><a class="dropdown-links" href="">Eligibility</a></li>


                    </ul>

                </li>
                <li><a class="nav-links" href="#">Facilities <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-ul">
                        <li><a class="dropdown-links" href="">Internet</a></li>
                        <li><a class="dropdown-links" href="">Transport</a></li>
                        <li><a class="dropdown-links" href="">Web Mail</a></li>
                        <li><a class="dropdown-links" href="">FeedBack </a></li>

                    </ul>



                </li>
                <li><a class="nav-links" href="">Placement Cell </a></li>
                <li><a class="nav-links" href="#">Departments <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-ul">
                        <li><a class="dropdown-links" href="civil.html">Civil Engineering</a></li>
                        <li><a class="dropdown-links" href="cse.html">Computer Science Engineering</a></li>
                        <li><a class="dropdown-links" href="ec.html">Electronics And Communication</a></li>
                        <li><a class="dropdown-links" href="">Mechanical Engineering</a></li>
                        <li><a class="dropdown-links" href="">AI And Machine Learning</a></li>
                        <li><a class="dropdown-links" href="">Basic Science And Humanities</a></li>
                        <li><a class="dropdown-links" href="">Administrative Office</a></li>


                    </ul>



                </li>
                <li><a class="nav-links" href="">Library </a></li>
                <li><a class="nav-links" href="">Contact Us </a></li>
                <li><a class="nav-links" href="">Committee </a></li>
            </ul>
        </nav>
    </div>

    <!-- nav end -->

    </body>

</html>