<?php
/**
 * Extramed-Psy - Standalone Landing Page & Knowledge Base
 * Updated with all 15 articles, total count display, and optimized mobile menu.
 */

// Articles Data (Sync with src/lib/articles-data.ts)
$articles = [
    [
        "title" => "Психиатр на дом в Краснодаре: срочная и анонимная помощь",
        "slug" => "психиатр-на-дом-в-краснодаре-срочная-и-анонимная-помощь",
        "category" => "emergency",
        "category_label" => "Экстренная помощь",
        "image" => "images/art-1.png",
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
        "image" => "images/art-2.png",
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
        "image" => "images/art-3.png",
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
        "image" => "images/art-4.png",
        "excerpt" => "Своевременная и правильная реабилитация позволяет значительно восстановить утраченные способности и улучшить качество жизни пациента после инсульта.",
        "content" => [
            "Инсульт — это острое нарушение мозгового кровообращения, приводящее к повреждению тканей мозга и нарушению его функций. Своевременная и правильно организованная реабилитация позволяет значительно восстановить утраченные способности и улучшить качество жизни пациента.",
            "В центре «Экстрамед-Пси» мы разработали уникальные программы восстановления, которые включают в себя не только медицинскую поддержку, но и работу с логопедами, кинезиотерапевтами и нейропсихологами.",
            "Мы уделяем особое внимание психологическому состоянию пациента и его родственников, помогая преодолеть депрессию и вернуться к активной жизни."
        ]
    ],
    [
        "title" => "Биполярное аффективное расстройство: диагностика и лечение",
        "slug" => "биполярное-аффективное-расстройство",
        "category" => "psychiatry",
        "category_label" => "Психиатрия",
        "image" => "images/art-1.png",
        "excerpt" => "БАР — это хроническое психическое заболевание, характеризующееся чередованием эпизодов мании и депрессии.",
        "content" => [
            "Биполярное аффективное расстройство (БАР) — это хроническое психическое заболевание, характеризующееся чередованием эпизодов патологически повышенного (мания или гипомания) и сниженного (депрессия) настроения. Эти состояния существенно влияют на энергетический уровень, мышление и поведение человека.",
            "В клинике «Экстрамед-Пси» мы проводим тщательную диагностику для дифференциации БАР от других расстройств настроения. Лечение включает индивидуально подобранную фармакотерапию (нормотимики, антидепрессанты) и психотерапию.",
            "Цель нашей работы — достижение стабильной ремиссии и обучение пациента распознавать ранние признаки смены фаз, что позволяет вести полноценную и продуктивную жизнь."
        ]
    ],
    [
        "title" => "Профессиональная помощь психотерапевта",
        "slug" => "профессиональная-помощь-психотерапевта",
        "category" => "psychotherapy",
        "category_label" => "Психотерапия",
        "image" => "images/art-2.png",
        "excerpt" => "Психотерапевт помогает не только при психических расстройствах, но и поддерживает в сложных жизненных ситуациях.",
        "content" => [
            "Психотерапевт в Краснодаре – специалист, который помогает справиться с широким спектром эмоциональных и психологических проблем. Это могут быть как клинические состояния (неврозы, депрессии), так и жизненные кризисы, проблемы в отношениях или профессиональное выгорание.",
            "В нашей клинике мы используем современные методы психотерапии: когнитивно-поведенческую, гештальт-терапию, системную семейную терапию. Мы создаем безопасное пространство для исследования внутренних конфликтов и поиска ресурсов для изменений.",
            "Курс психотерапии позволяет не только облегчить текущее состояние, но и выработать новые стратегии поведения, повысить стрессоустойчивость и качество жизни в целом."
        ]
    ],
    [
        "title" => "Диагностика и лечение болезни Паркинсона",
        "slug" => "диагностика-и-лечение-болезни-паркинсона",
        "category" => "elderly",
        "category_label" => "Пожилым",
        "image" => "images/art-3.png",
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
        "image" => "images/art-4.png",
        "excerpt" => "Деменция — это не приговор. Ранняя диагностика и грамотный уход позволяют сохранить достоинство и качество жизни.",
        "content" => [
            "Деменция — это синдром, характеризующийся стойким снижением когнических функций, приводящим к нарушению повседневной активности. Это не естественная часть старения, а серьезное медицинское состояние.",
            "Ранние признаки деменции часто списывают на обычную забывчивость, но именно на этом этапе помощь специалиста наиболее эффективна для замедления процесса.",
            "Комплексный подход в нашей клинике включает медикаментозную поддержку, когнитивные тренинги и обучение родственников правилам общения с больным."
        ]
    ],
    [
        "title" => "Психиатрическая реабилитация: путь к возвращению",
        "slug" => "психиатрическая-реабилитация",
        "category" => "rehab",
        "category_label" => "Реабилитация",
        "image" => "images/art-1.png",
        "excerpt" => "Восстановление после психического заболевания — это комплексный процесс, включающий медицинскую и социальную поддержку.",
        "content" => [
            "Психиатрическая реабилитация — это система мер, направленных на восстановление социального статуса и качества жизни людей, перенесших острые психические расстройства. Мы помогаем пациентам заново обрести навыки общения, самообслуживания и трудовой деятельности.",
            "Программа реабилитации в «Экстрамед-Пси» включает в себя работу в группах поддержки, арт-терапию, тренинги социальных навыков и семейное консультирование. Мы работаем над тем, чтобы болезнь не стала препятствием для жизни в обществе.",
            "Важнейшим аспектом является профилактика рецидивов через обучение пациента и его близких методам самоконтроля и своевременного обращения за помощью."
        ]
    ],
    [
        "title" => "Лечение панических атак в Краснодаре",
        "slug" => "лечение-панических-атак",
        "category" => "psychotherapy",
        "category_label" => "Психотерапия",
        "image" => "images/art-2.png",
        "excerpt" => "Паническая атака — это внезапный эпизод сильного страха, сопровождающийся выраженными физическими симптомами.",
        "content" => [
            "Паническая атака — это внезапный, интенсивный эпизод страха и дискомфорта, достигающий пика в течение нескольких минут. Она сопровождается сердцебиением, одышкой, страхом смерти или потери контроля. Это состояние крайне мучительно и часто ведет к развитию агорафобии.",
            "Специалисты нашей клиники успешно лечат панические расстройства, используя сочетание бережной фармакотерапии и когнитивно-поведенческой терапии (КПТ). КПТ признана «золотым стандартом» в лечении паники, позволяя пациенту понять механизмы страха и научиться его контролировать.",
            "Мы помогаем пациентам вернуться к свободной жизни без страха перед новыми приступами, восстанавливая уверенность в себе и своем теле."
        ]
    ],
    [
        "title" => "Лечение шизофрении в Краснодаре",
        "slug" => "лечение-шизофрении",
        "category" => "psychiatry",
        "category_label" => "Психиатрия",
        "image" => "images/art-3.png",
        "excerpt" => "Современные методы лечения шизофрении позволяют достичь длительной ремиссии и высокого качества жизни.",
        "content" => [
            "Шизофрения — это серьезное психическое расстройство, которое влияет на то, как человек мыслит, чувствует и ведет себя. Несмотря на сложность диагноза, современная медицина обладает эффективными инструментами для борьбы с этим заболеванием.",
            "В клинике «Экстрамед-Пси» мы используем препараты нового поколения с минимальными побочными эффектами и индивидуальные программы психосоциальной реабилитации.",
            "Работа с семьей и поддержка социального окружения являются неотъемлемыми частями успешного лечения."
        ]
    ],
    [
        "title" => "Помощь при депрессии: выйти из темноты",
        "slug" => "помощь-при-депрессии",
        "category" => "psychotherapy",
        "category_label" => "Психотерапия",
        "image" => "images/art-4.png",
        "excerpt" => "Депрессия — это не просто плохое настроение, а заболевание, требующее профессионального лечения.",
        "content" => [
            "Депрессия — одно из самых распространенных психических расстройств, которое лишает человека радости жизни, энергии и надежды. Она может проявляться как на эмоциональном, так и на физическом уровне.",
            "Мы предлагаем комплексную помощь, сочетающую фармакотерапию и современные направления психотерапии. Наши врачи помогут подобрать схему лечения, которая вернет вам краски жизни.",
            "Помните: просить о помощи — это проявление силы, а не слабости."
        ]
    ],
    [
        "title" => "Стационарное лечение психических расстройств",
        "slug" => "стационарное-лечение-психических-расстройств",
        "category" => "emergency",
        "category_label" => "Экстренная помощь",
        "image" => "images/art-1.png",
        "excerpt" => "Комфортные условия стационара и круглосуточное наблюдение специалистов для максимально эффективного лечения.",
        "content" => [
            "В некоторых случаях для стабилизации состояния пациента требуется пребывание в стационаре под круглосуточным присмотром медицинского персонала. Мы создали в нашей клинике условия, максимально приближенные к домашним.",
            "Стационар «Экстрамед-Пси» — это безопасность, анонимность и интенсивная терапия. Пациенты получают полноценное питание, прогулки и регулярные консультации лечащего врача.",
            "Мы гарантируем бережное отношение и уважение достоинства каждого пациента."
        ]
    ],
    [
        "title" => "Лечение обсессивно-компульсивного расстройства",
        "slug" => "лечение-окр",
        "category" => "psychiatry",
        "category_label" => "Психиатрия",
        "image" => "images/art-2.png",
        "excerpt" => "Навязчивые мысли и действия можно победить с помощью правильной терапии.",
        "content" => [
            "ОКР характеризуется наличием навязчивых идей (обсессий) и повторяющихся действий (компульсий), которые человек совершает, чтобы снизить тревогу. Это расстройство может существенно ограничивать свободу человека.",
            "Метод экспозиции и предотвращения реакций в сочетании с медикаментозной поддержкой дает отличные результаты в лечении ОКР в нашей клинике.",
            "Мы помогаем пациентам разорвать порочный круг навязчивостей и вернуть контроль над своей жизнью."
        ]
    ],
    [
        "title" => "Психологическая поддержка родственников больных",
        "slug" => "поддержка-родственников",
        "category" => "elderly",
        "category_label" => "Пожилым",
        "image" => "images/art-3.png",
        "excerpt" => "Жизнь рядом с психически больным человеком — это тяжелое испытание, требующее особого психологического ресурса.",
        "content" => [
            "Когда болеет близкий человек, страдает вся семья. Родственники часто сталкиваются с чувством вины, гнева, бессилия и выгорания. Помощь нужна не только пациенту, но и тем, кто находится рядом.",
            "Мы проводим группы поддержки и индивидуальные консультации для родственников наших пациентов. Мы обучаем правильному взаимодействию с больным и методам сохранения собственного психического здоровья.",
            "Забота о себе — это залог того, что вы сможете эффективно помогать своему близкому."
        ]
    ]
];

// Gallery Photos
$clinic_photos = [
    ["url" => "images/clinic-1.png", "caption" => "Комфортные палаты"],
    ["url" => "images/clinic-3.png", "caption" => "Здание пансионата"],
    ["url" => "images/clinic-4.png", "caption" => "Зона приема"],
    ["url" => "images/clinic-5.png", "caption" => "Места для отдыха"],
    ["url" => "images/clinic-6.png", "caption" => "Коридоры"],
    ["url" => "images/clinic-7.png", "caption" => "Интерьер"],
    ["url" => "images/clinic-8.png", "caption" => "Санузел"],
    ["url" => "images/clinic-9.png", "caption" => "Зона ожидания"]
];

// Routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// SEO
$seo_title = "Пансионат для пожилых и инвалидов в Краснодаре - Частный дом престарелых";
$seo_description = "Частный дом престарелых в Краснодаре, платный пансионат для пожилых людей. Хорошие интернаты (пансионы) для престарелых людей и инвалидов в Краснодарском крае. Реабилитация после инсульта, инфаркта и переломов.";
$seo_keywords = "дом престарелых в Краснодаре, платный пансионат для пожилых людей, интернаты для престарелых в Краснодарском крае, пансион для инвалидов Краснодар";

if ($page === 'articles') {
    $seo_title = "База знаний - " . count($articles) . " статей экспертов | Extramed-Psy";
    $seo_description = "Полезные статьи о реабилитации после инсульта, уходе при деменции и особенностях жизни в пансионате для пожилых.";
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
    <meta name="keywords" content="<?php echo $seo_keywords; ?>">
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
        .article-content h4 { font-size: 1.3rem; margin-bottom: 10px; font-weight: 900; line-height: 1.2; }
        .article-content p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; }

        .floating-cta { position: fixed; right: 20px; bottom: 20px; z-index: 900; display: flex; flex-direction: column; gap: 10px; }
        .f-btn { width: 56px; height: 56px; border-radius: 28px; display: flex; align-items: center; justify-content: center; color: white; box-shadow: 0 10px 20px rgba(0,0,0,0.15); border: 3px solid white; font-weight: 900; }
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
        .burger-btn span { width: 25px; height: 3px; background: var(--primary); border-radius: 2px; transition: 0.3s; }

        .mobile-menu { position: fixed; top: 0; right: 0; bottom: 0; width: 85%; max-width: 350px; background: white; z-index: 1500; padding: 40px; transform: translateX(100%); transition: 0.4s; box-shadow: -10px 0 30px rgba(0,0,0,0.1); }
        .mobile-menu.active { transform: translateX(0); }
        .m-nav-link { display: block; font-size: 1.2rem; font-weight: 800; padding: 15px 0; border-bottom: 1px solid #f5f5f5; color: var(--text); }
        .overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 1400; display: none; }

        footer { background: #0f172a; color: white; padding: 80px 0 40px; }
        .footer-grid { display: grid; gap: 40px; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
        
        @media (max-width: 768px) {
            .floating-cta { right: 10px; bottom: 10px; gap: 8px; }
            .f-btn { width: 48px; height: 48px; font-size: 0.8rem; }
            section { padding: 60px 0; }
            .hero { padding-top: 120px; }
        }
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
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div style="font-weight: 900; color: var(--primary); font-size: 1.2rem;">МЕНЮ</div>
            <button onclick="toggleMenu(false)" style="border: none; background: none; font-size: 2rem; color: #ccc;">&times;</button>
        </div>
        <a href="?page=home" class="m-nav-link">Главная</a>
        <a href="?page=home#prices" class="m-nav-link">Цены</a>
        <a href="?page=articles" class="m-nav-link">База знаний (<?php echo count($articles); ?>)</a>
        <a href="?page=home#contacts" class="m-nav-link">Контакты</a>
        <div style="margin-top: 40px; display: flex; flex-direction: column; gap: 15px;">
            <a href="tel:88612906619" class="btn btn-primary" style="justify-content: center; height: 55px;">8 (861) 290-66-19</a>
            <a href="https://wa.me/79282579115" class="btn btn-outline" style="justify-content: center; height: 55px;">WhatsApp</a>
        </div>
    </div>

    <main>
        <?php if ($page === 'home'): ?>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <h1 style="color: var(--primary);">Пансионат для пожилых и инвалидов в Краснодаре</h1>
                    <p style="color: var(--primary); font-weight: 800; margin-bottom: 15px;">Мы — частный дом престарелых в Краснодаре и платный пансионат для пожилых людей.</p>
                    <p style="font-size: 1.2rem; color: var(--text-muted); font-weight: 700; margin-bottom: 30px;">
                        Реабилитация, которая возвращает к жизни. Активные программы после инсульта, инфаркта и переломов.
                    </p>
                    <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 30px;">
                        <a href="tel:88612906619" class="btn btn-primary">Консультация врача</a>
                        <button class="btn btn-outline" onclick="toggleModal(true)">Онлайн-экскурсия</button>
                    </div>
                </div>
                <div class="hero-img">
                    <img src="images/clinic-hero.png" alt="Пансионат Extramed-Psy">
                </div>
            </div>
        </section>

        <section id="seo-info" style="background: #fff; border-top: 1px solid #eee; padding: 60px 0;">
            <div class="container" style="text-align: center;">
                <h2 style="font-size: 2rem; font-weight: 900; margin-bottom: 20px;">Лучшие интернаты для престарелых в Краснодарском крае</h2>
                <p style="max-width: 900px; margin: 0 auto; color: var(--text-muted); font-weight: 700; line-height: 1.6;">
                    Extramed-Psy — это хорошие интернаты (пансионы) для престарелых людей и инвалидов в Краснодарском крае. Мы предлагаем комфортные условия проживания, круглосуточное медицинское наблюдение и индивидуальные программы реабилитации. Наш платный пансионат для пожилых людей обеспечивает атмосферу заботы и домашнего уюта, помогая вернуться к полноценной жизни.
                </p>
            </div>
        </section>

        <section id="gallery" style="background: #fafafa;">
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
                    <span class="badge">База знаний</span>
                    <h2><?php echo count($articles); ?> полезных материалов</h2>
                    <p style="color: var(--text-muted); font-weight: 700; margin-top: 10px;">Актуальные статьи от наших экспертов</p>
                </div>
                <div class="grid-3">
                    <?php foreach (array_slice($articles, 0, 3) as $a): ?>
                    <a href="?page=article&slug=<?php echo $a['slug']; ?>" class="article-card">
                        <img src="<?php echo $a['image']; ?>" alt="">
                        <div class="article-content">
                            <div style="margin-bottom: 10px;"><span class="badge" style="font-size: 0.7rem;"><?php echo $a['category_label']; ?></span></div>
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
                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; min-width: 500px;">
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
                            <div style="margin-bottom: 10px;"><span class="badge" style="font-size: 0.7rem;"><?php echo $a['category_label']; ?></span></div>
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
                <h1 style="font-size: 2.5rem; font-weight: 900; margin-bottom: 30px; line-height: 1.1;"><?php echo $art['title']; ?></h1>
                <div style="border-radius: 2.5rem; overflow: hidden; margin-bottom: 40px; box-shadow: var(--shadow); aspect-ratio: 16/9;">
                    <img src="<?php echo $art['image']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="max-width: 800px; margin: 0 auto; font-size: 1.15rem; line-height: 1.8; color: #334155;">
                    <?php foreach($art['content'] as $p) echo "<p style='margin-bottom: 25px;'>$p</p>"; ?>
                </div>
                <div style="margin-top: 60px; padding: 50px 30px; background: var(--primary); color: white; border-radius: 2.5rem; text-align: center;">
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Нужна помощь специалиста?</h3>
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
        <a href="https://wa.me/79282579115" class="f-btn f-wa" title="WhatsApp" target="_blank">WA</a>
        <a href="https://t.me/ExtraMed93" class="f-btn f-tg" title="Telegram" target="_blank">TG</a>
        <a href="tel:88612906619" class="f-btn f-ph" title="Позвонить">📞</a>
    </div>

    <footer id="contacts">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px; font-weight: 900;">Extramed-Psy</h3>
                    <p style="opacity: 0.7;">Пансионат для пожилых людей в Краснодаре. Профессиональный медицинский уход и реабилитация.</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 20px; font-weight: 800;">Адрес</h4>
                    <p style="opacity: 0.7;">г. Краснодар, ул. Лизы Чайкиной, д. 3/6, этаж 2</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 20px; font-weight: 800;">Контакты</h4>
                    <a href="tel:88612906619" style="font-size: 1.5rem; font-weight: 900; color: white;">8 (861) 290-66-19</a>
                    <p style="opacity: 0.7; margin-top: 10px;">E-mail: alexsamara134@yandex.ru</p>
                    <p style="opacity: 0.7; margin-top: 5px;">WA: 8 (861) 290-66-19</p>
                    <p style="opacity: 0.7; margin-top: 5px;">TG: @ExtraMed93</p>
                </div>
            </div>
            <div style="margin-top: 60px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1); text-align: left; opacity: 0.5; font-size: 0.8rem;">
                <div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                    <div>
                        © 2024 Extramed-Psy. Все права защищены.<br>
                        Медицинские услуги оказывает ООО “ЭКСТРАМЕД” | ИНН 2312324163 | Лицензия Л041-01126-23/01219708
                    </div>
                    <div>
                        <a href="#" style="color: white; opacity: 0.6;">Политика конфиденциальности</a>
                    </div>
                </div>
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
