# 🔐 Secure Login System

## 📘 Introduction

This project is a secure login system developed using **HTML**, **JavaScript**, and **PHP**. It ensures secure user authentication through:

- Password hashing
- Session-based authentication
- SQL injection prevention mechanisms

---

## 🧩 System Overview

The login system consists of the following components:

1. `db.php` – Database Connection  
2. `register.php` – User Registration  
3. `login.php` – User Login  
4. `dashboard.php` – User Dashboard  
5. `logout.php` – User Logout  
6. `login.html` – Frontend Login Page  

---

## 🔍 Explanation of Components

### 1. `db.php` - Database Connection
- Establishes a secure connection to a MySQL database using **PDO (PHP Data Objects)**.
- Supports **prepared statements** to prevent **SQL injection**.

### 2. `register.php` - User Registration
- Accepts a username and password from the user.
- Uses `password_hash()` with the **bcrypt** algorithm.
- Stores hashed passwords securely in the database.

### 3. `login.php` - User Login
- Accepts user login credentials.
- Retrieves the hashed password using **prepared statements**.
- Uses `password_verify()` to compare the password.
- Starts a secure session and sets an **HTTP-only cookie** upon successful login.

### 4. `dashboard.php` - User Dashboard
- Displays a personalized welcome message.
- Checks for an active session to restrict access to authenticated users.
- Redirects unauthenticated users to the login page.

### 5. `logout.php` - User Logout
- Destroys the session to log out the user.
- Clears any authentication cookies.
- Redirects the user to the login page.

### 6. `login.html` - Frontend Login Page
- Provides a simple and secure login form.
- Submits data to `login.php` via the **POST** method.

---

## 🔐 Security Features Implemented

- **Session-based Authentication** – Maintains secure user sessions.
- **Password Hashing** – Uses `password_hash()` for secure storage.
- **SQL Injection Prevention** – Uses **prepared statements** with PDO.
- **Secure Cookies** – Configured with **HTTP-only** and `Secure` flags.

---

## ✅ Conclusion

This secure login system implements key web security best practices:
- Password hashing with bcrypt
- Session and cookie-based login
- SQL injection resistance

It ensures that user data is protected while offering a seamless and secure authentication experience.

---

