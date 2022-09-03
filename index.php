<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Debit Card Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Payment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn btn-outline-danger" type="submit">Payment</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container main">
        <h3 class="text-center head">Make your Payment through Your debit or credit card..</h3>
        <div class="container part">
            <img src="card5.png" class="center">
            <div class="data">
                <div class="main-wrapper">
                    <div class="content-wrapper">
                        <div class="content-container">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <form class="form-horizontal " method="post" id="contact">
                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">CardHolder Name</label>
                                                    <div class="col-sm-10 inp">
                                                        <input type="text"  title="text" name="name" class="form-control" id="name" autocomplete="off"  placeholder="e.g Jane Applessed">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Card Number
                                                    </label>
                                                    <div class="col-sm-10 inp">
                                                        <input type="text" title="text" name="roll" class="form-control" id="roll" maxlength="50" autocomplete="off" placeholder="e.g 1234 5678 9123 0000">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">Exp.Date[MM/YY]</label>
                                                    <div class="col-sm-10 inp">
                                                        <input type="text" title="text" name="exp" class="form-control" id="exp" autocomplete="off" placeholder=" MM YY">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="default" class="col-sm-2 control-label">CVC</label>
                                                    <div class="col-sm-10 inp">
                                                        <input type="text"  title="text"  name="cvc" class="form-control" id="cvc"
                                                        autocomplete="off" placeholder="e.g 123">
                                                    </div>
                                                </div>
                                                <div class="form-group inp">
                                                    <button type="submit" value="Request Call Back" class="btn btn-primary" id="submit">Confirm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>





    <Script src="jquery.js"></Script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-213901542-1">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>