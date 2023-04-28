<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"/>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">Narayan Art</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

            </ul>

        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/logo.jpeg" alt="Logo" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="Images/csm.jpeg" alt="Chhtrapati shivaji maharaj" width="1000" height="500">
            </div>
            <div class="carousel-item">
                <img src="Images/kgf.jpeg" alt="KGF" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Me</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="Images/img2.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Narayan A. Lingoji</h2>
                    <p class="py-3"> A young, passionate artist from Goa.</p>
                    <a href="about.php" class="btn btn-success">Know me more </a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">My Artwork </h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="Images/hrx.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Hritik Roshan</h4>
                            <p class="card-text">Graphite on A4 sheet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="Images/messi.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Lionel Messi</h4>
                            <p class="card-text">Graphite on A4 sheet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="Images/skapoor.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Shraddha Kapoor</h4>
                            <p class="card-text">Graphite on A4 sheet.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Art Gallery </h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="Images/img2.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="Images/img2.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="Images/img2.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="Images/img2.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="Images/img2.jpg" class="img-fluid pb-4">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="Images/img2.jpg" class="img-fluid pb-4">
                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact</h3>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comment">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    
    <footer>
        
        <p class="p-3 bg-dark text-white text-left">@NarayanArt</p>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
