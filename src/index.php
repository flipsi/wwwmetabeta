<?php

$uiStrings = array(
    'title'    => 'Philipp Moers',
    'subtitle' => 'sflip.somedomain.com',
    'aboutme'  => 'About Me',
    'blog'     => 'Blog',
    'misc'     => 'Misc',
);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        <?php echo $uiStrings['title']; ?>
    </title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="sflip">

    <!--<script src="//code.jquery.com/jquery-1.12.0.min.js" charset="utf-8"></script>-->
    <!--<script src="script.js" charset="utf-8"></script>-->

    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/pages/aboutme/aboutme.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/pages/blog/blog.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>

    <header class="header">

        <div class="branding">
            <a href="?page=aboutme">
            <h1>
                <?php echo $uiStrings['title']; ?>
            </h1>
            <h3>
                <?php echo $uiStrings['subtitle']; ?>
            </h3>
            </a>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="?page=aboutme">
                        <?php echo $uiStrings['aboutme']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=blog">
                        <?php echo $uiStrings['blog']; ?>
                    </a>
                </li>
                <li>
                    <a href="?page=misc">
                        <?php echo $uiStrings['misc']; ?>
                    </a>
                </li>
            </ul>
        </nav>

    </header>


    <div class="pagewrapper">
        <div class="page">

            <?php

                switch ($_GET['page']) {

                    case 'aboutme':
                        include 'pages/aboutme/aboutme.php';
                        break;

                    case 'blog':
                        include 'pages/blog/blog.php';
                        break;

                    case 'misc':
                        include 'pages/blog/blog.php';
                        break;

                    default:
                        include 'pages/aboutme/aboutme.php';
                        break;
                }

             ?>



        </div>
    </div>



    <footer class="footer">

        <div class="copyright">
            © Copyright 2016
            <a href="?page=aboutme">Philipp Moers</a>.
            All rights reserved.
        </div>
    </footer>

</body>
