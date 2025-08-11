# 🧿 Product Inventory Dashboard

A vibrant, responsive Laravel application for managing products with advanced CRUD operations, dashboard-level UI polish, and robust backend logic.

---

## 🚀 Features

- 🧩 Modular CRUD for Products, Brands, Categories, and Models
- 🔍 Search by Serial Number with pagination and highlight
- 🎨 Beautiful dashboard UI with gradient headers, badges, and icons
- 📦 Product creation with category, brand, model, serials, and remarks
- 🛡️ Form validation with feedback and empty state visuals
- 🧠 Blade components and DRY structure for maintainability

---

## 🛠️ Tech Stack

| Layer        | Tools & Frameworks               |
|-------------|----------------------------------|
| Backend      | Laravel 10+, Eloquent ORM        |
| Frontend     | Blade, Bootstrap 5, Font Awesome |
| UI/UX        | Custom CSS, gradient buttons     |
| Database     | MySQL / MariaDB                  |

---

## 📁 Folder Structure
├── app/ │   ├── Models/ │   ├── Http/Controllers/ │   └── Requests/ ├── resources/ │   ├── views/ │   │   ├── products/ │   │   ├── brands/ │   │   ├── categories/ │   │   └── models/ │   └── layouts/ ├── routes/ │   └── web.php


---

## ⚙️ Setup Instructions

1. **Clone the repo**
   ```bash
   git clone https://github.com/your-username/product-inventory-dashboard.git
   cd product-inventory-dashboard

   composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan serve
---



