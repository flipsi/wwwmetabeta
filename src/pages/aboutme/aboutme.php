<div class="aboutme">

    <nav>
        <ul>
            <li><a href="#article_cv"><?php echo gettext('aboutme:cv'); ?></a></li>
            <li><a href="#article_interests"><?php echo gettext('aboutme:interests_and_skills'); ?></a></li>
        </ul>
    </nav>

    <main>

        <article id="article_cv">

            <h1><?php echo gettext('aboutme:cv'); ?></h1>

            <ul class="curriculumvitae">
                <li class="container right">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:ryte:when'); ?></div>
                        <div class="where">
                            <a href="https://ryte.com"><?php echo gettext('aboutme:cv:ryte:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:ryte:what'); ?></div>
                    </div>
                </li>
                <li class="container left">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:brainworks:when'); ?></div>
                        <div class="where">
                            <a href="https://www.brainworks.de/"><?php echo gettext('aboutme:cv:brainworks:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:brainworks:what'); ?></div>
                    </div>
                </li>
                <li class="container right">
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
                <li class="container left">
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
                <li class="container right">
                    <div class="content">
                        <div class="when"><?php echo gettext('aboutme:cv:go:when'); ?></div>
                        <div class="where">
                            <a href="https://www.gymnasium-odenthal.de/"><?php echo gettext('aboutme:cv:go:where'); ?></a>
                        </div>
                        <div class="what"><?php echo gettext('aboutme:cv:go:what'); ?></div>
                    </div>
                </li>
                <li class="container left">
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

            <h1><?php echo gettext('aboutme:interests_and_skills'); ?></h1>
            <p><?php echo gettext('aboutme:ias:explanation'); ?></p>

            <div class="interesting_boxes">

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:scala_and_fp:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:scala_and_fp:description'),
                            '<a href="https://www.scala-lang.org/">Scala</a>',
                            '<a href="https://en.wikipedia.org/wiki/Functional_programming">' .
                                gettext('aboutme:ias:scala_and_fp:fp') . '</a>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:reactive_and_streams:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:reactive_and_streams:description'),
                            '<a href="https://www.reactivemanifesto.org/">Reactive Manifesto</a>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:bits_and_dbs:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:bits_and_dbs:description'),
                            '<a href="https://blog.s4rb.com/data-is-the-oil-of-the-21st-century">' .
                                gettext('aboutme:ias:bits_and_dbs:data_is_oil') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/Information_theory">' .
                                gettext('aboutme:ias:bits_and_dbs:information_theory') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/SQL">SQL</a>',
                            '<a href="https://en.wikipedia.org/wiki/Scientia_potentia_est">' .
                                gettext('aboutme:ias:bits_and_dbs:scientia_potentia_est') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:agile_and_communication:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:agile_and_communication:description'),
                            '<a href="https://agilemanifesto.org/">Agile Manifesto</a>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:linux_and_foss:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:linux_and_foss:description'),
                            '<i><a href="https://publiccode.eu/openletter/">Public Money - Public Code</a></i>'
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:vim_and_scripting:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:vim_and_scripting:description'),
                            '<a href="https://github.com/sflip/dotfiles/blob/master/vim/vimrc">' .
                                gettext('aboutme:ias:vim_and_scripting:my_vimrc') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:maths_and_philosophy:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:maths_and_philosophy:description'),
                            '<a href="https://en.wikipedia.org/wiki/Recursion">' .
                                gettext('aboutme:ias:maths_and_philosophy:recursion') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/Isomorphism">' .
                                gettext('aboutme:ias:maths_and_philosophy:isomorphism') . '</a>',
                            '<a href="https://en.wikipedia.org/wiki/G%C3%B6del,_Escher,_Bach">' .
                                gettext('aboutme:ias:maths_and_philosophy:geb') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:science_and_cr:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:science_and_cr:description'),
                            '<a href="https://en.wikipedia.org/wiki/G%C3%B6del%27s_incompleteness_theorems">Gödel</a>',
                            '<a href="https://en.wikipedia.org/wiki/Critical_rationalism">' .
                                gettext('aboutme:ias:science_and_cr:cr') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:puzzles_and_problems:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:puzzles_and_problems:description'),
                            '<i>just works</i>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:music:title'); ?></p>
                    <p class="description">
                        <?php echo sprintf(gettext('aboutme:ias:music:description'),
                            '<a href="https://www.youtube.com/user/jacobcolliermusic">Jacob Collier</a>',
                            '<a href="https://www.cantaloupe-jazz.com/wp/">' .
                                gettext('aboutme:ias:music:cantaloupe') . '</a>',
                            '<a href="http://catchatune.de/">' .
                                gettext('aboutme:ias:music:catchatune') . '</a>',
                        ); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:sports:title'); ?></p>
                    <p class="description">
                        <?php echo gettext('aboutme:ias:sports:description'); ?>
                    </p>
                </div>

                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:playing_games:title'); ?></p>
                    <p class="description">
                        <?php echo gettext('aboutme:ias:playing_games:description'); ?>
                    </p>
                </div>

                <!--
                <div>
                    <p class="title"><?php echo gettext('aboutme:ias:bananas:title'); ?></p>
                    <p class="description">
                        <?php echo gettext('aboutme:ias:bananas:description'); ?>
                    </p>
                </div>
                -->

            </div>

        </article>

    </main>

</div>
