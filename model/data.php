<?php
    $pdfCV = '29-10-26';

    $SpotifyHeight = 120; $SpotifyWidth = 300;
    $SpotifyMusics = [
        "track/7ySUcLPVX7KudhnmNcgY2D?utm_source=generator&si=a9e5e61514124840",
        "album/77HpsjuhHrcZhIp0PyiROw?utm_source=generator&si=d71c5669824d482c",
        "track/5GogEntGPBpfo9vTfIFvJk?utm_source=generator&si=069b6ad6a2314690",
        "track/6TVhP2a7ESba4pR5ePflRw?utm_source=generator&si=ce65855754084301",
        "track/2bLqfJjuC5syrsgDsZfGmn?utm_source=generator&si=6f831eb7d3ee4e0b",
        "track/2VOomzT6VavJOGBeySqaMc?utm_source=generator&si=be0bea7fd0de4548",
        "track/4zD7GnXyl94mNCbyaNw6xf?utm_source=generator&si=f7ba3efbea8b4754"
    ];
    $Movies = ["oppenheimer", "rogueone", "odyssee", "andor", "transformers3", "breakingbad", "starwars7", "thewalkingdead", "bettercallsaul", "interstellar"];
    $Projects = [
        "ALOUS FRANCE" => ["Site sécurisé de mon entreprise de Développement WEB.", "Application Web", 2026, "alous", "https://www.alous.fr/"],
        "tPlan" => ["Application de gestion de tâches sécurisée.", "Application", 2026, "tplan", "https://github.com/noaribote/tPlan"],
        "ASF" => ["Application de suivi des finances sécurisée.", "Application", 2026, "asf", "https://github.com/noaribote/ASF"],
        "AscensionZ Launcher" => ["Launcher Minecraft moddé indépendant et sécurisé, inspiré de HunterZ : Survie réaliste post-apocalypse zombie.", "Application", 2026, "azlauncher", "https://github.com/noaribote/AscensionZ-Launcher"],
        "CHMOD Calculator" => ["Calculateur et conversions des permissions de la commande Linux CHMOD.", "Site Web", 2026, "chmod", "https://github.com/noaribote/chmod-calculator"],
        "MW4 Concept" => ["Concept d’interface pour le menu du jeu Call of Duty MODERN WARFARE 4.", "Application", 2026, "mw4", "https://github.com/noaribote/mw4-menu"],
        "NCV1 ModLoader" => ["Le NCV1 ModLoader est un outil de modification pour GTA ONLINE sur PS3, permettant de personnaliser l’expérience de jeu grâce à différentes fonctionnalités et modifications intégrées.", "Modding", 2025, "ncv1", "https://github.com/noaribote/NCV1-ModLoader"],
        "The Walking Dead Universe" => ["Site one-page factice présentant les différentes séries de l'univers de The Walking Dead et expérimentant le 'touch' et l'optimisation. Inlcus un outil de compression webm spécifique.", "Site Web", 2024, "twdu", "https://github.com/noaribote/TheWalkingDead-Universe"],
        "Noa_chid's XMB" => ["Noa_chid's XMB est le meilleur site de recherche et de téléchargement de mods.", "Site Web", 2023, "ncxmb", "https://www.noachidxmb.xyz/"]
    ];
    $Skills = ["Autonome", "Responsable", "À l'écoute", "Attentif", "Soigneux", "Assidu"];
    $SkillsDomainesTechniques = [
        "Web" => ["PHP", "HTML", "CSS", "APACHE"],
        "JavaScript" => ["JavaScript", "Electron.js", "Node.js", "NPM", "JSON", "jQuery"],
        "Python & Données" => ["Python", "Flask", "phpMyAdmin", "SQL", "SQLiteStudio", "MySQL", "CSV"],
        "Développement de Jeux" => ["C++", "Moddeur PlayStation", "Filmbox (FBX)"],
        "Outils & Environnements" => ["Trello", "Git", "Github", "GitLab", "OVHcloud", "Netlify", "Vercel", "Postman", "cdnjs", "Cloudflare", "Unity", "WSL", "PowerShell", "FileZilla", "LibreOffice", "Microsoft 365", "Oracle VirtualBox", "Visual Studio", "Visual Studio Code"],
        "Systèmes d'exploitation" => ["Windows 10, 11", "Linux", "LTSP", "Ubuntu", "Debian", "Android"],
        "Design" => ["Canva", "Figma", "GIMP", "Picsart", "Font Awesome", "CoreUI", "Google Fonts", "SVG"],
        "Intelligences artificielles" => ["ChatGPT", "Codex", "Claude", "Gemini", "Mistral AI"],
        "Communication" => ["YouTube", "TikTok", "Instagram", "Facebook", "Twitter", "LinkedIn", "Pinterest", "Discord", "Kick", "Twitch"],
        "Autre" => ["Markdown", "Architecture MVC", "VBScript", "Script Batch", "Google Ads", "SEO", "SMO"]
    ];
    $jobs = [
        // ["nom du poste", "nom de l'image .webp", "nom de l'entreprise", "type de poste", "description", "date", "lieu"],
        ["Développeur web", "ALOUSFRANCE", "ALOUS FRANCE", "Indépendant", "Micro-entreprise basée sur la conception de sites web, activité annexe et non principale, informations sur www.alous.fr", "avr. 2026 - aujourd'hui", "A distance"],
        ["Lead Développeur web", "G4", "Institut G4", "Titre nominatif", "Encadrement d’une équipe de développeurs. Mise en pratique MVC et contribution majeure dans le développement de tPlan, une application de gestion des tâches.", "oct. 2026 - aujourd'hui", "Lyon (69009)"],
        ["DevOps : Chef de projet", "UGA-dark", "IUT Valence", "Stage", "Responsable d'une équipe de BUT Informatique : Plan, Développement et Déploiement d'une application de gestion de suivi en temps réel.", "sept. 2026", "Valence (26000)"]
    ];
    $autreJobs = [
        ["Ouvrier bois", "CI", "CIRAM", "Ouvrier bois", "Reprise des travaux de 2024 avec davantage de responsabilités.", "juil. 2026", "Chabeuil (26120)"],
        ["Saisonnier", "CC", "CHOVIN-CLEMENT", "CDD", "Travail agricole en équipe.", "juil. 2025 - août 2025", "Montvendre (26120)"],
        ["Saisonnier", "PN", "POMAREL NEGOCE", "CDD", "Travail agricole en équipe.", "août 2024", "Étoile-sur-Rhône (26800)"],
        ["Conseiller ventes", "RE", "RETIF", "Stage", "Savoir parler aux clients, optimiser les performances commerciales.", "juin 2024", "Valence (26000)"],
        ["Logistique", "CI", "CIRAM", "Stage", "Découverte du terrain, assurer les mesures et la logistique.", "juin 2024", "Chabeuil (26120)"],
        ["Secteur industriel", "FM", "FREGATE MECA", "Stage", "Avoir des responsabilités (quotas de production).", "janv. 2023 - févr. 2023", "La Voulte-sur-Rhône (07800)"]
    ];
    $examens = [
        // ["examin", "nom de l'image .webp", "nom du centre", "description", "date", "lieu"],
        ["BACHELOR", "G4", "Institut G4", "Titre professionnel, Développement WEB & WEB Mobile.", "sept. 2026 - Aujourd'hui", "Lyon (69009)"],
        ["Permis B", "DI", "Drive Innov", "Voiture en boîte manuelle.", "déc. 2025 - juin 2026", "Portes-lès-Valence (26800)"],
        ["BACCALOREAT", "AL", "LPO Algoud Laffemas", "Cursus scolaire général et spécialisation en Numérique et sciences informatiques (NSI), Anglais Monde Contemporain (LLCER AMC) et Sciences Economiques et Sociales (SES).", "sept. 2023 - juin 2026", "Valence (26000)"],
        ["Certification PIX", "PIX", "LPO Algoud Laffemas", "Certification passée dans le cadre du cursus scolaire général du lycée.", "déc. 2025", "Valence (26000)"],
        ["DNB", "JM", "Collège Jean Macé", "", "sept. 2019 - juin 2023", "Portes-lès-Valence (26800)"]
    ]
?>