<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .navbar {
            background-color: #0F416F;
        }

        .footer-wrapper {
            background-color: #0F416F;
        }

        @media screen and (min-width: 760px) {
            .row-wrapper {
                height: 86vh;
            }
        }

        .main-heading {
            color: #0F416F;
        }

        .register-btn {
            background-color: #0F416F;
        }

        .register-btn:hover {
            background-color: #1868A7;
        }

        .navbar .nav-link {
            color: #ffffff;
        }

        .navbar .nav-link:hover {
            color: #cccccc;
        }

        .list-inline-item a {
            color: #ffffff;
        }

        .list-inline-item a:hover {
            color: #cccccc;
        }
    </style>
</head>

<body class="bg-light">
    <!-- navBar -->
    <nav class="navbar navbar-expand-md sticky-top navbar-dark">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="images/background01.png" alt="ku_logo" width="50" height="44" class="d-inline-block align-text-top mr-2">

                <div class="d-inline-block align-middle text-light ms-2">
                    <span class="d-block fw-bold">Chandaria Incubate</span>
                    <span class="d-block fw-bold">Management System</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-nav" aria-controls="mobile-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mobile-nav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a href="registration_form.php" target="_blank" class="nav-link fw-bold">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>