<?php
    require_once 'model/data.php';
    
    $SpotifyHeight = 120;
    $SpotifyWidth = 300;
    $SpotifyRadius = 5;
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
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="FlexCenter">
        <nav class="limited">


        </nav>
    </header>
    <main class="FlexCenter">


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
                                <iframe data-testid="embed-iframe" style="border-radius:'.$SpotifyRadius.'px"
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
            <div class="limited" style="position: relative">
                <div class="spotyContent">
                    <h1><em>Projets</em> sélectionnés</h1>
                    <br><p>Une sélection de quelques-uns de mes projets conçus personnellement avec soin.</p>
                </div>
                <div class="spotyContentRight notScroll">
                    <p class="off"><i class="fa-regular fa-circle-dot"></i>&nbsp;Des idées bien construites</p>
                </div>
                <div class="contentGrid">
                    <?php
                        $cpt = 0;
                        foreach ($Projects as $name => $project) {
                            $constante = ($cpt % 2 === 0) ? "project-offset-sm" : "project-offset";
                            echo '
                                <div class="card '.$constante.'">
                                    <a href="'.htmlspecialchars($project[4], ENT_QUOTES, 'UTF-8').'" target="_blank">
                                        <img src="assets/images/project/'.htmlspecialchars($project[3], ENT_QUOTES, 'UTF-8').'.png" alt="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '">
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
            </div>
        </div>


    </main>
    <footer class="FlexCenter">
        <section class="limited">


        </section>
        <section id="end" class="FlexCenter">
            <div class="limited">


            </div>
        </section>
    </footer>
</body>
<script src="controller/main.js"></script>
</html>