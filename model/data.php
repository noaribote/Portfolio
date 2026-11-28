<?php
    $pdfCV = '25-11-26';

    $levelsSKILLS = [
        '<i class="fa-solid fa-award level-base level-blue"></i>',
        '<i class="fa-solid fa-medal level-base level-gold"></i>',
        '<i class="fa-solid fa-medal level-base level-silver"></i>',
        '<i class="fa-solid fa-medal level-base level-bronze"></i>'
    ];
    $SpotifyHeight = 120; $SpotifyWidth = 300;
    $SpotifyMusics = [
        "track/7ySUcLPVX7KudhnmNcgY2D?utm_source=generator&si=a9e5e61514124840",
        "album/77HpsjuhHrcZhIp0PyiROw?utm_source=generator&si=d71c5669824d482c",
        "track/5GogEntGPBpfo9vTfIFvJk?utm_source=generator&si=069b6ad6a2314690",
        "track/6TVhP2a7ESba4pR5ePflRw?utm_source=generator&si=ce65855754084301",
        "track/2bLqfJjuC5syrsgDsZfGmn?utm_source=generator&si=6f831eb7d3ee4e0b",
        "track/4GD3gjZhBEqVY4rUK4AbzV?utm_source=generator&si=fd594f1fd85746bb",
        "track/2VOomzT6VavJOGBeySqaMc?utm_source=generator&si=be0bea7fd0de4548",
        "track/4HCOHRCSQelz2GPX8iTamO?utm_source=generator&si=2c05f6e7226a46b1",
        "track/4zD7GnXyl94mNCbyaNw6xf?utm_source=generator&si=f7ba3efbea8b4754"
    ];
    $Movies = ["oppenheimer", "rogueone", "odyssee", "andor", "transformers3", "breakingbad", "starwars7", "thewalkingdead", "bettercallsaul", "oneswholives"];
    $Projects = [
        "ALOUS FRANCE" => ["Site sécurisé de mon entreprise de Développement WEB.", "Application Web", 2026, "alous", "https://www.alous.fr/"],
        "Instagram Data Viewer" => ["Visualisateur, interpréteur et comparateur de données Meta (Instagram) sécurisé.", "Application", 2026, "idv", "https://github.com/noaribote/Instagram-Data-Viewer"],
        "tPlan" => ["Application de gestion de tâches sécurisée.", "Application", 2026, "tplan", "https://github.com/noaribote/tPlan"],
        "Noa_chid's XMB" => ["Noa_chid's XMB est le meilleur site de recherche et de téléchargement de mods.", "Site Web", 2023, "ncxmb", "https://www.noachidxmb.xyz/"],
        "ASF" => ["Application de suivi des finances sécurisée.", "Application", 2026, "asf", "https://github.com/noaribote/ASF"],
        "AscensionZ Launcher" => ["Launcher Minecraft moddé indépendant et sécurisé, inspiré de HunterZ : Survie réaliste post-apocalypse zombie.", "Application", 2026, "azlauncher", "https://github.com/noaribote/AscensionZ-Launcher"],
        "CHMOD Calculator" => ["Calculateur et conversions des permissions de la commande Linux CHMOD.", "Site Web", 2026, "chmod", "https://github.com/noaribote/chmod-calculator"],
        "MW4 Concept" => ["Concept d’interface pour le menu du jeu Call of Duty MODERN WARFARE 4.", "Application", 2026, "mw4", "https://github.com/noaribote/mw4-menu"],
        "NCV1 ModLoader" => ["Le NCV1 ModLoader est un outil de modification pour GTA ONLINE sur PS3, permettant de personnaliser l’expérience de jeu grâce à différentes fonctionnalités et modifications intégrées.", "Modding", 2025, "ncv1", "https://github.com/noaribote/NCV1-ModLoader"],
        "The Walking Dead Universe" => ["Site one-page factice présentant les différentes séries de l'univers de The Walking Dead et expérimentant le 'touch' et l'optimisation. Inlcus un outil de compression webm spécifique.", "Site Web", 2024, "twdu", "https://github.com/noaribote/TheWalkingDead-Universe"]
    ];
    $Skills = ["Autonome", "Responsable", "À l'écoute", "Attentif", "Soigneux", "Assidu", "Souriant", "Passioné", "Curieux"];    
    $SkillsDomainesTechniques = [
        "Web & Référencements" => [["name" => "PHP", "level" => 1], ["name" => "HTML", "level" => 0], ["name" => "CSS", "level" => 0], ["name" => "APACHE", "level" => 2], ["name" => "SEO", "level" => 1], ["name" => "SMA/SMO", "level" => 0], ["name" => "SEA", "level" => 3], ["name" => "GEO/SGEO", "level" => 2], ["name" => "Google Ads", "level" => 0], ["name" => "Google Adsense", "level" => 3], ["name" => "Google Analytics", "level" => 1], ["name" => "Google Search Console", "level" => 0], ["name" => "Crawlers", "level" => 1], ["name" => "Scrapers", "level" => 0]],
        "Outils & Environnements" => [["name" => "Trello", "level" => 1], ["name" => "Git", "level" => 0], ["name" => "Github", "level" => 0], ["name" => "GitLab", "level" => 1], ["name" => "OVHcloud", "level" => 0], ["name" => "Netlify", "level" => 0], ["name" => "Vercel", "level" => 2], ["name" => "Postman", "level" => 2], ["name" => "cdnjs", "level" => 2], ["name" => "Cloudflare", "level" => 1], ["name" => "Unity", "level" => 3], ["name" => "WSL", "level" => 3], ["name" => "LTSP", "level" => 3], ["name" => "PowerShell", "level" => 0], ["name" => "FileZilla", "level" => 0], ["name" => "LibreOffice", "level" => 0], ["name" => "Microsoft 365", "level" => 1], ["name" => "Oracle VirtualBox", "level" => 0], ["name" => "Visual Studio", "level" => 2], ["name" => "Visual Studio Code", "level" => 0]],
        "JavaScript" => [["name" => "JavaScript", "level" => 0], ["name" => "TypeScript", "level" => 0], ["name" => "Electron", "level" => 0], ["name" => "Node.js", "level" => 0], ["name" => "NPM", "level" => 1], ["name" => "jQuery", "level" => 2]],
        "Python & Données" => [["name" => "Python", "level" => 0], ["name" => "Flask", "level" => 2], ["name" => "phpMyAdmin", "level" => 0], ["name" => "SQL", "level" => 1], ["name" => "MySQL", "level" => 1], ["name" => "SQLiteStudio", "level" => 3], ["name" => "CSV", "level" => 0], ["name" => "JSON", "level" => 0]],
        "Développement de Jeux" => [["name" => "C++", "level" => 3], ["name" => "Moddeur PlayStation", "level" => 0], ["name" => "Filmbox (FBX)", "level" => 3]],
        "Systèmes d'exploitation" => [["name" => "Windows 10, 11", "level" => 0], ["name" => "Linux", "level" => 1], ["name" => "Ubuntu", "level" => 1], ["name" => "Debian", "level" => 1], ["name" => "macOS", "level" => 3], ["name" => "Android", "level" => 0]],
        "Design" => [["name" => "Canva", "level" => 0], ["name" => "Figma", "level" => 3], ["name" => "GIMP", "level" => 1], ["name" => "Picsart", "level" => 0], ["name" => "Font Awesome", "level" => 0], ["name" => "CoreUI", "level" => 0], ["name" => "Google Fonts", "level" => 0], ["name" => "SVG", "level" => 2]],
        "Intelligences artificielles" => [["name" => "CLIs", "level" => 0], ["name" => "LLMs", "level" => 0], ["name" => "ChatGPT", "level" => 0], ["name" => "Codex", "level" => 0], ["name" => "Claude", "level" => 0], ["name" => "Claude Code", "level" => 1], ["name" => "Grok", "level" => 3], ["name" => "Gemini", "level" => 2], ["name" => "Mistral AI", "level" => 2]],
        "Communication" => [["name" => "YouTube", "level" => 0], ["name" => "TikTok", "level" => 0], ["name" => "Instagram", "level" => 0], ["name" => "Facebook", "level" => 3], ["name" => "Twitter", "level" => 2], ["name" => "LinkedIn", "level" => 0], ["name" => "Pinterest", "level" => 2], ["name" => "Discord", "level" => 1], ["name" => "Kick", "level" => 2], ["name" => "Twitch", "level" => 1]],
        "Autre" => [["name" => "Markdown", "level" => 1], ["name" => "Architecture MVC", "level" => 1], ["name" => "VBScript", "level" => 3], ["name" => "Script Batch", "level" => 2]]
    ];
    $jobs = [
        // ["nom du poste", "nom de l'image .webp", "nom de l'entreprise", "type de poste", "description", "date", "lieu"],
        ["Développeur web", "ALOUSFRANCE", "ALOUS FRANCE", "Indépendant", "Micro-entreprise basée sur la conception de sites web, activité annexe et non principale, informations sur www.alous.fr", "avr. 2026 - aujourd'hui", "A distance"],
        ["Projet de formation - Lead Développeur web", "G4", "Institut G4", "Titre nominatif", "Encadrement d’une équipe de 4 développeurs. Mise en pratique MVC et contribution majeure dans le développement de tPlan, une application de gestion des tâches.", "oct. 2026 - aujourd'hui", "Lyon (69009)"],
        ["Chef de projet", "UGA-dark", "IUT Valence", "Stage", "Responsable d'une équipe de BUT Informatique : Plan, Développement et Déploiement d'une application de gestion de suivi en temps réel.", "sept. 2026", "Valence (26000)"]
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