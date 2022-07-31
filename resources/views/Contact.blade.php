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
                <a class="navbar-brand" href="#" height="15px"><img src="Images/Hasanul%20Banna.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About%20Me.html">About Me</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Digital%20Marketing.html">Digital marketing</a></li>
                                <li><a class="dropdown-item" href="Graphic%20Design.html">Graphic Design</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="Web%20Development.html"> Web Wevelopment</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact%20Us.html">Contact Us</a>
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
                                    <h2>Your Information</h2>
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



        <!---------------------------------- Navbar End ---------------------------------------------->





        <div class="container" style="height: 500px" >
            <h1><p class="alert alert-dark " style="text-align: center"> Thank You </p></h1>
<p class="alert alert-success text-success " style="text-align: center"> One of our representatives will contact you very soon. Please stay with us.</p>
        </div>



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
