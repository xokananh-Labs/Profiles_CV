const SUPPORTED_LANGS = {
  la: "🇱🇦 ລາວ",
  en: "🇬🇧 English",
  th: "🇹🇭 ไทย",
  zh: "🇨🇳 中文",
  vi: "🇻🇳 Tiếng Việt",
  ko: "🇰🇷 한국어",
  ja: "🇯🇵 日本語"
};

const MASTER_SKILLS = [
  {
    id: "html_css",
    percent: 10,
    labels: {
      la: "HTML / CSS / Tailwind",
      en: "HTML / CSS / Tailwind",
      th: "HTML / CSS / Tailwind",
      zh: "HTML / CSS / Tailwind",
      vi: "HTML / CSS / Tailwind",
      ko: "HTML / CSS / Tailwind",
      ja: "HTML / CSS / Tailwind"
    }
  },
  {
    id: "php_mysql",
    percent: 5,
    labels: {
      la: "PHP & MySQL",
      en: "PHP & MySQL",
      th: "PHP & MySQL",
      zh: "PHP & MySQL",
      vi: "PHP & MySQL",
      ko: "PHP & MySQL",
      ja: "PHP & MySQL"
    }
  },
  {
    id: "js",
    percent: 5,
    labels: {
      la: "JavaScript",
      en: "JavaScript",
      th: "JavaScript",
      zh: "JavaScript",
      vi: "JavaScript",
      ko: "JavaScript",
      ja: "JavaScript"
    }
  },
  {
    id: "ui_ux",
    percent: 2,
    labels: {
      la: "ອອກແບບ UI/UX",
      en: "UI/UX Design",
      th: "ออกแบบ UI/UX",
      zh: "UI/UX 设计",
      vi: "Thiết kế UI/UX",
      ko: "UI/UX 디자인",
      ja: "UI/UXデザイン"
    }
  }
];

const CV_DATA = {
  en: {
    profile_img: "images/profile.jpg",
    bg_img: "images/bg-nature.jpg",
    name: "Xokananh KHAMSOMPHOU",
    position: "Full-Stack Web Developer",
    about_title: "About Me",
    about_text:
      "Passionate developer with a strong eye for modern, nature-inspired UI design and clean backend architecture.",
    title_contact: "Contact Info",
    title_age: "Age",
    age_unit: "Years Old",
    age: "21",
    email: "xokananh.khamsomphou@example.com",
    phone: "+856 20 1234 5678",
    address: "Vientiane, Laos",
    title_skills: "Skills & Expertise",
    title_edu: "Education",
    education: [
      {
        year: "2022 - Present",
        degree: "B.Sc. in Computer Science",
        school: "National University of Laos (NUOL)"
      },
      {
        year: "2019 - 2022",
        degree: "High School Diploma",
        school: "Vientiane Secondary School"
      }
    ],
    title_exp: "Experience & Projects",
    experience: [
      {
        year: "2025 - 2026",
        role: "Freelance Web Developer",
        desc: "Designed and built responsive websites and management systems for local businesses."
      }
    ]
  },
  ja: {
    profile_img: "images/profile.jpg",
    bg_img: "images/bg-nature.jpg",
    name: "Xokananh KHAMSOMPHOU",
    position: "Webデベロッパー (Web Developer)",
    about_title: "自己紹介",
    about_text:
      "新しい技術を学ぶことが好きで責任感があり、モダンで使いやすくユーザーに寄り添ったWeb・システム設計を得意としています。",
    title_contact: "連絡先",
    title_age: "年齢",
    age_unit: "歳",
    age: "21",
    email: "xokananh.khamsomphou@example.com",
    phone: "+856 20 1234 5678",
    address: "ラオス・ビエンチャン",
    title_skills: "スキル・専門分野",
    title_edu: "学歴",
    education: [
      {
        year: "2022 - 現在",
        degree: "計算機工学 学士",
        school: "ラオス国立大学"
      },
      {
        year: "2019 - 2022",
        degree: "高等学校卒業",
        school: "ビエンチャン高等学校"
      }
    ],
    title_exp: "経歴・実績",
    experience: [
      {
        year: "2025 - 2026",
        role: "フリーランスWebデベロッパー (Freelance Web Developer)",
        desc: "店舗や小規模組織向けに、レスポンシブWebサイトや管理システムの設計・開発を担当しました。"
      }
    ]
  },
  ko: {
    profile_img: "images/profile.jpg",
    bg_img: "images/bg-nature.jpg",
    name: "Xokananh KHAMSOMPHOU",
    position: "웹 개발자 (Web Developer)",
    about_title: "자기소개",
    about_text:
      "새로운 기술을 배우는 것을 좋아하고 책임감이 강하며, 현대적이고 사용자 친화적인 웹 및 시스템 디자인을 추구합니다.",
    title_contact: "연락처",
    title_age: "나이",
    age_unit: "세",
    age: "21",
    email: "xokananh.khamsomphou@example.com",
    phone: "+856 20 1234 5678",
    address: "라오스 비엔티안",
    title_skills: "기술 및 역량",
    title_edu: "학력",
    education: [
      {
        year: "2022 - 현재",
        degree: "컴퓨터공학 학사",
        school: "라오스 국립대학교"
      },
      {
        year: "2019 - 2022",
        degree: "고등학교 졸업",
        school: "비엔티안 고등학교"
      }
    ],
    title_exp: "경력 및 프로젝트",
    experience: [
      {
        year: "2025 - 2026",
        role: "프리랜서 웹 개발자 (Freelance Web Developer)",
        desc: "지역 상점 및 소규모 기관을 위한 반응형 웹사이트와 관리 시스템을 설계 및 개발했습니다."
      }
    ]
  }
};
