<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--My Css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Courtview Cleaners Home</title>
</head>

<body>
    <!--Navigation-->
    <?php require_once('assets/partials/nav.php'); ?>

    <!--Hero-->
    <div class="hero">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Courtview Cleaners</h1>
            <p class="p1 lead">We are the Bronx's primere French cleaners performing expert cleaning, tailoring and alterations using only Eco-Friendly cleaning products!</p>
            <hr class="my-4">

            <!-- Button trigger modal -->
            <button type="button" class="btn-primary" data-toggle="modal" data-target="#modal1">Save time with our delivery service!</button>

            <!-- Modal/Scheduling Pop-Up -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Schedule A Pick-Up or Drop-off Now!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="schedule">
                                <form method="post" action="dh.php">
                                    <label class="w-100"> Full Name<br>
                                        <input type="text" name="fn" class="w-100" required>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="pu" value="pick up"> I would like to schedule a Pick-Up
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="do" value="drop off"> I would like to schedule a Drop-Off
                                    </label>
                                    <br>
                                    <label class="w-100"> Address<br>
                                        <input type="text" name="add" class="w-100" required>
                                    </label>
                                    <br>
                                    <label class="w-100"> Phone Number<br>
                                        <input type="tel" name="ph" class="w-100" required>
                                    </label>
                                    <br>
                                    <label class="w-100"> Email<br>
                                        <input type="email" name="eml" class="w-100" required>
                                    </label>
                                    <br>
                                    <label class="w-100">Description<br>
                                        <textarea name="msg" title="Please provide a brief description of the garments you would like cleaned." class="w-100"></textarea>
                                    </label>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn-save">Save changes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Reviews-->
    <div id="reviews">
        <h1>Rave Reviews</h1>
        <p>At Courtview Cleaners your garments will be treated with care and respect. Read a few of our rave reviews and prove it to yourself!</p>

        <!--Review Carousel-->
        <div id="carousel">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="image"><a href="reviews.php"><img src="assets/img/happy1.jpg" class="d-block w-100 desktop" alt="A Satisfied Customer"></a></div>
                        <div class="carousel-caption d-none d-md-block"><a href="reviews.php">
                                <h5>Raul, Small Business Owner, Bronx, NY</h5>
                                <h6>"Great service!"</h6>
                            </a></div>
                    </div>
                    <div class="carousel-item">
                        <div class="image"><a href="reviews.php"><img src="assets/img/happy2.jpg" class="d-block w-100 desktop" alt="A Satisfied Customer"></a></div>
                        <div class="carousel-caption d-none d-md-block"><a href="reviews.php">
                                <h5>Jessica, Judge, Bronx, NY</h5>
                                <h6>"Quick turnaround!"</h6>
                            </a></div>
                    </div>
                    <div class="carousel-item">
                        <div class="image"><a href="reviews.php"><img src="assets/img/happy3.jpg" class="d-block w-100 desktop" alt="A Satisfied Customer"></a></div>
                        <div class="carousel-caption d-none d-md-block"><a href="reviews.php">
                                <h5>Cecilia, Student, New York, NY</h5>
                                <h6>"Prompt delivery!"</h6>
                            </a></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
    </div>

    <!--Footer-->
    <?php require_once('assets/partials/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
