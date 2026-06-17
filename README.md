<div align="center">

## 🙏 Acknowledgements

This project was created by following the **Laravel 11, Midtrans, Filament, Service Repository: Web Online Course** course from **BuildWithAngga (BWA)** for educational purposes. All credit for the original learning materials goes to BuildWithAngga.

# 🎓 Learning Management System (LMS)

A modern Learning Management System built with **Laravel 12**, designed to simplify online learning through course management, student enrollment, and progress tracking.

<p>
    <img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
    <img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white">
    <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
    <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white">
</p>

</div>

---

## 📖 Overview

Learning Management System (LMS) is a web-based platform that enables instructors to create and manage online courses while allowing students to enroll, access learning materials, complete lessons, and monitor their learning progress.

The application is developed using **Laravel 12**, following MVC architecture and best practices to ensure scalability, maintainability, and security.

---

# ✨ Features

### 👨‍🎓 Student

- Register & Login
- Browse available courses
- Enroll in courses
- Watch learning videos
- Read learning materials
- Track learning progress
- View completed courses

### 👨‍🏫 Mentor

- Create new courses
- Manage course content
- Upload videos & materials
- Organize lessons
- Manage enrolled students

### 👑 Administrator

- Dashboard Analytics
- User Management
- Course Management
- Category Management
- Enrollment Management
- Role & Permission Management

---

# 🛠️ Tech Stack

| Technology         | Description          |
| ------------------ | -------------------- |
| Laravel 12         | Backend Framework    |
| PHP 8.3            | Programming Language |
| MySQL              | Database             |
| Bootstrap 5        | Frontend Framework   |
| Blade              | Templating Engine    |
| Eloquent ORM       | Database ORM         |
| Laravel Migration  | Database Versioning  |
| Laravel Seeder     | Sample Data          |
| Laravel Validation | Form Validation      |
| Git & GitHub       | Version Control      |

---

# 📂 Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

# ⚙️ Installation

Clone repository

```bash
git clone https://github.com/yourusername/lms-laravel.git
```

Masuk ke folder project

```bash
cd lms-laravel
```

Install dependency

```bash
composer install
```

Copy environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Setup database pada file `.env`

```env
DB_DATABASE=obitowalms
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migration dan seeder

```bash
php artisan migrate --seed
```

Buat symbolic link storage

```bash
php artisan storage:link
```

Jalankan server

```bash
php artisan serve
```

Akses

```
http://127.0.0.1:8000
```

---

# 📊 Database

Main entities:

- Users
- Courses
- Categories
- Lessons
- Course Benefits
- Course Requirements
- Enrollments
- Progress
- Certificates

---

# 🔐 Authentication

- Login
- Register
- Remember Me
- Email Verification _(Optional)_
- Password Reset _(Optional)_
- Role Based Access Control

---

# 📌 Future Improvements

- Quiz & Examination
- Assignment Submission
- Discussion Forum
- Certificate Generator
- Live Class Integration
- Payment Gateway
- Notifications
- Mobile Responsive Improvements
- REST API
- Multi-language Support

---

# 📷 Screenshots

```
ss-wrj/
└── image/
    ├── landing.png
    ├── dashboard.png
    ├── courses.png
    ├── course-detail.png
    ├── learning.png
    ├── profile.png
    ├── admin.png
    └── enrollment.png
```

---

# 🤝 Contributing

Contributions are welcome!

1. Fork this repository
2. Create your feature branch

```bash
git checkout -b feature/new-feature
```

3. Commit changes

```bash
git commit -m "Add new feature"
```

4. Push branch

```bash
git push origin feature/new-feature
```

5. Open Pull Request

---

<div align="center">

### ⭐ If you like this project, don't forget to leave a star!

Made with ❤️ using Laravel 12

</div>
