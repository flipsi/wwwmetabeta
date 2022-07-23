<div class="aboutme">

    <nav>
        <ul>
            <li><a href="#article_cv"><?php echo gettext('aboutme:cv'); ?></a></li>
            <li><a href="#article_interests"><?php echo gettext('aboutme:interests'); ?></a></li>
        </ul>
    </nav>

    <main>

        <article id="article_cv">

            <h1><?php echo gettext('aboutme:cv'); ?></h1>

            <ul class="curriculumvitae">
                <li class="container right">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:code_intelligence:when'); ?></div>
                        <div class="where">
                            <a href="https://www.code-intelligence.com"><?php echo gettext('aboutme:cv:code_intelligence:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:code_intelligence:what'); ?></div>
                    </div>
                </li>
                <li class="container left">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:ryte:when'); ?></div>
                        <div class="where">
                            <a href="https://ryte.com"><?php echo gettext('aboutme:cv:ryte:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:ryte:what'); ?></div>
                    </div>
                </li>
                <li class="container right">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:brainworks:when'); ?></div>
                        <div class="where">
                            <a href="https://www.brainworks.de/"><?php echo gettext('aboutme:cv:brainworks:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:brainworks:what'); ?></div>
                    </div>
                </li>
                <li class="container Engineer">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:lmu:when'); ?></div>
                        <div class="where">
                            <a href="https://www.uni-muenchen.de/index.html"><?php echo gettext('aboutme:cv:lmu:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:lmu:what'); ?></div>
                        <div class="thesis">
                            <?php echo gettext('aboutme:thesis'); ?>:
                            <a href="files/masterthesis.pdf" target="_blank">
                                <i><?php echo gettext('aboutme:cv:lmu:thesis_title'); ?></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="container right">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:tubingen:when'); ?></div>
                        <div class="where">
                            <a href="https://uni-tuebingen.de/"><?php echo gettext('aboutme:cv:tubingen:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:tubingen:what'); ?></div>
                        <div class="thesis">
                            <?php echo gettext('aboutme:thesis'); ?>:
                            <a href="files/bachelorthesis.pdf" target="_blank">
                                <i><?php echo gettext('aboutme:cv:tubingen:thesis_title'); ?></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="container left">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:go:when'); ?></div>
                        <div class="where">
                            <a href="https://www.gymnasium-odenthal.de/"><?php echo gettext('aboutme:cv:go:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:go:what'); ?></div>
                    </div>
                </li>
                <li class="container right">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:swimming:when'); ?></div>
                        <div class="where">
                            <?php echo gettext('aboutme:cv:swimming:where'); ?>
                        </div>
                        <div class="what"></div>
                        <div class="what">
                            <a href="https://de.wikipedia.org/wiki/Fr%C3%BChschwimmer">
                                <?php echo gettext('aboutme:cv:swimming:what'); ?>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

        </article>

        <article id="article_interests">

            <h1><?php echo gettext('aboutme:interests'); ?></h1>
            <p><?php echo gettext('aboutme:interests:explanation'); ?></p>

            <div class="interesting_boxes">

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:scala_and_fp:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:scala_and_fp:description'),
                            '<a href="https://www.scala-lang.org/">Scala</a>',
                            '<a href="https://en.wikipedia.org/wiki/Functional_programming">' .
                                gettext('aboutme:interests:scala_and_fp:fp') . '</a>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:reactive_and_streams:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:reactive_and_streams:description'),
                            '<a href="https://www.reactivemanifesto.org/">Reactive Manifesto</a>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:bits_and_dbs:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:bits_and_dbs:description'),
                            '<a href="https://blog.s4rb.com/data-is-the-oil-of-the-21st-century">' .
                                gettext('aboutme:interests:bits_and_dbs:data_is_oil') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/Information_theory">' .
                                gettext('aboutme:interests:bits_and_dbs:information_theory') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/SQL">SQL</a>',
                            '<a href="https://en.wikipedia.org/wiki/Scientia_potentia_est">' .
                                gettext('aboutme:interests:bits_and_dbs:scientia_potentia_est') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:agile_and_communication:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:agile_and_communication:description'),
                            '<a href="https://agilemanifesto.org/">' .
                                gettext('aboutme:interests:agile_and_communication:manifesto') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:linux_and_foss:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:linux_and_foss:description'),
                            '<i><a href="https://publiccode.eu/openletter/">Public Money - Public Code</a></i>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:vim_and_scripting:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:vim_and_scripting:description'),
                            '<a href="https://github.com/flipsi/dotfiles/blob/master/vim/vimrc">' .
                                gettext('aboutme:interests:vim_and_scripting:my_vimrc') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:maths_and_philosophy:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:maths_and_philosophy:description'),
                            '<a href="https://en.wikipedia.org/wiki/Recursion">' .
                                gettext('aboutme:interests:maths_and_philosophy:recursion') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/Isomorphism">' .
                                gettext('aboutme:interests:maths_and_philosophy:isomorphism') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/G%C3%B6del,_Escher,_Bach">' .
                                gettext('aboutme:interests:maths_and_philosophy:geb') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:science_and_cr:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:science_and_cr:description'),
                            '<a href="https://en.wikipedia.org/wiki/G%C3%B6del%27s_incompleteness_theorems">Gödel</a>',
                            '<a href="https://en.wikipedia.org/wiki/Critical_rationalism">' .
                                gettext('aboutme:interests:science_and_cr:cr') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:puzzles_and_problems:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:puzzles_and_problems:description'),
                            '<i>' . gettext('aboutme:interests:puzzles_and_problems:just_works') . '</i>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:music:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:interests:music:description'),
                            '<a href="https://www.youtube.com/user/jacobcolliermusic">Jacob Collier</a>',
                            '<a href="https://www.cantaloupe-jazz.com/wp/">' .
                                gettext('aboutme:interests:music:cantaloupe') . '</a>',
                            '<a href="http://catchatune.de/">' .
                                gettext('aboutme:interests:music:catchatune') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:sports:title'); ?></p>
                    <p class="description">
                        <?php echo gettext('aboutme:interests:sports:description'); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:playing_games:title'); ?></p>
                    <p class="description">
                        <?php echo gettext('aboutme:interests:playing_games:description'); ?>
                    </p>
                </div>

                <!--
                <div>
                    <p class="title"><?php echo gettext('aboutme:interests:bananas:title'); ?></p>
                    <p class="description">
                        <?php echo gettext('aboutme:interests:bananas:description'); ?>
                    </p>
                </div>
                -->

            </div>

        </article>

    </main>

</div>
