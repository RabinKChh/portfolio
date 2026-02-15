<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rabin Kumar Chhatkuli | SOC Analyst & Developer</title>
    
    <!-- SECURITY FEATURES (Meta Tags) -->
    <!-- Prevents the browser from interpreting files as a different MIME type -->
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <!-- Prevents clickjacking attacks -->
    <meta http-equiv="X-Frame-Options" content="DENY">
    <!-- Enables the browser's XSS filter -->
    <meta http-equiv="X-XSS-Protection" content="1; mode=block">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           CSS VARIABLES (THEMING)
           ========================================= */
        :root {
            /* Dark Mode Variables (Default) */
            --bg-body: #050a10;
            --bg-card: #0f1623;
            --text-main: #e2e8f0;
            --text-muted: #94a3b8;
            --border-color: rgba(255,255,255,0.05);
            --nav-bg: rgba(5, 10, 16, 0.85); /* Slightly more opaque */
            --shadow: 0 10px 30px -10px rgba(0, 242, 255, 0.15);
            --btn-bg: #ffffff;
            --btn-text: #000000;
            --nav-glow: rgba(0, 242, 255, 0.5);
        }

        /* Light Mode Variables */
        [data-theme="light"] {
            --bg-body: #f8fafc;
            --bg-card: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: rgba(0,0,0,0.1);
            --nav-bg: rgba(255, 255, 255, 0.9);
            --shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
            --btn-bg: #0f172a;
            --btn-text: #ffffff;
            --nav-glow: rgba(0, 0, 0, 0.1);
        }

        /* Accent Colors */
        --primary: #00f2ff; 
        --secondary: #00ff88; 
        --web-accent: #ff0055; 
        --gradient: linear-gradient(90deg, var(--primary), var(--secondary));

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
        html { scroll-padding-top: 80px; } /* Offset for fixed header */

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.7;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(0, 242, 255, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(0, 255, 136, 0.05) 0%, transparent 20%);
            transition: background-color 0.4s ease, color 0.4s ease, background-image 0.4s ease;
        }

        [data-theme="light"] body { background-image: none; }

        h1, h2, h3, h4 { font-family: 'Rajdhani', sans-serif; text-transform: uppercase; }
        a { text-decoration: none; color: inherit; transition: color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .text-primary { color: var(--primary); }
        .text-secondary { color: var(--secondary); }
        .text-web { color: var(--web-accent); }
        
        .section-padding { padding: 100px 0; }
        
        .section-header { margin-bottom: 60px; text-align: center; }
        .section-header h2 { font-size: 2.5rem; margin-bottom: 10px; position: relative; display: inline-block; }
        .section-header h2::after {
            content: ''; display: block; width: 60px; height: 4px;
            background: var(--gradient); margin: 10px auto 0; border-radius: 2px;
        }
        .section-header p { color: var(--text-muted); }

        .btn {
            display: inline-block; padding: 12px 30px; background: transparent;
            border: 1px solid var(--primary); color: var(--primary); font-weight: 600;
            font-family: 'Rajdhani', sans-serif; letter-spacing: 1px; text-transform: uppercase;
            border-radius: 4px; cursor: pointer; position: relative; overflow: hidden; z-index: 1;
        }
        .btn::before {
            content: ''; position: absolute; top: 0; left: 0; width: 0%; height: 100%;
            background: var(--primary); z-index: -1; transition: 0.4s;
        }
        .btn:hover::before { width: 100%; }
        .btn:hover { color: #000; box-shadow: 0 0 20px rgba(0, 242, 255, 0.4); }

        .btn-fill { background: var(--gradient); color: #da2424; border: none; }
        .btn-fill:hover { opacity: 0.9; color: #bc4444; box-shadow: 0 0 25px rgba(0, 255, 136, 0.4); }

        /* =========================================
           THEME TOGGLE
           ========================================= */
        .theme-toggle-btn {
            background: rgba(255,255,255,0.1); border: 1px solid var(--border-color);
            width: 40px; height: 40px; border-radius: 50%; cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem; color: var(--text-main); transition: all 0.4s ease;
        }
        .theme-toggle-btn:hover { 
            background: var(--primary); 
            color: #000; 
            transform: rotate(15deg) scale(1.1);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.4);
        }
        .theme-toggle-btn i {
            transition: transform 0.4s ease, opacity 0.4s ease;
        }

        /* =========================================
           NEW HEADER / NAVBAR STYLES
           ========================================= */
        header {
            position: fixed; top: 0; width: 100%; z-index: 1000;
            background: var(--nav-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
            height: 80px;
            transition: all 0.3s ease;
            /* Add a subtle bottom glow for the "Cyber" feel */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Active State for Header (Scrolled) */
        header.scrolled {
            height: 70px;
            background: var(--bg-card); /* Solid color on scroll */
            border-bottom: 1px solid var(--primary);
            box-shadow: 0 4px 20px rgba(0, 242, 255, 0.2);
        }

        nav { display: flex; justify-content: space-between; align-items: center; height: 100%; }

        .logo {
            font-size: 1.8rem; font-weight: 800; font-family: 'Rajdhani', sans-serif;
            display: flex; align-items: center; gap: 12px;
            cursor: pointer; transition: all 0.3s ease;
            position: relative;
            height: 100%;
        }

        .logo:hover {
            filter: brightness(1.2);
        }

        /* Modern Tech Logo Box */
        .logo-box {
            position: relative;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #00f2ff 0%, #00ff88 50%, #ff6b35 100%);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.5);
            animation: logo-shift 3s ease infinite;
            flex-shrink: 0;
        }

        .logo-box::before {
            content: '';
            position: absolute;
            top: 2px; left: 2px;
            right: 2px; bottom: 2px;
            background: var(--bg-body);
            border-radius: 10px;
            z-index: 1;
        }

        .logo-box i {
            position: relative;
            z-index: 2;
            color: var(--primary);
            font-size: 1.4rem;
            animation: logo-float 3s ease-in-out infinite;
        }

        .logo-text-wrapper {
            display: flex;
            align-items: center;
            gap: 3px;
            line-height: 1;
            height: 100%;
        }

        .logo-main {
            background: linear-gradient(90deg, #00f2ff, #ff6b35);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            font-size: 1.2rem;
            letter-spacing: 2px;
            white-space: nowrap;
            display: flex;
            align-items: center;
        }

        .logo-sub {
            color: #00ff88;
            font-size: 0.6rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            animation: logo-sub-glow 2s ease-in-out infinite;
            white-space: nowrap;
            display: flex;
            align-items: center;
        }

        /* Animated line under logo */
        .logo::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #00f2ff, #ff6b35);
            animation: logo-line 3s ease infinite;
        }

        @keyframes logo-shift {
            0%, 100% {
                background: linear-gradient(135deg, #00f2ff 0%, #00ff88 50%, #ff6b35 100%);
            }
            50% {
                background: linear-gradient(45deg, #ff6b35 0%, #00ff88 50%, #00f2ff 100%);
            }
        }

        @keyframes logo-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }

        @keyframes logo-sub-glow {
            0%, 100% { text-shadow: 0 0 5px rgba(0, 255, 136, 0.5); }
            50% { text-shadow: 0 0 15px rgba(0, 255, 136, 1); }
        }

        @keyframes logo-line {
            0%, 100% { width: 0; }
            50% { width: 30px; }
        }

        .nav-wrapper { display: flex; align-items: center; gap: 40px; }
        
        .nav-links { display: flex; gap: 30px; align-items: center; }
        
        .nav-links a {
            font-size: 0.95rem; font-weight: 500; color: var(--text-muted);
            position: relative; padding: 5px 0;
        }

        /* Hover Effect: Dot Indicator with Red-Yellow Mix */
        .nav-links a::after {
            content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);
            width: 0; height: 3px; background: linear-gradient(90deg, #ff6b35, #ffd700); transition: 0.4s ease;
            border-radius: 2px;
        }
        .nav-links a:hover { 
            color: #ffa500;
            text-shadow: 0 0 10px rgba(255, 165, 0, 0.5);
        }
        .nav-links a:hover::after { 
            width: 100%; 
            left: 0; 
            transform: none;
            box-shadow: 0 0 15px rgba(255, 165, 0, 0.6);
        }

        /* Active Navigation Link (Section Highlight) */
        .nav-links a.active {
            color: var(--primary);
        }

        .nav-links a.active::after {
            width: 100%;
            left: 0;
            transform: none;
            background: var(--primary);
        }

        /* Nav Action Button */
        .nav-cta {
            padding: 8px 20px; font-size: 0.9rem; border-radius: 50px;
        }

        .menu-toggle { display: none; font-size: 1.5rem; cursor: pointer; color: var(--text-main); }

        /* =========================================
           HERO SECTION (Unchanged)
           ========================================= */
        #hero { min-height: 100vh; display: flex; align-items: center; padding-top: 80px; position: relative; }
        .hero-content { max-width: 800px; }
        .hero-greeting { color: var(--primary); font-family: 'Rajdhani', sans-serif; font-size: 1.2rem; letter-spacing: 2px; margin-bottom: 10px; display: block; }
        .hero-name { font-size: 4rem; line-height: 1.1; margin-bottom: 15px; }
        .hero-role { font-size: 1.5rem; color: var(--text-muted); margin-bottom: 30px; min-height: 1.6em; }
        .hero-role span { color: var(--secondary); font-weight: 600; }
        .hero-buttons { display: flex; gap: 20px; flex-wrap: wrap; }
        .hero-stats { margin-top: 50px; display: flex; gap: 40px; border-top: 1px solid var(--border-color); padding-top: 30px; }
        .stat h3 { font-size: 2rem; color: var(--text-main); }
        .stat p { font-size: 0.9rem; color: var(--text-muted); }

        /* =========================================
           ABOUT SECTION (Unchanged)
           ========================================= */
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start; }
        .about-card { background: var(--bg-card); padding: 30px; border-radius: 12px; border: 1px solid var(--border-color); position: relative; transition: 0.3s; }
        .about-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--primary); border-radius: 12px 0 0 12px; }
        .about-text p { margin-bottom: 20px; color: var(--text-muted); }
        .info-list { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 20px; }
        .info-item strong { color: var(--text-main); display: block; font-size: 0.85rem; }
        .info-item span { color: var(--text-muted); font-size: 0.95rem; }

        /* =========================================
           RESUME / EXPERIENCE (Unchanged)
           ========================================= */
        .timeline { position: relative; max-width: 800px; margin: 0 auto; }
        .timeline::after { content: ''; position: absolute; width: 2px; background: var(--border-color); top: 0; bottom: 0; left: 50%; margin-left: -1px; }
        .timeline-item { padding: 10px 40px; position: relative; background-color: inherit; width: 50%; }
        .timeline-item::after { content: ''; position: absolute; width: 16px; height: 16px; right: -8px; background-color: var(--bg-body); border: 3px solid var(--secondary); top: 20px; border-radius: 50%; z-index: 1; }
        .left { left: 0; }
        .right { left: 50%; }
        .left::before { content: " "; height: 0; position: absolute; top: 22px; width: 0; z-index: 1; right: 30px; border: medium solid var(--bg-card); border-width: 10px 0 10px 10px; border-color: transparent transparent transparent var(--bg-card); }
        .right::before { content: " "; height: 0; position: absolute; top: 22px; width: 0; z-index: 1; left: 30px; border: medium solid var(--bg-card); border-width: 10px 10px 10px 0; border-color: transparent var(--bg-card) transparent transparent; }
        .right::after { left: -8px; }
        .content { padding: 20px 30px; background: var(--bg-card); border-radius: 12px; border: 1px solid var(--border-color); transition: 0.3s; }
        .content:hover { transform: translateY(-5px); border-color: var(--primary); }
        .date { font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 5px; display: block; }
        .content h3 { margin-bottom: 5px; color: var(--text-main); }
        .content h4 { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 400; }
        .content p { font-size: 0.9rem; color: var(--text-muted); }

        /* =========================================
           SKILLS (Unchanged)
           ========================================= */
        .skills-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .skill-category { background: var(--bg-card); padding: 30px; border-radius: 12px; border-top: 3px solid var(--secondary); border: 1px solid var(--border-color); border-top-width: 3px; }
        .skill-category h3 { margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }
        .skill-tags { display: flex; flex-wrap: wrap; gap: 10px; }
        .skill-tag { background: rgba(255,255,255,0.05); padding: 8px 15px; border-radius: 4px; font-size: 0.9rem; border: 1px solid transparent; transition: 0.3s; }
        [data-theme="light"] .skill-tag { background: rgba(0,0,0,0.05); }
        .skill-tag:hover { border-color: var(--primary); color: var(--primary); background: rgba(0, 242, 255, 0.05); }

        /* =========================================
           PROJECTS (Unchanged)
           ========================================= */
        .project-group-title { font-size: 1.8rem; color: var(--text-main); margin: 60px 0 30px; padding-bottom: 10px; border-bottom: 1px solid var(--border-color); display: flex; align-items: center; gap: 15px; }
        .project-group-title i { color: var(--secondary); }
        .project-group-title.web-dev i { color: var(--web-accent); }
        .projects-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }
        .project-card { background: var(--bg-card); border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color); transition: 0.4s; display: flex; flex-direction: column; }
        .project-card:hover { transform: translateY(-10px); box-shadow: var(--shadow); border-color: rgba(0, 255, 136, 0.3); }
        .project-card.web:hover { border-color: rgba(255, 0, 85, 0.3); box-shadow: 0 10px 30px -10px rgba(255, 0, 85, 0.2); }
        .project-img { height: 200px; background: var(--bg-card); display: flex; align-items: center; justify-content: center; overflow: hidden; border-bottom: 1px solid var(--border-color); }
        .project-img i { font-size: 4rem; color: var(--text-muted); opacity: 0.2; transition: 0.4s; }
        .project-card:hover .project-img i { color: var(--primary); opacity: 1; transform: scale(1.1); }
        .project-card.web:hover .project-img i { color: var(--web-accent); }
        .project-body { padding: 25px; flex: 1; display: flex; flex-direction: column; }
        .project-body h3 { margin-bottom: 10px; font-size: 1.3rem; color: var(--text-main); }
        .project-body p { font-size: 0.9rem; color: var(--text-muted); margin-bottom: 20px; flex: 1; }
        .tech-stack { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 20px; }
        .tech-item { font-size: 0.75rem; color: var(--secondary); background: rgba(0, 255, 136, 0.1); padding: 4px 8px; border-radius: 4px; }
        .project-card.web .tech-item { color: var(--web-accent); background: rgba(255, 0, 85, 0.1); }

        /* =========================================
           CERTIFICATIONS (Unchanged)
           ========================================= */
        .certs-container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .cert-badge { background: var(--bg-card); border: 1px solid var(--border-color); padding: 20px 30px; border-radius: 50px; display: flex; align-items: center; gap: 15px; transition: 0.3s; }
        .cert-badge:hover { border-color: var(--primary); transform: scale(1.05); }
        .cert-badge i { color: var(--secondary); font-size: 1.5rem; }

        /* =========================================
           CONTACT (Unchanged)
           ========================================= */
        .contact-container { background: var(--bg-card); padding: 50px; border-radius: 12px; border: 1px solid var(--border-color); display: grid; grid-template-columns: 1fr 1fr; gap: 50px; }
        .contact-info h3 { margin-bottom: 20px; font-size: 1.8rem; color: var(--text-main); }
        .contact-info p { color: var(--text-muted); margin-bottom: 30px; }
        .contact-details div { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; }
        .contact-details i { width: 40px; height: 40px; background: rgba(0, 242, 255, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary); }
        .contact-details a { color: var(--text-main); font-weight: 500; }
        .contact-details a:hover { color: var(--primary); }
        .form-group { margin-bottom: 20px; }
        .form-control { width: 100%; padding: 15px; background: var(--bg-body); border: 1px solid var(--border-color); border-radius: 6px; color: var(--text-main); font-family: 'Inter', sans-serif; }
        .form-control:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 10px rgba(255, 234, 0, 0.1); }

        /* =========================================
           PORTFOLIO PROFILE IMAGE (NEW)
           ========================================= */
        .hero-image {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 500px;
        }

        .profile-image-wrapper {
            position: relative;
            width: 420px;
            height: 550px;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 
                0 0 60px rgba(0, 242, 255, 0.4),
                0 0 120px rgba(0, 255, 136, 0.2),
                inset 0 0 60px rgba(0, 242, 255, 0.1);
            border: 3px solid var(--primary);
            animation: glow-pulse 4s ease-in-out infinite, float-image 6s ease-in-out infinite;
            transform-style: preserve-3d;
        }

        .profile-image-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(0, 242, 255, 0.15) 50%, transparent 70%);
            animation: shimmer 4s infinite;
            z-index: 1;
            pointer-events: none;
        }

        .profile-image-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 242, 255, 0.1) 0%, transparent 50%, rgba(0, 255, 136, 0.05) 100%);
            z-index: 3;
            pointer-events: none;
            border-radius: 27px;
        }

        .profile-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            position: relative;
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .profile-image-wrapper:hover img {
            transform: scale(1.05);
        }

        /* Animated Background Orbs */
        .profile-bg-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(50px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
        }

        .orb-1 {
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0, 242, 255, 0.6), transparent 70%);
            top: -100px;
            left: -150px;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(0, 255, 136, 0.4), transparent 70%);
            bottom: -80px;
            right: -120px;
            animation-delay: 2s;
        }

        .orb-3 {
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255, 0, 85, 0.3), transparent 70%);
            top: 50%;
            right: -100px;
            animation-delay: 4s;
        }

        @keyframes glow-pulse {
            0%, 100% {
                box-shadow: 
                    0 0 60px rgba(0, 242, 255, 0.4),
                    0 0 120px rgba(0, 255, 136, 0.2),
                    inset 0 0 60px rgba(0, 242, 255, 0.1);
            }
            50% {
                box-shadow: 
                    0 0 80px rgba(0, 242, 255, 0.7),
                    0 0 160px rgba(0, 255, 136, 0.4),
                    inset 0 0 80px rgba(0, 242, 255, 0.2);
            }
        }

        @keyframes shimmer {
            0% { transform: translate(-100%, -100%) rotate(45deg); }
            100% { transform: translate(100%, 100%) rotate(45deg); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) translateX(0px); }
            33% { transform: translateY(-30px) translateX(15px); }
            66% { transform: translateY(30px) translateX(-15px); }
        }

        @keyframes float-image {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        /* Hero Layout with Image */
        #hero .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            max-width: 1400px;
        }

        #hero .hero-content {
            max-width: 100%;
        }

        footer { border-top: 1px solid var(--border-color); padding: 40px 0; text-align: center; margin-top: 50px; color: var(--text-muted); font-size: 0.9rem; background: var(--bg-card); }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-wrapper { gap: 20px; }
            .nav-links {
                position: fixed; top: 80px; left: 0; width: 100%; background: var(--bg-card);
                flex-direction: column; padding: 30px; gap: 20px; transform: translateY(-150%);
                transition: 0.4s; border-bottom: 1px solid var(--border-color); z-index: 999;
            }
            .nav-links.active { transform: translateY(0); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
            .menu-toggle { display: block; }
            .hero-name { font-size: 2.5rem; }
            #hero .container { grid-template-columns: 1fr; gap: 40px; }
            .hero-image { height: 450px; margin-top: 20px; }
            .profile-image-wrapper { width: 350px; height: 450px; }
            .orb-1 { width: 200px; height: 200px; }
            .orb-2 { width: 150px; height: 150px; }
            .orb-3 { width: 120px; height: 120px; }
            .about-grid, .contact-container { grid-template-columns: 1fr; }
            .timeline::after { left: 31px; }
            .timeline-item { width: 100%; padding-left: 70px; padding-right: 25px; }
            .timeline-item::after { left: 21px; }
            .left::before, .right::before { left: 60px; border: medium solid var(--bg-card); border-width: 10px 10px 10px 0; border-color: transparent var(--bg-card) transparent transparent; }
            .right { left: 0%; }
        }
    </style>
</head>
<body data-theme="dark">

    <!-- Header (Redesigned) -->
    <header id="main-header">
        <div class="container">
            <nav>
                <div class="logo">
                    <div class="logo-box">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="logo-text-wrapper">
                        <div class="logo-main">RABIN</div>
                    </div>
                </div>
                
                <div class="nav-wrapper">
                    <ul class="nav-links" id="navLinks">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <!-- Dedicated Contact CTA in Nav -->
                        <li><a href="#contact" class="btn nav-cta"><i class="fas fa-handshake"></i> Hire Me</a></li>
                    </ul>

                    <!-- Theme Toggle & Mobile Menu -->
                    <div style="display: flex; gap: 15px; align-items: center;">
                        <button id="theme-toggle" class="theme-toggle-btn" aria-label="Toggle Theme">
                            <i class="fas fa-moon"></i>
                        </button>
                        <div class="menu-toggle" id="menuToggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-greeting">HELLO, I AM</span>
                <h1 class="hero-name">Rabin Kumar Chhatkuli</h1>
                <div class="hero-role" id="typewriter"></div>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-fill"><i class="fas fa-handshake"></i> Hire Me</a>
                    <a href="#projects" class="btn"><i class="fas fa-folder-open"></i> View Projects</a>
                </div>

                <div class="hero-stats">
                    <div class="stat">
                        <h3>3+</h3>
                        <p>Years Experience</p>
                    </div>
                    <div class="stat">
                        <h3>41+</h3>
                        <p>Lab Projects</p>
                    </div>
                    <div class="stat">
                        <h3>7+</h3>
                        <p>Certifications</p>
                    </div>
                </div>
            </div>

            <!-- Portfolio Profile Image -->
            <div class="hero-image">
                <div class="profile-bg-orb orb-1"></div>
                <div class="profile-bg-orb orb-2"></div>
                <div class="profile-bg-orb orb-3"></div>
                <div class="profile-image-wrapper">
                    <img src="portfolio.jpg" alt="Rabin Kumar Chhatkuli">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>About Me</h2>
                <p>My Introduction</p>
            </div>

            <div class="about-grid">
                <div class="about-card">
                    <h3 style="margin-bottom: 20px; color: var(--primary);">Who am I?</h3>
                        <div class="about-text">
                            <p>
                                I am a proactive SOC Analyst with hands-on experience in SIEM tuning, incident response, and network analysis. I combine security operations with practical web and IT support skills to detect threats, troubleshoot systems, and build resilient solutions.
                            </p>

                            <p><strong>Highlights:</strong> SIEM (Wazuh/Splunk), network forensics (Nmap/Zeek/Wireshark), Laravel web development, Bug Bounty.</p>

                            <p>Open to freelance and full-time opportunities—connect via the contact form or LinkedIn.</p>
                        </div>
                </div>

                <div class="about-card" style="border-top-color: var(--secondary);">
                    <h3 style="margin-bottom: 20px; color: var(--secondary);">Personal Info</h3>
                    <div class="info-list">
                        <div class="info-item">
                            <strong>Phone:</strong>
                            <span>+977 9865517064</span>
                        </div>
                        <div class="info-item">
                            <strong>Email:</strong>
                            <span>rabinchhatkuli@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <strong>Location:</strong>
                            <span>Bharatpur, Chitwan, Nepal</span>
                        </div>
                        <div class="info-item">
                            <strong>Degree:</strong>
                            <span>BSc. IT (University Of Sunderland)</span>
                        </div>
                        <div class="info-item">
                            <strong>Interest:</strong>
                            <span>Cyber Security, Networking</span>
                        </div>
                        <div class="info-item">
                            <strong>Freelance:</strong>
                            <span>Available</span>
                        </div>
                    </div>
                    <br>
                    <a href="https://www.linkedin.com/in/rabin-chhatkuli-572b99295/" target="_blank" rel="noopener noreferrer" class="btn btn-fill" style="width: 100%; text-align: center;">
                        <i class="fab fa-linkedin"></i> Connect on LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section-padding" style="background: var(--bg-body);">
        <div class="container">
            <div class="section-header">
                <h2>Experience & Education</h2>
                <p>My Professional Journey</p>
            </div>

            <div class="timeline">
                <!-- Item 1 -->
                <div class="timeline-item left">
                    <div class="content">
                        <span class="date">Jan 2024 - Present</span>
                        <h3>SOC Analyst</h3>
                        <h4>Virtual Home Lab Simulation</h4>
                        <p>Deployed Wazuh SIEM, centralized logs, and simulated attacks using Kali Linux. Performed vulnerability scans with Nmap/OpenVAS.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="timeline-item right">
                    <div class="content">
                        <span class="date">Aug 2023 - Dec 2024</span>
                        <h3>L2 Network Engineer</h3>
                        <h4>ISP Infrastructure Project, Nepal</h4>
                        <p>Configured MPLS, BGP, VLAN, and L2VPN services. Supported VMware ESXi labs and performed traffic analysis with Wireshark.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="timeline-item left">
                    <div class="content">
                        <span class="date">Aug 2023 - Jan 2025</span>
                        <h3>IT Support Assistant</h3>
                        <h4>ISP Infrastructure Project, Nepal</h4>
                        <p>Provided technical support for computers, printers, and office systems. Supported basic network configuration.</p>
                    </div>
                </div>
                 <!-- Item 4 -->
                 <div class="timeline-item right">
                    <div class="content">
                        <span class="date">2022 - 2025 (Expected)</span>
                        <h3>BSc. IT (University Of Sunderland)</h3>
                        <h4>ISMT College, Bharatpur</h4>
                        <p>Comprehensive knowledge in computer systems, programming, networking, and database management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Skills & Tools</h2>
                <p>Technical Expertise</p>
            </div>

            <div class="skills-grid">
                <!-- Security -->
                <div class="skill-category">
                    <h3><i class="fas fa-shield-alt text-primary"></i> Security & Monitoring</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Wazuh SIEM</span>
                        <span class="skill-tag">Splunk Enterprise</span>
                        <span class="skill-tag">Graylog</span>
                        <span class="skill-tag">Zeek</span>
                        <span class="skill-tag">MITRE ATT&CK</span>
                        <span class="skill-tag">Threat Hunting</span>
                        <span class="skill-tag">Incident Response</span>
                        <span class="skill-tag">Vulnerability Assessment</span>
                        <span class="skill-tag">Log Analysis</span>
                       
                    </div>
                </div>

                <!-- Tools -->
                <div class="skill-category" style="border-top-color: var(--primary);">
                    <h3><i class="fas fa-tools text-secondary"></i> Tools & Testing</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Nmap</span>
                        <span class="skill-tag">Burp Suite</span>
                        <span class="skill-tag">Bug Bounty</span>
                        <span class="skill-tag">OpenVAS</span>
                        <span class="skill-tag">Nessus</span>
                        <span class="skill-tag">Metasploit</span>
                        <span class="skill-tag">Wireshark</span>
                        <span class="skill-tag">Kali Linux</span>
                        <span class="skill-tag">Sqlmap</span>
                        <span class="skill-tag">Aircrack-ng</span>
                        <span class="skill-tag">Nikto</span>
                    </div>
                </div>

                <!-- Networking -->
                <div class="skill-category">
                    <h3><i class="fas fa-network-wired text-primary"></i> Networking</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">MPLS</span>
                        <span class="skill-tag">BGP</span>
                        <span class="skill-tag">VLAN</span>
                        <span class="skill-tag">L2VPN</span>
                        <span class="skill-tag">Traffic Analysis</span>
                        <span class="skill-tag">Wireshark</span>
                        <span class="skill-tag">TCP/IP</span>
                        <span class="skill-tag">Subnetting</span>
                        <span class="skill-tag">Routing Protocols</span>
                        <span class="skill-tag">Network Troubleshooting</span>
                        <span class="skill-tag">Network Security</span>
                        <span class="skill-tag">Firewall Configuration</span>
                        <span class="skill-tag">VPN Setup</span>

                    </div>
                </div>

                <!-- Systems & Web -->
                <div class="skill-category" style="border-top-color: var(--primary);">
                    <h3><i class="fas fa-laptop-code text-secondary"></i> Systems & Web</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Windows Server</span>
                        <span class="skill-tag">Linux</span>
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">HTML/CSS/JS</span>
                        <span class="skill-tag">PHP</span>
                        <span class="skill-tag">Git</span>
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Java</span>
                        <span class="skill-tag">SQLite</span>
                        <span class="skill-tag">React</span>
                        <span class="skill-tag">MySQL</span>
                    </div>
                </div>

                <!-- UI/UX Design -->
                <div class="skill-category">
                    <h3><i class="fas fa-paint-brush text-secondary"></i> UI/UX Design</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Adobe XD</span>
                        <span class="skill-tag">Wireframing</span>
                        <span class="skill-tag">Prototyping</span>
                        <span class="skill-tag">User Research</span>
                        <span class="skill-tag">Design Systems</span>
                    </div>
                </div>

                <!-- Photo Editing -->
                <div class="skill-category" style="border-top-color: var(--primary);">
                    <h3><i class="fas fa-image text-primary"></i> Photo Editing & Graphics</h3>
                    <div class="skill-tags">
                        <span class="skill-tag">Adobe Photoshop</span>
                        <span class="skill-tag">Adobe Lightroom</span>
                        <span class="skill-tag">GIMP</span>
                        <span class="skill-tag">Canva</span>
                        <span class="skill-tag">Color Grading</span>
                        <span class="skill-tag">Image Optimization</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section (UPDATED) -->
    <section id="projects" class="section-padding" style="background: var(--bg-body);">
        <div class="container">
            <div class="section-header">
                <h2>My Portfolio</h2>
                <p>Cybersecurity Labs and Web Development</p>
            </div>

            <!-- SECTION 1: Cybersecurity Labs -->
            <h3 class="project-group-title">
                <i class="fas fa-shield-virus"></i> Cybersecurity & Network Labs
            </h3>
            
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-img">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="project-body">
                        <h3>Enterprise Network Infrastructure</h3>
                        <div class="tech-stack">
                            <span class="tech-item">VMware ESXi</span>
                            <span class="tech-item">Windows Server</span>
                        </div>
                        <p>Built a complete enterprise environment with AD, DNS, DHCP, and multi-subnet routing.</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-img">
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <div class="project-body">
                        <h3>Virtual SOC Lab</h3>
                        <div class="tech-stack">
                            <span class="tech-item">Wazuh</span>
                            <span class="tech-item">Splunk</span>
                        </div>
                        <p>Centralized SOC environment for real-time monitoring. Tuned correlation rules and created dashboards.</p>
                        <a href="#" class="btn">View Details</a>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Web Development -->
            <h3 class="project-group-title web-dev">
                <i class="fas fa-code"></i> Web Development Projects
            </h3>

            <div class="projects-grid">
                <!-- Project 3: Hotel Tree Land -->
                <div class="project-card web">
                    <div class="project-img">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <div class="project-body">
                        <h3>Hotel Tree Land</h3>
                        <div class="tech-stack">
                            <span class="tech-item">Laravel</span>
                            <span class="tech-item">PHP</span>
                            <span class="tech-item">MySQL</span>
                        </div>
                        <p>A comprehensive hotel management system featuring a room booking engine and availability calendar.</p>
                        <a href="#" class="btn">Visit Site</a>
                    </div>
                </div>

                <!-- Project 4: Other PHP Page -->
                <div class="project-card web">
                    <div class="project-img">
                        <i class="fas fa-file-code"></i>
                    </div>
                    <div class="project-body">
                        <h3>Dynamic Web Application</h3>
                        <div class="tech-stack">
                            <span class="tech-item">PHP</span>
                            <span class="tech-item">JavaScript</span>
                            <span class="tech-item">HTML/CSS</span>
                            <span class="tech-item">Android</span>
                        </div>
                        <p>Developed a responsive corporate website with a custom CMS using core PHP and dynamic news updates.</p>
                        <a href="https://github.com/RabinKChh" rel="noopener noreferrer" class="btn">View Code</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section id="certifications" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Certifications</h2>
            </div>
            <div class="certs-container">
                <div class="cert-badge">
                    <i class="fas fa-certificate"></i>
                    <div>
                        <h4>Cybersecurity Fundamentals</h4>
                        <span>IBM</span>
                    </div>
                </div>
                <div class="cert-badge">
                    <i class="fas fa-award"></i>
                    <div>
                        <h4>Ethical Hacking Essentials</h4>
                        <span>Cisco</span>
                    </div>
                </div>
                <div class="cert-badge">
                    <i class="fas fa-shield-virus"></i>
                    <div>
                        <h4>Cybersecurity & Ethical Hacking</h4>
                        <span>Network World Int.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Contact Section -->
<section id="contact" class="section-padding" style="background: var(--bg-body);">
    <div class="container">
        <div class="section-header">
            <h2>Contact Me</h2>
            <p>Let's Work Together</p>
        </div>

        <div class="contact-container">

            <!-- Contact Info -->
            <div class="contact-info">
                <h3>Get In Touch</h3>
                <p>
                    I am available for freelance or full-time opportunities in SOC Analysis,
                    Network Engineering, or Web Development.
                </p>

                <div class="contact-details">
                    <div>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+9779865517064">+977 9865517064</a>
                    </div>

                    <div>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:rabinchhatkuli@gmail.com">
                            rabinchhatkuli@gmail.com
                        </a>
                    </div>

                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Bharatpur, Chitwan, Nepal</span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <!-- Change action to your backend file later -->
            <form action="send.php" method="POST" class="contact-form" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" rows="5" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label>Attach File (optional)</label>
                    <input type="file" name="attachment" class="form-control">
                </div>

                <button type="submit" class="btn btn-fill"   style="width:100%;">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>

            </form>

        </div>
    </div>
</section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Rabin Kumar Chhatkuli. All Rights Reserved.</p>
            <div style="margin-top: 10px;">
                <a href="https://www.linkedin.com/in/rabin-chhatkuli-572b99295/" target="_blank" rel="noopener noreferrer" style="margin: 0 10px; color: var(--primary);"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="https://github.com/RabinKChh" style="margin: 0 10px; color: var(--text-main);"><i class="fab fa-github fa-lg"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Sticky Navbar Effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Active Navigation Link Based on Section (Position-wise Highlight)
        const sections = document.querySelectorAll('section');
        const navLinksElements = document.querySelectorAll('.nav-links a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.scrollY >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinksElements.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });

        // Mobile Menu
        const menuToggle = document.getElementById('menuToggle');
        const navLinksMenu = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinksMenu.classList.toggle('active');
            const icon = menuToggle.querySelector('i');
            if (navLinksMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close mobile menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinksMenu.classList.remove('active');
                menuToggle.querySelector('i').classList.remove('fa-times');
                menuToggle.querySelector('i').classList.add('fa-bars');
            });
        });

        // Theme Toggle Logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeIcon = themeToggleBtn.querySelector('i');
        const body = document.body;

        // Initialize theme from localStorage or system preference
        const savedTheme = localStorage.getItem('theme') || 'dark';
        
        // Set initial theme
        body.setAttribute('data-theme', savedTheme);
        updateIcon(savedTheme);

        // Theme toggle click handler
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = body.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            // Update theme immediately
            body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateIcon(newTheme);
            
            // Add visual feedback
            themeToggleBtn.style.transform = 'scale(0.9)';
            setTimeout(() => {
                themeToggleBtn.style.transform = 'scale(1)';
            }, 100);
        });

        function updateIcon(theme) {
            if (theme === 'light') {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        }

        // Typing Effect
        const textElement = document.getElementById('typewriter');
        const phrases = ["SOC Analyst", "Bug Hunter", "Network Engineer", "Cybersecurity Enthusiast", "Web Developer"];
        let phraseIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typeSpeed = 100;

        function type() {
            const currentPhrase = phrases[phraseIndex];
            
            if (isDeleting) {
                textElement.textContent = currentPhrase.substring(0, charIndex - 1);
                charIndex--;
                typeSpeed = 50;
            } else {
                textElement.innerHTML = `I am a <span>${currentPhrase.substring(0, charIndex + 1)}</span>`;
                charIndex++;
                typeSpeed = 100;
            }

            if (!isDeleting && charIndex === currentPhrase.length) {
                isDeleting = true;
                typeSpeed = 2000; 
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                typeSpeed = 500;
            }

            setTimeout(type, typeSpeed);
        }

        document.addEventListener('DOMContentLoaded', type);
    </script>
</body>
</html>