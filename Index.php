<?php include 'components/card.php'; ?>
<?php include 'components/button.php'; ?>
<?php include 'components/nav.php'; ?>
<?php include 'components/footer.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <header class="header">
        <?php renderNav(); ?>
        <section>
            <svg width="0" height="0">
                <defs>
                    <clipPath id="wave" clipPathUnits="objectBoundingBox">
                        <path d="M 0,1 C 0.5 ,0.9 1.4,0.8 1,1.3 V 0 H 0 Z" />
                    </clipPath>
                </defs>
            </svg>
            <div class="margins hero-text">
                <h2>Dé verrassende online reisgids</h2>
                <p class="beschrijving">Cras sed turpis lorem. Curabitur tempus, magna facilisis iaculis vulputate, enim
                    sapien tristique quam, a
                    suscipit lorem ex in orci.</p>
                <?php renderButton('Snel naar alle bestemmingen'); ?>
            </div>
        </section>
    </header>

    <section class="cards-raster margins">
        <div>
            <div class="cards-raster-title">
                <h3>Waar gaat jouw volgende reis naartoe?</h3>
                <p>Wij delen onze favorieten</p>
            </div>
            <div class="card-grid">
                <div>
                    <?php renderCard('Ervaar de rust in betoverend Kroatië', 'Kroatië', '/src/img/kroatie.png'); ?>
                </div>
                <div>
                    <?php renderCard('Italiaanse schoonheid in de Domieten', 'Italië', '/src/img/italie.png'); ?>
                </div>
                <div>
                    <?php renderCard('Ga het avontuur aan in Montenegro', 'Montenegro', '/src/img/montenegro.png'); ?>
                </div>
                <div>
                    <?php renderCard('Snuif de traditionele cultuur op in Peru', 'Peru', '/src/img/peru.png'); ?>
                </div>
                <div>
                    <?php renderCard('De veelzeidigheid van natuurparken in the USA', 'USA', '/src/img/usa.png'); ?>
                </div>
                <div>
                    <?php renderCard('Alle hidden gems en highlights in Canada', 'Canada', '/src/img/canada.png'); ?>
                </div>
            </div>
            <div class="cards-raster-title">
                <?php renderButton('Ontdek alle bestemmingen'); ?>
            </div>
        </div>
    </section>

    <section class="scroll-bestemmingen margins">
        <div>
            <h2>Ideale bestemmingen voor in het najaar</h2>
        </div>
        <div class="betemmingen-cards">
            <div class="container">
                <?php renderCard('Genieten in het rustige Griekenland', 'Griekenland', '/src/img/griekenland.png'); ?>
            </div>
            <div class="container">
                <?php renderCard('Geniet van het microklimaat in Portugal', 'Portugal', '/src/img/portugal.png'); ?>
            </div>
            <div class="container">
                <?php renderCard('Ontdek een andere cultuur in Turkije', 'Turkije', '/src/img/turkije.png'); ?>
            </div>
            <div class="container">
                <?php renderCard('Zalig de zon opsnuiven in Tenerife', 'Canarische Eilanden', '/src/img/canarische-eilanden.png'); ?>
            </div>
            <div>
                <?php renderCard('Ervaar de rust in betoverend Kroatië', 'Kroatië', '/src/img/kroatie.png'); ?>
            </div>
            <div>
                <?php renderCard('Italiaanse schoonheid in de Domieten', 'Italië', '/src/img/italie.png'); ?>
            </div>
            <div>
                <?php renderCard('Ga het avontuur aan in Montenegro', 'Montenegro', '/src/img/montenegro.png'); ?>
            </div>
            <div>
                <?php renderCard('Snuif de traditionele cultuur op in Peru', 'Peru', '/src/img/peru.png'); ?>
            </div>
            <div>
                <?php renderCard('De veelzeidigheid van natuurparken in the USA', 'USA', '/src/img/usa.png'); ?>
            </div>
            <div>
                <?php renderCard('Alle hidden gems en highlights in Canada', 'Canada', '/src/img/canada.png'); ?>
            </div>
        </div>
    </section>

    <section class="lies-jef margins">
        <div class="article">
            <div class="text">
                <h2>Hey! Wij zijn Lies en Jef van Miles & Memories</h2>
                <p>Mauris eu accumsan lectus. Nam eu nibh et justo condimentum pellentesque eu eu leo. Proin ullamcorper
                    justo quis felis luctus varius. Aliquam aliquet imperdiet velit sit amet sodales. Nulla et quam
                    facilisis, ultricies libero vel, tincidunt dui. Quisque convallis efficitur ipsum et commodo.</p>
            </div>
            <div>
                <img src="/src/img/lies-en-jef.png" alt="">
                <svg width="0" height="0">
                    <defs>
                        <clipPath id="cloud" clipPathUnits="objectBoundingBox">
                            <!-- Wolkvorm aan de onderkant -->
                            <path
                                d="M 0.5,0 C 0.85,0 1,0.25 1,0.5 C 1,0.75 0.85,1 0.5,1 C 0.15,1 0,0.75 0,0.5 C 0,0.25 0.15,0 0.5,0 Z" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </section>
    <section class="ontdek-australie">
        <div class="ontdek-Australie-section-content margins">
            <div class="bovenTitel">
                <div class="ontdek-australie-location-icon">
                    <img src='src/icon/location-white.svg'></img>
                    <p>Australië</p>
                </div>
                <p class="ontdek-australie-location-icon">Spotlight</p>
            </div>
            <div>
                <h2>Duik down under in Australië</h2>
            </div>
            <div class="ontdek-australie-beschrijving">
                <p>Proin gravida nulla in massa dapibus, in bibendum orci bibendum. Suspendisse non metus non tellus
                    tristique.</p>
            </div>
            <div><?php renderButton('Ontdek Australië'); ?></div>
        </div>
    </section>

    <section class="landen-lijst margins">

        <div>
            <h3>Europa</h3>
            <a href="">Frankrijk</a>
            <a href="">Italië</a>
            <a href="">Spanje</a>
            <a href="">Zweden</a>
            <a href="">Oostenrijk</a>
            <a href="">Portugal</a>
        </div>
        <div>
            <h3>Afrika</h3>
            <a href="">Algerije</a>
            <a href="">Egypte</a>
            <a href="">Kenia</a>
            <a href="">Marokko</a>
            <a href="">Nigeria</a>
            <a href="">Zuid-Afrika</a>
        </div>
        <div>
            <h3>Azië</h3>
            <a href="">China</a>
            <a href="">India</a>
            <a href="">Japan</a>
            <a href="">Malaysia</a>
            <a href="">Thailand</a>
            <a href="">Vietnam</a>
        </div>
        <div>
            <h3>Zuid-Amerika</h3>
            <a href="">Argentinië</a>
            <a href="">Brazilië</a>
            <a href="">Chili</a>
            <a href="">Colombia</a>
            <a href="">Peru</a>
            <a href="">Uruguay</a>
        </div>
        <div>
            <h3>Noord-Amerika</h3>
            <a href="">Canada</a>
            <a href="">Costa Rica</a>
            <a href="">Mexico</a>
            <a href="">Nicaragua</a>
            <a href="">Panama</a>
            <a href="">Verenigde Staten</a>
        </div>
        <div>
            <h3>Midden-Amerika</h3>
            <a href="">Belize</a>
            <a href="">Costa Rica</a>
            <a href="">El Salvador</a>
            <a href="">Guatemala</a>
            <a href="">Honduras</a>
            <a href="">Nicaragua</a>
        </div>
        <div>
            <h3>Oceanië</h3>
            <a href="">Australië</a>
            <a href="">Fiji</a>
            <a href="">Kiribati</a>
            <a href="">Nieuw-Zeeland</a>
            <a href="">Papua Nieuw-Guinea</a>
            <a href="">Samoa</a>
        </div>
    </section>

    <section>
        <?php renderFooter(); ?>
    </section>
</body>
<script src="/script.js"></script>

</html>