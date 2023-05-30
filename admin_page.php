<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap icons cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- style link -->
    <link rel="stylesheet" href="styles/admin_style.css">
</head>

<body class="bg_light">
    <nav class="navbar bg-light navbar-wrapper border-bottom sticky-top">
        <button class="border-0 btn-toggler" id="toggle">
            <i class="bi bi-list"></i>
        </button>
        <a href="#" class="navbar-brand d-flex align-items-center me-auto ms-2">
            <img src="images/background01.png" alt="ku_logo" width="50" height="44" class="d-inline-block align-text-top mr-2">

            <div class="d-inline-block align-middle ms-2">
                <span class="d-block fw-bold main-header">Chandaria Incubate</span>
                <span class="d-block fw-bold main-header">Management System</span>
            </div>
        </a>

    </nav>

    <!-- sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
            </a></li>
            <li><a href="">
            <i class="bi bi-person-fill-gear"></i>
            <span>Innovator</span>
            </a></li>
            <li><a href="">
            <i class="bi bi-gear-fill"></i>
            <span>Settings</span>
            </a></li>
            <li><a href="">
            <i class="bi bi-person-circle"></i>
            <span>Profile</span>
            </a></li>
            <li><a href="">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span>
            </a></li>
        </ul>
    </div>

    <!-- right side content -->
    <div class="container-fluid d-inline-block main-content" >
        <div class="row">
            <div class="col">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum possimus, similique minus tenetur eveniet expedita a in illum sint? Beatae, expedita! Exercitationem ipsa provident aspernatur ea error veritatis earum consequatur, nisi rem voluptatum incidunt corporis, quidem accusantium ut vitae facere assumenda tenetur officiis. Doloremque amet consequuntur architecto nisi quaerat nesciunt.</p>
            </div>
            <div class="col">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit placeat earum quas blanditiis, repellat quae veritatis excepturi omnis quos sint sit esse dolorem aspernatur quisquam illo reprehenderit tenetur cupiditate facilis.</p>
            </div>
            <div class="col">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque aspernatur natus praesentium dolor architecto? Quis eos dolores fugiat suscipit dolorem eum ab, cum est maiores quidem doloremque hic, reprehenderit distinctio!</p>
            </div>
        </div>
    </div>


    <script>

        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.main-content');

        const toggleButton = document.querySelector('#toggle');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('menuMinimized'),
            mainContent.classList.toggle('menuMinimizedLayout');
        })


    </script>
    <!-- Bootstrap js Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>