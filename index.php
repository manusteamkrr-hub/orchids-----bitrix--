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

// Clinic Photos for Carousel
$clinic_photos = [
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-3-1766937060085.webp", "caption" => "Здание клиники"],
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-1-1766937060016.webp", "caption" => "Палата"],
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-4-1766937060085.webp", "caption" => "Холл"],
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-5-1766937060085.webp", "caption" => "Зона отдыха"],
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-6-1766937060090.webp", "caption" => "Коридор"],
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-7-1766937059997.webp", "caption" => "Интерьер номера"],
    ["url" => "https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-1766937059993.webp", "caption" => "Внешний вид"]
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
    
    <!-- Embedded Styles (Purple Theme) -->
    <style>
        :root {
            --primary: #6d28d9;
            --primary-light: #8b5cf6;
            --primary-dark: #4c1d95;
            --primary-foreground: #ffffff;
            --accent: #d946ef;
            --accent-foreground: #ffffff;
            --background: #fafafa;
            --foreground: #1e1b4b;
            --muted: #f5f3ff;
            --muted-foreground: #6b7280;
            --card: #ffffff;
            --card-border: #e9e5ff;
            --shadow: 0 4px 6px -1px rgba(109, 40, 217, 0.1), 0 2px 4px -2px rgba(109, 40, 217, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(109, 40, 217, 0.15), 0 4px 6px -4px rgba(109, 40, 217, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(109, 40, 217, 0.2), 0 8px 10px -6px rgba(109, 40, 217, 0.1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; background: var(--background); color: var(--foreground); line-height: 1.5; -webkit-font-smoothing: antialiased; }
        a { text-decoration: none; color: inherit; transition: all 0.2s; }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; display: block; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }

        /* Navigation */
        header { position: fixed; top: 0; left: 0; right: 0; height: 80px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px); border-bottom: 1px solid var(--card-border); z-index: 100; display: flex; align-items: center; }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; width: 100%; }
        .logo { display: flex; align-items: center; gap: 12px; }
        .logo-icon { width: 48px; height: 48px; background: var(--primary); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: white; transform: rotate(-5deg); transition: transform 0.3s; box-shadow: 0 8px 16px -4px rgba(109, 40, 217, 0.4); }
        .logo:hover .logo-icon { transform: rotate(0deg); }
        .logo-text h1 { font-size: 1.5rem; font-weight: 900; line-height: 1; color: var(--primary); }
        .logo-text span { font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--muted-foreground); font-weight: 700; }
        
        .main-nav { display: none; gap: 24px; }
        @media (min-width: 1024px) { .main-nav { display: flex; } }
        .nav-link { font-size: 0.875rem; font-weight: 600; color: var(--muted-foreground); position: relative; }
        .nav-link:hover, .nav-link.active { color: var(--primary); }
        .nav-link.active::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px; background: var(--primary); border-radius: 2px; }

        .header-cta { display: flex; align-items: center; gap: 16px; }
        .btn { display: inline-flex; align-items: center; justify-content: center; padding: 0.75rem 1.75rem; border-radius: 1rem; font-weight: 700; cursor: pointer; border: none; transition: all 0.3s; gap: 10px; font-size: 0.9375rem; }
        .btn-primary { background: var(--primary); color: white; box-shadow: 0 10px 20px -5px rgba(109, 40, 217, 0.3); }
        .btn-primary:hover { transform: translateY(-2px); background: var(--primary-light); box-shadow: 0 15px 30px -10px rgba(109, 40, 217, 0.4); }
        .btn-outline { background: transparent; border: 2px solid var(--primary); color: var(--primary); }
        .btn-outline:hover { background: var(--muted); transform: translateY(-2px); }
        
        /* Floating Sidebar CTA */
        .sidebar-cta { position: fixed; right: 24px; top: 50%; transform: translateY(-50%); z-index: 1000; display: flex; flex-direction: column; gap: 16px; }
        .fab { width: 60px; height: 60px; border-radius: 30px; display: flex; align-items: center; justify-content: center; color: white; box-shadow: var(--shadow-xl); transition: all 0.3s; border: 4px solid white; position: relative; }
        .fab:hover { transform: scale(1.15) rotate(5deg); }
        .fab-whatsapp { background: #25D366; }
        .fab-telegram { background: #229ED9; }
        .fab-phone { background: var(--primary); animation: pulse 2s infinite; }
        @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(109, 40, 217, 0.4); } 70% { box-shadow: 0 0 0 20px rgba(109, 40, 217, 0); } 100% { box-shadow: 0 0 0 0 rgba(109, 40, 217, 0); } }
        .fab span { position: absolute; right: 72px; background: white; color: var(--primary); padding: 8px 16px; border-radius: 12px; font-weight: 700; font-size: 14px; opacity: 0; pointer-events: none; transition: all 0.3s; white-space: nowrap; box-shadow: var(--shadow-lg); transform: translateX(10px); }
        .fab:hover span { opacity: 1; transform: translateX(0); }

        /* Hero Section */
        .hero { padding: 160px 0 80px; background: linear-gradient(135deg, #f5f3ff 0%, #ffffff 100%); position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; top: -10%; right: -10%; width: 40%; height: 60%; background: radial-gradient(circle, rgba(139, 92, 246, 0.1) 0%, transparent 70%); z-index: 0; }
        .hero-grid { display: grid; gap: 60px; align-items: center; position: relative; z-index: 1; }
        @media (min-width: 1024px) { .hero-grid { grid-template-columns: 1.1fr 0.9fr; text-align: left; } }
        .hero-content { text-align: center; }
        @media (min-width: 1024px) { .hero-content { text-align: left; } }
        .hero-badge { display: inline-flex; align-items: center; gap: 8px; padding: 8px 20px; background: white; color: var(--primary); border-radius: 99px; font-weight: 700; font-size: 0.875rem; margin-bottom: 2rem; box-shadow: var(--shadow); border: 1px solid var(--card-border); }
        .hero h2 { font-size: 2.75rem; font-weight: 900; line-height: 1.15; margin-bottom: 1.5rem; color: var(--foreground); }
        @media (min-width: 768px) { .hero h2 { font-size: 3.5rem; } }
        .hero p { font-size: 1.25rem; color: var(--muted-foreground); margin-bottom: 2.5rem; line-height: 1.6; }
        .hero-btns { display: flex; flex-direction: column; gap: 20px; justify-content: center; }
        @media (min-width: 640px) { .hero-btns { flex-direction: row; } }
        @media (min-width: 1024px) { .hero-btns { justify-content: flex-start; } }
        .hero-image { position: relative; aspect-ratio: 4/3; border-radius: 3rem; overflow: hidden; box-shadow: var(--shadow-xl); border: 12px solid white; transform: rotate(1deg); }
        .hero-image img { width: 100%; height: 100%; object-fit: cover; }

        /* Carousel/Gallery */
        .gallery-section { background: white; padding: 100px 0; }
        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
        .gallery-item { border-radius: 1.5rem; overflow: hidden; aspect-ratio: 4/3; position: relative; cursor: pointer; transition: all 0.4s; box-shadow: var(--shadow); }
        .gallery-item:hover { transform: scale(1.03); z-index: 10; box-shadow: var(--shadow-xl); }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; }
        .gallery-item span { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); color: white; padding: 20px; font-weight: 700; font-size: 0.875rem; opacity: 0; transition: opacity 0.3s; }
        .gallery-item:hover span { opacity: 1; }

        /* Cards Grid */
        section { padding: 100px 0; }
        .section-title { text-align: center; margin-bottom: 60px; }
        .section-title h2 { font-size: 2.5rem; font-weight: 900; color: var(--foreground); margin-bottom: 1rem; }
        .section-title p { color: var(--muted-foreground); font-size: 1.125rem; max-width: 800px; margin: 0 auto; }
        
        .cards-grid { display: grid; gap: 32px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); }
        .card { background: var(--card); border-radius: 2.5rem; border: 1px solid var(--card-border); padding: 40px; transition: all 0.4s; position: relative; overflow: hidden; box-shadow: var(--shadow); }
        .card:hover { transform: translateY(-8px); box-shadow: var(--shadow-xl); border-color: var(--primary-light); }
        .card-icon { width: 64px; height: 64px; background: var(--muted); border-radius: 1.25rem; display: flex; align-items: center; justify-content: center; color: var(--primary); margin-bottom: 24px; transition: all 0.3s; }
        .card:hover .card-icon { background: var(--primary); color: white; transform: rotate(-5deg); }
        .card h3 { font-size: 1.75rem; font-weight: 900; margin-bottom: 20px; color: var(--foreground); }
        .card-list { display: flex; flex-direction: column; gap: 16px; }
        .card-list li { display: flex; align-items: flex-start; gap: 12px; color: var(--muted-foreground); font-weight: 600; }
        .card-list svg { width: 22px; height: 22px; color: var(--primary); flex-shrink: 0; margin-top: 2px; }

        /* Articles */
        .articles-preview { background: #fdfbff; }
        .article-card { background: white; border-radius: 2rem; overflow: hidden; border: 1px solid var(--card-border); display: flex; flex-direction: column; transition: all 0.4s; height: 100%; box-shadow: var(--shadow); }
        .article-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-xl); }
        .article-img { aspect-ratio: 16/9; overflow: hidden; position: relative; }
        .article-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s; }
        .article-card:hover .article-img img { transform: scale(1.1); }
        .article-badge { position: absolute; top: 20px; left: 20px; padding: 6px 14px; background: rgba(255, 255, 255, 0.95); border-radius: 10px; font-weight: 800; font-size: 12px; color: var(--primary); box-shadow: var(--shadow); }
        .article-body { padding: 32px; flex-grow: 1; display: flex; flex-direction: column; }
        .article-body h4 { font-size: 1.5rem; font-weight: 900; margin-bottom: 16px; line-height: 1.3; color: var(--foreground); }
        .article-body p { font-size: 1rem; color: var(--muted-foreground); line-height: 1.6; margin-bottom: 24px; }
        .article-footer { margin-top: auto; display: flex; align-items: center; justify-content: space-between; font-size: 14px; font-weight: 700; color: var(--muted-foreground); padding-top: 20px; border-top: 1px dashed var(--card-border); }
        .read-more { color: var(--primary); display: flex; align-items: center; gap: 6px; }

        /* Pricing Table */
        .table-container { border-radius: 2.5rem; border: 1px solid var(--card-border); overflow: hidden; box-shadow: var(--shadow-xl); background: white; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th { padding: 30px 40px; font-weight: 900; color: var(--foreground); background: var(--muted); font-size: 1.125rem; }
        td { padding: 24px 40px; border-bottom: 1px solid var(--card-border); font-weight: 700; color: var(--foreground); }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: var(--muted); }

        /* Footer */
        footer { padding: 100px 0 40px; background: #1e1b4b; color: white; border-top: 1px solid rgba(255,255,255,0.1); }
        .footer-grid { display: grid; gap: 60px; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); margin-bottom: 80px; }
        @media (min-width: 1024px) { .footer-grid { grid-template-columns: 2fr 1fr 1fr 1.5fr; } }
        .footer-col h4 { font-size: 1.125rem; font-weight: 900; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--primary-light); }
        .footer-links li { margin-bottom: 16px; }
        .footer-links a { color: #cbd5e1; font-weight: 600; font-size: 1rem; }
        .footer-links a:hover { color: white; transform: translateX(5px); display: inline-block; }
        .footer-contact { display: flex; flex-direction: column; gap: 16px; color: #cbd5e1; font-weight: 600; }
        .footer-contact a { color: white; font-weight: 900; font-size: 1.25rem; }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 40px; display: flex; flex-direction: column; gap: 24px; align-items: center; text-align: center; font-size: 0.9375rem; color: #94a3b8; }
        @media (min-width: 768px) { .footer-bottom { flex-direction: row; justify-content: space-between; text-align: left; } }

        /* Modal Form */
        .modal { position: fixed; inset: 0; background: rgba(30, 27, 75, 0.8); backdrop-filter: blur(8px); z-index: 2000; display: none; align-items: center; justify-content: center; padding: 20px; }
        .modal-content { background: white; border-radius: 2.5rem; max-width: 500px; width: 100%; padding: 48px; position: relative; box-shadow: var(--shadow-xl); }
        .modal-close { position: absolute; top: 24px; right: 24px; cursor: pointer; color: var(--muted-foreground); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 700; margin-bottom: 8px; font-size: 0.875rem; }
        .form-group input, .form-group textarea { width: 100%; padding: 14px 20px; border-radius: 12px; border: 1px solid var(--card-border); background: var(--muted); font-family: inherit; font-size: 1rem; transition: all 0.3s; }
        .form-group input:focus { outline: none; border-color: var(--primary); background: white; box-shadow: 0 0 0 4px rgba(109, 40, 217, 0.1); }
        
        /* Mobile Utilities */
        @media (max-width: 640px) {
            header { height: 70px; }
            section { padding: 60px 0; }
            .hero { padding: 120px 0 60px; }
            .hero h2 { font-size: 2.25rem; }
            .hero p { font-size: 1.125rem; }
            .sidebar-cta { right: 10px; bottom: 20px; top: auto; transform: none; flex-direction: row; width: 100%; justify-content: center; pointer-events: none; }
            .sidebar-cta a { pointer-events: auto; }
            .fab { width: 50px; height: 50px; border-width: 2px; }
            .fab span { display: none; }
            .card { padding: 30px; }
            .table-container { margin: 0 -1.5rem; border-radius: 0; border-left: none; border-right: none; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container nav-inner">
            <a href="?page=home" class="logo">
                <div class="logo-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                </div>
                <div class="logo-text">
                    <h1>Extramed-Psy</h1>
                    <span>Пансионат • Краснодар</span>
                </div>
            </a>
            <nav class="main-nav">
                <a href="?page=home#conditions" class="nav-link">С чем работаем</a>
                <a href="?page=home#prices" class="nav-link">Стоимость</a>
                <a href="?page=articles" class="nav-link <?php echo $page === 'articles' ? 'active' : ''; ?>">База знаний</a>
                <a href="?page=home#contacts" class="nav-link">Контакты</a>
            </nav>
            <div class="header-cta">
                <a href="tel:88612906619" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.875rem;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    290-66-19
                </a>
            </div>
        </div>
    </header>

    <!-- Floating Sidebar CTA -->
    <div class="sidebar-cta">
        <a href="https://wa.me/79282579115" target="_blank" class="fab fab-whatsapp" title="WhatsApp">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
            <span>WhatsApp консультация</span>
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
                    <div class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        Краснодар, ул. Лизы Чайкиной
                    </div>
                    <h2>Пансионат для пожилых в Краснодаре: профессиональный уход и безопасность для ваших близких</h2>
                    <p>Ваш близкий в надежных руках. В пансионате «Extramed-Psy» на улице Лизы Чайкиной мы берем на себя все заботы о здоровье и комфорте пожилых людей. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни, спокойствие для семьи и профессиональную помощь при самых сложных диагнозах. Круглосуточно, с заботой и по медицинским стандартам.</p>
                    <div class="hero-btns">
                        <a href="tel:88612906619" class="btn btn-primary">Получить консультацию врача</a>
                        <button class="btn btn-outline" onclick="document.getElementById('excursion-modal').style.display = 'flex'">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                            Записаться на онлайн-экскурсию
                        </button>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://slelguoygbfzlpylpxfs.supabase.co/storage/v1/render/image/public/document-uploads/XXXL-1766937059993.webp" alt="Пансионат Extramed-Psy">
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="container">
                <div class="section-title">
                    <h2>Фотографии нашей клиники</h2>
                    <p>Посмотрите на условия проживания и оборудование нашего пансионата. Мы создали атмосферу уюта и безопасности.</p>
                </div>
                <div class="gallery-grid">
                    <?php foreach ($clinic_photos as $photo): ?>
                    <div class="gallery-item">
                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['caption']; ?>" loading="lazy">
                        <span><?php echo $photo['caption']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Conditions Section -->
        <section id="conditions" style="background: #f8f7ff;">
            <div class="container">
                <div class="section-title">
                    <h2>Специализируемся на сложных случаях</h2>
                    <p>Мы знаем, как работать с возрастными изменениями психики и физического здоровья. Наши специалисты имеют многолетний опыт в гериатрии.</p>
                </div>
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 14c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"/><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/></svg>
                        </div>
                        <h3>Деменция</h3>
                        <ul class="card-list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Болезнь Альцгеймера</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Сосудистая деменция</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Старческое слабоумие</li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                        </div>
                        <h3>Реабилитация</h3>
                        <ul class="card-list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> После инсульта</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Перелом шейки бедра</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Лежачие больные</li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/></svg>
                        </div>
                        <h3>Паллиативный уход</h3>
                        <ul class="card-list">
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Купирование болей</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Психологическая помощь</li>
                            <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"></polyline></svg> Уход за стомами</li>
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
                    <p>Полезные материалы о здоровье пожилых людей от наших ведущих врачей.</p>
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
                                <span class="read-more">Подробнее →</span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <div style="text-align: center; margin-top: 60px;">
                    <a href="?page=articles" class="btn btn-outline">Все материалы</a>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="prices">
            <div class="container">
                <div class="section-title">
                    <h2>Стоимость проживания</h2>
                    <p>Прозрачное ценообразование. В стоимость включено: питание, уход, медицинский контроль и досуг.</p>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Услуга</th>
                                <th style="text-align: right;">Стоимость</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Первичная консультация гериатра</td><td style="text-align: right; color: var(--primary);">бесплатно</td></tr>
                            <tr><td>Размещение (базовый уход)</td><td style="text-align: right; color: var(--primary);">от 1750 ₽ / сут</td></tr>
                            <tr><td>Размещение (специализированный уход)</td><td style="text-align: right; color: var(--primary);">от 2000 ₽ / сут</td></tr>
                            <tr><td>Выезд врача на дом</td><td style="text-align: right; color: var(--primary);">от 3000 ₽</td></tr>
                            <tr><td>Транспортировка в пансионат</td><td style="text-align: right; color: var(--primary);">от 2000 ₽</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section id="contacts" style="background: var(--primary); color: white; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, rgba(255,255,255,0.05) 0%, transparent 80%);"></div>
            <div class="container" style="position: relative; z-index: 1; text-align: center;">
                <h2 style="font-size: 3rem; font-weight: 900; margin-bottom: 2rem;">Позаботьтесь о своих близких сейчас</h2>
                <p style="font-size: 1.35rem; opacity: 0.95; margin-bottom: 3.5rem; max-width: 850px; margin-left: auto; margin-right: auto; line-height: 1.6;">Мы работаем без выходных и праздников. Наши двери открыты для вас круглосуточно. Звоните, чтобы получить подробную консультацию.</p>
                <div class="hero-btns" style="gap: 30px;">
                    <a href="tel:88612906619" class="btn btn-primary" style="background: white; color: var(--primary); font-size: 1.5rem; padding: 1.75rem 3.5rem; border-radius: 1.5rem; box-shadow: 0 20px 40px -10px rgba(0,0,0,0.3);">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
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
                    <div class="hero-badge" style="margin-bottom: 1rem;">База знаний</div>
                    <h2>Полезные материалы от экспертов</h2>
                    <p>Информационные статьи о лечении, уходе за пожилыми и реабилитации от практикующих врачей клиники Extramed-Psy.</p>
                </div>
                
                <div class="cards-grid" style="margin-top: 60px;">
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
                                <span class="read-more">Читать далее →</span>
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
        <section class="article-detail" style="padding-top: 140px;">
            <div class="container">
                <div class="article-header">
                    <a href="?page=articles" style="display: flex; align-items: center; gap: 8px; font-weight: 800; color: var(--primary); margin-bottom: 32px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                        Ко всем статьям
                    </a>
                    <div class="hero-badge" style="margin-bottom: 1rem;"><?php echo $current_article['category_label']; ?></div>
                    <h1><?php echo $current_article['title']; ?></h1>
                    <div style="display: flex; align-items: center; gap: 16px; color: var(--muted-foreground); font-weight: 700; font-size: 0.9375rem;">
                        <span>Клиника Extramed-Psy</span>
                        <span>•</span>
                        <span>5 мин чтения</span>
                    </div>
                </div>
                <div class="article-hero-img">
                    <img src="<?php echo $current_article['image']; ?>" alt="<?php echo $current_article['title']; ?>" style="width: 100%; height: auto; display: block;">
                </div>
                <div class="article-content" style="font-size: 1.2rem; line-height: 1.8; color: #1e1b4b;">
                    <?php foreach ($current_article['content'] as $paragraph): ?>
                    <p style="margin-bottom: 2rem;"><?php echo $paragraph; ?></p>
                    <?php endforeach; ?>
                </div>
                
                <div style="margin-top: 80px; padding: 60px; background: var(--muted); border-radius: 3rem; border: 1px solid var(--card-border); text-align: center;">
                    <h3 style="font-size: 2rem; font-weight: 900; margin-bottom: 16px; color: var(--foreground);">Нужна помощь специалиста?</h3>
                    <p style="margin-bottom: 32px; font-size: 1.125rem; font-weight: 600; color: var(--muted-foreground);">Мы работаем круглосуточно и анонимно. Наши врачи выезжают на дом в любую точку Краснодара.</p>
                    <a href="tel:88612906619" class="btn btn-primary" style="font-size: 1.25rem; padding: 1.25rem 2.5rem;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Вызвать врача
                    </a>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php endif; ?>

    </main>

    <!-- Excursion Modal -->
    <div id="excursion-modal" class="modal">
        <div class="modal-content">
            <div class="modal-close" onclick="document.getElementById('excursion-modal').style.display = 'none'">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
            <h3 style="font-size: 1.75rem; font-weight: 900; margin-bottom: 12px; color: var(--foreground);">Онлайн-экскурсия</h3>
            <p style="color: var(--muted-foreground); font-weight: 600; margin-bottom: 32px;">Оставьте ваши контакты, и мы свяжемся с вами, чтобы провести видео-тур по пансионату.</p>
            <form action="mailto:alexsamara134@yandex.ru" method="post" enctype="text/plain">
                <div class="form-group">
                    <label>Ваше имя</label>
                    <input type="text" name="name" placeholder="Иван Иванович" required>
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="tel" name="phone" placeholder="+7 (900) 000-00-00" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 12px;">Записаться</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 30px;">
                        <div class="logo-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
                        <div class="logo-text"><h1 style="color: white;">Extramed-Psy</h1></div>
                    </div>
                    <p style="color: #cbd5e1; font-weight: 600; line-height: 1.6;">Профессиональная медицинская помощь и заботливый уход за вашими близкими в Краснодаре. Лицензированная деятельность.</p>
                </div>
                <div class="footer-col">
                    <h4>Навигация</h4>
                    <ul class="footer-links">
                        <li><a href="?page=home">Главная</a></li>
                        <li><a href="?page=articles">База знаний</a></li>
                        <li><a href="?page=home#prices">Стоимость</a></li>
                        <li><a href="?page=home#conditions">С чем работаем</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Услуги</h4>
                    <ul class="footer-links">
                        <li><a href="#">Уход при деменции</a></li>
                        <li><a href="#">Реабилитация</a></li>
                        <li><a href="#">Психиатр на дом</a></li>
                        <li><a href="#">Перевозка больных</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Контакты</h4>
                    <div class="footer-contact">
                        <p>Краснодар, ул. Лизы Чайкиной</p>
                        <a href="tel:88612906619">8 (861) 290-66-19</a>
                        <p style="font-size: 14px; opacity: 0.8;">Круглосуточно 24/7</p>
                        <p style="font-size: 14px; opacity: 0.8;">alexsamara134@yandex.ru</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 Extramed-Psy. Информация на сайте не является публичной офертой.</p>
                <div style="display: flex; gap: 32px;">
                    <a href="#" style="color: inherit;">Политика конфиденциальности</a>
                    <a href="#" style="color: inherit;">Лицензии</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple modal handling
        window.onclick = function(event) {
            let modal = document.getElementById('excursion-modal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
