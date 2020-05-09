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
    <div class="portrait">
        <img loading="lazy" class="regular"  src="img/bewerbungsfoto-20170602-regular.jpg" alt="portait" />
        <img loading="lazy" class="fun" src="img/bewerbungsfoto-20170602-fun.jpg" alt="portait" />
    </div>
    <div class="thatsme">
        <div class="hi">
            <?php echo randomGreeting(); ?>
        </div>
        My name is Philipp.
        Some people call me Flipsi.
        I like to craft software, play music and eat
        <span class="bananatoggle">bananas</span>.
        <a href="?page=aboutme">Get to know me here</a>
        or meet me anywhere:

        <div class="links">
            <ul>
                <li>
                    <a href="https://www.linkedin.com/in/sflip/">
                        <img title="LinkedIn" alt="LinkedIn" src="img/icon/iconfinder_11-linkedin_104493.png" />
                    </a>
                </li>
                <li>
                    <a href="https://www.xing.com/profile/Philipp_Moers3/">
                        <img title="Xing" alt="Xing" src="img/icon/iconfinder_xing_115685.png" />
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/soziflip/">
                        <img title="Twitter" alt="Twitter" src="img/icon/iconfinder_03-twitter_104501.png" />
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
                    <a href="https://github.com/sflip/">
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
