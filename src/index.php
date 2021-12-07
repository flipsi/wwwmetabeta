<?php

define('ENGLISH','en_US.UTF-8');
define('GERMAN', 'de_DE.UTF-8');
define('FALLBACK_LANG', ENGLISH);

define('COOKIE_LANG', 'LANG');

$LANG = FALLBACK_LANG;


function manage_user_locale() {
    global $LANG;
    if (!empty($_POST['LANG'])) {
        $LANG = $_POST['LANG'];
        setcookie(COOKIE_LANG, $LANG);
        header('Location: ' . $_SERVER['REQUEST_URI']); // PRG pattern
        exit;
    // } else if (false) { // TODO: detect browser language
        // $LANG = ???
    }
    if (!empty($_COOKIE[COOKIE_LANG] )) {
        $LANG = $_COOKIE[COOKIE_LANG];
    }
}

function setup_localization() {
    global $LANG;
    putenv("LANG=" . $LANG);
    setlocale(LC_ALL, $LANG);
    $domain = "messages"; // files have to be named like that
    bindtextdomain($domain, "./locale"); // location of translations
    textdomain($domain);
}


manage_user_locale();
setup_localization();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        <?php echo gettext('title'); ?>
    </title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="sflip">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
       window.jQuery || document.write('<script src="lib/jquery-1.12.0.min.js"><\/script>');
    </script>

    <script src="js/main.js" charset="utf-8"></script>

    <link href="https://fonts.googleapis.com/css?family=Oxygen|Playfair+Display" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">
    <link href="css/colors.bright.css" class="stylesheet_bright" rel="stylesheet" type="text/css" media="screen" disabled>
    <link href="css/colors.dark.css" class="stylesheet_dark" rel="stylesheet" type="text/css" media="screen">

</head>
<body>

    <header class="header">

        <div class="branding">
            <a href="?page=home">
            <h1>
                <?php echo gettext('title'); ?>
            </h1>
            <h2>
                <?php echo '&thinsp;' . gettext('subtitle'); ?>
            </h2>
            </a>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="?page=home">
                        <?php echo gettext('home'); ?>
                    </a>
                </li>
                <li>
                    <a href="?page=aboutme">
                        <?php echo gettext('aboutme'); ?>
                    </a>
                </li>
                <li>
                    <a href="?page=blog">
                        <?php echo gettext('blog'); ?>
                    </a>
                </li>
            </ul>
        </nav>

    </header>


    <div class="pagewrapper">
        <img class="background" loading="lazy" src="img/monkeymagicos.jpeg" alt=""/>
        <div class="page">

            <?php

                $default_page = 'home';
                $page = !empty($_GET['page']) ? $_GET['page'] : $default_page;

                switch ($page) {

                    case 'home':
                        include 'pages/home/home.php';
                        break;

                    case 'aboutme':
                        include 'pages/aboutme/aboutme.php';
                        break;

                    case 'blog':
                        include 'pages/blog/blog.php';
                        break;

                    case 'imprint':
                        include 'pages/imprint/imprint.php';
                        break;

                    default:
                        include 'pages/home/home.php';
                        break;
                }

             ?>

        </div>
    </div>


    <footer class="footer">

        <div class="copyright">
            © <?php echo date('Y') . ' ' . gettext('name') . '.' ; ?>
        </div>

        <nav>
            <ul>
                <li>
                    <form id="toggleLanguage" action="." method="post">
                        <?php if ($LANG === ENGLISH) : ?>
                            <input type="hidden" name="LANG" value="<?php echo GERMAN; ?>" />
                            <a href="#" onclick="document.getElementById('toggleLanguage').submit();">
                                <?php echo gettext('toggle_german'); ?>
                            </a>
                        <?php else : ?>
                            <input type="hidden" name="LANG" value="<?php echo ENGLISH; ?>" />
                            <a href="#" onclick="document.getElementById('toggleLanguage').submit();">
                                <?php echo gettext('toggle_english'); ?>
                            </a>
                        <?php endif ?>
                    </form>
                </li>
                <li>
                    <a href="#" onclick="return false" class="toggle_dark">
                        <?php echo gettext('toggle_dark'); ?>
                    </a>
                    <a href="#" onclick="return false" class="toggle_bright">
                        <?php echo gettext('toggle_bright'); ?>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="return false" class="toggle_background">
                        <?php echo gettext('toggle_background'); ?>
                    </a>
                </li>
                <li>
                    <a href="?page=home">
                        <?php echo gettext('home'); ?>
                    </a>
                </li>
                <li>
                    <a href="?page=imprint">
                        <?php echo gettext('imprint'); ?>
                    </a>
                </li>
            </ul>
        </nav>

    </footer>

</body>
