<?php
    function randomGreeting() {
        $greetings = [
            'Hi!',
            'Hi there!',
            'Hello!',
            'Hey!',
            'Hej!',
            'Servus.',
            'Ciao!',
            'Salut!',
            'Bonjour!',
            'Yo!',
            'Namaste!',
            'Merhaba!',
            'おーい!',
            'สวัสดี!',
            'Mahlzeit.',
            'Moin.',
            'Jode Tach!',
            'Jode Morje!',
            'Grüß dich :)'
        ];
        return $greetings[array_rand($greetings)];
    }
?>

<div class="home">
    <div class="portraitcontainer">
        <div class="portrait"></div>
    </div>
    <div class="thatsme">
        <div class="hi typewriter">
            <?php echo randomGreeting(); ?>
        </div>
        <?php echo sprintf(
            gettext('home:introduction'),
            '<span class="bananatoggle">' . ngettext('banana', 'bananas', 2) . '</span>',
            '<a href="?page=aboutme">' . gettext('home:introduction:get_to_know_me') . '</a>'
        ); ?>



        <div class="links">
            <ul>
                <li>
                    <a href="https://www.linkedin.com/in/flipsi/">
                        <img title="LinkedIn" alt="LinkedIn" src="img/icon/iconfinder_11-linkedin_104493.png" />
                    </a>
                </li>
                <li>
                    <a href="https://www.xing.com/profile/Philipp_Moers3/">
                        <img title="Xing" alt="Xing" src="img/icon/iconfinder_xing_115685.png" />
                    </a>
                </li>
                <li>
                    <a href="https://x.com/soziflip/">
                        <img title="X (Twitter)" alt="X (Twitter)" src="img/icon/11244080_x_twitter_elon musk_twitter new logo_icon.png" />
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/soziflip/">
                        <img title="Instagram" alt="Instagram" src="img/icon/iconfinder_38-instagram_1161953.png" />
                    </a>
                </li>
                <li>
                    <a href="http://www.facebook.com/soziflip/">
                        <img title="Facebook" alt="Facebook" src="img/icon/iconfinder_icon-social-facebook_211902.png" />
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCS80KceXi-mHB51YmZmdlSw/">
                        <img title="Youtube" alt="Youtube" src="img/icon/iconfinder_icon-social-youtube-outline_211928.png" />
                    </a>
                </li>
                <li>
                    <a href="https://github.com/flipsi/">
                        <img title="GitHub" alt="GitHub" src="img/icon/iconfinder_icon-social-github_211904.png" />
                    </a>
                </li>
                <li>
                    <a href="http://stackoverflow.com/users/4568748/philipp-moers?tab=profile/">
                        <img title="Stack Overflow" alt="Stack Overflow" src="img/icon/iconfinder_stackoverflow_394194.png" />
                    </a>
                </li>
                <li>
                    <a href="https://open.spotify.com/user/sozifly?si=8GFuvVJ7REK-8ebDxzn0IQ">
                        <img title="Spotify" alt="Spotify" src="img/icon/iconfinder_spotify_rounded_621252.png" />
                    </a>
                </li>
                <li>
                    <a href="https://paypal.me/sflip">
                        <img title="PayPal" alt="PayPal" src="img/icon/iconfinder_paypal-bank-transaction-money-platform_1169164.png" />
                    </a>
                </li>
                <li>
                    <a href="https://t.me/sflip">
                        <img title="Telegram" alt="Telegram" src="img/icon/iconfinder_335_Telegram_logo_4375490.png" />
                    </a>
                </li>
                <li>
                    <a href="mailto:soziflip+web@gmail.com">
                        <img title="Mail" alt="Mail" src="img/icon/iconfinder_Streamline-58_185078.png" />
                    </a>
                </li>
                <li id="banana">
                    <a href="https://theuselessweb.com/">
                        <img title="Banana" alt="Banana" src="img/icon/iconfinder_Fruits_Outline-10_3692816.png" />
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
