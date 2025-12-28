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
        "image" => "https://images.unsplash.com/photo-1576091160550-2173bdd99625?auto=format&fit=crop&q=80&w=800",
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
        "image" => "https://images.unsplash.com/photo-1544027993-37dbfe43562a?auto=format&fit=crop&q=80&w=800",
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
        "image" => "https://images.unsplash.com/photo-1584515159494-47d32362cd9a?auto=format&fit=crop&q=80&w=800",
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
        "image" => "https://images.unsplash.com/photo-1584432810601-6c7f27d2362b?auto=format&fit=crop&q=80&w=800",
        "excerpt" => "Своевременная и правильная реабилитация позволяет значительно восстановить утраченные способности и улучшить качество жизни пациента после инсульта.",
        "content" => [
            "Инсульт — это острое нарушение мозгового кровообращения, приводящее к повреждению тканей мозга и нарушению его функций. Своевременная и правильно организованная реабилитация позволяет значительно восстановить утраченные способности и улучшить качество жизни пациента.",
            "В центре «Экстрамед-Пси» мы разработали уникальные программы восстановления, которые включают в себя не только медицинскую поддержку, но и работу с логопедами, кинезиотерапевтами и нейропсихологами.",
            "Мы уделяем особое внимание психологическому состоянию пациента и его родственников, помогая преодолеть депрессию и вернуться к активной жизни."
        ]
    ]
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
    
    <!-- Embedded Styles (Tailwind-like) -->
    <style>
        :root {
            --primary: #0f172a;
            --primary-foreground: #ffffff;
            --accent: #3b82f6;
            --accent-foreground: #ffffff;
            --background: #ffffff;
            --foreground: #0f172a;
            --muted: #f1f5f9;
            --muted-foreground: #64748b;
            --card: #ffffff;
            --card-border: #e2e8f0;
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background: var(--background); color: var(--foreground); line-height: 1.5; -webkit-font-smoothing: antialiased; }
        a { text-decoration: none; color: inherit; transition: all 0.2s; }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; display: block; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }

        /* Navigation */
        header { position: fixed; top: 0; left: 0; right: 0; height: 80px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border-bottom: 1px solid var(--card-border); z-index: 100; display: flex; align-items: center; }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; width: 100%; }
        .logo { display: flex; align-items: center; gap: 12px; }
        .logo-icon { width: 48px; height: 48px; background: var(--primary); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; transform: rotate(-5deg); transition: transform 0.3s; }
        .logo:hover .logo-icon { transform: rotate(0deg); }
        .logo-text h1 { font-size: 1.5rem; font-weight: 900; line-height: 1; color: var(--primary); }
        .logo-text span { font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--muted-foreground); font-weight: 700; }
        
        .main-nav { display: none; gap: 24px; }
        @media (min-width: 1024px) { .main-nav { display: flex; } }
        .nav-link { font-size: 0.875rem; font-weight: 600; color: var(--muted-foreground); }
        .nav-link:hover, .nav-link.active { color: var(--primary); }
        .nav-link.active { position: relative; }
        .nav-link.active::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px; background: var(--primary); }

        .header-cta { display: flex; align-items: center; gap: 16px; }
        .btn { display: inline-flex; align-items: center; justify-content: center; padding: 0.75rem 1.5rem; border-radius: 1rem; font-weight: 700; cursor: pointer; border: none; transition: all 0.2s; gap: 8px; }
        .btn-primary { background: var(--primary); color: white; box-shadow: 0 10px 20px -5px rgba(15, 23, 42, 0.2); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 15px 30px -10px rgba(15, 23, 42, 0.3); }
        .btn-outline { background: transparent; border: 2px solid var(--primary); color: var(--primary); }
        .btn-outline:hover { background: var(--muted); }
        .btn-phone { display: none; }
        @media (min-width: 640px) { .btn-phone { display: inline-flex; } }

        /* Floating Sidebar CTA */
        .sidebar-cta { position: fixed; right: 20px; top: 50%; transform: translateY(-50%); z-index: 1000; display: flex; flex-col; flex-direction: column; gap: 12px; }
        .fab { width: 56px; height: 56px; border-radius: 28px; display: flex; align-items: center; justify-content: center; color: white; box-shadow: var(--shadow-xl); transition: transform 0.3s, scale 0.3s; border: 3px solid white; position: relative; }
        .fab:hover { transform: scale(1.1); }
        .fab-whatsapp { background: #25D366; }
        .fab-telegram { background: #229ED9; }
        .fab-phone { background: var(--primary); animation: pulse 2s infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(15, 23, 42, 0.4); } 70% { box-shadow: 0 0 0 20px rgba(15, 23, 42, 0); } 100% { box-shadow: 0 0 0 0 rgba(15, 23, 42, 0); } }
        .fab span { position: absolute; right: 64px; background: white; color: var(--primary); padding: 4px 12px; border-radius: 8px; font-weight: 700; font-size: 14px; opacity: 0; pointer-events: none; transition: opacity 0.3s; white-space: nowrap; box-shadow: var(--shadow); }
        .fab:hover span { opacity: 1; }

        /* Sections */
        section { padding: 60px 0; overflow: hidden; }
        @media (min-width: 1024px) { section { padding: 100px 0; } }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem; }
        @media (min-width: 768px) { .section-title h2 { font-size: 3rem; } }
        .section-title p { color: var(--muted-foreground); font-size: 1.125rem; max-width: 700px; margin: 0 auto; }

        /* Hero */
        .hero { padding-top: 140px; background: radial-gradient(circle at top right, rgba(59, 130, 246, 0.05), transparent); }
        .hero-grid { display: grid; gap: 48px; align-items: center; }
        @media (min-width: 1024px) { .hero-grid { grid-template-columns: 1.2fr 0.8fr; text-align: left; } }
        .hero-content { text-align: center; }
        @media (min-width: 1024px) { .hero-content { text-align: left; } }
        .badge { display: inline-flex; align-items: center; gap: 8px; padding: 6px 16px; background: rgba(59, 130, 246, 0.1); color: var(--accent); border-radius: 99px; font-weight: 700; font-size: 0.875rem; margin-bottom: 1.5rem; }
        .hero h2 { font-size: 2.5rem; font-weight: 900; line-height: 1.1; margin-bottom: 1.5rem; color: var(--primary); }
        @media (min-width: 768px) { .hero h2 { font-size: 4rem; } }
        .hero p { font-size: 1.125rem; color: var(--muted-foreground); margin-bottom: 2rem; }
        .hero-btns { display: flex; flex-direction: column; gap: 16px; justify-content: center; }
        @media (min-width: 640px) { .hero-btns { flex-direction: row; } }
        @media (min-width: 1024px) { .hero-btns { justify-content: flex-start; } }
        .hero-image { position: relative; aspect-ratio: 1; border-radius: 2rem; overflow: hidden; box-shadow: var(--shadow-xl); border: 8px solid white; }
        .hero-image img { width: 100%; height: 100%; object-fit: cover; }

        /* Cards Grid */
        .cards-grid { display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .card { background: var(--card); border-radius: 2rem; border: 1px solid var(--card-border); padding: 32px; transition: all 0.3s; position: relative; overflow: hidden; box-shadow: var(--shadow); }
        .card:hover { transform: translateY(-5px); box-shadow: var(--shadow-xl); }
        .card-icon { width: 56px; height: 56px; background: rgba(59, 130, 246, 0.1); border-radius: 1rem; display: flex; align-items: center; justify-content: center; color: var(--accent); margin-bottom: 24px; }
        .card h3 { font-size: 1.5rem; font-weight: 800; margin-bottom: 16px; }
        .card-list { display: flex; flex-direction: column; gap: 12px; }
        .card-list li { display: flex; align-items: flex-start; gap: 12px; color: var(--muted-foreground); font-size: 0.9375rem; }
        .card-list svg { width: 20px; height: 20px; color: var(--accent); flex-shrink: 0; margin-top: 2px; }

        /* Articles Block (Small Preview) */
        .articles-preview { background: var(--muted); }
        .article-card { background: white; border-radius: 1.5rem; overflow: hidden; border: 1px solid var(--card-border); display: flex; flex-direction: column; transition: all 0.3s; height: 100%; }
        .article-card:hover { box-shadow: var(--shadow-xl); transform: scale(1.02); }
        .article-img { aspect-ratio: 16/10; overflow: hidden; position: relative; }
        .article-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
        .article-card:hover .article-img img { transform: scale(1.1); }
        .article-badge { position: absolute; top: 16px; left: 16px; padding: 4px 12px; background: rgba(255, 255, 255, 0.9); border-radius: 8px; font-weight: 700; font-size: 12px; color: var(--accent); }
        .article-body { padding: 24px; flex-grow: 1; display: flex; flex-direction: column; }
        .article-body h4 { font-size: 1.25rem; font-weight: 800; margin-bottom: 12px; line-height: 1.3; }
        .article-body p { font-size: 0.875rem; color: var(--muted-foreground); line-height: 1.6; margin-bottom: 20px; }
        .article-footer { margin-top: auto; display: flex; align-items: center; justify-content: space-between; font-size: 12px; font-weight: 700; color: var(--muted-foreground); }
        .read-more { color: var(--accent); display: flex; align-items: center; gap: 4px; }

        /* Full Articles Page */
        .articles-page { padding-top: 120px; min-height: 80vh; }
        .articles-filter { display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; margin-bottom: 48px; }
        .filter-btn { padding: 8px 24px; border-radius: 12px; font-weight: 700; font-size: 14px; background: white; border: 1px solid var(--card-border); cursor: pointer; transition: all 0.2s; }
        .filter-btn:hover { background: var(--muted); }
        .filter-btn.active { background: var(--primary); color: white; border-color: var(--primary); }

        /* Article Detail */
        .article-detail { padding-top: 140px; max-width: 800px; margin: 0 auto; padding-bottom: 100px; }
        .article-header { margin-bottom: 40px; }
        .article-header .badge { margin-bottom: 16px; }
        .article-header h1 { font-size: 2.5rem; font-weight: 900; line-height: 1.1; margin-bottom: 24px; }
        .article-hero-img { border-radius: 2.5rem; overflow: hidden; margin-bottom: 48px; box-shadow: var(--shadow-lg); }
        .article-content { font-size: 1.125rem; line-height: 1.8; color: #334155; }
        .article-content p { margin-bottom: 24px; }
        
        /* Table */
        .table-container { border-radius: 2rem; border: 1px solid var(--card-border); overflow: hidden; box-shadow: var(--shadow-xl); }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        thead { background: rgba(15, 23, 42, 0.05); }
        th { padding: 24px 32px; font-weight: 800; color: var(--primary); border-bottom: 1px solid var(--card-border); }
        td { padding: 20px 32px; border-bottom: 1px solid var(--card-border); font-weight: 600; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(15, 23, 42, 0.02); }

        /* Footer */
        footer { padding: 80px 0 40px; background: var(--muted); border-top: 1px solid var(--card-border); }
        .footer-grid { display: grid; gap: 48px; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); margin-bottom: 60px; }
        @media (min-width: 1024px) { .footer-grid { grid-template-columns: 2fr 1fr 1fr 1.5fr; } }
        .footer-col h4 { font-size: 1rem; font-weight: 800; margin-bottom: 24px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--primary); }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: var(--muted-foreground); font-weight: 600; }
        .footer-links a:hover { color: var(--primary); }
        .footer-contact { display: flex; flex-direction: column; gap: 12px; color: var(--muted-foreground); font-weight: 600; }
        .footer-contact a { color: var(--primary); font-weight: 800; }
        .footer-bottom { border-top: 1px solid var(--card-border); pt-8; display: flex; flex-direction: column; gap: 24px; align-items: center; text-align: center; font-size: 0.875rem; color: var(--muted-foreground); padding-top: 32px; }
        @media (min-width: 768px) { .footer-bottom { flex-direction: row; justify-content: space-between; text-align: left; } }

        /* Utils */
        .text-accent { color: var(--accent); }
        .bg-accent { background: var(--accent); }
        .font-black { font-weight: 900; }
        .mb-4 { margin-bottom: 1rem; }
        .hidden { display: none; }
        
        /* Mobile Specific */
        @media (max-width: 640px) {
            .hero h2 { font-size: 2rem; }
            .btn { width: 100%; }
            .logo-text h1 { font-size: 1.25rem; }
            .sidebar-cta { right: 10px; bottom: 20px; top: auto; transform: none; flex-direction: row; }
            .fab span { display: none; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container nav-inner">
            <a href="?page=home" class="logo">
                <div class="logo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                </div>
                <div class="logo-text">
                    <h1>Extramed-Psy</h1>
                    <span>Центр Заботы • Краснодар</span>
                </div>
            </a>
            <nav class="main-nav">
                <a href="?page=home#conditions" class="nav-link">С чем работаем</a>
                <a href="?page=home#approach" class="nav-link">Наш подход</a>
                <a href="?page=home#prices" class="nav-link">Стоимость</a>
                <a href="?page=articles" class="nav-link <?php echo $page === 'articles' ? 'active' : ''; ?>">Статьи</a>
                <a href="?page=home#contacts" class="nav-link">Контакты</a>
            </nav>
            <div class="header-cta">
                <a href="tel:88612906619" class="btn btn-primary btn-phone">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    8 (861) 290-66-19
                </a>
                <button class="btn btn-outline" style="padding: 0.5rem; border: none; display: lg-none;" onclick="document.querySelector('.main-nav').style.display = document.querySelector('.main-nav').style.display === 'flex' ? 'none' : 'flex'">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Floating Sidebar CTA -->
    <div class="sidebar-cta">
        <a href="https://wa.me/79282579115" target="_blank" class="fab fab-whatsapp" title="WhatsApp">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
            <span>Написать в WhatsApp</span>
        </a>
        <a href="https://t.me/ExtraMed93" target="_blank" class="fab fab-telegram" title="Telegram">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0C5.344 0 0 5.344 0 11.944c0 6.6 5.344 11.944 11.944 11.944 6.6 0 11.944-5.344 11.944-11.944C23.888 5.344 18.544 0 11.944 0Zm5.842 8.356-1.996 9.417c-.15.666-.545.83-1.096.52l-3.041-2.242-1.467 1.412c-.162.162-.298.298-.612.298l.218-3.097 5.637-5.093c.245-.218-.054-.34-.378-.124L8.411 13.73l-3.004-.939c-.653-.204-.666-.653.136-.966l11.745-4.526c.544-.204.939.136.653 1.057Z"/></svg>
            <span>Наш Telegram</span>
        </a>
        <a href="tel:88612906619" class="fab fab-phone" title="Позвонить">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <span>8 (861) 290-66-19</span>
        </a>
    </div>

    <main>

        <?php if ($page === 'home'): ?>
        <!-- Hero Section -->
        <section class="hero" id="hero">
            <div class="container hero-grid">
                <div class="hero-content">
                    <div class="badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        г. Краснодар, ул. Лизы Чайкиной
                    </div>
                    <h2>Пансионат для пожилых в Краснодаре: профессиональный уход</h2>
                    <p>Ваш близкий в надежных руках. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни и спокойствие для семьи при любых сложных диагнозах.</p>
                    <div class="hero-btns">
                        <a href="tel:88612906619" class="btn btn-primary">Получить консультацию</a>
                        <a href="#contacts" class="btn btn-outline">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                            Записаться на экскурсию
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-1766923019989.webp" alt="Пансионат Extramed-Psy">
                </div>
            </div>
        </section>

        <!-- Conditions Section -->
        <section id="conditions">
            <div class="container">
                <div class="section-title">
                    <h2>С чем мы работаем</h2>
                    <p>Мы специализируемся на сложных случаях, когда пожилому человеку требуется не только присмотр, но и медицинская поддержка.</p>
                </div>
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm0 16a6 6 0 1 1 6-6 6 6 0 0 1-6 6Z"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                        </div>
                        <h3>Неврология</h3>
                        <ul class="card-list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Деменция и Альцгеймер</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Болезнь Паркинсона</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Последствия инсульта</li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        </div>
                        <h3>Реабилитация</h3>
                        <ul class="card-list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> После переломов (шейки бедра)</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Уход за лежачими больными</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Постоперационный уход</li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/></svg>
                        </div>
                        <h3>Хронические болезни</h3>
                        <ul class="card-list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Сахарный диабет</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Гипертония</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg> Онкология (паллиатив)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Articles Preview Section -->
        <section id="articles" class="articles-preview">
            <div class="container">
                <div class="section-title">
                    <h2>База знаний</h2>
                    <p>Полезные материалы от наших врачей и экспертов по уходу за близкими.</p>
                </div>
                <div class="cards-grid">
                    <?php foreach (array_slice($articles, 0, 3) as $article): ?>
                    <a href="?page=article&slug=<?php echo $article['slug']; ?>" class="article-card">
                        <div class="article-img">
                            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                            <div class="article-badge"><?php echo $article['category_label']; ?></div>
                        </div>
                        <div class="article-body">
                            <h4><?php echo $article['title']; ?></h4>
                            <p><?php echo $article['excerpt']; ?></p>
                            <div class="article-footer">
                                <span>5 мин чтения</span>
                                <span class="read-more">Читать далее →</span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div style="text-align: center; margin-top: 48px;">
                    <a href="?page=articles" class="btn btn-outline">Все статьи</a>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="prices">
            <div class="container">
                <div class="section-title">
                    <h2>Стоимость услуг</h2>
                    <p>Честные цены без скрытых платежей. Все включено в договор.</p>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Услуга</th>
                                <th style="text-align: right;">Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Первичная консультация</td><td style="text-align: right; color: var(--accent);">бесплатно</td></tr>
                            <tr><td>Размещение в пансионате</td><td style="text-align: right; color: var(--accent);">от 1750 ₽ / сут</td></tr>
                            <tr><td>Реабилитация</td><td style="text-align: right; color: var(--accent);">от 2000 ₽ / сут</td></tr>
                            <tr><td>Вызов психиатра на дом</td><td style="text-align: right; color: var(--accent);">от 3000 ₽</td></tr>
                            <tr><td>Перевозка больного</td><td style="text-align: right; color: var(--accent);">от 2000 ₽</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section id="contacts" style="background: var(--primary); color: white; text-align: center;">
            <div class="container">
                <h2 style="font-size: 2.5rem; font-weight: 900; margin-bottom: 2rem;">Позаботьтесь о близком уже сегодня</h2>
                <p style="font-size: 1.25rem; opacity: 0.9; margin-bottom: 3rem; max-width: 800px; margin-left: auto; margin-right: auto;">Мы ответим на все вопросы, поможем с документами и организуем перевозку. Звоните прямо сейчас.</p>
                <div class="hero-btns">
                    <a href="tel:88612906619" class="btn btn-primary" style="background: white; color: var(--primary); font-size: 1.25rem; padding: 1.5rem 3rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        8 (861) 290-66-19
                    </a>
                </div>
            </div>
        </section>

        <?php elseif ($page === 'articles'): ?>
        <!-- Articles List Page -->
        <section class="articles-page">
            <div class="container">
                <div class="section-title">
                    <div class="badge">База знаний</div>
                    <h2>Полезные статьи от экспертов</h2>
                    <p>Информационные материалы о лечении, уходе и реабилитации.</p>
                </div>
                
                <div class="articles-filter">
                    <button class="filter-btn active">Все темы</button>
                    <button class="filter-btn">Пожилым</button>
                    <button class="filter-btn">Психиатрия</button>
                    <button class="filter-btn">Реабилитация</button>
                </div>

                <div class="cards-grid">
                    <?php foreach ($articles as $article): ?>
                    <a href="?page=article&slug=<?php echo $article['slug']; ?>" class="article-card">
                        <div class="article-img">
                            <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                            <div class="article-badge"><?php echo $article['category_label']; ?></div>
                        </div>
                        <div class="article-body">
                            <h4><?php echo $article['title']; ?></h4>
                            <p><?php echo $article['excerpt']; ?></p>
                            <div class="article-footer">
                                <span>4 мин чтения</span>
                                <span class="read-more">Читать материал →</span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php elseif ($page === 'article' && !empty($slug)): ?>
        <!-- Article Detail Page -->
        <?php 
        $current_article = null;
        foreach ($articles as $a) { if ($a['slug'] === $slug) { $current_article = $a; break; } }
        if ($current_article):
        ?>
        <section class="article-detail">
            <div class="container">
                <div class="article-header">
                    <a href="?page=articles" style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--accent); margin-bottom: 24px;">
                        ← Вернуться ко всем статьям
                    </a>
                    <div class="badge"><?php echo $current_article['category_label']; ?></div>
                    <h1><?php echo $current_article['title']; ?></h1>
                    <div style="display: flex; align-items: center; gap: 16px; color: var(--muted-foreground); font-weight: 600; font-size: 0.875rem;">
                        <span>Клиника Extramed-Psy</span>
                        <span>•</span>
                        <span>5 мин чтения</span>
                    </div>
                </div>
                <div class="article-hero-img">
                    <img src="<?php echo $current_article['image']; ?>" alt="<?php echo $current_article['title']; ?>" style="width: 100%; height: auto;">
                </div>
                <div class="article-content">
                    <?php foreach ($current_article['content'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                </div>
                
                <div style="margin-top: 60px; padding: 40px; background: var(--muted); border-radius: 2rem;">
                    <h3 style="font-weight: 800; margin-bottom: 12px;">Нужна помощь специалиста?</h3>
                    <p style="margin-bottom: 24px;">Мы работаем круглосуточно и анонимно. Наши врачи выезжают на дом в любую точку Краснодара.</p>
                    <a href="tel:88612906619" class="btn btn-primary">Позвонить врачу</a>
                </div>
            </div>
        </section>
        <?php else: ?>
        <section style="text-align: center; padding-top: 200px;">
            <div class="container">
                <h1>Статья не найдена</h1>
                <a href="?page=articles" class="btn btn-primary" style="margin-top: 24px;">Ко всем статьям</a>
            </div>
        </section>
        <?php endif; ?>

        <?php endif; ?>

    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 24px;">
                        <div class="logo-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
                        <div class="logo-text"><h1>Extramed-Psy</h1></div>
                    </div>
                    <p style="color: var(--muted-foreground); font-weight: 600;">Профессиональная медицинская помощь и заботливый уход за вашими близкими в Краснодаре.</p>
                </div>
                <div class="footer-col">
                    <h4>Навигация</h4>
                    <ul class="footer-links">
                        <li><a href="?page=home">Главная</a></li>
                        <li><a href="?page=articles">База знаний</a></li>
                        <li><a href="?page=home#prices">Цены</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Услуги</h4>
                    <ul class="footer-links">
                        <li><a href="?page=home#conditions">Пансионат</a></li>
                        <li><a href="?page=home#conditions">Психиатр на дом</a></li>
                        <li><a href="?page=home#conditions">Реабилитация</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Контакты</h4>
                    <div class="footer-contact">
                        <p>г. Краснодар, ул. Лизы Чайкиной</p>
                        <a href="tel:88612906619">8 (861) 290-66-19</a>
                        <p style="font-size: 12px;">Круглосуточно 24/7</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 Extramed-Psy. Все права защищены.</p>
                <div style="display: flex; gap: 24px;">
                    <a href="#">Политика конфиденциальности</a>
                    <a href="#">Лицензия</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
