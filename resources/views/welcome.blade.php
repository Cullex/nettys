<!--
By Sidney Richards @Native Designs Zw
sidyrich@gmail.com 263774935699
-->

<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Netty's Culinary School</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!--Google fonts Link-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.lightbox.min.css')}}">

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><span>Netty's</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="page-scroll" href="#home">Home</a></li>
                <li><a class="page-scroll" href="#about"> About us</a></li>
                <li><a class="page-scroll" href="#courses">Courses</a></li>
                <li><a class="page-scroll" href="{{ route('gallery') }}">Gallery</a></li>
                <li><a class="page-scroll" href="#contact">Contact</a></li>
                <li><a class="page-scroll" href="#applications">Apply</a></li>
                <li><a class="page-scroll" href="#login">Login</a></li>

            </ul>
        </div>
    </div>
</nav>

<section id="home" class="home">
    <div class="overlay">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <div class="carousel-caption">
                        <p class="text-uppercase">Best culinary school in Zimbabwe</p>
                        <h1 class="text-capitalize">Master the science of food preparation</h1>
                    </div>
                </div>

                <div class="item">
                    <div class="carousel-caption">
                        <p class="text-uppercase">We offer a wide range of expertise</p>
                        <h1 class="text-capitalize">Come and get trained by the best!!</h1>
                    </div>
                </div>

                <div class="item">
                    <div class="carousel-caption">
                        <p class="text-uppercase">Affordable & flexible payment options</p>
                        <h1 class="text-capitalize">Cooking secrets from real professionals</h1>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section id="about" class="about bwt-90">
    <div class="container">
        <div class="col-md-6">
            <img src="{{asset('/images/WhatsApp Image 2021-10-05 at 17.22.png')}}" class="img-responsive" >
        </div>
        <div class="col-md-6 bwt-offset-lg-top-0 bwt-offset-md-top-0 bwt-offset-xxs-top-30">
            <h1 class="title">Few words about us</h1>
            <h4>We started operations on the June 13 2012. Since then we have grown in leaps and bounds </h4>
            <p>If you love food. And you’re pretty sure you want to make it your life. If this sounds like you, then Netty's Culinary is the only place you need to be. Only at Netty's Culinary will you get the immersive learning and industry connections that will prepare you to lead in the kitchen, the boardroom, or anywhere else you want to go in food.</p>
            <p>At our heart, we develop and nurture a chef’s mindset in every Netty student and graduate—fulfilled, influential professionals who understand the importance of taste in leading sustainable change in the food world</p>
        </div>
    </div>
</section>

<section id="courses" class="recipes bwt-90">
    <div class="container text-center">
        <h1 class="title yellow">Our Courses</h1>
        <div class="row">
            <div class="col-sm-6 col-md-6 text-sm-left text-md-left text-lg-left bwt-offset-top-20">
                <div class="row">
                    <div class="col-sm-4 col-md-3"><img src="{{asset('/images/recipes-1.jpg')}}" class="img-responsive img-circle" ></div>
                    <div class="col-sm-8 col-md-9">
                        <h3>Culinary Arts</h3>
                        <p>if kitchen is where you feel at home. Build the foundation for your culinary creativity, from cooking methods to flavor principles to butchery. You’ll learn about sustainability, wellness, responsible sourcing, world cultures and cuisines... knowledge every future-thinking food professional needs..</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 text-sm-left text-md-left text-lg-left bwt-offset-top-20">
                <div class="row">
                    <div class="col-sm-4 col-md-3"><img src="{{asset('images/recipes-2.jpg')}}" class="img-responsive img-circle" ></div>
                    <div class="col-sm-8 col-md-9">
                        <h3>Baking and Pastry Arts</h3>
                        <p>Do you have that special combination of creativity and attention to detail? Learn the techniques, ingredient function, and design principles behind everything from puff pastry to baguettes to entremets—and then envision and create your unique versions. You’ll also learn to prepare savory fare perfect for your own café.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 text-sm-left text-md-left text-lg-left bwt-offset-top-20">
                <div class="row">
                    <div class="col-sm-4 col-md-3"><img src="{{asset('/images/recipes-3.jpg')}}" class="img-responsive img-circle" ></div>
                    <div class="col-sm-8 col-md-9">
                        <h3>Culinary Science</h3>
                        <p>Innovative ideas and the ability to turn out a consistently superior product are essential for cooking at the highest level or creating the next big thing in food. With a deep, technique-based understanding of your ingredients, and the most kitchen hours of any culinary qualification, you’ll be equipped to do more inventive and delicious things.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 text-sm-left text-md-left text-lg-left bwt-offset-top-20">
                <div class="row">
                    <div class="col-sm-4 col-md-3"><img src="{{asset('images/recipes-4.jpg')}}" class="img-responsive img-circle" ></div>
                    <div class="col-sm-8 col-md-9">
                        <h3>Hospitality Management</h3>
                        <p>Food and beverage is the heart of the hotel, entertainment, and travel experience. With critical business-focused hospitality skills, plus vital hands-on food and beverage experience, you’ll gain the distinct advantage to lead across all aspects of hospitality—from the business and hotel end of operations, to food and event planning.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 text-sm-left text-md-left text-lg-left bwt-offset-top-20">
                <div class="row">
                    <div class="col-sm-4 col-md-3"><img src="{{asset('images/recipes-5.jpg')}}" class="img-responsive img-circle" ></div>
                    <div class="col-sm-8 col-md-9">
                        <h3>Food Business</h3>
                        <p>Success in food depends not only on inspired cooking and baking, but also your understanding of business. Whether you want to excel in a company or start one of your own, you need industry-specific knowledge in leadership, marketing, human resources, finance, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 text-sm-left text-md-left text-lg-left bwt-offset-top-20">
                <div class="row">
                    <div class="col-sm-4 col-md-3"><img src="{{asset('images/recipes-6.jpg')}}" class="img-responsive img-circle" ></div>
                    <div class="col-sm-8 col-md-9">
                        <h3>Wine and Beverage Management</h3>
                        <p>You can’t have a great restaurant or food operation without a robust beverage program. In this major, you’ll gain the know-how and confidence to run such a program and be invaluable for your wine and beverage expertise.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="team bwt-90">
    <div class="container text-center">
        <h1 class="title yellow">Meet Our Team</h1>
        <div class="row">
            <div class="col-sm-6 col-md-3 bwt-offset-top-20">
                <div class="teamgrid">
                    <div class="image"><img src="{{asset('images/IMG-20210618-WA0018 2.png')}}" class="img-responsive img-circle" ></div>
                    <h4>Chef Netty</h4>
                    <div class="social-icon">
                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 bwt-offset-top-20">
                <div class="teamgrid">
                    <div class="image"><img src="{{asset('images/IMG-20210618-WA0018 2.png')}}" class="img-responsive img-circle" ></div>
                    <h4>Chef Nancy</h4>
                    <div class="social-icon">
                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 bwt-offset-top-20">
                <div class="teamgrid">
                    <div class="image"><img src="{{asset('images/IMG-20210618-WA0018 2.png')}}" class="img-responsive img-circle" ></div>
                    <h4>Chef Tary</h4>
                    <div class="social-icon">
                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 bwt-offset-top-20">
                <div class="teamgrid">
                    <div class="image"><img src="{{asset('images/IMG-20210618-WA0018 2.png')}}" class="img-responsive img-circle" ></div>
                    <h4>Chef Jessy</h4>
                    <div class="social-icon">
                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-button"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="google-maps">
    <div id="map"></div>
</div>

<section id="contact" class="contact bwt-90">
    <div class="container text-center">
        <h1 class="title">Contact us</h1>
        @if(session()->has('message'))
            <div class="alert alert-success rounded-0 text-centre">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="row">
            <form method="POST" action="{{ route('store') }}">
                @csrf
            <div class="col-md-6 bwt-offset-top-20">
                <input type="text" value="Your Name*" name="name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Name*';}">
            </div>
            <div class="col-md-6 bwt-offset-top-20">
                <input type="text" value="Phone Number*" required name="contactNumber" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Phone Number*';}">
            </div>
            <div class="col-md-6 bwt-offset-top-20">
                <input type="email" value="Your Email*" required name="email" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Email ID*';}">
            </div>
            <div class="col-md-6 bwt-offset-top-20">
                <input type="text" value="Subject*" name="subject" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject*';}">
            </div>
            <div class="col-md-12 bwt-offset-top-20">
                <textarea cols="77" rows="6" value=" " name="description" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Message*';}">Your Message*</textarea>
            </div>
            <div class="col-md-12 bwt-offset-top-20">
                <input type="submit" class="btn btn-primary btn-lg" value="SEND MESSAGE">
            </div>
            </form>
        </div>
    </div>
</section>


<section id="applications" class="team bwt-90">
    <div class="container text-center">
        <h1 class="title">Become A Student</h1>
        @if(session()->has('message'))
            <div class="alert alert-success rounded-0 text-centre">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="row">
            <form method="POST" action="{{ route('apply') }}">
                @csrf
                <div class="col-md-6 bwt-offset-top-20">
                    <input type="text" value="Your Name*" name="name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Name*';}">
                </div>
                <div class="col-md-6 bwt-offset-top-20">
                    <input type="text" value="Phone Number*" required name="contactNumber" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Phone Number*';}">
                </div>
                <div class="col-md-6 bwt-offset-top-20">
                    <input type="email" value="Your Email*" required name="email" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Email ID*';}">
                </div>
                <div class="col-md-6 bwt-offset-top-20">
                    <input type="text" value="ID No*" name="idNo" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject*';}">
                </div>
                <div class="col-md-12 bwt-offset-top-20">
                    <textarea cols="77" rows="6" value=" " name="message" required onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Message*';}">Your Message*</textarea>
                </div>
                <div class="col-md-12 bwt-offset-top-20">
                    <input type="submit" class="btn btn-primary btn-lg" value="SEND MESSAGE">
                </div>
            </form>
        </div>
    </div>
</section>


<section id="login" class="contact bwt-90">
    <div class="container text-center">
        <h1 class="title black">Login</h1>
        @if(session()->has('message'))
            <div class="alert alert-danger rounded-0 text-centre">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-md-12 bwt-offset-top-20">
                    <input type="text" value="Email*" name="email" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Your Name*';}">
                </div>
                <div class="col-md-12 bwt-offset-top-20">
                    <input type="text" value="Password*" required name="password" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Phone Number*';}">
                </div>
                <div class="col-md-12 bwt-offset-top-20">
                    <input type="submit" class="btn btn-primary btn-lg"  {{ __('Log in') }} value="LOGIN (ADMIN)">
                </div>
            </form>
        </div>
    </div>
</section>

<section class="bwt-footer bwt-50">
    <div class="container text-center">
        <h3>Get the latest posts delivery directly to your inbox!</h3>
        @if(session()->has('message'))
            <div class="alert alert-success rounded-0 text-centre">
                {{session()->get('message')}}
            </div>
        @endif
        <div class="form-box">
            <form action="{{ route('postEmail') }}" method="POST">
            @csrf
                <input type="email" placeholder="Enter Your E-mail" name="email" required>
                <input type="submit" class="btn btn-primary btn-lg">
            </form>
        </div>
        <div class="social">
            <a href="#"><i class="fa fa-facebook facebook"></i></a>
            <a href="#"><i class="fa fa-twitter twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus google"></i></a>
            <a href="#"><i class="fa fa-linkedin linked"></i></a>
            <a href="#"><i class="fa fa-youtube youtube"></i></a>
        </div>
        <div class="con">
            <span><i class="fa fa-map-marker"></i> 2735 Glen View 7, Harare, Zimbabwe</span>
            <span><i class="fa fa-phone"></i>+263 78 599 3580</span>
            <span><i class="fa fa-envelope-o"></i>enquiries@nettysculinary.co.zw</span>
        </div>
    </div>
</section>

<section class="bwt-footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-text">Native Designs Zw All Rights Reserved</div>
            </div>

        </div>
    </div>
</section>

<div class="scrollup">
    <a class="page-scroll" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('/js/jquery.lightbox.min.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN6QMkhRai__cvLrV7C4PvkKgZWO8HFUU&callback=initMap"></script>
<script src="{{asset('/js/script.js')}}"></script>

</body>
</html>
