# Laravel Inertia Project

A Laravel + Inertia.js application with Vue 3 frontend, featuring templated pages, a complete Todo CRUD module, a dynamic quote list from a dummy API, and additional static pages like Features, Blog, and Contact.

## 🛠️ Tech Stack

- **Backend**: Laravel 10
- **Frontend**: Vue 3 with Inertia.js
- **Templating**: Layout-based page structure using Inertia
- **API**: Dummy REST API (for quotes)

---

## 🚀 Features

- ✅ **Templated Pages** with dynamic layout components
- ✅ **Todo List**
  - Add new tasks
  - Edit existing tasks
  - Delete tasks
  - Mark tasks as complete
- ✅ **Quote List** (fetched from a dummy API)
- ✅ **Static Pages**:
  - Features
  - Blog
  - Contact

---

## 🧩 Installation

```bash
git clone https://github.com/oshit-sd/inertia-with-laravel.git
cd inertia-with-laravel

# Install PHP and JS dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Run development servers
npm run dev
php artisan serve
```
---

## 👨‍💻 Author

Built with ❤️ by [**Oshit Sutra Dar**](https://github.com/oshit-sd)

* 🧑‍💻 Software Engineer
* 🌐 GitHub: [github.com/oshit-sd](https://github.com/oshit-sd)