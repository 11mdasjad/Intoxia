# Intoxia Technologies — Corporate Platform & CMS

<p align="center">
  <img src="public/images/logo.svg" width="120" height="120" alt="Intoxia Technologies Logo">
</p>

<p align="center">
  <strong>Enterprise IT, AI Autonomous Systems & Digital Transformation Platform</strong><br>
  Engineered with Laravel 13, Filament 4, Tailwind CSS, and Alpine.js.
</p>

<p align="center">
  <a href="https://www.intoxiatechnologies.com">Website</a> •
  <a href="mailto:contact@intoxiatechnologies.com">Email</a> •
  <a href="tel:+917011639618">Hotline: +91 70116 39618</a>
</p>

---

## 🚀 Overview

Intoxia Technologies is a modern technology and digital transformation company based in New Delhi / NCR, India. This platform serves as the corporate digital hub featuring:

- **14-Section Dynamic Homepage** with 3D Holographic Visuals & Interactive AI Core Showcase.
- **Complete CMS & Admin Portal** powered by **Filament 4** at `/admin`.
- **15+ Core & AI Services Directory** with deep architectural breakdowns.
- **12 Industry Frameworks** with domain problem-solution matrices.
- **Selected Work & Deep Case Studies** with topic-specific high-resolution product UI mockups.
- **Dynamic Technology Stack Ecosystem** featuring official vector SVG brand logos.
- **Transparent Pricing & Engagement Models** (`/pricing`) with dual-currency switcher (INR ₹ / USD $) and an interactive scope cost estimator.
- **Lead Capture CRM** with CSRF protection, anti-spam honeypot, rate limiting, and automated transactional emails.
- **Dynamic XML Sitemap (`/sitemap.xml`)** and JSON-LD Organization Schema for SEO.

---

## 🛠️ Tech Stack

| Layer | Technology |
| :--- | :--- |
| **Backend Framework** | Laravel 13.25.0 (PHP 8.3 / 8.5) |
| **Admin Panel / CMS** | Filament 4.0 |
| **Styling & Design System** | Tailwind CSS v4 + Custom Modern Tokens |
| **Interactivity** | Alpine.js 3.16.1 |
| **Build Tooling** | Vite 8.2 |
| **Testing** | PHPUnit 12 (14 Feature Tests / 48 Assertions - 100% Passing) |
| **Deployment** | Vercel Serverless Ready (`vercel.json`) & Standard LAMP/LEMP Docker |

---

## ⚡ Quick Start (Local Development)

### 1. Clone & Install
```bash
git clone https://github.com/11mdasjad/Intoxia.git
cd Intoxia

# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 2. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Database & Seeders
```bash
# Run migrations and seed complete realistic enterprise data
php artisan migrate --seed
```

### 4. Build Assets & Run
```bash
# Terminal 1: Vite asset compilation
npm run dev

# Terminal 2: Laravel server
php artisan serve
```

Access the platform at:
- **Public Portal**: [http://127.0.0.1:8000](http://127.0.0.1:8000)
- **Admin CRM Panel**: [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)

---

## 🔐 Default Admin Credentials

| Field | Primary Super Admin |
| :--- | :--- |
| **URL** | `/admin/login` |
| **Email** | `admin@intoxiatechnologies.com` |
| **Password** | `password` |

*(Alternative test admin: `admin@intoxia.com` / `admin123`)*

---

## ☁️ Vercel Deployment

This repository includes native Vercel serverless configuration (`vercel.json` and `api/index.php`).

### Required Environment Variables on Vercel:
- `APP_NAME` = `Intoxia Technologies`
- `APP_ENV` = `production`
- `APP_KEY` = `base64:...` *(Run `php artisan key:generate --show` to get your key)*
- `APP_DEBUG` = `false`
- `APP_URL` = `https://your-domain.vercel.app`

---

## 🧪 Automated Testing

```bash
php artisan test
```
```
Tests:    14 passed (48 assertions)
Duration: 1.2s
```

---

## 📍 Corporate Contact Details

- **Company**: Intoxia Technologies Private Limited
- **Development Center**: 226 Second Floor, Main Kalindi Kunj Road, Jasola, New Delhi-110025, India
- **Phone / WhatsApp**: +91 70116 39618
- **Email**: contact@intoxiatechnologies.com
- **Website**: [https://www.intoxiatechnologies.com](https://www.intoxiatechnologies.com)

---

&copy; 2026 Intoxia Technologies Private Limited. All rights reserved.
