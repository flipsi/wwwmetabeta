<?php

define('ENGLISH','en_US.UTF-8');
define('GERMAN', 'de_DE.UTF-8');
define('FALLBACK_LANG', ENGLISH);

define('COOKIE_LANG', 'LANG');

$LANG = FALLBACK_LANG;


function manage_user_locale() {
    global $LANG;
    $browser_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (!empty($_POST['LANG'])) {
        $LANG = $_POST['LANG'];
        setcookie(COOKIE_LANG, $LANG);
        header('Location: ' . $_SERVER['REQUEST_URI']); // PRG pattern
        exit;
    }
    if (!empty($_COOKIE[COOKIE_LANG])) {
        $LANG = $_COOKIE[COOKIE_LANG];
    } else {
        $LANG = $browser_language === 'de' ? GERMAN : FALLBACK_LANG;
        setcookie(COOKIE_LANG, $LANG);
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
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)">
    <link href="css/mobile.css" rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)">
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

        <div class="menu">
            <div class="setting_icons">
                <ul>
                    <li>
                        <form id="toggleLanguage" action="?<?php echo $_SERVER['QUERY_STRING']; ?>" method="post">
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
                            <div class="material-icons">dark_mode</div>
                        </a>
                        <a href="#" onclick="return false" class="toggle_bright">
                            <div class="material-icons">light_mode</div>
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="return false" class="toggle_background">
                            <div class="material-icons">image</div>
                        </a>
                    </li>
                </ul>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="?page=home">
                            <?php echo gettext('home'); ?>
                        </a>
                    </li><li>
                        <a href="?page=aboutme">
                            <?php echo gettext('aboutme'); ?>
                        </a>
                    </li><li>
                        <a href="?page=blog">
                            <?php echo gettext('blog'); ?>
                        </a>
                    </li><li>
                        <a href="?page=wishlist">
                            <?php echo gettext('wishlist'); ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="material-icons menu_icon">menu</div>

    </header>


    <div class="pagewrapper">
        <img class="background" loading="lazy" src="img/04134_sassolungo_resized.jpg" alt=""/>
        <div class="page">

            <?php

                $default_page = 'home';
                $page = !empty($_GET['page']) ? $_GET['page'] : $default_page;

                switch ($page) {

                    case 'aboutme':
                        include 'pages/aboutme/aboutme.php';
                        break;

                    case 'blog':
                        include 'pages/blog/blog.php';
                        break;

                    case 'wishlist':
                        include 'pages/wishlist/wishlist.php';
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
                    <a href="?page=imprint">
                        <?php echo gettext('imprint'); ?>
                    </a>
                </li>
            </ul>
        </nav>

    </footer>

</body>
