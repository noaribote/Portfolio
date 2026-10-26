<?php require_once 'model/data.php' ?>
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
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="FlexCenter">
        <nav class="limited FlexCenter2" style="position: relative">
            <div class="position-left FlexCenter2">
                <img src="assets/images/logo.png" alt="logo">
                <div>
                    <h4>Noa RIBOTE</h4>
                    <p>Lead Developer Full-Stack & DevOps</p>
                </div>
            </div>
            <div class="position-right">
                <button id="nav-about">À propos</button>
                <button id="nav-project">Projets</button>
                <button>Compétences</button>
                <button>Parcours</button>
                <button id="nav-contact" class="speceBTN">Me contacter&nbsp;↗</button>
            </div>
        </nav>
    </header>
    <main class="FlexCenter">
        <section>


        </section>
        <div class="spoty FlexCenter">
            <div class="limited" style="position: relative">
                <div class="spotyContent">
                    <h1>Voici un avant-goût de mes <em>musiques favorites</em></h1>
                    <br><p>
                        J'écoute beaucoup de musique quand je fais usage de ma voiture, l'un de mes passe-temps favoris.
                        Ajoutez-y davantage de bass avec l'amplificateur et vous obtiendrez de quoi faire évader la carrosserie même.
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
                    <h1>Mes <em>week-ends</em> se résument à...</h1>
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
                    <h1>Soirée <em>ciné ?</em></h1>
                    <br><p>
                        Vrai cinéphile amateur depuis tout jeune. Mon TOP 10 est sûrement discutable mais je le défendrai corps et âme.
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
    </main>
    <footer class="FlexCenter">
        <section class="limited FlexCenter2">
            <div>


            </div>
            <div>


            </div>
        </section>
        <section id="end" class="FlexCenter">
            <div class="limited FlexCenter" style="position: relative">
                <p class="footerBAS">
                    <span><img src="assets/images/logo.png" alt="logo"></span>
                    <span id="copyRightAnnee"></span>
                    <span><button id="toTOPButton-footer">Haut de page&nbsp;↗</button></span>
                </p>
            </div>
        </section>
    </footer>
</body>
<script src="controller/main.js"></script>
<script src="controller/nav.js"></script>
</html>
