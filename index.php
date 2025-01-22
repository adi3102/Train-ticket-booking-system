<!DOCTYPE html>
<?php
include 'constants.php';
?>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo @$title; ?></title>

    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="css/color/themecolor.css">
    <style>
        #services {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        #services .main-heading-title {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        #services .main-heading-text {
            font-size: 16px;
            color: #666;
            margin-bottom: 40px;
        }

        #services .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            background: #fff;
            padding-bottom: 50px;
            margin-bottom: 36px;
        }

        #services .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        #services .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
            height: 200px;
        }

        #services .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-top: 10px;
        }

        #services .card-text {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        #services .btn-custom {
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007bff;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        #services .btn-custom:hover {
            background-color: #0056b3;
            box-shadow: 0px 5px 15px rgba(0, 123, 255, 0.4);
        }

        @media (max-width: 768px) {
            #services .card {
                margin-bottom: 30px;
            }
        }
    </style>

</head>

<body>

    <div class="preloader">

        <div class="loader theme_background_color">

            <span></span>


        </div>
    </div>

    <div class="wrapper">

        <!-- Navigation
    ==========================================-->

        <nav class=" nim-menu navbar navbar-default navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="index.php"><?php echo $title[0]; ?><span class="themecolor">
                            <?php echo $title[1]; ?></span><?php for ($i = 2; $i < strlen($title); $i++) echo $title[$i]; ?></a>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home" class="page-scroll">
                                <h3>Home</h3>
                            </a></li>

                        <li><a href="#two" class="page-scroll">
                                <h3>About</h3>
                            </a></li>

                        <li><a href="library/sample.pdf" class="page-scroll">
                                <h3>Map</h3>
                            </a></li>

                        <li><a href="pro/signin.php" class="page-scroll">
                                <h3>Passenger Portal</h3>
                            </a></li>

                        <li><a href="pro/adminsignin.php" class="page-scroll">
                                <h3>Admin</h3>
                            </a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- [/NAV]
 
================================-->

        <section class="main-heading" id="home">

            <div class="overlay">

                <div class="container">

                    <div class="row">

                        <div class="main-heading-content col-md-12 col-sm-12 text-center">

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" Centralized bookings for, Centralized bookings for, Centralized bookings for"></span></h1>

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" Seamless Travel and Entertainment, Seamless Travel and Entertainment, Seamless Travel and Entertainment"></span>
                            </h1>

                            <p class="main-heading-text">WELCOME TO,<br />E - TICKETING FOR RAILWAYS</p>

                            <div class="btn-bar">

                                <a href="pro/signin.php" class="btn btn-custom theme_background_color">Make Reservations Now</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


        </section>
<!--============================================== servicess   ==========================================================================--->

        <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="main-heading-title">Our Services</h2>
                    <p class="main-heading-text">Explore the variety of services we offer to make your travel and entertainment experience seamless.</p>
                </div>
            </div>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://t4.ftcdn.net/jpg/06/67/56/53/360_F_667565388_5jyKNCXSA2CtHLJ81GOQeXn1JxPG0zfD.jpg" alt="Bus Tickets" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bus Ticket Booking</h5>
                            <p class="card-text">Book bus tickets easily and travel to your destination with comfort and convenience.</p>
                            <a href="bus.html" class="btn btn-custom">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://cdn-cipak.nitrocdn.com/pwvDKirvFjozvJSRiAFrxtGhrBfsgugn/assets/images/optimized/rev-09713c8/asiaexchange.org/wp-content/uploads/elementor/thumbs/The-Best-Online-Flight-Search-Websites-1-oqwwcggfunm4wom0rolvs4z943lodm5h676eu7btpc.jpg" width="360" height="200" alt="Flight Tickets" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Flight Ticket Booking</h5>
                            <p class="card-text">Book domestic and international flights at competitive prices.</p>
                            <a href="flight.html" class="btn btn-custom">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/9d/11/a2/9d11a22a9b9efe55c27ca27708f27b94.jpg" width="360" height="200" alt="Movie Tickets" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Movie Ticket Booking</h5>
                            <p class="card-text">Catch the latest movies in your favorite theaters with our quick booking service.</p>
                            <a href="#" class="btn btn-custom">Book Now</a>
                        </div>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSowCL60l1VErhRdncOW4tGUif45GhTEhFq4A&s" width="360" height="200" alt="Other Services" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Others</h5>
                            <p class="card-text">Explore more services for entertainment, travel, and leisure.</p>
                            <a href="#" class="btn btn-custom">Many More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- [ABOUT US]
 
============================================-->

        <section class="aboutus white-background black" id="two">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center black">

                        <h3 class="title">ABOUT <span class="themecolor">US</span></h3>

                        <p class="a-slog">Developed By <?php echo $developer_name; ?> (<?php echo $developer_matric; ?>)
                            and Supervised By <?php echo $supervisor_name; ?></p>

                    </div>

                </div>

                <div class="gap">


                </div>


                <div class="row about-box">

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-newspaper-o"></i>

                            <h4>Get Train Tickets from the comfort of your home</h4>

                            <p class="black">Book train tickets from anywhere using the robust ticketing platform
                                exclusively built to provide the passengers with pleasant ticketing experience. </p>

                        </div> 

                    </div> 

                    <div class="col-sm-4 about-line text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-diamond"></i>

                            <h4>Train & Ticketing related information at your fingertips</h4>

                            <p class="black">Checkout available seats, route information, fare information on real time
                                basis with Esheba Platform.</p>

                        </div> 

                    </div>

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-dollar"></i>

                            <h4>Pay Securely</h4>

                            <p class="black">Online payment. (NO REFUND!)</p>

                        </div> 

                    </div>

                </div> 
            </div>
        </section>

        <footer class="site-footer section-spacing text-center " id="eight">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">

                        <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>

                    </div>

                    <div class="col-md-4"> <small>&copy; <?php echo date('Y'); ?>, Developed By <?php echo $developer_name; ?> </small></div>

                    <div class="col-md-4">
            
            <ul class="social">

              <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" ></i></a></li>

              <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>

              <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>

            </ul> 
                    </div>

                </div>

            </div>

        </footer>
<div>
            <!-- Chatbot -->
            <style>
                #chatbot-icon {
                    position: fixed;
                    bottom: 20px;
                    right: 20px;
                    width: 60px;
                    height: 60px;
                    background-color: #007bff;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                    cursor: pointer;
                    z-index: 1000;
                }
        
                #chatbot-icon i {
                    color: white;
                    font-size: 24px;
                }

                #chatbot-popup {
                    position: fixed;
                    bottom: 90px;
                    right: 20px;
                    width: 350px;
                    height: 500px;
                    background-color: white;
                    border: 1px solid #ddd;
                    border-radius: 10px;
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                    display: none;
                    flex-direction: column;
                    overflow: hidden;
                    z-index: 1000;
                }
        
                #chatbot-header {
                    background-color: #007bff;
                    color: white;
                    padding: 15px;
                    text-align: center;
                    font-weight: bold;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                }
        
                #chatbot-messages {
                    flex: 1;
                    padding: 15px;
                    overflow-y: auto;
                    font-size: 14px;
                    background-color: #f8f9fa;
                    color: black;
                }
        
                #chatbot-input {
                    display: flex;
                    padding: 10px;
                    border-top: 1px solid #ddd;
                    color: black;
                }
        
                #chatbot-input input {
                    flex: 1;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    padding: 10px;
                    margin-right: 10px;
                }
        
                #chatbot-input button {
                    background-color: #007bff;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                    border-radius: 5px;
                    cursor: pointer;
                }
        
                #chatbot-input button:hover {
                    background-color: #0056b3;
                }
            </style>
            <div id="chatbot-icon">
                <i class="fa fa-comments"></i>
            </div>
        
            <div id="chatbot-popup">
                <div id="chatbot-header">Ticket Booking Assistant</div>
                <div id="chatbot-messages">
                    <p><strong>Bot:</strong> Hi! How can I assist you today?</p>
                </div>
                <div id="chatbot-input">
                    <input type="text" id="chatbot-input-field" placeholder="Type your question...">
                    <button id="chatbot-send-btn">Send</button>
                </div>
            </div>
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
            <script>
                const chatbotIcon = document.getElementById('chatbot-icon');
                const chatbotPopup = document.getElementById('chatbot-popup');
                const chatbotMessages = document.getElementById('chatbot-messages');
                const chatbotInputField = document.getElementById('chatbot-input-field');
                const chatbotSendBtn = document.getElementById('chatbot-send-btn');
        
        
                chatbotIcon.addEventListener('click', () => {
                    chatbotPopup.style.display = chatbotPopup.style.display === 'none' || chatbotPopup.style.display === '' ? 'flex' : 'none';
                });
        
                chatbotSendBtn.addEventListener('click', () => {
                    const userMessage = chatbotInputField.value.trim();
                    if (userMessage) {
                        addMessage('You', userMessage);
                        chatbotInputField.value = '';
                        respondToMessage(userMessage);
                    }
                });
        
                function addMessage(sender, message) {
                    const messageDiv = document.createElement('p');
                    messageDiv.innerHTML = `<strong>${sender}:</strong> ${message}`;
                    chatbotMessages.appendChild(messageDiv);
                    chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
                }
        
                function respondToMessage(message) {
                    let response;
                    if (message.toLowerCase().includes('book')) {
                        response = 'You can book tickets by navigating to the "Make Reservations Now" section.';
                    } else if (message.toLowerCase().includes('help')) {
                        response = 'Sure! How can I assist you with ticket booking?';
                    } else {
                        response = 'I am here to assist with ticket bookings. Ask me about bus, flight, or movie ticket bookings!';
                    }
                    setTimeout(() => addMessage('Bot', response), 500);
                }
            </script>

</div>

    </div>

    <script src="library/modernizr.custom.97074.js"></script>

    <script src="library/jquery-1.11.3.min.js"></script>

    <script src="library/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <script src="library/vegas/vegas.min.js"></script>

    <script src="js/plugins.js"></script>

    <script src="js/typed.js"></script>

    <script src="js/fappear.js"></script>

    <script src="js/jquery.countTo.js"></script>

    <script src="js/owl.carousel.js"></script>

    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/SmoothScroll.js"></script>

    <script src="js/common.js"></script>

</body>

</html>