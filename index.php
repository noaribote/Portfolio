<?php
    require_once 'model/data.php';
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noa Ribote | Lead Developer Full-Stack & DevOps</title>
    <meta name="description" content="<?php require 'views/description.html' ?>">
    <meta name="author" content="RIBOTE--MORAL Noa">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" type="image/x-icon" href="assets/images/logo.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if (isset($_GET['display']) && $_GET['display'] === 'mentions'): ?>
        <style>
            body { overflow: hidden !important; }
        </style>
    <?php endif; ?>
</head>
<body>
    <?php if (isset($_GET['display']) && $_GET['display'] === 'mentions'): ?>
        <div class="MentionsContent FlexCenter">
            <?php require_once 'views/mentions.html'; ?>
        </div>
    <?php else: ?>
    <header class="FlexCenter">
        <nav class="limited FlexCenter2" style="position: relative">
            <div class="position-left FlexCenter2">
                <img src="assets/images/logo.png" alt="logo">
                <div>
                    <h4>Noa RIBOTE</h4>
                    <p><i class="fa-regular fa-circle-dot"></i>&nbsp;Lead Developer Full-Stack & DevOps</p>
                </div>
            </div>
            <div class="position-right">
                <button id="nav-about">À propos</button>
                <button class="nav-project">Projets</button>
                <button id="nav-skills">Compétences</button>
                <button id="nav-paths">Parcours</button>
                <button id="nav-contact" class="speceBTN">Me contacter&nbsp;↗</button>
            </div>
        </nav>
    </header>
    <main class="FlexCenter">
        <section class="contentLimited FlexCenter2">
            <div class="contentLEFT FlexCenter">
                <h1>Maître de <em>l'information</em> numérique</h1>
                <p><?php require 'views/description.html' ?></p>
                <div class="position-div">
                    <button class="speceBTN nav-project">Découvrir mes projets&nbsp;↗</button>
                    <button class="speceBTN-second" onclick="
                        const pdf = document.createElement('a'); pdf.href = 'public/downloads/RIBOTE--MORAL_Noa_CV_<?= $pdfCV ?>.pdf';
                        pdf.download = 'RIBOTE--MORAL_Noa_CV_<?= $pdfCV ?>.pdf';
                        document.body.appendChild(pdf); pdf.click(); document.body.removeChild(pdf)
                    ">Consulter mon CV</button>
                </div>
            </div>
            <div class="contentRIGHT FlexCenter">
                <p class="sideText">Développeur web et chef de projet</p>
                <div class="modalView">
                    <img src="assets/images/noa/noaribote.webp" alt="RIBOTE--MORAL Noa">
                </div>
                <span class="off"><strong>RIBOTE--MORAL Noa</strong>&nbsp;·&nbsp;il / lui</span>
            </div>
        </section>
        <div class="spoty FlexCenter">
            <div class="limited" style="position: relative">
                <div class="spotyContent">
                    <h1>Ici, un avant-goût de mes <em>musiques favorites</em></h1>
                    <br><p>
                        J'écoute beaucoup de musique quand je fais usage de ma voiture, l'un de mes passe-temps favoris.
                    </p>
                </div>
                <div class="spotyContentRight">
                    <?php
                        foreach ($SpotifyMusics as $SpotifySuite) {
                            echo '
                                <iframe data-testid="embed-iframe" style="border-radius: 12px"
                                    src="https://open.spotify.com/embed/'.$SpotifySuite.'" width="'.$SpotifyWidth.'" height="'.$SpotifyHeight.'"
                                    frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen;
                                    picture-in-picture" loading="lazy">
                                </iframe>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="spoty heightAuto notColored FlexCenter">
            <div class="limited FlexCenter2" style="position: relative">
                <img class="photo1" src="assets/images/noa/noaribote_side.webp" alt="noa ribote moral side">
                <div class="contre-photo">
                    <h1>Mes <em>week-ends</em> se résument souvent à...</h1>
                    <ul>
                        <li>Travailler sur moi-même</li>
                        <li>Travailler sur mes projets</li>
                        <li>Entretenir mes liens</li>
                        <li>Découvrir de nouvelles choses</li>
                    </ul>
                    <i class="fa-regular fa-images"></i>
                </div>
            </div>
        </div>
        <div class="spoty FlexCenter">
            <div class="limited" style="position: relative">
                <div class="spotyContent">
                    <h1>Mes chefs-d'œuvre <em>cinématographique</em></h1>
                    <br><p>
                        Vrai cinéphile amateur depuis tout jeune. Tant que je n'aurai pas de sensations devant l'œuvre, je n'accrocherai pas.
                    </p>
                </div>
                <div class="movie-carousel" aria-label="Classement des films">
                    <button class="movie-nav movie-nav-prev" type="button" aria-label="Film précédent" disabled>
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                    </button>
                    <div class="movie-viewport" aria-live="polite">
                        <div class="rightCenter FlexCenter2">
                            <?php
                                $place = 1;
                                foreach ($Movies as $movie) {
                                    $num = ($place === 1) ? '<i class="fa-solid fa-trophy"></i>' : htmlspecialchars($place, ENT_QUOTES, 'UTF-8');
                                    echo '
                                        <div class="movie-poster">
                                            <img src="assets/images/movie/'.$movie.'.webp" alt="'.$movie.'">
                                            <h3 class="FlexCenter">'.$num.'</h3>
                                        </div>
                                    ';
                                    $place += 1;
                                }
                            ?>
                        </div>
                        <div class="white-shadow"></div>
                    </div>
                    <button class="movie-nav movie-nav-next" type="button" aria-label="Film suivant">
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="movie-pagination" role="group" aria-label="Position dans le classement">
                    <?php for ($rank = 1; $rank <= $place; $rank++): ?>
                        <button type="button" class="movie-dot<?= $rank === 1 ? ' is-active' : '' ?>" aria-label="Film numero <?= $rank ?>" aria-current="<?= $rank === 1 ? 'true' : 'false' ?>"></button>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="spoty heightAuto notColored FlexCenter" id="projects">
            <div class="limited" style="position: relative">
                <div class="spotyContent">
                    <h1><em>Projets</em> sélectionnés</h1>
                    <br><p>Une sélection de quelques-uns de mes projets conçus avec soin.</p>
                </div>
                <div class="spotyContentRight notScroll">
                    <p class="off"><i class="fa-regular fa-circle-dot"></i>&nbsp;Des idées bien construites</p>
                </div>
                <div class="contentGrid">
                    <?php
                        $cpt = 0;
                        foreach ($Projects as $name => $project) {
                            $constante = ($cpt % 2 === 0) ? "project-offset-sm" : "project-offset";
                            $visibility = $cpt >= 4 ? ' is-hidden-project' : '';
                            echo '
                                <div class="card '.$constante.$visibility.'" data-project-index="'.$cpt.'">
                                    <a href="'.htmlspecialchars($project[4], ENT_QUOTES, 'UTF-8').'" target="_blank">
                                        <img src="assets/images/project/'.htmlspecialchars($project[3], ENT_QUOTES, 'UTF-8').'.webp" alt="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '" loading="lazy" decoding="async">
                                        <div class="FlexCenter animatedArrow">↗</div>
                                    </a>
                                    <h3>
                                        <strong>'.htmlspecialchars($name, ENT_QUOTES, 'UTF-8').'</strong>
                                        <span class="rightH2">'.htmlspecialchars($project[1], ENT_QUOTES, 'UTF-8').'&nbsp;·&nbsp;'.htmlspecialchars($project[2], ENT_QUOTES, 'UTF-8').'</span>
                                    </h3>
                                    <p>'.htmlspecialchars($project[0], ENT_QUOTES, 'UTF-8').'</p>
                                </div>
                            ';
                            $cpt += 1;
                        }
                    ?>
                </div>
                <?php if (count($Projects) > 4): ?>
                    <button class="toGithub projects-show-more" type="button" aria-expanded="false">Voir tous les projets sélectionnés</button>
                <?php endif; ?>
            </div>
            <a id="GoToGit" class="toGithub is-hidden-project" href="https://github.com/noaribote" target="_blank">Voir tous mes projets sur GitHub&nbsp;↗</a>
        </div>
        <div class="spoty FlexCenter">
            <div class="limited FlexCenter" style="position: relative">
                <h1 style="text-align: center; font-size: 45px">
                    <span class="grosseGui">“</span>
                    L'Intelligence Artificielle agit,
                    <br><em>l'Homme réfléchit</em>
                    <span class="mention">
                        <em>« Parce que seul l'Humain pourra contredire une IA sûre d'elle. »</em>
                        <br><br>—&nbsp;Noa
                    </span>
                </h1>
            </div>
        </div>
        <div class="spoty heightAuto notColored FlexCenter" id="skills">
            <div class="limited" style="position: relative">
                <h1>Compétences <em>en pratique</em></h1>
                <br><p>J’apprends en faisant, je progresse en partageant.</p>



            </div>
        </div>
        <div class="spoty FlexCenter">
            <div class="limited FlexCenter" style="position: relative">
                <h1 style="text-align: center; font-size: 45px">
                    <span class="grosseGui">“</span>
                    Le souci du détail,
                    <br><em>sans perdre le sens</em>
                    <span class="mention">
                        <em>« Un bon projet se remarque par ce qu’on voit, et se confirme lorsqu'on ne remarque plus rien. »</em>
                        <br><br>—&nbsp;Noa
                    </span>
                </h1>
            </div>
        </div>
        <div class="spoty heightAuto notColored FlexCenter" id="paths">
            <div class="limited" style="position: relative">
                <h1>Un parcours <em>en mouvement</em></h1>
                <br><p>Une pratique construite avec le temps, les rencontres et les projets.</p>



            </div>
        </div>
    </main>
    <footer class="FlexCenter">
        <section class="limited FlexCenter2" style="position: relative">
            <div id="footerLEFT">
                <h1>Un projet en tête ?<br><em>Parlons-en.</em></h1>
                <p>Une idée à concrétiser, une équipe à rejoindre ou simplement l’envie d’échanger ? Écrivez-moi, je vous répondrai avec plaisir.</p>
                <a href="mailto:noaribotemoral@gmail.com" target="_blank" class="footerButton">M'écrire&nbsp;↗</a>
            </div>
            <div id="footerRIGHT">
                <a href="mailto:noaribotemoral@gmail.com" target="_blank" class="displays notd">
                    <address>noaribotemoral@gmail.com</address>
                    <span>↗</span>
                </a>
                <hr>
                <a href="tel:+336 11 27 02 26" target="_blank" class="displays notd">
                    <address>06 11 27 02 26</address>
                    <span>↗</span>
                </a>
                <hr>
                <div class="displays">
                    <a href="https://www.instagram.com/noaribote" target="_blank" class="bannerPositionInstagram"></a>
                    <a href="https://www.linkedin.com/in/ribote-noa" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://github.com/noaribote" target="_blank"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </section>
        <section id="end" class="FlexCenter">
            <div class="limited FlexCenter" style="position: relative">
                <p class="footerBAS">
                    <span><img src="assets/images/logo.png" alt="logo"></span>
                    <span id="copyRightAnnee"></span>
                    <span class="style_buttons" id="mentionsBTN">&nbsp;·&nbsp;<button>Mentions légales</button></span>
                    <span class="style_buttons" id="sourceBTN">&nbsp;·&nbsp;<button>Code source du site</button></span>
                    <span><button id="toTOPButton-footer">Haut de page&nbsp;↗</button></span>
                </p>
            </div>
        </section>
    </footer>
    <?php endif; ?>
</body>
<script src="controller/main.js"></script>
<script src="controller/nav.js"></script>
</html>
