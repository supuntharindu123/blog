# 📝 Laravel Blog Application

## 🚀 About This Blog

A modern, full-featured blog application built with Laravel 11 and styled with Tailwind CSS. This project features a beautiful card-based UI design, role-based authentication, and comprehensive blog management capabilities.

### ✨ Key Features

-   **🎨 Modern UI Design**: Beautiful card-based layouts with gradient themes
-   **👥 Role-Based Authentication**: Admin and User roles with different permissions
-   **📝 Blog Management**: Create, read, update, and delete blog posts
-   **🔍 Search Functionality**: Real-time search through posts, content, and authors
-   **🛡️ Authorization System**: Users can only edit/delete their own posts, admins can manage all
-   **📱 Responsive Design**: Fully responsive across all devices
-   **🎯 Public Blog View**: Anyone can browse and read blog posts
-   **⚡ Real-time Features**: Live search, hover effects, and smooth transitions

## 🛠️ Tech Stack

-   **Backend**: Laravel 11
-   **Frontend**: Blade Templates + Tailwind CSS
-   **Authentication**: Laravel Breeze
-   **Database**: MySQL
-   **Asset Building**: Vite
-   **Icons**: Heroicons (SVG)

## 📦 Installation

### Prerequisites

-   PHP 8.1 or higher
-   Composer
-   Node.js & NPM
-   MySQL/MariaDB
-   Web server (Apache/Nginx) or use Laravel's built-in server

### Setup Instructions

1. **Clone the repository**

    ```bash
    git clone https://github.com/supuntharindu123/blog.git
    cd blog
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies**

    ```bash
    npm install
    ```

4. **Environment Configuration**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Database Setup**

    - Create a MySQL database
    - Update your `.env` file with database credentials:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

6. **Run Migrations**

    ```bash
    php artisan migrate
    ```

7. **Build Assets**

    ```bash
    npm run build
    ```

8. **Start the Development Server**
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` to see your blog in action!

## 🎯 Usage

### For Regular Users

-   **Register/Login**: Create an account to start blogging
-   **Create Posts**: Write and publish your blog posts
-   **Manage Posts**: Edit or delete your own posts
-   **Browse Blog**: Read posts from all users
-   **Search**: Find specific posts using the search feature

### For Administrators

-   **User Management**: View all registered users
-   **Content Moderation**: Delete any user's posts if needed
-   **Admin Dashboard**: Access comprehensive admin features
-   **System Overview**: Monitor blog activity and statistics

## 🏗️ Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   ├── AdminController.php          # Admin functionality
│   │   ├── DashboardController.php      # User dashboard
│   │   └── PostController.php           # Blog post management
│   ├── Models/
│   │   ├── User.php                     # User model with roles
│   │   └── Post.php                     # Blog post model
│   ├── Policies/
│   │   └── PostPolicy.php               # Authorization policies
│   └── Middleware/
│       └── AdminMiddleware.php          # Admin route protection
├── resources/
│   ├── views/
│   │   ├── posts/                       # Blog post views
│   │   ├── admin/                       # Admin panel views
│   │   ├── auth/                        # Authentication views
│   │   └── components/                  # Reusable components
│   └── css/
│       └── app.css                      # Tailwind CSS
└── routes/
    └── web.php                          # Application routes
```

## 🎨 Features Showcase

### Authentication System

-   **Modern Login/Register**: Beautiful gradient-themed auth pages
-   **Password Recovery**: Complete forgot/reset password flow
-   **Email Verification**: Secure account verification process

### Blog Management

-   **Rich Post Editor**: Create posts with title and content
-   **Card-Based UI**: Modern, responsive post layouts
-   **Search **: Real-time search functionality
-   **Public/Private Views**: Separate interfaces for management and reading

### Admin Panel

-   **User Management**: View all users with role indicators
-   **Content Overview**: Monitor all blog posts
-   **Role-Based Access**: Secure admin-only features

### UI/UX Design

-   **Gradient Themes**: Each page has unique, beautiful gradients
-   **Hover Effects**: Smooth transitions and interactive elements
-   **Responsive Layout**: Perfect on desktop, tablet, and mobile
-   **Accessibility**: Screen reader friendly with proper ARIA labels

## 🔧 Configuration

### User Roles

The application supports two user roles:

-   **User** (`role = 'user'`): Can create, edit, and delete their own posts
-   **Admin** (`role = 'admin'`): Can manage all posts and access admin panel

To make a user an admin, update their role in the database:

## 🙏 Acknowledgments

-   **Laravel Team**: For the amazing framework
-   **Tailwind CSS**: For the utility-first CSS framework
-   **Heroicons**: For the beautiful SVG icons
-   **Laravel Breeze**: For the authentication scaffolding

## 📞 Support

If you have any questions or need help, please:

-   Open an issue on GitHub
-   Check the [Laravel Documentation](https://laravel.com/docs)
-   Visit the [Laravel Community](https://laravel.com/community)

---

<p align="center">Made with ❤️ using Laravel & Tailwind CSS</p>
