<?php
    $SpotifyHeight = 120;
    $SpotifyWidth = 300;
    $SpotifyRadius = 5;
    $SpotifyMusics = [
        "track/7ySUcLPVX7KudhnmNcgY2D?utm_source=generator&si=a9e5e61514124840",
        "album/77HpsjuhHrcZhIp0PyiROw?utm_source=generator&si=d71c5669824d482c",
        "track/5GogEntGPBpfo9vTfIFvJk?utm_source=generator&si=069b6ad6a2314690",
        "track/6TVhP2a7ESba4pR5ePflRw?utm_source=generator&si=ce65855754084301",
        "track/2bLqfJjuC5syrsgDsZfGmn?utm_source=generator&si=6f831eb7d3ee4e0b",
        "track/2VOomzT6VavJOGBeySqaMc?utm_source=generator&si=be0bea7fd0de4548",
        "track/4zD7GnXyl94mNCbyaNw6xf?utm_source=generator&si=f7ba3efbea8b4754"
    ];
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
                <div class="spotifyContent">
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