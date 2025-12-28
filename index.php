<?php
/**
 * Extramed-Psy - Standalone Landing Page & Knowledge Base
 * Updated with purple tones, gallery, and fixed mobile menu.
 */

// Articles Data (Sync with articles-data.ts)
$articles = [
    [
        "title" => "Психиатр на дом в Краснодаре: срочная и анонимная помощь",
        "slug" => "психиатр-на-дом-в-краснодаре-срочная-и-анонимная-помощь",
        "category" => "emergency",
        "category_label" => "Экстренная помощь",
        "image" => "/images/art-1.webp",
        "excerpt" => "Когда душевное состояние близкого человека вызывает тревогу, а везти его в клинику нет возможности, лучшее решение — срочный выезд психиатра на дом.",
        "content" => [
            "Когда душевное состояние близкого человека вызывает тревогу, а везти его в клинику нет возможности, лучшее решение — срочный выезд психиатра на дом. Специалисты клиники «Экстрамед-Пси» в Краснодаре готовы приехать к вам в любое время, чтобы оказать профессиональную помощь в комфортной и привычной для пациента обстановке.",
            "Наши врачи обладают многолетним опытом работы с самыми сложными случаями: от острых психозов и панических атак до возрастных изменений психики. Мы гарантируем полную анонимность и индивидуальный подход к каждому пациенту.",
            "Выезд психиатра на дом позволяет не только купировать острые состояния, но и провести первичную диагностику, назначить необходимое лечение и дать рекомендации родственникам по уходу за больным."
        ]
    ],
    [
        "title" => "Лечение истерического расстройства личности",
        "slug" => "лечение-истерического-расстройства-личности",
        "category" => "psychiatry",
        "category_label" => "Психиатрия",
        "image" => "/images/art-2.webp",
        "excerpt" => "Истерическое расстройство личности — это патологическое состояние, характеризующееся чрезмерной эмоциональностью и театральностью поведения.",
        "content" => [
            "Истерическое расстройство личности — это патологическое состояние, характеризующееся чрезмерной эмоциональностью, театральностью поведения и постоянной потребностью во внимании окружающих. Данное расстройство существенно затрудняет построение гармоничных межличностных отношений и требует профессиональной коррекции.",
            "В клинике «Экстрамед-Пси» мы применяем комплексный подход к лечению этого состояния, сочетая медикаментозную терапию (при необходимости) с глубокой психотерапевтической работой. Наши специалисты помогают пациентам осознать причины своего поведения и выработать более адаптивные способы взаимодействия с миром.",
            "Важно понимать, что за демонстративностью и «игрой на публику» часто скрывается глубокая неуверенность в себе и страх одиночества. Бережная терапия позволяет проработать эти глубинные проблемы."
        ]
    ],
    [
        "title" => "Пансионат для пожилых: профессиональный уход",
        "slug" => "пансионат-для-пожилых-профессиональный-уход",
        "category" => "elderly",
        "category_label" => "Пожилым",
        "image" => "/images/art-3.webp",
        "excerpt" => "Ваш близкий в надежных руках. В пансионате «Extramed-Psy» мы берем на себя все заботы о здоровье и комфорте пожилых людей.",
        "content" => [
            "Ваш близкий в надежных руках. В пансионате «Extramed-Psy» на улице Лизы Чайкиной мы берем на себя все заботы о здоровье и комфорте пожилых людей. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни, спокойствие для семьи и профессиональную помощь.",
            "Наш пансионат оборудован всем необходимым для безопасного и комфортного пребывания людей с ограниченными возможностями, деменцией или болезнью Альцгеймера.",
            "Круглосуточный присмотр, сбалансированное питание и насыщенная программа досуга помогают нашим подопечным чувствовать себя нужными и активными."
        ]
    ],
    [
        "title" => "Реабилитация после инсульта в Краснодаре",
        "slug" => "реабилитация-после-инсульта",
        "category" => "rehab",
        "category_label" => "Реабилитация",
        "image" => "/images/art-4.webp",
        "excerpt" => "Своевременная и правильная реабилитация позволяет значительно восстановить утраченные способности и улучшить качество жизни пациента после инсульта.",
        "content" => [
            "Инсульт — это острое нарушение мозгового кровообращения, приводящее к повреждению тканей мозга и нарушению его функций. Своевременная и правильно организованная реабилитация позволяет значительно восстановить утраченные способности и улучшить качество жизни пациента.",
            "В центре «Экстрамед-Пси» мы разработали уникальные программы восстановления, которые включают в себя не только медицинскую поддержку, но и работу с логопедами, кинезиотерапевтами и нейропсихологами.",
            "Мы уделяем особое внимание психологическому состоянию пациента и его родственников, помогая преодолеть депрессию и вернуться к активной жизни."
        ]
    ],
    [
        "title" => "Диагностика и лечение болезни Паркинсона",
        "slug" => "диагностика-и-лечение-болезни-паркинсона",
        "category" => "elderly",
        "category_label" => "Пожилым",
        "image" => "/images/art-3.webp",
        "excerpt" => "Болезнь Паркинсона — это хроническое прогрессирующее заболевание, требующее постоянного контроля и грамотной терапии.",
        "content" => [
            "Болезнь Паркинсона — это хроническое прогрессирующее нейродегенеративное заболевание, характеризующееся гибелью дофаминергических нейронов черной субстанции мозга. Это приводит к характерным двигательным нарушениям: тремору, ригидности и замедленности движений.",
            "Хотя болезнь Паркинсона пока считается неизлечимой, современная медицина позволяет эффективно контролировать симптомы и сохранять активность пациента на протяжении многих лет.",
            "Наши специалисты подбирают индивидуальные схемы лечения, сочетающие медикаментозную терапию с лечебной физкультурой и психологической поддержкой."
        ]
    ],
    [
        "title" => "Диагностика и лечение деменции",
        "slug" => "диагностика-и-лечение-болезни-деменции",
        "category" => "elderly",
        "category_label" => "Пожилым",
        "image" => "/images/art-4.webp",
        "excerpt" => "Деменция — это не приговор. Ранняя диагностика и грамотный уход позволяют сохранить достоинство и качество жизни.",
        "content" => [
            "Деменция — это синдром, характеризующийся стойким снижением когнитивных функций, приводящим к нарушению повседневной активности. Это не естественная часть старения, а серьезное медицинское состояние.",
            "Ранние признаки деменции часто списывают на обычную забывчивость, но именно на этом этапе помощь специалиста наиболее эффективна для замедления процесса.",
            "Комплексный подход в нашей клинике включает медикаментозную поддержку, когнитивные тренинги и обучение родственников правилам общения с больным."
        ]
    ]
];

// Gallery Photos
$clinic_photos = [
    ["url" => "/images/clinic-1.webp", "caption" => "Комфортные палаты"],
    ["url" => "/images/clinic-3.webp", "caption" => "Здание пансионата"],
    ["url" => "/images/clinic-4.webp", "caption" => "Зона приема"],
    ["url" => "/images/clinic-5.webp", "caption" => "Места для отдыха"],
    ["url" => "/images/clinic-6.webp", "caption" => "Коридоры"],
    ["url" => "/images/clinic-7.webp", "caption" => "Интерьер"]
];

// Routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// SEO
$seo_title = "Extramed-Psy | Пансионат для пожилых в Краснодаре";
$seo_description = "Профессиональный уход и безопасность для ваших близких в Краснодаре. Пансионат на ул. Лизы Чайкиной.";

if ($page === 'articles') {
    $seo_title = "База знаний - Статьи экспертов | Extramed-Psy";
} elseif ($page === 'article' && !empty($slug)) {
    foreach ($articles as $a) {
        if ($a['slug'] === $slug) {
            $seo_title = $a['title'];
            $seo_description = $a['excerpt'];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $seo_title; ?></title>
    <meta name="description" content="<?php echo $seo_description; ?>">
    <style>
        :root {
            --primary: #7c3aed;
            --primary-hover: #6d28d9;
            --secondary: #f5f3ff;
            --text: #1e1b4b;
            --text-muted: #64748b;
            --white: #ffffff;
            --bg: #fafafa;
            --radius: 1.5rem;
            --shadow: 0 10px 30px -5px rgba(124, 58, 237, 0.1);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        a { text-decoration: none; transition: 0.3s; }
        
        header { position: fixed; top: 0; width: 100%; height: 80px; background: rgba(255,255,255,0.8); backdrop-filter: blur(10px); z-index: 1000; border-bottom: 1px solid #eee; }
        .nav-flex { display: flex; align-items: center; justify-content: space-between; height: 100%; }
        .logo { display: flex; align-items: center; gap: 10px; font-weight: 900; color: var(--primary); font-size: 1.5rem; }
        .logo-icon { width: 40px; height: 40px; background: var(--primary); border-radius: 10px; display: flex; align-items: center; justify-content: center; transform: rotate(-5deg); }
        
        .nav-links { display: none; gap: 30px; }
        @media (min-width: 1024px) { .nav-links { display: flex; } }
        .nav-links a { color: var(--text-muted); font-weight: 700; font-size: 0.9rem; }
        .nav-links a:hover { color: var(--primary); }
        
        .btn { padding: 12px 24px; border-radius: 1rem; font-weight: 800; cursor: pointer; border: none; display: inline-flex; align-items: center; gap: 8px; font-size: 0.95rem; }
        .btn-primary { background: var(--primary); color: white; box-shadow: 0 10px 20px -5px rgba(124, 58, 237, 0.4); }
        .btn-primary:hover { background: var(--primary-hover); transform: translateY(-2px); }
        .btn-outline { border: 2px solid var(--primary); color: var(--primary); background: transparent; }
        .btn-outline:hover { background: var(--secondary); }

        .hero { padding: 160px 0 100px; background: linear-gradient(135deg, #f5f3ff 0%, #fff 100%); overflow: hidden; }
        .hero-grid { display: grid; gap: 50px; grid-template-columns: 1fr; align-items: center; }
        @media (min-width: 1024px) { .hero-grid { grid-template-columns: 1fr 1fr; } }
        .hero h1 { font-size: 2.5rem; font-weight: 900; line-height: 1.1; margin-bottom: 20px; }
        @media (min-width: 768px) { .hero h1 { font-size: 3.5rem; } }
        .hero p { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 35px; max-width: 500px; }
        .hero-img { position: relative; }
        .hero-img img { width: 100%; border-radius: 2.5rem; border: 10px solid white; box-shadow: var(--shadow); transform: rotate(2deg); }

        section { padding: 100px 0; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-size: 2.5rem; font-weight: 900; margin-bottom: 15px; }
        .section-title .badge { background: var(--secondary); color: var(--primary); padding: 6px 16px; border-radius: 20px; font-weight: 800; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; }

        .grid-3 { display: grid; gap: 30px; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .card { background: white; padding: 40px; border-radius: 2rem; border: 1px solid #f1f1f1; transition: 0.3s; }
        .card:hover { transform: translateY(-10px); box-shadow: var(--shadow); }
        .card h3 { margin-bottom: 15px; font-weight: 900; }

        .gallery-grid { display: grid; gap: 15px; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); }
        .gallery-item { border-radius: 1.5rem; overflow: hidden; aspect-ratio: 4/3; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
        .gallery-item:hover img { scale: 1.1; }

        .article-card { background: white; border-radius: 2rem; overflow: hidden; border: 1px solid #f1f1f1; display: flex; flex-direction: column; height: 100%; }
        .article-card img { aspect-ratio: 16/10; object-fit: cover; width: 100%; }
        .article-content { padding: 30px; flex-grow: 1; }
        .article-content h4 { font-size: 1.3rem; margin-bottom: 15px; font-weight: 900; }
        .article-content p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; }

        .floating-cta { position: fixed; right: 20px; bottom: 20px; z-index: 900; display: flex; flex-direction: column; gap: 10px; }
        .f-btn { width: 56px; height: 56px; border-radius: 28px; display: flex; align-items: center; justify-content: center; color: white; box-shadow: 0 10px 20px rgba(0,0,0,0.15); border: 3px solid white; }
        .f-wa { background: #25D366; }
        .f-tg { background: #229ED9; }
        .f-ph { background: var(--primary); animation: pulse 2s infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(124, 58, 237, 0.4); } 70% { box-shadow: 0 0 0 15px rgba(124, 58, 237, 0); } 100% { box-shadow: 0 0 0 0 rgba(124, 58, 237, 0); } }

        .modal { position: fixed; inset: 0; background: rgba(0,0,0,0.6); backdrop-filter: blur(5px); z-index: 2000; display: none; align-items: center; justify-content: center; padding: 20px; }
        .modal-body { background: white; padding: 40px; border-radius: 2rem; max-width: 450px; width: 100%; position: relative; }
        .modal-close { position: absolute; top: 20px; right: 20px; font-size: 2rem; cursor: pointer; border: none; background: none; color: #ccc; }
        .form-input { width: 100%; padding: 15px; margin-bottom: 15px; border-radius: 12px; border: 1px solid #eee; font-size: 1rem; }

        .burger-btn { display: flex; flex-direction: column; gap: 5px; background: var(--secondary); padding: 10px; border-radius: 10px; border: none; cursor: pointer; }
        @media (min-width: 1024px) { .burger-btn { display: none; } }
        .burger-btn span { width: 25px; height: 3px; background: var(--primary); border-radius: 2px; }

        .mobile-menu { position: fixed; top: 0; right: 0; bottom: 0; width: 80%; max-width: 300px; background: white; z-index: 1500; padding: 40px; transform: translateX(100%); transition: 0.4s; box-shadow: -10px 0 30px rgba(0,0,0,0.1); }
        .mobile-menu.active { transform: translateX(0); }
        .m-nav-link { display: block; font-size: 1.2rem; font-weight: 800; padding: 15px 0; border-bottom: 1px solid #f5f5f5; color: var(--text); }
        .overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 1400; display: none; }

        footer { background: #0f172a; color: white; padding: 80px 0 40px; }
        .footer-grid { display: grid; gap: 40px; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
    </style>
</head>
<body>

    <header>
        <div class="container nav-flex">
            <a href="?page=home" class="logo">
                <div class="logo-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
                Extramed-Psy
            </a>
            <nav class="nav-links">
                <a href="?page=home#about">О нас</a>
                <a href="?page=home#prices">Цены</a>
                <a href="?page=articles">База знаний</a>
                <a href="?page=home#contacts">Контакты</a>
            </nav>
            <div style="display: flex; gap: 15px; align-items: center;">
                <a href="tel:88612906619" class="btn btn-primary" style="display: none; sm: flex;">8 (861) 290-66-19</a>
                <button class="burger-btn" id="burger"><span></span><span></span><span></span></button>
            </div>
        </div>
    </header>

    <div class="overlay" id="overlay"></div>
    <div class="mobile-menu" id="m-menu">
        <div style="margin-bottom: 30px; font-weight: 900; color: var(--primary);">МЕНЮ</div>
        <a href="?page=home" class="m-nav-link">Главная</a>
        <a href="?page=home#prices" class="m-nav-link">Цены</a>
        <a href="?page=articles" class="m-nav-link">База знаний</a>
        <a href="?page=home#contacts" class="m-nav-link">Контакты</a>
        <div style="margin-top: 30px;">
            <a href="tel:88612906619" class="btn btn-primary" style="width: 100%;">Позвонить</a>
        </div>
    </div>

    <main>
        <?php if ($page === 'home'): ?>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <h1 style="color: var(--primary);">Пансионат для пожилых в Краснодаре</h1>
                    <h2 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--text-muted);">профессиональный уход и безопасность для ваших близких</h2>
                    <p>Ваш близкий в надежных руках. В пансионате «Extramed-Psy» на улице Лизы Чайкиной мы берем на себя все заботы о здоровье и комфорте пожилых людей. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни.</p>
                    <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                        <a href="tel:88612906619" class="btn btn-primary">Получить консультацию врача</a>
                        <button class="btn btn-outline" onclick="toggleModal(true)">Записаться на онлайн-экскурсию</button>
                    </div>
                </div>
                <div class="hero-img">
                    <img src="/images/clinic-hero.webp" alt="Пансионат Extramed-Psy">
                </div>
            </div>
        </section>

        <section id="gallery" style="background: #fff;">
            <div class="container">
                <div class="section-title">
                    <span class="badge">Фотогалерея</span>
                    <h2>Наш пансионат</h2>
                </div>
                <div class="gallery-grid">
                    <?php foreach ($clinic_photos as $p): ?>
                    <div class="gallery-item">
                        <img src="<?php echo $p['url']; ?>" alt="<?php echo $p['caption']; ?>">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="articles">
            <div class="container">
                <div class="section-title">
                    <span class="badge">База знаний • <?php echo count($articles); ?> статей</span>
                    <h2>Полезные материалы</h2>
                </div>
                <div class="grid-3">
                    <?php foreach (array_slice($articles, 0, 3) as $a): ?>
                    <a href="?page=article&slug=<?php echo $a['slug']; ?>" class="article-card">
                        <img src="<?php echo $a['image']; ?>" alt="">
                        <div class="article-content">
                            <h4><?php echo $a['title']; ?></h4>
                            <p><?php echo $a['excerpt']; ?></p>
                            <span style="color: var(--primary); font-weight: 800;">Читать далее →</span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div style="text-align: center; margin-top: 50px;">
                    <a href="?page=articles" class="btn btn-outline">Смотреть все статьи (<?php echo count($articles); ?>)</a>
                </div>
            </div>
        </section>

        <section id="prices" style="background: var(--secondary);">
            <div class="container">
                <div class="section-title">
                    <span class="badge">Стоимость</span>
                    <h2>Наши цены</h2>
                </div>
                <div style="background: white; border-radius: 2rem; overflow: hidden; box-shadow: var(--shadow);">
                    <table style="width: 100%; border-collapse: collapse;">
                        <tr style="background: #f8fafc; border-bottom: 2px solid #eee;">
                            <th style="padding: 25px; text-align: left;">Услуга</th>
                            <th style="padding: 25px; text-align: right;">Цена</th>
                        </tr>
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 20px 25px; font-weight: 700;">Базовый уход и проживание</td>
                            <td style="padding: 20px 25px; text-align: right; font-weight: 900; color: var(--primary);">от 1750 ₽/сут</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 20px 25px; font-weight: 700;">Реабилитация после инсульта</td>
                            <td style="padding: 20px 25px; text-align: right; font-weight: 900; color: var(--primary);">от 2000 ₽/сут</td>
                        </tr>
                        <tr>
                            <td style="padding: 20px 25px; font-weight: 700;">Уход при деменции и Альцгеймере</td>
                            <td style="padding: 20px 25px; text-align: right; font-weight: 900; color: var(--primary);">от 1900 ₽/сут</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <?php elseif ($page === 'articles'): ?>
        <section style="padding-top: 140px;">
            <div class="container">
                <div class="section-title">
                    <span class="badge">Всего <?php echo count($articles); ?> материалов</span>
                    <h2>База знаний</h2>
                </div>
                <div class="grid-3">
                    <?php foreach ($articles as $a): ?>
                    <a href="?page=article&slug=<?php echo $a['slug']; ?>" class="article-card">
                        <img src="<?php echo $a['image']; ?>" alt="">
                        <div class="article-content">
                            <h4><?php echo $a['title']; ?></h4>
                            <p><?php echo $a['excerpt']; ?></p>
                            <span style="color: var(--primary); font-weight: 800;">Читать далее →</span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php elseif ($page === 'article'): ?>
        <section style="padding-top: 140px;">
            <div class="container">
                <?php 
                $art = null;
                foreach($articles as $item) { if($item['slug'] === $slug) $art = $item; }
                if($art):
                ?>
                <a href="?page=articles" style="display: inline-flex; align-items: center; gap: 8px; color: var(--primary); font-weight: 800; margin-bottom: 30px;">← Назад в базу знаний</a>
                <h1 style="font-size: 3rem; font-weight: 900; margin-bottom: 30px; line-height: 1.1;"><?php echo $art['title']; ?></h1>
                <div style="border-radius: 2.5rem; overflow: hidden; margin-bottom: 40px; box-shadow: var(--shadow);">
                    <img src="<?php echo $art['image']; ?>" style="width: 100%; height: 500px; object-fit: cover;">
                </div>
                <div style="max-width: 800px; margin: 0 auto; font-size: 1.2rem; line-height: 1.8;">
                    <?php foreach($art['content'] as $p) echo "<p style='margin-bottom: 25px;'>$p</p>"; ?>
                </div>
                <div style="margin-top: 60px; padding: 50px; background: var(--primary); color: white; border-radius: 2.5rem; text-align: center;">
                    <h3 style="font-size: 2rem; margin-bottom: 20px;">Нужна помощь специалиста?</h3>
                    <p style="margin-bottom: 30px; opacity: 0.9;">Мы работаем круглосуточно. Звоните прямо сейчас или пишите в мессенджеры.</p>
                    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                        <a href="tel:88612906619" class="btn" style="background: white; color: var(--primary);">8 (861) 290-66-19</a>
                        <a href="https://wa.me/79282579115" class="btn btn-outline" style="border-color: white; color: white;">WhatsApp</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <div class="modal" id="modal">
        <div class="modal-body">
            <button class="modal-close" onclick="toggleModal(false)">&times;</button>
            <h3 style="font-size: 1.8rem; font-weight: 900; margin-bottom: 10px;">Онлайн-экскурсия</h3>
            <p style="color: var(--text-muted); margin-bottom: 25px;">Оставьте контакты, и мы проведем видео-тур по нашему пансионату.</p>
            <form action="mailto:alexsamara134@yandex.ru" method="post" enctype="text/plain">
                <input type="text" name="name" placeholder="Ваше имя" required class="form-input">
                <input type="tel" name="phone" placeholder="Ваш телефон" required class="form-input">
                <button type="submit" class="btn btn-primary" style="width: 100%; height: 60px;">Отправить заявку</button>
            </form>
        </div>
    </div>

    <div class="floating-cta">
        <a href="https://wa.me/79282579115" class="f-btn f-wa" title="WhatsApp">WA</a>
        <a href="https://t.me/ExtraMed93" class="f-btn f-tg" title="Telegram">TG</a>
        <a href="tel:88612906619" class="f-btn f-ph" title="Позвонить">📞</a>
    </div>

    <footer id="contacts">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Extramed-Psy</h3>
                    <p style="opacity: 0.7;">Пансионат для пожилых людей в Краснодаре. Профессиональный медицинский уход и реабилитация.</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 20px;">Адрес</h4>
                    <p style="opacity: 0.7;">Краснодар, ул. Лизы Чайкиной</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 20px;">Контакты</h4>
                    <a href="tel:88612906619" style="font-size: 1.5rem; font-weight: 900; color: white;">8 (861) 290-66-19</a>
                    <p style="opacity: 0.7; margin-top: 10px;">alexsamara134@yandex.ru</p>
                </div>
            </div>
            <div style="margin-top: 60px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); text-align: center; opacity: 0.5; font-size: 0.8rem;">
                © 2024 Extramed-Psy. Все права защищены.
            </div>
        </div>
    </footer>

    <script>
        const burger = document.getElementById('burger');
        const menu = document.getElementById('m-menu');
        const overlay = document.getElementById('overlay');

        function toggleMenu(show) {
            if (show) {
                menu.classList.add('active');
                overlay.style.display = 'block';
                document.body.style.overflow = 'hidden';
            } else {
                menu.classList.remove('active');
                overlay.style.display = 'none';
                document.body.style.overflow = '';
            }
        }

        burger.addEventListener('click', () => toggleMenu(!menu.classList.contains('active')));
        overlay.addEventListener('click', () => toggleMenu(false));
        document.querySelectorAll('.m-nav-link').forEach(l => l.addEventListener('click', () => toggleMenu(false)));

        function toggleModal(show) {
            document.getElementById('modal').style.display = show ? 'flex' : 'none';
        }
    </script>
</body>
</html>
