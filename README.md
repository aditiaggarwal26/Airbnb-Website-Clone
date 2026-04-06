# 🏡 Airbnb Clone (PHP + MySQL)

## 📌 Project Overview

This project is a simple **Airbnb Clone** built using **HTML, CSS, JavaScript, PHP, and MySQL**.
It allows users to browse properties, search listings, book stays, and add new properties as a host.

---

## 🚀 Features

### 👤 User Features

* 🔍 Search properties by name
* 🏠 View property listings with images, price, and location
* 📝 Signup and login functionality
* 📅 Book a property using a booking form
* ✅ Booking confirmation system

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL (phpMyAdmin)

---

## 📂 Project Structure

```
airbnb_clone/
│
├── index.php            # Homepage (listings + search)
├── book.php             # Booking form page
├── save_booking.php     # Save booking data
├── add_property.php     # Add property (form + logic)
├── db.php (optional)    # Database connection
│
├── image/               # Property images
│
└── README.md
```

---

## 🗄️ Database Setup

### 1. Create Database

```sql
CREATE DATABASE airbnb_clone;
```

---

### 2. Create `bookings` Table

```sql
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    place VARCHAR(255),
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

### 3. Create `properties` Table

```sql
CREATE TABLE properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    location VARCHAR(100),
    price INT,
    image VARCHAR(255)
);
```

---

## ⚙️ How to Run the Project

1. Install **XAMPP / WAMP**
2. Move project folder to:

   ```
   htdocs/
   ```
3. Start:

   * Apache
   * MySQL
4. Open browser:

   ```
   http://localhost/airbnb_clone
   ```

---

## 🔍 Search Functionality

* Filters properties dynamically based on user input
* Uses JavaScript (`data-name` attribute)

---

## 📸 Screenshots

* Homepage with listings
* Booking form
* Add property page

---

## ⚠️ Important Notes

* Payment fields are for demo only (no real transactions)
* Input validation and security can be improved (SQL injection, etc.)

---

## 🚀 Future Enhancements

* 🔐 User authentication (login/signup)
* 📸 Image upload instead of path input
* ⭐ Ratings and reviews
* ❤️ Wishlist feature
* 💳 Payment gateway integration (Razorpay/Stripe)
* 📅 Date-based price calculation

---

## 👩‍💻 Author

**Aditi Aggarwal**

---

## 📄 License

This project is for educational purposes only.
