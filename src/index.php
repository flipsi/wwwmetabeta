<?php

$uiStrings = array(
    'title'    => 'Philipp Moers',
    'subtitle' => 'Software Engineer, Musician, Banana Nerd',
    'aboutme'  => 'Me',
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
       window.jQuery || document.write('<script src="lib/jquery-1.12.0.min.js"><\/script>');
    </script>

    <script src="js/aboutme.js" charset="utf-8"></script>

    <link href="https://fonts.googleapis.com/css?family=Oxygen|Playfair+Display" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">

</head>
<body>

    <header class="header">

        <div class="branding">
            <a href="?page=aboutme">
            <h1>
                <?php echo $uiStrings['title']; ?>
            </h1>
            <h2>
                <?php echo '&thinsp;' . $uiStrings['subtitle']; ?>
            </h2>
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

                    default:
                        include 'pages/aboutme/aboutme.php';
                        break;
                }

             ?>



        </div>
    </div>



    <footer class="footer">

        <div class="copyright">
            © Copyright <?php echo date("Y"); ?>
            <a href="?page=aboutme">Philipp Moers</a>.
            All rights reserved.
        </div>
    </footer>

</body>
