<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstap Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>


    <!---------------------------------- Navbar Start ---------------------------------------------->

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html" height="15px"><img src="Images/Hasanul%20Banna.png" alt="Image"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/About')}}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{url('/marketing')}}">Digital marketing</a></li>
                                <li><a class="dropdown-item" href="{{url('/graphic')}}">Graphic Design</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{url('/Web')}}"> Web Wevelopment</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/Contacts')}}">Contact</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success me-2" type="submit">Search</button>
                        <button type="button" class="btn btn-outline-light me-2" data-bs-target="#bc" data-bs-toggle="modal"> Sing_Up </button>
                        <button type="button" class="btn btn-outline-light me-2" data-bs-target="#abc" data-bs-toggle="modal"> Sing_In </button>
                    </form>
                </div>
            </div>
        </nav>


        <!-----------------------------------------Modal Sing-Up Stard --------------------------------------->
        <div class="modal" id="bc">
            <form action="Sucess.html" enctype="multipart/form-data">

                <div class="modal-dialog modal-fullscreen-lg-down">
                    <div class="modal-content">






                        <div class="modal-header">
                            <div class="d-flex flex-row-reverse ">
                                <div class="modal-title p-20  ">
                                    <h2 class="justify-content-center">Your Information</h2>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>



                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <label>User Name</label>
                                    <input type="text" placeholder="" class="form-control form-control-sm">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-sm">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Email</label>
                                    <input type="email" placeholder="" class="form-control form-control-sm">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Date of Birth</label>
                                    <input type="date" placeholder=" dd-mm-YYYY" class="form-control form-control-sm">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Time</label>
                                    <input type="time" placeholder=" hh-mm-ss" class="form-control form-control-sm">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Division</label>
                                    <select class="form-control form-select-sm">
                                        <option value="">Please select your division</option>
                                        <option value="Dhaka" selected="selected">Dhaka</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rajshahi">Khulna</option>
                                        <option value="Rajshahi">Barisal</option>
                                    </select>

                                </div>
                            </div>



                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success me-auto">Save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

                        </div>



                    </div>

                </div>
            </form>

        </div>
        <!-----------------------------------------Modal Sign_Up End --------------------------------------->


        <!-----------------------------------------Modal Sign_In Stard --------------------------------------->

        <div class="modal" id="abc">
            <form action="Sucess.html" enctype="multipart/form-data">

                <div class="modal-dialog modal-fullscreen-lg-down">
                    <div class="modal-content">






                        <div class="modal-header">
                            <div class="d-flex flex-row-reverse ">
                                <div class="modal-title  p-20 ">
                                    <h1> Sign In</h1>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>



                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <label></label>
                                    <input type="text" placeholder="User Name or Email" class="form-control form-control-sm">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label></label>
                                    <input type="password" class="form-control form-control-sm " placeholder="Password">
                                    <label> <a href=""> Forget Password?</a></label>

                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-success mx-auto">Sign IN</button>


                        </div>



                    </div>

                </div>
            </form>

        </div>






        <!-----------------------------------------Modal Sign_In End --------------------------------------->










        <!---------------------------------- Navbar End ---------------------------------------------->




        <!---------------------------------- Carosal Stard ---------------------------------------------->

        <div class="container mt-0.5">

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active col-12">
                    <img src="Images/Devilopment.jpg" class="d-block w-100" style="height:auto" width="100%" alt="...">
                </div>
                <div class="carousel-item col-12">
                    <img src="Images/Digital%20Marketing.jpg" class="d-block w-100" style="height:auto" width="100%" alt="...">
                </div>
                <div class="carousel-item col-12">
                    <img src="Images/Graphic.jpg" class="d-block w-100" style="height:auto" width="100%" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!---------------------------------- Carosal End ---------------------------------------------->







    <!---------------------------------- Team Member Start ---------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <h1 style="text-align: center">Team Member</h1>
            <div class="col-12 col-md-4 col-sm-6 mt-4">
                <div class="card">
                    <img src="Images/images.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jimin of Bts</h5>
                        <p class="card-text">I am Digitla marketer and devoloper. Expert in Web design, Social Media Marketing, Google top ranking, I am skilled at Html, Css, Scss, Php, Javascript</p>
                        <a href="#" class="btn btn-primary"> See More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-sm-6 mt-4">
                <div class="card">
                    <img src="Images/Hasanul%20Banna%20banar.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hasanul Banna</h5>
                        <p class="card-text">I am Web Designer and devoloper. Expert in Web design, Social Media Marketing, Google top ranking, I am skilled at Html, Css, Scss, Php, Javascript. </p>
                        <a href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-sm-6 mt-4">
                <div class="card">
                    <img src="Images/images1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ramona Monique</h5>
                        <p class="card-text">I am a Graphic Designer. Expert in Web layout, Social Media Marketing, Google top ranking, I am skilled at Html, Css, Scss, Php, Javascriptp, Etc </p>
                        <a href="#" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!---------------------------------- Team Member End ---------------------------------------------->




    <!-------------------------------------Ourservices stard-------------------------------------------------------->

    <div class="container mt-5">
        <div class="row">
            <h1 style="text-align: center">Our Services</h1>
            <div class="col-12 col-md-4 col-sm-6 mt-4">
                <div class="card">
                    <img src="Images/Digital%20Marketing%201.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title text-center"> Digital Marketing</h5>
                        <p class="card-text text-center">I will Manage 3 Social Media + Daily interesting 3 Post, Keyword research, Grow Followers and viewers, Ads campaigns, 1 website Google ads, and SEO for 30 days for $400.  </p>
                        <div class="text-center">
                            <a href="Order.html" class="btn btn-dark">Order Now</a>
                            <a href="Digital%20Marketing.html" class="btn btn-dark"> View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-sm-6 mt-4">
                <div class="card">
                    <img src="Images/Graphic%20Design%201.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> Graphic Design</h5>
                        <p class="card-text text-center">I will create interesting designs for you every day, such as logos, web banners, thumbnails, and designs on social media for daily posting. 30 pictures for 30 days at $300. </p>
                        <div class="text-center">
                            <a href="Order.html" class="btn btn-dark">Order Now</a>
                            <a href="Graphic%20Design.html" class="btn btn-dark"> View</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-sm-6 mt-4">
                <div class="card">
                    <img src="Images/Web%20Development%201.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> Web  Development</h5>
                        <p class="card-text text-center">I will do the front-end and back-end web development of 1 website for you. There will be 10 pages. And with Lifetime Support. you will pay $1000 for 30 days. </p>
                        <div class="text-center">
                            <a href="Order.html" class="btn btn-dark">Order Now</a>
                            <a href="Web%20Development.html" class="btn btn-dark"> View</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-------------------------------------Ourservices Eand -------------------------------------------------------->






    <!---------------------------Testimonial Stard--------------------------------->

    <div class="container mt-5">
        <div class="row">
            <h1 style="text-align: center">Testimonial</h1>
            <div class="col-3 mt-4">

            </div>
            <div class="col-6 mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/buyer.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <div class="pb-2 bg-warning" style="text-align:center">
                                    <i class="bi bi-star-"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>

                                </div>
                                <h5 class="card-title" style="text-align: center">Amazing service. The seller went above and beyond for me. Would definitely recommend.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Images/buyer2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <div class="pb-2 bg-warning" style="text-align:center">
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star-half"></i>

                                </div>
                                <h5 class="card-title" style="text-align: center">Excellent job!! Love working with this seller. Communication at all stages of work. I would definitely recommend you for the gig. Keep up the good work!!</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Images/buyer1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <div class="pb-2 bg-warning" style="text-align:center">
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>

                                </div>
                                <h5 class="card-title" style="text-align: center">He is a serious and responsible person. highly recommended</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-3 mt-4">

            </div>
        </div>
    </div>

    <!---------------------------Testimonial End--------------------------------->





    <!------------------------footer start--------------------------------->

    <div class="container mt-5">

        <footer class="bg-dark text-center text-white">

            <div class="container p-4">

                <section class="mb-4">
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                        <span class="fa fa-facebook"></span>
                    </a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                        <span class="fa fa-twitter"></span></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                        <span class="fa fa-instagram"></span>
                    </a>

                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">

                        <span class="fa fa-linkedin"></span>

                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">

                        <span class="fa fa-envelope"></span>

                    </a>
                </section>

                <section class="">
                    <form action="">

                        <div class="row d-flex justify-content-center">

                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong>Sign up for our newsletter</strong>
                                </p>
                            </div>

                            <div class="col-md-5 col-12">

                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="form5Example21" class="form-control" />
                                    <label class="form-label" for="form5Example21">Email address</label>
                                </div>
                            </div>

                            <div class="col-auto">

                                <button type="submit" class="btn btn-outline-light mb-4">
                                    Subscribe
                                </button>
                            </div>

                        </div>

                    </form>
                </section>

                <section class="mb-4">
                    <p>
                        Stay tuned for updates on our new service and details of discounts. And keep subscribing to our site.
                        Thanks everyone
                    </p>
                </section>

            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Bootstrap.com</a>
            </div>

        </footer>

        <!------------------------footer end--------------------------------->

    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
