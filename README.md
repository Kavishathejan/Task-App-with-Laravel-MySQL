# Laravel Daily Task App

A simple Laravel-based daily task management application where users can register, login, and manage their tasks (add, update, complete, and delete).

---

## Features

* User registration and authentication
* Add new tasks
* Mark tasks as completed / not completed
* Edit and delete tasks
* Logout functionality
* Task view personalized for each user

---

## Requirements

* PHP >= 8.1
* Composer
* MySQL / MariaDB
* Node.js & NPM (for front-end asset compilation, optional)
* Laravel >= 12.x

---

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/laravel-task-app.git
cd laravel-task-app
```

2. **Install dependencies**

```bash
composer install
npm install
```

3. **Create `.env` file**

```bash
cp .env.example .env
```

Update your database credentials in `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dailytaskapp
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

4. **Generate application key**

```bash
php artisan key:generate
```

5. **Run migrations**

```bash
php artisan migrate
```

6. **Start the development server**

```bash
php artisan serve
```

Visit [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## Usage

1. Register a new user from the welcome page.
2. Login to access your tasks.
3. Add, update, complete, or delete tasks.
4. Logout to return to the welcome page.

---

## Folder Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Auth/
│   │   │   ├── RegisteredUserController.php
│   │   │   └── AuthenticatedSessionController.php
│   │   └── TaskController.php
│   └── Requests/
├── Models/
│   └── Task.php
resources/
├── views/
│   ├── auth/
│   │   ├── login.blade.php
│   │   └── register.blade.php
│   ├── tasks.blade.php
│   └── updatetask.blade.php
```

---

## License

This project is licensed under the MIT License.

---

## Screenshots

*You can add screenshots of your app here.*
