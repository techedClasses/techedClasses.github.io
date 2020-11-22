<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/font awsome/css/all.css">
        <title>Document</title>
        <style>
            .bg-dark {
                background: -webkit-linear-gradient(left, #3931af, #00c6ff); !important;
}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">TECHED CLASS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#teched-menu" aria-control="#teched-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="teched-menu">
                <ul  class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($page=='home'){echo 'active';} ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if($page=='about'){echo 'active';} ?>">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item <?php if($page=='library'){echo 'active';} ?>">
                        <a class="nav-link" href="library.php">library</a>
                    </li>
                    <li class="nav-item <?php if($page=='contact'){echo 'active';} ?>">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>