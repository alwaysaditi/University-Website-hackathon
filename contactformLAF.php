<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WORKATEASE-Lost And Found/details</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css1/styles.css" rel="stylesheet" />
</head>

<body>
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(12, 12, 12)">
        <a class="navbar-brand" href="#">
            <img src="logo4.jpg" class="d-inline-block align-center" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active pl-3">
                    <a class="nav-link" href="index.php" style="color: white" ;><b>Home</b> <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link" href="canteen.php" style="color: white;"><b>Canteen service</b> </span></a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link" href="lost1.php" style="color: white;"><b>Lost and found service</b></a>
                </li>
            </ul>
           
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h3 class="mb-5">Details of Lost Item</h3>
                    <h1></h1>
                    <h1></h1>

                        
                        <div class="fcf-body">
                        
                            <div id="fcf-form">
                            <h3 class="fcf-h2"></h3>
                        
                            <form id="fcf-form-id" class="fcf-form-class" method="post" action="lost_submit.php">
                                
                                <div class="fcf-form-group">
                                    <label for="Name" class="fcf-label">Name</label>
                                    <div class="fcf-input-group">
                                        <input size="50" type="text" id="Name" name="Name" class="fcf-form-control" required>
                                    </div>
                                </div>
                                <h1></h1><br>                                <div class="fcf-form-group">
                                    <label for="Email" class="fcf-label" text-size="13">Email address</label>
                                    <div class="fcf-input-group">
                                        <input size="50" type="email" id="Email" name="Email" class="fcf-form-control" required>
                                    </div>
                                </div>
                                <h1></h1><br>
                                <div class="fcf-form-group">
                                    <label for="Mobilenumber" class="fcf-label">Mobile number</label>
                                    <div class="fcf-input-group">
                                        <input size="50" type="text" id="Mobilenumber" name="Mobilenumber" class="fcf-form-control" required>
                                    </div>
                                </div>
                                        <h1></h1><br>
                                <div class="fcf-form-group">
                                    <label for="Message" class="fcf-label">Description of the item lost</label>
                                    <div class="fcf-input-group">
                                        <textarea input size="50" id="Message" name="Message" class="fcf-form-control" rows="5" maxlength="3000" required></textarea>
                                    </div>
                                </div>
                                <h1></h1><br>
                                <div class="fcf-form-group">
                                    <label for="location" class="fcf-label">Location where it was last seen</label>
                                    <div class="fcf-input-group">
                                        <input size="50" type="text" id="location" name="location" class="fcf-form-control" required>
                                    </div>
                                    <h1></h1>
                                    <br>
                                    <div class="fcf-form-group">
                                        <label for="time" class="fcf-label">Time when it was last seen</label>
                                        <div class="fcf-input-group">
                                            <input size="50" type="text" id="time" name="time" class="fcf-form-control" required>
                                        </div>
                                        <h1></h1>
                                        <br><br>
                        
                                <div class="fcf-form-group">
                                   
                                <input type="submit" value="submit">
                                                
                                </div>
                               
                        
                            </form>
                            </div>
                        
                        </div>                
                </div>
                <div class="col-md-17 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="#!">About</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Contact</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                        <li class="list-inline-item">⋅</li>
                        <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© Your Website 2021. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#!"><i class="fab fa-facebook fa-2x fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#!"><i class="fab fa-twitter-square fa-2x fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fab fa-instagram fa-2x fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>