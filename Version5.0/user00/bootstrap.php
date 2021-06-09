<!DOCTYPE html>
<html lang="en">
<!--Version 5.0 
    Name: Mr. M  
    Date Completed: 
-->

<head>
    <title>My Bootstrap Sample</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- Bootstrap meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Bootstrap sample">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .demo-content {
            padding: 15px;
            font-size: 18px;
            background: #dbdfe5;
            margin-bottom: 15px;
        }

        .demo-content.bg-alt {
            background: #abb1b8;
        }

        .bs-example {
            margin: 20px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(42, 42, 224, 0.485);
        }

        .img-container {
            justify-content: center;
            display: flex;
            flex-direction: row;
            overflow: hidden;

        }

        .img-container .img-to-fit {
            flex: 1;
            height: 100%;
        }

        .fill {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            height: 40vh;
        }

        .fill img {
          
            min-width: 100%;
            min-height: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="jumbotron">
        <h4> Bootstrap Examples</h4>
        <p class="lead"> Let's look at the man different examples of how we can use bootstrap and what bootstrap can do!
        </p>
    </div>
    <aside class="container mt-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                <i class="fa fa-home"></i> Home
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fa fa-camera"></i> Pictures <span class="badge badge-pill badge-primary pull-right">145</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fa fa-music"></i> Music <span class="badge badge-pill badge-primary pull-right">50</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <i class="fa fa-cutlery"></i> Restaurants <span
                    class="badge badge-pill badge-primary pull-right">8</span>
            </a>
        </div>
    </aside>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 img-container">
                <img class="img-to-fit" src="images/20190920_Eden_Prairie_Shakopee_web-2136.jpeg">

            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 img-container">
                <img class="img-to-fit" src="images/shako_by_orndorf.jpeg">

            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 img-container">
                <img class="img-to-fit" src="images/ows_158286520874124_large.jpeg">

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 fill">
                <img src="images/20190920_Eden_Prairie_Shakopee_web-2136.jpeg">

            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 fill">
                <img src="images/shako_by_orndorf.jpeg">

            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>

            <div class="col-md-6 fill">
                <img src="images/ows_158286520874124_large.jpeg">

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <!---------Three Column Layouts--------->
    <div class="container mt-3">
        <!--Row with two equal columns-->
        <div class="row">
            <div class="col-md-6">
                <div class="demo-content">.col-md-6</div>
            </div>
            <div class="col-md-6">
                <div class="demo-content bg-alt">.col-md-6</div>
            </div>
        </div>
        <!--Row with two columns divided in 1:2 ratio-->
        <div class="row">
            <div class="col-md-4">
                <div class="demo-content">.col-md-4</div>
            </div>
            <div class="col-md-8">
                <div class="demo-content bg-alt">.col-md-8</div>
            </div>
        </div>
        <!--Row with two columns divided in 1:3 ratio-->
        <div class="row">
            <div class="col-md-3">
                <div class="demo-content">.col-md-3</div>
            </div>
            <div class="col-md-9">
                <div class="demo-content bg-alt">.col-md-9</div>
            </div>
        </div>

        <!---------Auto Layout Columns--------->
        <div class="row">
            <div class="col ">Column one</div>
            <div class="col ">Column two</div>
            <div class="col ">Column three</div>
            <div class="col ">Column four</div>
            <div class="col ">Column one</div>
            <div class="col ">Column two</div>
            <div class="col ">Column three</div>
            <div class="col ">Column four</div>
            <div class="col ">Column one</div>
            <div class="col ">Column two</div>
            <div class="col ">Column three</div>
            <div class="col ">Column four</div>


        </div>

        <!---------Flexible Layouts--------->
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="demo-content">.col-md-4 .col-lg-3</div>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="demo-content bg-alt">.col-md-8 .col-lg-6</div>
            </div>
            <div class="col-md-12 col-lg-3">
                <div class="demo-content">.col-md-12 .col-lg-3</div>
            </div>
        </div>
    </div>

    <a href="form.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Form Page</a>

    <div class="bs-example">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Row</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Clark</td>
                    <td>Kent</td>
                    <td>clarkkent@mail.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>John</td>
                    <td>Carter</td>
                    <td>johncarter@mail.com</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Peter</td>
                    <td>Parker</td>
                    <td>peterparker@mail.com</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>