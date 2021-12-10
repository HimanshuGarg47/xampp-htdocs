<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Icoder- Heaven For Programmers</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Icoder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Android Dev</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Write For Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                </ul>
                <form class="d-flex ">
                    <input class="form-control me-2 " type="search " placeholder="Search " aria-label="Search ">
                    <button class="btn btn-outline-danger " type="submit ">Search</button>
                </form>
                <div class="mx-3">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
                    <button class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                </div>
            </div>
    </nav>


    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email_id = $_POST['email_add'];
        $password = $_POST['Password'];
        echo '<div class="alert alert-success" role="alert"> '. '$email_id' . ' successfulled logged in</div>';
    }
    ?>
    <!--  Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login to ICoder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- form -->
                <div class="modal-body">
                    <form action="/Bootstrap/home.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email_add" class=" form-control " id="exampleInputEmail1 " aria-describedby="emailHelp ">
                            <div id="emailHelp " class="form-text ">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputPassword1 " class="form-label ">Password</label>
                            <input type="password " name="Password" class="form-control " id="exampleInputPassword1 ">
                        </div>
                        <div class="mb-3 form-check ">
                            <input type="checkbox " class="form-check-input " id="exampleCheck1 ">
                            <label class="form-check-label " for="exampleCheck1 ">Check me out</label>
                        </div>
                        <button type="submit " class="btn btn-primary ">Login In</button>
                    </form>
                </div>
                <div class="modal-footer ">
                    <button type="button " class="btn btn-secondary " data-bs-dismiss="modal ">Close</button>
                    <!-- <button type="button " class="btn btn-primary ">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- SignUp Modal -->
    <div class="modal fade " id="signupModal " tabindex="-1 " aria-labelledby="signupModalLabel " aria-hidden="true ">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title " id="signupModalLabel ">Create Your Account</h5>
                    <button type="button " class="btn-close " data-bs-dismiss="modal " aria-label="Close "></button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1 " class="form-label ">Email address</label>
                            <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp ">
                            <div id="emailHelp " class="form-text ">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputPassword1 " class="form-label ">Password</label>
                            <input type="password " class="form-control " id="exampleInputPassword1 ">
                            <label for="cexampleInputPassword1 " class="form-label ">Confirm your Password</label>
                            <input type="password " class="form-control " id="cexampleInputPassword1 ">
                        </div>
                        <div class="mb-3 form-check ">
                            <input type="checkbox " class="form-check-input " id="exampleCheck1 ">
                            <label class="form-check-label " for="exampleCheck1 ">Check me out</label>
                        </div>
                        <button type="submit " class="btn btn-primary ">Sign Up</button>
                    </form>
                </div>
                <div class="modal-footer ">
                    <button type="button " class="btn btn-secondary " data-bs-dismiss="modal ">Close</button>
                    <!-- <button type="button " class="btn btn-primary ">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>




    <div id="carouselExampleCaptions " class="carousel slide carousel-fade " data-bs-ride="carousel ">
        <div class="carousel-indicators ">
            <button type="button " data-bs-target="#carouselExampleCaptions " data-bs-slide-to="0 " class="active " aria-current="true " aria-label="Slide 1 "></button>
            <button type="button " data-bs-target="#carouselExampleCaptions " data-bs-slide-to="1 " aria-label="Slide 2 "></button>
            <button type="button " data-bs-target="#carouselExampleCaptions " data-bs-slide-to="2 " aria-label="Slide 3 "></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="https://source.unsplash.com/1400x300/?nature,art " class="d-block w-100 " alt="... ">
                <div class="carousel-caption d-none d-md-block ">
                    <h2>Welcome to iCoder</h2>
                    <p>Technology , News and trends</p>
                    <button class="btn btn-danger ">Technoloy</button>
                    <button class="btn btn-danger ">News</button>
                    <button class="btn btn-danger ">Trends</button>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="https://source.unsplash.com/1400x300/?nature,science " class="d-block w-100 " alt="... ">
                <div class="carousel-caption d-none d-md-block ">
                    <h2>Award wining blog</h2>
                    <p>Technology , News and trends</p>
                    <button class="btn btn-danger ">Technoloy</button>
                    <button class="btn btn-danger ">News</button>
                    <button class="btn btn-danger ">Trends</button>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="https://source.unsplash.com/1400x300/?nature,rainbow " class="d-block w-100 " alt="... ">
                <div class="carousel-caption d-none d-md-block ">
                    <h2>The Best Coding Blog</h2>
                    <p>Technology , News and trends</p>
                    <button class="btn btn-danger ">Technoloy</button>
                    <button class="btn btn-danger ">News</button>
                    <button class="btn btn-danger ">Trends</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev " type="button " data-bs-target="#carouselExampleCaptions " data-bs-slide="prev ">
            <span class="carousel-control-prev-icon " aria-hidden="true "></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next " type="button " data-bs-target="#carouselExampleCaptions " data-bs-slide="next ">
            <span class="carousel-control-next-icon " aria-hidden="true "></span>
            <span class="visually-hidden ">Next</span>
        </button>
    </div>

    <div class="container my-5 mx-6 ">
        <div class="row mb-2 ">
            <div class="col-md-6 ">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                    <div class="col p-4 d-flex flex-column position-static ">
                        <strong class="d-inline-block mb-2 text-black ">World</strong>
                        <h3 class="mb-0 ">Global conference</h3>
                        <div class="mb-1 text-muted ">Nov 12</div>
                        <p class="card-text mb-auto ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="# " class="stretched-link ">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block ">
                        <img class="bd-placeholder-img " width="200 " height="250 " src="images3.jpg " alt=" ">
                        <!-- <svg class="bd-placeholder-img " width="200 " height="250 " xmlns="http://www.w3.org/2000/svg " role="img " aria-label="Placeholder: Thumbnail " preserveAspectRatio="xMidYMid slice " focusable="false
                                    "><title>Placeholder</title><rect width="100% " height="100% " fill="#55595c "></rect><text x="50% " y="50% " fill="#eceeef " dy=".3em ">Thumbnail</text></svg> -->

                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                    <div class="col p-4 d-flex flex-column position-static ">
                        <strong class="d-inline-block mb-2 text-success ">Design</strong>
                        <h3 class="mb-0 ">Post title</h3>
                        <div class="mb-1 text-muted ">Nov 11</div>
                        <p class="mb-auto ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="# " class="stretched-link ">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block ">
                        <img class="bd-placeholder-img " width="200 " height="250 " src="images4.jpg " alt=" ">

                        <!-- <svg class="bd-placeholder-img " width="200 " height="250 " xmlns="http://www.w3.org/2000/svg " role="img " aria-label="Placeholder: Thumbnail " preserveAspectRatio="xMidYMid slice " focusable="false
                                    "><title>Placeholder</title><rect width="100% " height="100% " fill="#55595c "></rect><text x="50% " y="50% " fill="#eceeef " dy=".3em ">Thumbnail</text></svg> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 mx-6 ">
        <div class="row mb-2 ">
            <div class="col-md-6 ">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                    <div class="col p-4 d-flex flex-column position-static ">
                        <strong class="d-inline-block mb-2 text-black ">World</strong>
                        <h3 class="mb-0 ">Global conference</h3>
                        <div class="mb-1 text-muted ">Nov 12</div>
                        <p class="card-text mb-auto ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="# " class="stretched-link ">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block ">
                        <img class="bd-placeholder-img " width="200 " height="250 " src="images3.jpg " alt=" ">
                        <!-- <svg class="bd-placeholder-img " width="200 " height="250 " xmlns="http://www.w3.org/2000/svg " role="img " aria-label="Placeholder: Thumbnail " preserveAspectRatio="xMidYMid slice " focusable="false
                                    "><title>Placeholder</title><rect width="100% " height="100% " fill="#55595c "></rect><text x="50% " y="50% " fill="#eceeef " dy=".3em ">Thumbnail</text></svg> -->

                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative ">
                    <div class="col p-4 d-flex flex-column position-static ">
                        <strong class="d-inline-block mb-2 text-success ">Design</strong>
                        <h3 class="mb-0 ">Post title</h3>
                        <div class="mb-1 text-muted ">Nov 11</div>
                        <p class="mb-auto ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="# " class="stretched-link ">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block ">
                        <img class="bd-placeholder-img " width="200 " height="250 " src="images4.jpg " alt=" ">

                        <!-- <svg class="bd-placeholder-img " width="200 " height="250 " xmlns="http://www.w3.org/2000/svg " role="img " aria-label="Placeholder: Thumbnail " preserveAspectRatio="xMidYMid slice " focusable="false
                                    "><title>Placeholder</title><rect width="100% " height="100% " fill="#55595c "></rect><text x="50% " y="50% " fill="#eceeef " dy=".3em ">Thumbnail</text></svg> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container ">
        <p class="float-end "><a href="# ">Back to top</a></p>
        <p>© 2017–2021 Company, Inc. · <a href="# ">Privacy</a> · <a href="# ">Terms</a></p>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    -->
</body>

</html>