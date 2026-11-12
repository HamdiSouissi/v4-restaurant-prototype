<?php
/**
 * Heritage Collection — prototipo commerciale per ristorazione italiana.
 * Tutti i dati sono dimostrativi e non vengono memorizzati.
 */
$menu = [
    'antipasti' => [
        'label' => 'Antipasti',
        'items' => [
            ['name' => 'Selezione della Via Emilia', 'desc' => 'Prosciutto di Parma, coppa stagionata, Parmigiano Reggiano 30 mesi e giardiniera della casa.', 'price' => '18', 'image' => 'antipasto.webp', 'special' => true],
            ['name' => 'Burrata nell’Orto', 'desc' => 'Burrata cremosa, pomodori confit, basilico, olio alle erbe e pane croccante.', 'price' => '16', 'image' => 'burrata.webp', 'special' => false],
            ['name' => 'Bruschetta del Borgo', 'desc' => 'Pane rustico tostato, pomodoro maturo, aglio gentile, origano e olio delle colline.', 'price' => '12', 'image' => 'bruschetta.webp', 'special' => false],
        ],
    ],
    'paste' => [
        'label' => 'Paste Fresche',
        'items' => [
            ['name' => 'Tortelli d’Erbetta', 'desc' => 'Sfoglia tirata a mano, ricotta ed erbette, burro di montagna e Parmigiano Reggiano.', 'price' => '19', 'image' => 'tortelli.webp', 'special' => true],
            ['name' => 'Tagliatelle al Ragù Lento', 'desc' => 'Pasta all’uovo con ragù della tradizione cotto lentamente nel vino rosso.', 'price' => '21', 'image' => 'tagliatelle.webp', 'special' => false],
            ['name' => 'Lasagnetta della Domenica', 'desc' => 'Sfoglia verde, ragù, besciamella alla noce moscata e crosta dorata al Parmigiano.', 'price' => '22', 'image' => 'lasagna.webp', 'special' => false],
        ],
    ],
    'risotti' => [
        'label' => 'Risotti',
        'items' => [
            ['name' => 'Risotto del Sottobosco', 'desc' => 'Carnaroli, funghi di stagione, timo fresco e mantecatura al Parmigiano.', 'price' => '22', 'image' => 'risotto-funghi.webp', 'special' => true],
            ['name' => 'Riso allo Zafferano', 'desc' => 'Zafferano italiano, fondo vegetale, burro affumicato e polvere di rosmarino.', 'price' => '21', 'image' => 'risotto-zafferano.webp', 'special' => false],
            ['name' => 'Carnaroli alla Parmigiana', 'desc' => 'Riduzione di pomodoro, Parmigiano Reggiano, basilico e cuore morbido di burrata.', 'price' => '20', 'image' => 'burrata.webp', 'special' => false],
        ],
    ],
    'secondi' => [
        'label' => 'Secondi',
        'items' => [
            ['name' => 'Tagliata delle Colline', 'desc' => 'Manzo selezionato, erbe aromatiche, patate al forno e fondo al Lambrusco.', 'price' => '29', 'image' => 'tagliata.webp', 'special' => true],
            ['name' => 'Ossobuco della Tradizione', 'desc' => 'Vitello brasato, gremolada al limone e morbida crema di patate.', 'price' => '28', 'image' => 'ossobuco.webp', 'special' => false],
            ['name' => 'Guancia al Vino Rosso', 'desc' => 'Lunga cottura, ortaggi glassati, polenta morbida e jus ristretto.', 'price' => '27', 'image' => 'tagliata.webp', 'special' => false],
        ],
    ],
    'dolci' => [
        'label' => 'Dolci',
        'items' => [
            ['name' => 'Tiramisù al Cucchiaio', 'desc' => 'Mascarpone, caffè espresso, savoiardo artigianale e cacao amaro.', 'price' => '10', 'image' => 'tiramisu.webp', 'special' => true],
            ['name' => 'Panna Cotta alla Vaniglia', 'desc' => 'Vaniglia naturale, frutti rossi marinati e croccante alle mandorle.', 'price' => '9', 'image' => 'pannacotta.webp', 'special' => false],
            ['name' => 'Semifreddo al Torroncino', 'desc' => 'Miele, nocciole tostate, caramello salato e cioccolato fondente.', 'price' => '10', 'image' => 'pannacotta.webp', 'special' => false],
        ],
    ],
    'vini' => [
        'label' => 'Vini',
        'items' => [
            ['name' => 'Rosso delle Colline', 'desc' => 'Corposo ed elegante, con note di amarena, spezie dolci e legno antico.', 'price' => '38', 'image' => 'wine-table.webp', 'special' => true],
            ['name' => 'Malvasia dei Colli', 'desc' => 'Bianco aromatico e minerale, selezionato da una piccola cantina emiliana.', 'price' => '32', 'image' => 'wine.webp', 'special' => false],
            ['name' => 'Metodo Classico Riserva', 'desc' => 'Trentasei mesi sui lieviti, perlage fine e finale fresco di agrumi.', 'price' => '48', 'image' => 'cellar.webp', 'special' => false],
        ],
    ],
];

$orderItems = [
    ['id' => 'tortelli', 'name' => 'Tortelli d’Erbetta', 'price' => 19, 'image' => 'tortelli.webp', 'note' => 'Burro e Parmigiano 30 mesi'],
    ['id' => 'tagliatelle', 'name' => 'Tagliatelle al Ragù', 'price' => 21, 'image' => 'tagliatelle.webp', 'note' => 'Ragù a lunga cottura'],
    ['id' => 'burrata', 'name' => 'Burrata nell’Orto', 'price' => 16, 'image' => 'burrata.webp', 'note' => 'Pomodori confit e basilico'],
    ['id' => 'tagliata', 'name' => 'Tagliata delle Colline', 'price' => 29, 'image' => 'tagliata.webp', 'note' => 'Patate e fondo al Lambrusco'],
    ['id' => 'tiramisu', 'name' => 'Tiramisù della Casa', 'price' => 10, 'image' => 'tiramisu.webp', 'note' => 'Caffè, mascarpone e cacao'],
    ['id' => 'vino', 'name' => 'Rosso delle Colline', 'price' => 38, 'image' => 'wine-table.webp', 'note' => 'Bottiglia 75 cl'],
];

$reviews = [
    ['name' => 'Antonella R.', 'place' => 'Parma', 'text' => 'Una cena che sa di casa e, allo stesso tempo, sorprende. I tortelli sono delicati, il servizio ha tempi perfetti e la cantina merita il viaggio.', 'image' => 'guest-antonella.webp'],
    ['name' => 'Federico M.', 'place' => 'Milano', 'text' => 'Materia prima eccellente e un’accoglienza rara. Ogni dettaglio, dal pane caldo al consiglio sul vino, racconta una cura autentica.', 'image' => 'guest-federico.webp'],
    ['name' => 'Chiara B.', 'place' => 'Bologna', 'text' => 'L’atmosfera delle vecchie trattorie con l’eleganza di un ristorante contemporaneo. Una serata lenta, calda, indimenticabile.', 'image' => 'guest-chiara.webp'],
];

$faq = [
    ['q' => 'È necessario prenotare?', 'a' => 'La prenotazione è consigliata, soprattutto il venerdì e il sabato sera. Accogliamo volentieri anche gli ospiti senza prenotazione in base alla disponibilità.'],
    ['q' => 'Proponete alternative vegetariane?', 'a' => 'Sì. La nostra cucina prepara ogni giorno piatti vegetariani e può adattare diverse proposte del menù. È sufficiente indicarlo al momento della prenotazione.'],
    ['q' => 'Come comunico allergie o intolleranze?', 'a' => 'Puoi segnalarle nel campo “Richieste” oppure direttamente al personale di sala. Ti guideremo nella scelta con la massima attenzione.'],
    ['q' => 'È disponibile il servizio da asporto?', 'a' => 'Sì, una selezione dei nostri piatti è disponibile per l’asporto e la consegna. Le preparazioni vengono confezionate con cura per preservarne qualità e temperatura.'],
    ['q' => 'Avete una sala per occasioni private?', 'a' => 'La Sala della Cantina può essere riservata per piccoli eventi, cene di famiglia e incontri aziendali. Contattaci per una proposta su misura.'],
];
?>
<!DOCTYPE html>
<html lang="it" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#171310">
    <meta name="description" content="Cucina italiana di tradizione nel cuore di Parma. Pasta fresca, ricette emiliane e una cantina scelta con cura.">
    <title>Heritage Collection — Cucina italiana a Parma</title>
    <link rel="preload" href="assets/fonts/cinzel.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/lora.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/images/hero.webp" as="image" type="image/webp">
    <link rel="stylesheet" href="assets/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>document.documentElement.classList.replace('no-js','js');</script>
</head>
<body>
<a class="skip-link" href="#contenuto">Vai al contenuto</a>

<!-- Icone vettoriali condivise -->
<svg class="svg-sprite" aria-hidden="true">
    <symbol id="i-arrow" viewBox="0 0 24 24"><path d="M5 12h13M13 6l6 6-6 6"/></symbol>
    <symbol id="i-cart" viewBox="0 0 24 24"><path d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 1.9-1.4L21 8H7M10 20h.01M18 20h.01"/></symbol>
    <symbol id="i-close" viewBox="0 0 24 24"><path d="m6 6 12 12M18 6 6 18"/></symbol>
    <symbol id="i-phone" viewBox="0 0 24 24"><path d="M7.5 3H5a2 2 0 0 0-2 2c0 8.8 7.2 16 16 16a2 2 0 0 0 2-2v-2.5l-5-1-1.2 2.4a13.7 13.7 0 0 1-8.7-8.7L8.5 8l-1-5Z"/></symbol>
    <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
    <symbol id="i-pin" viewBox="0 0 24 24"><path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></symbol>
    <symbol id="i-chevron" viewBox="0 0 24 24"><path d="m7 9 5 5 5-5"/></symbol>
    <symbol id="i-trash" viewBox="0 0 24 24"><path d="M4 7h16M9 7V4h6v3m3 0-1 14H7L6 7m4 4v6m4-6v6"/></symbol>
</svg>

<!-- Ingresso visivo -->
<div class="preloader" aria-hidden="true">
    <div class="preloader__seal"><span>H</span></div>
    <p>Heritage Collection</p>
    <div class="preloader__line"><span></span></div>
</div>
<div class="mouse-light" aria-hidden="true"></div>
<div class="dust" aria-hidden="true"></div>

<header class="site-header" id="header">
    <div class="header-shell">
        <nav class="nav nav--left" aria-label="Navigazione principale, prima parte">
            <a href="#home">Home</a>
            <a href="#storia">La Nostra Storia</a>
            <a href="#menu">Menù</a>
        </nav>

        <a class="brand" href="#home" aria-label="Heritage Collection, torna all'inizio">
            <span class="brand__monogram">H</span>
            <span class="brand__name">Heritage</span>
            <span class="brand__sub">Collection · Parma</span>
        </a>

        <nav class="nav nav--right" aria-label="Navigazione principale, seconda parte">
            <a href="#galleria">Galleria</a>
            <a href="#ordina">Consegna</a>
            <a href="#contatti">Contatti</a>
            <a class="nav__booking" href="#prenotazione">Prenota</a>
        </nav>

        <button class="menu-toggle" type="button" aria-label="Apri il menù" aria-expanded="false" aria-controls="mobileNav">
            <span></span><span></span>
        </button>
    </div>
    <nav class="mobile-nav" id="mobileNav" aria-label="Navigazione mobile">
        <span class="mobile-nav__index">Indice</span>
        <a href="#home"><small>01</small> Home</a>
        <a href="#storia"><small>02</small> La Nostra Storia</a>
        <a href="#menu"><small>03</small> Menù</a>
        <a href="#galleria"><small>04</small> Galleria</a>
        <a href="#prenotazione"><small>05</small> Prenotazione</a>
        <a href="#ordina"><small>06</small> Consegna</a>
        <a href="#contatti"><small>07</small> Contatti</a>
    </nav>
</header>

<main id="contenuto">
    <!-- Hero -->
    <section class="hero" id="home" aria-labelledby="hero-title">
        <div class="hero__media parallax-media"><img src="assets/images/hero.webp" alt="Sala di un ristorante italiano illuminata da candele" width="1440" height="1440"></div>
        <div class="hero__shade"></div>
        <div class="hero__ornament hero__ornament--left"></div>
        <div class="hero__ornament hero__ornament--right"></div>
        <div class="hero__content">
            <p class="eyebrow hero__eyebrow"><span></span>Cucina italiana · Parma<span></span></p>
            <h1 id="hero-title">La Tradizione Italiana<br><em>dal Cuore di Parma</em></h1>
            <p class="hero__lead">Ricette custodite nel tempo, pasta tirata a mano e il calore sincero di una tavola emiliana.</p>
            <div class="hero__actions">
                <a class="button button--gold" href="#prenotazione"><span>Prenota ora</span><svg><use href="#i-arrow"/></svg></a>
                <a class="button button--ghost" href="#menu"><span>Scopri il menù</span><svg><use href="#i-arrow"/></svg></a>
            </div>
        </div>
        <div class="hero__aside hero__aside--left">Dal 1968 · Parma</div>
        <div class="hero__aside hero__aside--right">Tradizione · Territorio · Famiglia</div>
        <a class="scroll-cue" href="#storia" aria-label="Scorri alla nostra storia"><span></span><small>Scopri</small></a>
    </section>

    <!-- Manifesto -->
    <section class="manifesto section--paper">
        <div class="container manifesto__grid">
            <p class="vertical-note">Il tempo è il nostro ingrediente segreto</p>
            <div class="manifesto__copy reveal">
                <span class="section-number">01 — Benvenuti</span>
                <p class="manifesto__intro">Ci sono sapori che non si inventano.</p>
                <h2>Si tramandano.</h2>
                <p>La nostra tavola nasce da gesti lenti, ingredienti riconoscibili e storie raccontate sottovoce. È l’Emilia più autentica, servita con una cura contemporanea.</p>
            </div>
            <div class="manifesto__seal" aria-hidden="true"><span>Parma</span><strong>HC</strong><small>Tradizione Italiana</small></div>
        </div>
    </section>

    <!-- Storia -->
    <section class="story section-padding" id="storia" aria-labelledby="story-title">
        <div class="container story__grid">
            <div class="story__visual reveal-image">
                <div class="image-frame"><img src="assets/images/story-pasta.webp" alt="Mani che lavorano la pasta fresca" width="500" height="750" loading="lazy"></div>
                <div class="story__year"><small>La nostra storia</small><strong>1968</strong><span>Parma</span></div>
                <p class="story__caption">Ogni mattina la sfoglia incontra il legno, proprio come una volta.</p>
            </div>
            <div class="story__content reveal">
                <div class="section-heading section-heading--left">
                    <span class="section-kicker">Una storia di famiglia</span>
                    <h2 id="story-title">Dalla cucina di nonna,<br><em>alla tavola di oggi.</em></h2>
                </div>
                <p class="dropcap">Tutto comincia in una piccola cucina affacciata sui tetti di Parma. Una sfoglia stesa sottile, il profumo del ragù e una porta sempre aperta: da allora conserviamo lo stesso modo di accogliere.</p>
                <p>Le ricette cambiano con le stagioni, mai con le mode. Scegliamo produttori vicini, rispettiamo ogni materia prima e lasciamo che sia il tempo a compiere la parte più importante del lavoro.</p>
                <div class="signature">Famiglia Bellini <span>dal 1968</span></div>
                <ol class="story__timeline">
                    <li><strong>1968</strong><span>La prima trattoria</span></li>
                    <li><strong>1996</strong><span>Nasce la cantina</span></li>
                    <li><strong>Oggi</strong><span>La stessa promessa</span></li>
                </ol>
            </div>
        </div>
        <ul class="container stats">
            <li class="stat reveal"><strong data-count="58">0</strong><span>Anni di esperienza</span></li>
            <li class="stat reveal"><strong data-count="42">0</strong><span>Ricette tradizionali</span></li>
            <li class="stat reveal"><strong data-count="27">0</strong><span>Ingredienti locali</span></li>
        </ul>
    </section>

    <!-- Menù -->
    <section class="menu-section section-padding" id="menu" aria-labelledby="menu-title">
        <div class="menu-section__texture"></div>
        <div class="container">
            <div class="section-heading reveal">
                <span class="section-kicker">La cucina</span>
                <h2 id="menu-title">Il Menù</h2>
                <p>Una cucina sincera, costruita ogni giorno intorno alla stagione e alla memoria.</p>
            </div>
            <div class="menu-tabs reveal" role="tablist" aria-label="Categorie del menù">
                <?php $firstCategory = true; foreach ($menu as $slug => $category): ?>
                    <button class="menu-tab<?= $firstCategory ? ' is-active' : '' ?>" type="button" role="tab" aria-selected="<?= $firstCategory ? 'true' : 'false' ?>" aria-controls="panel-<?= $slug ?>" data-menu-tab="<?= $slug ?>"><?= htmlspecialchars($category['label']) ?></button>
                <?php $firstCategory = false; endforeach; ?>
            </div>
            <?php $firstCategory = true; foreach ($menu as $slug => $category): ?>
                <div class="menu-panel<?= $firstCategory ? ' is-active' : '' ?>" id="panel-<?= $slug ?>" role="tabpanel" data-menu-panel="<?= $slug ?>"<?= $firstCategory ? '' : ' hidden' ?>>
                    <?php foreach ($category['items'] as $index => $dish): ?>
                        <article class="dish-card">
                            <div class="dish-card__image">
                                <img src="assets/images/<?= $dish['image'] ?>" alt="<?= htmlspecialchars($dish['name']) ?>" width="600" height="760" loading="lazy">
                                <span class="dish-card__index">0<?= $index + 1 ?></span>
                                <?php if ($dish['special']): ?><span class="dish-card__badge">Specialità della Casa</span><?php endif; ?>
                            </div>
                            <div class="dish-card__body">
                                <div class="dish-card__top"><h3><?= htmlspecialchars($dish['name']) ?></h3><span class="dish-card__line"></span><strong>€ <?= $dish['price'] ?></strong></div>
                                <p><?= htmlspecialchars($dish['desc']) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php $firstCategory = false; endforeach; ?>
            <div class="menu-note reveal">
                <span>Pane e coperto € 4</span><i></i><span>Origine e allergeni disponibili su richiesta</span><i></i><span>Menù stagionale</span>
            </div>
        </div>
    </section>

    <!-- Cantina -->
    <section class="cellar" id="cantina" aria-labelledby="cellar-title">
        <div class="cellar__media parallax-media"><img src="assets/images/cellar.webp" alt="Cantina in pietra con botti di legno" width="500" height="334" loading="lazy"></div>
        <div class="cellar__overlay"></div>
        <div class="container cellar__content">
            <div class="cellar__copy reveal">
                <span class="section-kicker">Sotto le volte di pietra</span>
                <h2 id="cellar-title">La nostra<br><em>Cantina</em></h2>
                <p>Etichette scelte una ad una, piccoli vignaioli, annate che sanno aspettare. Il nostro sommelier accompagna ogni piatto con un vino capace di completarne il racconto.</p>
                <a class="text-link" href="#prenotazione">Prenota un percorso di degustazione <svg><use href="#i-arrow"/></svg></a>
            </div>
            <div class="cellar__selection reveal">
                <span class="cellar__selection-label">Selezione del mese</span>
                <div class="wine-row"><div><small>Emilia-Romagna</small><h3>Rosso delle Colline</h3></div><span>2020</span></div>
                <div class="wine-row"><div><small>Piemonte</small><h3>Nebbiolo Riserva</h3></div><span>2018</span></div>
                <div class="wine-row"><div><small>Toscana</small><h3>Sangiovese in Purezza</h3></div><span>2019</span></div>
                <div class="cellar__foot"><strong>180</strong><span>etichette italiane<br>custodite in cantina</span></div>
            </div>
        </div>
        <div class="candle candle--one" aria-hidden="true"><i></i></div>
        <div class="candle candle--two" aria-hidden="true"><i></i></div>
    </section>

    <!-- Galleria -->
    <section class="gallery-section section-padding" id="galleria" aria-labelledby="gallery-title">
        <div class="container gallery-heading">
            <div class="section-heading section-heading--left reveal">
                <span class="section-kicker">Dentro la nostra casa</span>
                <h2 id="gallery-title">Atmosfere</h2>
            </div>
            <div class="gallery-heading__aside reveal"><span>05</span><p>Una luce calda, il rumore dei calici e il profumo del pane appena sfornato.</p></div>
        </div>
        <section class="swiper gallery-swiper reveal" aria-label="Galleria fotografica">
            <div class="swiper-wrapper">
                <?php
                $gallery = [
                    ['interior-warm.webp', 'La sala principale', 'Luce e intimità'],
                    ['tortelli.webp', 'Pasta fresca', 'Fatta a mano ogni giorno'],
                    ['interior-candles.webp', 'La tavola', 'Il piacere di stare insieme'],
                    ['cellar.webp', 'La cantina', 'Il tempo custodito'],
                    ['tagliata.webp', 'La cucina', 'Materia e precisione'],
                    ['interior-day.webp', 'I dettagli', 'Una casa emiliana'],
                ];
                foreach ($gallery as $index => $photo): ?>
                    <article class="swiper-slide gallery-slide" data-lightbox="assets/images/<?= $photo[0] ?>">
                        <button class="gallery-slide__button" type="button" aria-label="Ingrandisci: <?= $photo[1] ?>"></button>
                        <img src="assets/images/<?= $photo[0] ?>" alt="<?= $photo[1] ?>" width="900" height="1100" loading="lazy">
                        <div class="gallery-slide__caption"><span>0<?= $index + 1 ?></span><div><strong><?= $photo[1] ?></strong><small><?= $photo[2] ?></small></div></div>
                        <i class="gallery-slide__zoom">+</i>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
        <div class="container gallery-controls">
            <div class="gallery-pagination"></div>
            <div class="gallery-arrows"><button class="gallery-prev" type="button" aria-label="Foto precedente">←</button><button class="gallery-next" type="button" aria-label="Foto successiva">→</button></div>
        </div>
    </section>

    <!-- Chef -->
    <section class="chef section-padding" aria-labelledby="chef-title">
        <div class="container chef__grid">
            <div class="chef__portrait reveal-image">
                <span class="chef__stamp">Cucina<br>Italiana</span>
                <img src="assets/images/chef.webp" alt="Lo chef nella sua cucina" width="501" height="750" loading="lazy">
                <div class="chef__portrait-line"></div>
            </div>
            <div class="chef__content reveal">
                <span class="section-kicker">Le mani, prima di tutto</span>
                <blockquote>“La tradizione non è restare fermi. È sapere da dove partire, ogni mattina.”</blockquote>
                <h2 id="chef-title">Lorenzo Bellini</h2>
                <p class="chef__role">Chef patron</p>
                <p>Cresciuto tra la sfoglia della nonna e i mercati di Parma, Lorenzo cucina con rispetto e misura. Le sue ricette conservano un ricordo preciso, alleggerito da tecnica, curiosità e stagionalità.</p>
                <div class="signature signature--chef">Lorenzo Bellini</div>
            </div>
        </div>
    </section>

    <!-- Prenotazione -->
    <section class="booking section-padding" id="prenotazione" aria-labelledby="booking-title">
        <div class="booking__glow"></div>
        <div class="container booking__grid">
            <div class="booking__intro reveal">
                <span class="section-number">06 — Il tuo tavolo</span>
                <h2 id="booking-title">Una sera<br><em>da ricordare.</em></h2>
                <p>Scegli il tuo tavolo. Al resto penseremo noi, con la calma e l’attenzione che ogni ospite merita.</p>
                <div class="booking__contact">
                    <small>Preferisci parlare con noi?</small>
                    <a href="tel:+390521000000"><svg><use href="#i-phone"/></svg> +39&nbsp;0521&nbsp;000&nbsp;000</a>
                </div>
                <div class="booking__ornament" aria-hidden="true"><span></span><i></i><span></span></div>
            </div>
            <form class="booking-form reveal" id="bookingForm" novalidate>
                <div class="field"><label for="nome">Nome e cognome</label><input id="nome" name="nome" type="text" autocomplete="name" required placeholder="Come possiamo chiamarti?"><span></span></div>
                <div class="field"><label for="telefono">Telefono</label><input id="telefono" name="telefono" type="tel" autocomplete="tel" required placeholder="+39"><span></span></div>
                <div class="field field--wide"><label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" required placeholder="nome@email.it"><span></span></div>
                <div class="field"><label for="persone">Numero di persone</label><select id="persone" name="persone" required><option value="">Seleziona</option><?php for ($i=1; $i<=10; $i++): ?><option value="<?= $i ?>"><?= $i ?> <?= $i === 1 ? 'persona' : 'persone' ?></option><?php endfor; ?><option value="11+">Più di 10</option></select><span></span></div>
                <div class="field"><label for="data">Data</label><input id="data" name="data" type="date" min="<?= date('Y-m-d') ?>" required><span></span></div>
                <div class="field"><label for="ora">Ora</label><select id="ora" name="ora" required><option value="">Seleziona</option><option>12:30</option><option>13:00</option><option>13:30</option><option>19:30</option><option>20:00</option><option>20:30</option><option>21:00</option><option>21:30</option></select><span></span></div>
                <fieldset class="field field--choice"><legend>Preferenza</legend><label><input type="radio" name="sala" value="Sala" checked><span>Sala</span></label><label><input type="radio" name="sala" value="Terrazza"><span>Terrazza</span></label></fieldset>
                <div class="field field--wide"><label for="richieste">Richieste particolari <small>facoltativo</small></label><textarea id="richieste" name="richieste" rows="2" placeholder="Allergie, intolleranze o un’occasione speciale"></textarea><span></span></div>
                <label class="privacy-check field--wide"><input type="checkbox" required><span></span>Accetto il trattamento dei dati per la gestione della richiesta.</label>
                <button class="button button--gold field--wide" type="submit"><span>Prenota il tuo tavolo</span><svg><use href="#i-arrow"/></svg></button>
            </form>
        </div>
    </section>

    <!-- Ordina -->
    <section class="order-section section-padding" id="ordina" aria-labelledby="order-title">
        <div class="container">
            <div class="order-heading">
                <div class="section-heading section-heading--left reveal">
                    <span class="section-kicker">La nostra cucina, a casa tua</span>
                    <h2 id="order-title">Porta a casa<br><em>la tradizione.</em></h2>
                </div>
                <div class="order-modes reveal" role="group" aria-label="Modalità dell'ordine">
                    <button class="order-mode is-active" type="button" data-mode="Consegna"><span>Consegna</span><small>40–50 min · da € 3</small></button>
                    <button class="order-mode" type="button" data-mode="Asporto"><span>Asporto</span><small>Pronto in 25 min</small></button>
                </div>
            </div>
            <div class="order-grid">
                <?php foreach ($orderItems as $product): ?>
                    <article class="order-card reveal" data-product-id="<?= $product['id'] ?>">
                        <div class="order-card__image"><img src="assets/images/<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="500" height="380" loading="lazy"></div>
                        <div class="order-card__body">
                            <div><h3><?= htmlspecialchars($product['name']) ?></h3><p><?= htmlspecialchars($product['note']) ?></p></div>
                            <div class="order-card__foot"><strong>€ <?= number_format($product['price'], 2, ',', '.') ?></strong><button class="add-to-cart" type="button" data-id="<?= $product['id'] ?>" data-name="<?= htmlspecialchars($product['name']) ?>" data-price="<?= $product['price'] ?>" data-image="<?= $product['image'] ?>" aria-label="Aggiungi <?= htmlspecialchars($product['name']) ?> al carrello"><span>+</span> Aggiungi</button></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Recensioni -->
    <section class="reviews section-padding" aria-labelledby="reviews-title">
        <div class="reviews__quote" aria-hidden="true">“</div>
        <div class="container">
            <div class="section-heading reveal"><span class="section-kicker">Parole lasciate a tavola</span><h2 id="reviews-title">I nostri ospiti</h2></div>
            <div class="swiper reviews-swiper reveal">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $review): ?>
                        <article class="swiper-slide review-card">
                            <div class="review-card__stars" role="img" aria-label="5 stelle">★★★★★</div>
                            <blockquote>“<?= htmlspecialchars($review['text']) ?>”</blockquote>
                            <div class="review-card__author"><img src="assets/images/<?= $review['image'] ?>" alt="" width="80" height="80" loading="lazy"><div><strong><?= htmlspecialchars($review['name']) ?></strong><span><?= $review['place'] ?> · Ospite verificato</span></div></div>
                        </article>
                    <?php endforeach; ?>
                </div>
                <div class="reviews-pagination"></div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq section-padding" id="faq" aria-labelledby="faq-title">
        <div class="container faq__grid">
            <div class="faq__intro reveal"><span class="section-number">08 — Prima di venire</span><h2 id="faq-title">Domande<br><em>frequenti.</em></h2><p>Se non trovi ciò che cerchi, chiamaci. Saremo felici di aiutarti.</p></div>
            <div class="accordion reveal">
                <?php foreach ($faq as $index => $item): ?>
                    <div class="accordion__item<?= $index === 0 ? ' is-open' : '' ?>">
                        <button type="button" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>"><span><small>0<?= $index + 1 ?></small><?= htmlspecialchars($item['q']) ?></span><i></i></button>
                        <div class="accordion__content"><div><p><?= htmlspecialchars($item['a']) ?></p></div></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contatti -->
    <section class="contact" id="contatti" aria-labelledby="contact-title">
        <div class="contact__map" role="img" aria-label="Mappa stilizzata del centro di Parma">
            <div class="map-art" aria-hidden="true">
                <svg viewBox="0 0 900 700" preserveAspectRatio="xMidYMid slice">
                    <g class="map-roads"><path d="M-20 180C170 120 270 250 430 190S730 40 930 120"/><path d="M20 560C170 460 250 490 380 520s280 100 540-20"/><path d="M160-20c30 180 60 250 20 370S90 570 150 730"/><path d="M660-20c-70 170-40 260 10 350s40 210-30 390"/><path d="M0 350c210-20 310-60 460 20s240 20 450-30"/><path d="M370-20c50 160 0 230-10 360s80 220 90 380"/></g>
                    <g class="map-blocks"><path d="m250 100 80-25 45 80-70 34z"/><path d="m470 78 105-25 28 90-90 30z"/><path d="m80 280 110-40 25 100-125 30z"/><path d="m290 290 115-40 45 80-100 60z"/><path d="m550 240 100-34 52 95-120 44z"/><path d="m210 470 100-40 65 90-110 55z"/><path d="m490 480 150-40 30 110-140 30z"/></g>
                </svg>
                <span class="map-river">Torrente Parma</span>
                <span class="map-label map-label--duomo">Duomo</span>
                <span class="map-label map-label--teatro">Teatro Regio</span>
                <div class="map-pin"><i></i><span>Heritage<br><small>Collection</small></span></div>
            </div>
        </div>
        <div class="contact__panel reveal">
            <span class="section-kicker">Nel cuore di Parma</span>
            <h2 id="contact-title">Vieni a trovarci</h2>
            <p class="contact__address">Borgo del Gusto, 17<br>43121 Parma PR</p>
            <div class="contact__details">
                <a href="tel:+390521000000"><svg><use href="#i-phone"/></svg><span><small>Telefono</small>+39&nbsp;0521&nbsp;000&nbsp;000</span></a>
                <a href="mailto:tavola@heritageparma.it"><span class="contact__at">@</span><span><small>Email</small>tavola@heritageparma.it</span></a>
            </div>
            <div class="hours"><div><span>Mar — Ven</span><strong>12:30–14:30<br>19:30–23:00</strong></div><div><span>Sab — Dom</span><strong>12:30–15:00<br>19:30–23:30</strong></div><small>Lunedì riposo</small></div>
            <a class="text-link" href="#prenotazione">Prenota il tuo tavolo <svg><use href="#i-arrow"/></svg></a>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="footer__grain"></div>
    <div class="container footer__top">
        <div class="footer__brand"><a class="brand brand--footer" href="#home"><span class="brand__monogram">H</span><span class="brand__name">Heritage</span><span class="brand__sub">Collection · Parma</span></a><p>Una tavola italiana, custodita nel tempo.</p></div>
        <div class="footer__nav"><span>Esplora</span><a href="#storia">La nostra storia</a><a href="#menu">Il menù</a><a href="#cantina">La cantina</a><a href="#galleria">Galleria</a></div>
        <div class="footer__nav"><span>Ospitalità</span><a href="#prenotazione">Prenotazione</a><a href="#ordina">Consegna e asporto</a><a href="#contatti">Contatti e orari</a><a href="#faq">Domande frequenti</a></div>
        <div class="footer__newsletter"><span>Lettere dalla cucina</span><p>Storie, stagioni e inviti speciali. Con discrezione.</p><form id="newsletterForm"><label class="sr-only" for="newsletterEmail">La tua email</label><input id="newsletterEmail" type="email" required placeholder="La tua email"><button type="submit" aria-label="Iscriviti alla newsletter"><svg><use href="#i-arrow"/></svg></button></form></div>
    </div>
    <div class="container footer__bottom"><span>© <?= date('Y') ?> Heritage Collection</span><div><a href="#">Privacy</a><a href="#">Cookie</a><a href="#">Note legali</a></div><div class="socials"><a href="#" aria-label="Instagram">Ig</a><a href="#" aria-label="Facebook">Fb</a><a href="#" aria-label="Tripadvisor">Ta</a></div></div>
</footer>

<!-- Carrello laterale -->
<button class="cart-fab" type="button" aria-label="Apri il carrello"><svg><use href="#i-cart"/></svg><span class="cart-count">0</span><small>Carrello</small></button>
<div class="drawer-backdrop"></div>
<aside class="cart-drawer" aria-hidden="true" aria-labelledby="cart-title" inert>
    <div class="cart-drawer__head"><div><small>Il tuo ordine · <span id="cartMode">Consegna</span></small><h2 id="cart-title">Il carrello</h2></div><button class="cart-close" type="button" aria-label="Chiudi il carrello"><svg><use href="#i-close"/></svg></button></div>
    <div class="cart-drawer__items" id="cartItems"><div class="cart-empty"><svg><use href="#i-cart"/></svg><h3>Il carrello è vuoto</h3><p>Scegli qualcosa dalla nostra cucina.</p></div></div>
    <div class="cart-drawer__foot">
        <div><span>Subtotale</span><strong id="cartSubtotal">€ 0,00</strong></div><div><span>Servizio</span><strong id="cartService">€ 3,00</strong></div><div class="cart-total"><span>Totale</span><strong id="cartTotal">€ 0,00</strong></div>
        <button class="button button--gold" id="checkoutButton" type="button" disabled><span>Procedi all’ordine</span><svg><use href="#i-arrow"/></svg></button>
        <small>Pagamento simulato · Nessun addebito reale</small>
    </div>
</aside>

<!-- Finestra di conferma -->
<div class="modal" id="successModal" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="modalTitle" inert>
    <div class="modal__card">
        <button class="modal__close" type="button" aria-label="Chiudi"><svg><use href="#i-close"/></svg></button>
        <div class="modal__seal"><span>✓</span></div>
        <span class="section-kicker">Richiesta ricevuta</span>
        <h2 id="modalTitle">La tua richiesta<br>è stata inviata.</h2>
        <p id="modalMessage">Ti contatteremo presto per confermare ogni dettaglio della prenotazione.</p>
        <button class="button button--outline modal__done" type="button"><span>Torna al sito</span></button>
        <div class="confetti" aria-hidden="true"></div>
    </div>
</div>

<!-- Lightbox -->
<div class="lightbox" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Immagine ingrandita" inert>
    <button class="lightbox__close" type="button" aria-label="Chiudi l'immagine"><svg><use href="#i-close"/></svg></button>
    <img src="assets/images/interior-warm.webp" alt="">
    <span class="lightbox__caption"></span>
</div>

<div class="toast" role="status" aria-live="polite"></div>

<noscript><div class="noscript">Per vivere tutte le animazioni e usare prenotazione e carrello, abilita JavaScript nel browser.</div></noscript>
<script src="assets/vendor/gsap.min.js"></script>
<script src="assets/vendor/ScrollTrigger.min.js"></script>
<script src="assets/vendor/lenis.min.js"></script>
<script src="assets/vendor/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
