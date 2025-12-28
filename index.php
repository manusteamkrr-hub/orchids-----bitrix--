<?php
/**
 * Extramed-Psy - Standalone Landing Page & Knowledge Base
 * Fully autonomous index.php with PHP routing, embedded styles and icons.
 */

// Articles Data
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
        "title" => "Диагностика и лечение деменции",
        "slug" => "диагностика-и-лечение-деменции",
        "category" => "elderly",
        "category_label" => "Пожилым",
        "image" => "/images/art-3.webp",
        "excerpt" => "Деменция — это не приговор. Ранняя диагностика и грамотный уход позволяют сохранить достоинство и качество жизни.",
        "content" => [
            "Деменция — это синдром, характеризующийся стойким снижением когнитивных функций, приводящим к нарушению повседневной активности. Это не естественная часть старения, а серьезное медицинское состояние.",
            "Ранние признаки деменции часто списывают на обычную забывчивость, но именно на этом этапе помощь специалиста наиболее эффективна для замедления процесса.",
            "Комплексный подход в нашей клинике включает медикаментозную поддержку, когнитивные тренинги и обучение родственников правилам общения с больным."
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
    ]
];

// Clinic Photos for Carousel
$clinic_photos = [
    ["url" => "/images/clinic-3.webp", "caption" => "Здание клиники"],
    ["url" => "/images/clinic-1.webp", "caption" => "Палата"],
    ["url" => "/images/clinic-4.webp", "caption" => "Холл"],
    ["url" => "/images/clinic-5.webp", "caption" => "Зона отдыха"],
    ["url" => "/images/clinic-6.webp", "caption" => "Коридор"],
    ["url" => "/images/clinic-7.webp", "caption" => "Интерьер номера"],
    ["url" => "/images/clinic-hero.webp", "caption" => "Внешний вид"]
];

// Routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// SEO Metadata
$seo_title = "Extramed-Psy | Пансионат для пожилых в Краснодаре";
$seo_description = "Профессиональный уход за пожилыми людьми в Краснодаре. Специализируемся на деменции, Альцгеймере, реабилитации после инсульта. Круглосуточно 24/7.";

if ($page === 'articles') {
    $seo_title = "База знаний - Статьи о здоровье и уходе | Extramed-Psy";
    $seo_description = "Полезные статьи от экспертов клиники Экстрамед-Пси о лечении психических расстройств, уходе за пожилыми и реабилитации.";
} elseif ($page === 'article' && !empty($slug)) {
    foreach ($articles as $a) {
        if ($a['slug'] === $slug) {
            $seo_title = $a['title'] . " | Extramed-Psy";
            $seo_description = $a['excerpt'];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ru" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $seo_title; ?></title>
    <meta name="description" content="<?php echo $seo_description; ?>">
    <meta name="keywords" content="пансионат для пожилых краснодар, уход при деменции, реабилитация после инсульта, психиатр на дом краснодар">
    
    <style>
        :root {
            --primary: #6d28d9;
            --primary-light: #8b5cf6;
            --primary-dark: #4c1d95;
            --primary-foreground: #ffffff;
            --accent: #d946ef;
            --background: #fafafa;
            --foreground: #1e1b4b;
            --muted: #f5f3ff;
            --muted-foreground: #6b7280;
            --card: #ffffff;
            --card-border: #e9e5ff;
            --shadow-xl: 0 20px 25px -5px rgba(109, 40, 217, 0.2);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background: var(--background); color: var(--foreground); line-height: 1.5; overflow-x: hidden; }
        a { text-decoration: none; color: inherit; transition: all 0.2s; }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; display: block; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }

        /* Navigation */
        header { position: fixed; top: 0; left: 0; right: 0; height: 80px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px); border-bottom: 1px solid var(--card-border); z-index: 1000; display: flex; align-items: center; }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; width: 100%; }
        .logo { display: flex; align-items: center; gap: 12px; }
        .logo-icon { width: 48px; height: 48px; background: var(--primary); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: white; transform: rotate(-5deg); box-shadow: 0 8px 16px -4px rgba(109, 40, 217, 0.4); }
        .logo-text h1 { font-size: 1.5rem; font-weight: 900; color: var(--primary); }
        .logo-text span { font-size: 10px; text-transform: uppercase; color: var(--muted-foreground); font-weight: 700; }
        
        .main-nav { display: none; gap: 24px; }
        @media (min-width: 1024px) { .main-nav { display: flex; } }
        .nav-link { font-size: 0.875rem; font-weight: 700; color: var(--muted-foreground); }
        .nav-link:hover, .nav-link.active { color: var(--primary); }

        .burger-btn { display: flex; flex-direction: column; gap: 6px; background: var(--muted); padding: 10px; border-radius: 12px; border: none; cursor: pointer; }
        @media (min-width: 1024px) { .burger-btn { display: none; } }
        .burger-btn span { width: 24px; height: 3px; background: var(--primary); border-radius: 2px; transition: 0.3s; }
        .burger-btn.active span:nth-child(1) { transform: translateY(9px) rotate(45deg); }
        .burger-btn.active span:nth-child(2) { opacity: 0; }
        .burger-btn.active span:nth-child(3) { transform: translateY(-9px) rotate(-45deg); }

        /* Mobile Menu */
        .mobile-menu { position: fixed; inset: 0; background: white; z-index: 999; display: flex; flex-direction: column; padding: 100px 32px 32px; transform: translateX(100%); transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .mobile-menu.active { transform: translateX(0); }
        .mobile-nav-link { font-size: 1.5rem; font-weight: 900; color: var(--foreground); padding: 20px 0; border-bottom: 1px solid var(--muted); }
        
        /* Buttons */
        .btn { display: inline-flex; align-items: center; justify-content: center; padding: 0.75rem 1.75rem; border-radius: 1rem; font-weight: 700; cursor: pointer; border: none; transition: 0.3s; gap: 10px; }
        .btn-primary { background: var(--primary); color: white; }
        .btn-outline { background: transparent; border: 2px solid var(--primary); color: var(--primary); }
        
        /* Sidebar CTA */
        .sidebar-cta { position: fixed; right: 24px; top: 50%; transform: translateY(-50%); z-index: 500; display: flex; flex-direction: column; gap: 16px; }
        @media (max-width: 768px) { .sidebar-cta { display: none; } }
        .fab { width: 60px; height: 60px; border-radius: 30px; display: flex; align-items: center; justify-content: center; color: white; border: 4px solid white; box-shadow: var(--shadow-xl); position: relative; }
        .fab-whatsapp { background: #25D366; }
        .fab-telegram { background: #229ED9; }
        .fab-phone { background: var(--primary); animation: pulse 2s infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(109, 40, 217, 0.4); } 70% { box-shadow: 0 0 0 20px rgba(109, 40, 217, 0); } 100% { box-shadow: 0 0 0 0 rgba(109, 40, 217, 0); } }

        /* Mobile Bottom CTA */
        .mobile-cta { position: fixed; bottom: 24px; right: 24px; z-index: 500; display: flex; flex-direction: column; gap: 12px; }
        @media (min-width: 769px) { .mobile-cta { display: none; } }
        .mobile-fab { width: 56px; height: 56px; border-radius: 28px; background: var(--primary); color: white; display: flex; align-items: center; justify-content: center; border: 4px solid white; box-shadow: var(--shadow-xl); }
        .mobile-fab-whatsapp { background: #25D366; }

        /* Sections */
        section { padding: 80px 0; }
        .hero { padding: 140px 0 80px; background: linear-gradient(135deg, #f5f3ff 0%, #ffffff 100%); }
        .hero-grid { display: grid; gap: 40px; align-items: center; }
        @media (min-width: 1024px) { .hero-grid { grid-template-columns: 1fr 1fr; } }
        .hero h2 { font-size: 2.5rem; font-weight: 900; line-height: 1.1; margin-bottom: 24px; }
        @media (min-width: 768px) { .hero h2 { font-size: 3.5rem; } }
        .hero-image { border-radius: 2.5rem; overflow: hidden; border: 8px solid white; box-shadow: var(--shadow-xl); aspect-ratio: 4/3; }
        .hero-image img { width: 100%; height: 100%; object-fit: cover; }

        .cards-grid { display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .card { background: white; padding: 40px; border-radius: 2rem; border: 1px solid var(--card-border); box-shadow: 0 4px 10px rgba(0,0,0,0.02); }
        .card h3 { font-size: 1.5rem; font-weight: 900; margin-bottom: 20px; }

        .article-card { background: white; border-radius: 1.5rem; overflow: hidden; border: 1px solid var(--card-border); display: flex; flex-direction: column; }
        .article-img { aspect-ratio: 16/9; position: relative; }
        .article-img img { width: 100%; height: 100%; object-fit: cover; }
        .article-body { padding: 24px; flex-grow: 1; }
        .article-body h4 { font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; }

        /* Pricing Table */
        .table-wrap { overflow-x: auto; border-radius: 1.5rem; border: 1px solid var(--card-border); background: white; }
        table { width: 100%; border-collapse: collapse; min-width: 600px; }
        th { background: var(--muted); padding: 24px; text-align: left; font-weight: 900; }
        td { padding: 20px 24px; border-top: 1px solid var(--card-border); font-weight: 700; }

        /* Modal */
        .modal { position: fixed; inset: 0; background: rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 2000; display: none; align-items: center; justify-content: center; padding: 20px; }
        .modal-inner { background: white; padding: 40px; border-radius: 2rem; max-width: 450px; width: 100%; position: relative; }

        footer { background: #1e1b4b; color: white; padding: 80px 0 40px; }
        .footer-grid { display: grid; gap: 40px; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); }
    </style>
</head>
<body>

    <header>
        <div class="container nav-inner">
            <a href="?page=home" class="logo">
                <div class="logo-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
                <div class="logo-text"><h1>Extramed-Psy</h1><span>Пансионат • Краснодар</span></div>
            </a>
            <nav class="main-nav">
                <a href="?page=home#conditions" class="nav-link">С чем работаем</a>
                <a href="?page=home#prices" class="nav-link">Стоимость</a>
                <a href="?page=articles" class="nav-link <?php echo $page === 'articles' ? 'active' : ''; ?>">База знаний</a>
                <a href="?page=home#contacts" class="nav-link">Контакты</a>
            </nav>
            <div style="display: flex; gap: 12px; align-items: center;">
                <a href="tel:88612906619" class="btn btn-primary" style="padding: 10px 16px; font-size: 14px; display: none; sm: flex;">290-66-19</a>
                <button class="burger-btn" id="burger-toggle"><span></span><span></span><span></span></button>
            </div>
        </div>
    </header>

    <div class="mobile-menu" id="mobile-menu">
        <a href="?page=home#conditions" class="mobile-nav-link">С чем работаем</a>
        <a href="?page=home#prices" class="mobile-nav-link">Стоимость</a>
        <a href="?page=articles" class="mobile-nav-link">База знаний</a>
        <a href="?page=home#contacts" class="mobile-nav-link">Контакты</a>
        <div style="margin-top: 40px;">
            <a href="tel:88612906619" class="btn btn-primary" style="width: 100%; height: 60px;">Позвонить врачу</a>
        </div>
    </div>

    <div class="sidebar-cta">
        <a href="https://wa.me/79282579115" class="fab fab-whatsapp"><svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg></a>
        <a href="tel:88612906619" class="fab fab-phone"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></a>
    </div>

    <div class="mobile-cta">
        <a href="https://wa.me/79282579115" class="mobile-fab mobile-fab-whatsapp"><svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg></a>
        <a href="tel:88612906619" class="mobile-fab"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></a>
    </div>

    <main>
        <?php if ($page === 'home'): ?>
        <section class="hero" id="hero">
            <div class="container hero-grid">
                <div>
                    <h2 style="color: var(--primary);">Пансионат для пожилых в Краснодаре</h2>
                    <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Профессиональный уход и безопасность</h3>
                    <p>Ваш близкий в надежных руках. В пансионате «Extramed-Psy» на улице Лизы Чайкиной мы берем на себя все заботы о здоровье и комфорте пожилых людей.</p>
                    <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 32px;">
                        <a href="tel:88612906619" class="btn btn-primary">Консультация врача</a>
                        <button class="btn btn-outline" onclick="openModal()">Онлайн-экскурсия</button>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="/images/clinic-hero.webp" alt="Пансионат">
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 40px; font-weight: 900;">Наш пансионат</h2>
                <div style="display: grid; gap: 16px; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));">
                    <?php foreach ($clinic_photos as $p): ?>
                    <div style="border-radius: 1.5rem; overflow: hidden; aspect-ratio: 4/3; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <img src="<?php echo $p['url']; ?>" alt="<?php echo $p['caption']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="conditions" style="background: var(--muted);">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 50px; font-weight: 900;">С чем мы работаем</h2>
                <div class="cards-grid">
                    <div class="card"><h3>Деменция</h3><p>Уход и поддержка при возрастных изменениях памяти.</p></div>
                    <div class="card"><h3>Реабилитация</h3><p>Восстановление после инсульта и травм.</p></div>
                    <div class="card"><h3>Уход 24/7</h3><p>Круглосуточный медицинский контроль.</p></div>
                </div>
            </div>
        </section>

        <section id="articles">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 40px; font-weight: 900;">База знаний</h2>
                <div class="cards-grid">
                    <?php foreach (array_slice($articles, 0, 3) as $a): ?>
                    <a href="?page=article&slug=<?php echo $a['slug']; ?>" class="article-card">
                        <div class="article-img"><img src="<?php echo $a['image']; ?>" alt=""></div>
                        <div class="article-body"><h4><?php echo $a['title']; ?></h4><p><?php echo $a['excerpt']; ?></p></div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div style="text-align: center; margin-top: 40px;"><a href="?page=articles" class="btn btn-outline">Все статьи</a></div>
            </div>
        </section>

        <section id="prices">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 40px; font-weight: 900;">Стоимость услуг</h2>
                <div class="table-wrap">
                    <table>
                        <thead><tr><th>Услуга</th><th style="text-align: right;">Цена</th></tr></thead>
                        <tbody>
                            <tr><td>Проживание (базовое)</td><td style="text-align: right;">от 1750 ₽/сут</td></tr>
                            <tr><td>Реабилитация</td><td style="text-align: right;">от 2000 ₽/сут</td></tr>
                            <tr><td>Выезд врача</td><td style="text-align: right;">от 3000 ₽</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <?php elseif ($page === 'articles'): ?>
        <section style="padding-top: 140px;">
            <div class="container">
                <h2 style="font-weight: 900; margin-bottom: 40px;">Все статьи</h2>
                <div class="cards-grid">
                    <?php foreach ($articles as $a): ?>
                    <a href="?page=article&slug=<?php echo $a['slug']; ?>" class="article-card">
                        <div class="article-img"><img src="<?php echo $a['image']; ?>" alt=""></div>
                        <div class="article-body"><h4><?php echo $a['title']; ?></h4><p><?php echo $a['excerpt']; ?></p></div>
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
                <h1 style="font-size: 2.5rem; font-weight: 900; margin-bottom: 24px;"><?php echo $art['title']; ?></h1>
                <div style="border-radius: 2rem; overflow: hidden; margin-bottom: 32px; max-height: 500px;">
                    <img src="<?php echo $art['image']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="font-size: 1.15rem; line-height: 1.8;">
                    <?php foreach($art['content'] as $p) echo "<p style='margin-bottom: 1.5rem;'>$p</p>"; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>
    </main>

    <div class="modal" id="modal">
        <div class="modal-inner">
            <button onclick="closeModal()" style="position: absolute; top: 20px; right: 20px; border: none; background: none; font-size: 24px; cursor: pointer;">&times;</button>
            <h3 style="margin-bottom: 20px;">Онлайн-экскурсия</h3>
            <form action="mailto:alexsamara134@yandex.ru" method="post" enctype="text/plain">
                <input type="text" name="name" placeholder="Ваше имя" required style="width: 100%; padding: 12px; margin-bottom: 12px; border-radius: 8px; border: 1px solid #ddd;">
                <input type="tel" name="phone" placeholder="Ваш телефон" required style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ddd;">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Записаться</button>
            </form>
        </div>
    </div>

    <footer id="contacts">
        <div class="container">
            <div class="footer-grid">
                <div><h3>Extramed-Psy</h3><p>Краснодар, ул. Лизы Чайкиной</p></div>
                <div><h4>Контакты</h4><a href="tel:88612906619" style="font-size: 1.25rem; font-weight: 900;">8 (861) 290-66-19</a></div>
            </div>
        </div>
    </footer>

    <script>
        const burger = document.getElementById('burger-toggle');
        const menu = document.getElementById('mobile-menu');
        burger.addEventListener('click', () => {
            burger.classList.toggle('active');
            menu.classList.toggle('active');
            document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
        });
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.addEventListener('click', () => {
                burger.classList.remove('active');
                menu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        function openModal() { document.getElementById('modal').style.display = 'flex'; }
        function closeModal() { document.getElementById('modal').style.display = 'none'; }
    </script>
</body>
</html>
