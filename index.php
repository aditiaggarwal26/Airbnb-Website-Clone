<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Airbnb Clone</title>
  <link rel="stylesheet" href="style.php" />
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">airbnb</div>
    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search destinations" onkeyup="searchCards()">
      <button>Search</button>
    </div>


    <div class="nav-right">
     
    <nav>Become a Host</nav>

      <nav class="menu-btn">🌐</nav>
      <!-- login/register dropdown -->
      <div class="dropdown">
  <button class="menu-btn">☰</button>
  <div class="dropdown-content">
    <p class="item">Help Centre</p>
    <hr>
    <div class="item">
      <strong>Become a host</strong><br>
      <span>It’s easy to start hosting</span>
    </div>
    <hr>
    <p class="item">Refer a host</p>
    <p class="item">Find a co-host</p>
    <hr>
    <a class="item" href="login.php">Log in</a>
    <a class="item" href="register.php">Sign up</a>
  </div>
</div>      
    </div>
  </header>
  

  <!-- Listings -->
  <main class="container" id="listings">
<div class="card" data-name="exotic palace">
    <img src="image/place1.png">
    <h3>Exotic Palace</h3>
    <p>Hyderabad</p>
    <p>Rs.2800 / night</p>
    <a href="book.php?place=exotic palace">
        <button>Book Now</button>
    </a>
</div>

<div class="card" data-name="shriji bhavan">
    <img src="image/place2.png">
    <h3>Shriji Bhavan</h3>
    <p>Vrindavan</p>
    <p>Rs.2000 / night</p>
    <a href="book.php?place=Shriji Bhavan">
        <button>Book Now</button>
    </a>
</div>

<div class="card" data-name="modern apartment in delhi">
    <img src="image/place3.png">
    <h3>Modern Apartment in Delhi</h3>
    <p>Delhi</p>
    <p>Rs.1200 / night</p>
    <a href="book.php?place=Modern Apartment in Delhi">
        <button>Book Now</button>
    </a>
</div>

<div class="card" data-name="beach house in malapuri">
    <img src="image/place4.png">
    <h3>Beach House in Malapuri</h3>
    <p>Kerala</p>
    <p>Rs.3500 / night</p>
    <a href="book.php?place=beach house in malapuri">
    <button>Book Now</button>
</a>
</div>

<div class="card" data-name="khamba ghadi villa">
    <img src="image/place5.png">
    <h3>Khamba Ghadi Villa</h3>
    <p>Jaipur</p>
    <p>Rs.3000 / night</p>
    <a href="book.php?place=khamba ghadi villa">
    <button>Book Now</button>
</a>
</div>

<div class="card" data-name="luxury villa">
    <img src="image/place6.png">
    <h3>Luxury Villa</h3>
    <p>Noida</p>
    <p>Rs.4000 / night</p>
    <a href="book.php?place=luxury villa">
    <button>Book Now</button>
</a>
</div>

<div class="card" data-name="starhub apartments">
    <img src="image/place7.png">
    <h3>Starhub Apartments</h3>
    <p>Kashmir</p>
    <p>Rs.2500 / night</p>
    <a href="book.php?place=Starhub Apartments">
    <button>Book Now</button>
</a>
</div>

<div class="card" data-name="villa in kashmir">
    <img src="image/place8.png">
    <h3>Villa in Kashmir</h3>
    <p>Agra</p>
    <p>Rs.3200 / night</p>
    <a href="book.php?place=villa in kashmir">
    <button>Book Now</button>
</a>
</div>
  </main>
<nav>
   
  </nav>
  <!-- <script src="script.js"></script> -->
</body>
</html>

<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  background: #f7f7f7;
}
.host{
text:-decoration: none;
}
/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 40px;
  background: white;
  border-bottom: 1px solid #ddd;
}

.logo {
  color: #ff385c;
  font-size: 26px;
  font-weight: bold;
}

.search-bar {
  display: flex;
  gap: 10px;
}

.search-bar input {
  padding: 8px 12px;
  width: 220px;
  border-radius: 20px;
  border: 1px solid #ccc;
}

.search-bar button {
  padding: 8px 16px;
  border-radius: 20px;
  border: none;
  background: #ff385c;
  color: white;
  cursor: pointer;
}

.nav-right {
  display: flex;
  align-items: center;
  gap: 15px;
}

/* register/login dropdown */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Button */
.menu-btn {
  font-size: 20px;
  background: #eee;
  border: none;
  padding: 10px;
  border-radius: 50%;
  cursor: pointer;
}

/* Dropdown Card */
.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  top: 45px;
  width: 250px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  padding: 15px;
}

/* Show dropdown */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Items */
.item {
  padding: 10px;
  cursor: pointer;
  text-decoration: none;
  color:black;
}

.item:hover {
  background: #f5f5f5;
  border-radius: 8px;
}

hr {
  border: none;
  border-top: 1px solid #ddd;
  margin: 10px 0;
}

/* Listings */

.globe-btn, .profile-btn {
  font-size: 18px;
  cursor: pointer;
  shadow: 0 2px 5px rgba(194, 183, 183, 0.1);
}
.container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 25px;
    padding: 20px;
}

/* Card */
.card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: 0.3s;
}

/* Hover effect */
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

/* Image */
.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Content */
.card h3 {
    margin: 10px 15px 5px;
    font-size: 18px;
}

.card p {
    margin: 5px 15px;
    color: #555;
}

/* Price highlight */
.card p:last-of-type {
    font-weight: bold;
    color: black;
}

/* Button */
.card button {
    margin: 15px;
    padding: 10px;
    width: calc(100% - 30px);
    border: none;
    border-radius: 10px;
    background: #ff385c;
    color: white;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s;
}

.card button:hover {
    background: #e11d48;
}
.price {
  font-weight: bold;
  margin-top: 8px;
}
</style>

<script>
//booking

<script>

function openBooking(place) {
    document.getElementById("bookingForm").style.display = "block";
    document.getElementById("placeName").value = place;
}

function searchCards() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(card => {
        let name = card.getAttribute("data-name");

        if (name.includes(input)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}



listings.forEach(item => {
  const card = document.createElement("div");
  card.className = "card";

  card.innerHTML = `
    <img src="${item.image}" alt="">
    <div class="card-body">
      <h3>${item.title}</h3>
      <p>${item.location}</p>
      <div class="price">${item.price}</div>
    </div>
  `;

  container.appendChild(card);
});
</script>
