<?php
include("skills_data.php"); // ເອີ້ນໃຊ້ຂໍ້ມູນທັກສະຈາກບ່ອນດຽວ
// ກຳນົດພາສາທີ່ຮອງຮັບທັງໝົດ 7 ພາສາ
$supported_langs = [
    'la' => '🇱🇦 ລາວ',
    'en' => '🇬🇧 English',
    'th' => '🇹🇭 ไทย',
    'zh' => '🇨🇳 中文',
    'vi' => '🇻🇳 Tiếng Việt',
    'ko' => '🇰🇷 한국어',
    'ja' => '🇯🇵 日本語'
];

// ກວດສອບພາສາຈາກ URL ຖ້າບໍ່ມີ ຫຼື ບໍ່ຖືກຕ້ອງ ໃຫ້ໃຊ້ພາສາລາວ (la) ເປັນຄ່າເລີ່ມຕົ້ນ
$lang = isset($_GET['lang']) && array_key_exists($_GET['lang'], $supported_langs) ? $_GET['lang'] : 'la';

// ດຶງໄຟລ໌ພາສາ (ຖ້າຍັງບໍ່ທັນສ້າງໄຟລ໌ພາສາອື່ນ ຈະດຶງ en.php ມາສຳຮອງໄວ້ກ່ອນເພື່ອບໍ່ໃຫ້ Error)
$lang_file = "lang/{$lang}.php";
if (file_exists($lang_file)) {
    include($lang_file);
} else {
    include("lang/la.php");
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $cv['name']; ?> - CV</title>
    <!-- ດຶງ Font ທີ່ຮອງຮັບທັງ ລາວ, ໄທ, ຈີນ, ເກົາຫຼີ, ຍີ່ປຸ່ນ ແລະ ອັງກິດ -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-green: #10b981;
            --dark-green: #064e3b;
            --light-green: #d1fae5;
            --glass-bg: rgba(255, 255, 255, 0.72);
            --glass-border: rgba(255, 255, 255, 0.5);
            --text-main: #1f2937;
            --text-muted: #4b5563;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Noto Sans Lao', sans-serif;
            color: var(--text-main);
            min-height: 100vh;
            /* ຮູບພື້ນຫຼັງທຳມະຊາດ (ຖ້າຍັງບໍ່ມີຮູບ ຈະໃຊ້ຮູບຈາກ Unsplash ໃຫ້ອັດຕະໂນມັດ) */
            background-image: url('<?php echo file_exists($cv['bg_img']) ? $cv['bg_img'] : "https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=1920&q=80"; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 30px 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* ແຖບປ່ຽນ 7 ພາສາ */
        .lang-bar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 8px 16px;
            border-radius: 50px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(6, 78, 59, 0.15);
            margin-bottom: 25px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
        }

        .lang-bar a {
            text-decoration: none;
            color: var(--dark-green);
            font-size: 0.85rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .lang-bar a:hover {
            background: var(--light-green);
        }

        .lang-bar a.active {
            background: var(--primary-green);
            color: white;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        /* ກ່ອງ Card ຫຼັກແບບ Glassmorphism Blur */
        .cv-container {
            width: 100%;
            max-width: 960px;
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            display: grid;
            grid-template-columns: 320px 1fr;
        }

        /* ຖັນຊ້າຍ: ໂປຣຟາຍ, ຂໍ້ມູນຕິດຕໍ່, ທັກສະ */
        .sidebar {
            background: rgba(6, 78, 59, 0.85); /* ສີຂຽວເຂັ້ມໂປ່ງແສງ */
            color: white;
            padding: 35px 25px;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .profile-box {
            text-align: center;
        }

        .profile-img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary-green);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            margin-bottom: 15px;
            background: #e5e7eb;
        }

        .profile-box h1 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .profile-box .role {
            font-size: 0.9rem;
            color: var(--light-green);
            background: rgba(255, 255, 255, 0.1);
            padding: 4px 12px;
            border-radius: 20px;
            display: inline-block;
        }

        .side-section h3 {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary-green);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .contact-list p {
            font-size: 0.9rem;
            margin-bottom: 10px;
            line-height: 1.5;
            color: #f3f4f6;
        }

        /* ຫຼອດເປີເຊັນທັກສະ (Dynamic Skills) */
        .skill-item {
            margin-bottom: 14px;
        }

        .skill-header {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        .progress-bg {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #34d399, #10b981);
            border-radius: 10px;
        }

        /* ຖັນຂວາ: ກ່ຽວກັບຂ້ອຍ, ການສຶກສາ, ປະສົບການ */
        .main-content {
            padding: 40px 35px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .content-section h2 {
            font-size: 1.3rem;
            color: var(--dark-green);
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .content-section h2::before {
            content: "";
            display: inline-block;
            width: 6px;
            height: 22px;
            background: var(--primary-green);
            border-radius: 4px;
        }

        .about-text {
            line-height: 1.7;
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* ຮູບແບບ Timeline ສຳລັບການສຶກສາ ແລະ ປະສົບການ */
        .timeline-item {
            position: relative;
            padding-left: 20px;
            border-left: 2px solid var(--primary-green);
            margin-bottom: 20px;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            left: -7px;
            top: 4px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--primary-green);
            border: 2px solid white;
        }

        .timeline-year {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--primary-green);
            background: rgba(16, 185, 129, 0.12);
            padding: 2px 10px;
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 5px;
        }

        .timeline-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--text-main);
        }

        .timeline-sub {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-top: 3px;
        }

        /* ຮອງຮັບໜ້າຈໍມືຖື (Responsive) */
        @media (max-width: 768px) {
            .cv-container {
                grid-template-columns: 1fr;
            }
            .main-content {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- ປຸ່ມເລືອກ 7 ພາສາ -->
    <nav class="lang-bar">
        <?php foreach ($supported_langs as $code => $label): ?>
            <a href="?lang=<?php echo $code; ?>" class="<?php echo ($lang === $code) ? 'active' : ''; ?>">
                <?php echo $label; ?>
            </a>
        <?php endforeach; ?>
    </nav>

    <!-- ກ່ອງ CV ຫຼັກ -->
    <main class="cv-container">
        
        <!-- ດ້ານຊ້າຍ (Sidebar) -->
        <aside class="sidebar">
            <div class="profile-box">
                <!-- ຖ້າຍັງບໍ່ມີຮູບໃນ images/profile.jpg ຈະສະແດງຮູບ Avatar ຕົວຢ່າງໃຫ້ກ່ອນ -->
                <img src="<?php echo file_exists($cv['profile_img']) ? $cv['profile_img'] : 'https://ui-avatars.com/api/?name='.urlencode($cv['name']).'&background=10b981&color=fff&size=200'; ?>" alt="Profile" class="profile-img">
                <h1><?php echo $cv['name']; ?></h1>
                <span class="role"><?php echo $cv['position']; ?></span>
            </div>

            <!-- ຂໍ້ມູນຕິດຕໍ່ -->
            <div class="side-section contact-list">
                <h3><?php echo $cv['title_contact']; ?></h3>
                <p>🎂 <strong><?php echo $cv['title_age']; ?>:</strong> <?php echo $cv['age'] . ' ' . $cv['age_unit']; ?></p>
                <p>📧 <?php echo $cv['email']; ?></p>
                <p>📱 <?php echo $cv['phone']; ?></p>
                <p>📍 <?php echo $cv['address']; ?></p>
            </div>

            <!-- ທັກສະ ແລະ ເປີເຊັນ (Dynamic Loop) -->
            <div class="side-section">
                <h3><?php echo $cv['title_skills']; ?></h3>
                <?php foreach ($master_skills as $skill): ?>
                    <?php
                        // ດຶງຊື່ຕາມພາສາປັດຈຸບັນ ຖ້າພາສານັ້ນຍັງບໍ່ມີຄຳແປ ໃຫ້ໃຊ້ພາສາອັງກິດແທນ
                        $skill_name = $skill['labels'][$lang] ?? $skill['labels']['en'];
                        $percent    = (int)$skill['percent'];
                    ?>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span><?php echo htmlspecialchars($skill_name); ?></span>
                            <span><?php echo $percent; ?>%</span>
                        </div>
                        <div class="progress-bg">
                            <div class="progress-fill" style="width: <?php echo $percent; ?>%;"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </aside>

        <!-- ດ້ານຂວາ (Main Content) -->
        <section class="main-content">
            
            <!-- ກ່ຽວກັບຂ້ອຍ -->
            <div class="content-section">
                <h2><?php echo $cv['about_title']; ?></h2>
                <p class="about-text"><?php echo $cv['about_text']; ?></p>
            </div>

            <!-- ວຸດທິການສຶກສາ (Dynamic Loop) -->
            <div class="content-section">
                <h2><?php echo $cv['title_edu']; ?></h2>
                <?php foreach ($cv['education'] as $edu): ?>
                    <div class="timeline-item">
                        <span class="timeline-year"><?php echo $edu['year']; ?></span>
                        <div class="timeline-title"><?php echo $edu['degree']; ?></div>
                        <div class="timeline-sub"><?php echo $edu['school']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- ປະສົບການເຮັດວຽກ (Dynamic Loop) -->
            <div class="content-section">
                <h2><?php echo $cv['title_exp']; ?></h2>
                <?php foreach ($cv['experience'] as $exp): ?>
                    <div class="timeline-item">
                        <span class="timeline-year"><?php echo $exp['year']; ?></span>
                        <div class="timeline-title"><?php echo $exp['role']; ?></div>
                        <div class="timeline-sub"><?php echo $exp['desc']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>
    </main>

</body>
</html>