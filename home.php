<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MIST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #1a1a2e;
      color: #eee;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar, footer {
      background-color: #100720;
    }
    a, .btn-link {
      color: #c77dff;
    }
    a:hover {
      color: #e0aaff;
    }
    .carousel-inner img {
      max-height: 500px;
      object-fit: cover;
    }
    .carousel-caption {
      background-color: rgba(16, 7, 32, 0.6);
      padding: 15px;
      border-radius: 10px;
    }
    .hero {
      background: linear-gradient(to right, #3a0ca3, #240046);
      padding: 100px 0;
      text-align: center;
      color: white;
    }
    .hero h1 { font-size: 3.5rem; font-weight: bold; }
    .hero p { font-size: 1.2rem; }

    .feature-icon {
      font-size: 2.5rem;
      color: #c77dff;
      margin-bottom: 10px;
    }

    .bg-dark-section {
      background-color: #2a2540;
      padding: 60px 0;
    }

    .testimonial {
      background-color: #240046;
      padding: 60px 0;
      text-align: center;
    }
    .testimonial .quote {
      font-style: italic;
      font-size: 1.1rem;
      color: #ccc;
    }
    .testimonial .author {
      color: #e0aaff;
      margin-top: 10px;
    }

    .stats {
      background-color: #1b1b3a;
      color: white;
      padding: 50px 0;
    }
    .stats .stat {
      font-size: 2.8rem;
      font-weight: bold;
      color: #c77dff;
    }

    .cta-purple {
      background-color: #3a0ca3;
      color: white;
      padding: 80px 0;
    }

    .cta-purple img {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
    }

    footer {
      padding: 30px 10px;
      text-align: center;
      color: #bbb;
    }

    .btn-purple {
      background-color: #c77dff;
      color: black;
      border: none;
    }
    .btn-purple:hover {
      background-color: #e0aaff;
      color: black;
    }
  </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<!-- 🔁 Slider -->
<!-- 🔁 WORKING AUTOPLAY SLIDER -->
<div id="topImageSlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Manage Your Users Seamlessly</h5>
        <p>Powerful PHP CRUD app designed for simplicity and efficiency.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Collaborate with Your Team</h5>
        <p>Keep your user data organized and accessible.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Built with Modern Technologies</h5>
        <p>Bootstrap 5 and PHP combined for a sleek experience.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#topImageSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#topImageSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- 🔄 Feature Highlights Section -->
<div class="container py-5">
  <!-- Block 1 -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6">
      <h2 class="text-light">Easy User Management</h2>
      <p>Our application provides an intuitive interface for adding, editing, and deleting user records quickly and securely. You don’t need to be a tech expert to keep your data organized.</p>
      <a href="users.php" class="btn btn-purple mt-3">Start Managing Users</a>
    </div>
    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded shadow" alt="User Management">
    </div>
  </div>

  <!-- Block 2 -->
  <div class="row align-items-center mb-5 flex-md-row-reverse">
    <div class="col-md-6">
      <h2 class="text-light">Responsive & Mobile Friendly</h2>
      <p>Whether you're on a desktop, tablet, or mobile, our layout adjusts seamlessly to your screen size, ensuring you can manage your users anywhere, anytime.</p>
    </div>
    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded shadow" alt="Mobile Friendly">
    </div>
  </div>

  <!-- Block 3 -->
  <div class="row align-items-center mb-5">
    <div class="col-md-6">
      <h2 class="text-light">Secure and Reliable</h2>
      <p>We prioritize the safety of your data with secure authentication and best practices. Feel confident knowing your user information is protected from unauthorized access.</p>
    </div>
    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1591696205602-2f950c417cb9?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded shadow" alt="Security">
    </div>
  </div>
</div>


<!-- ✅ Feature Section -->
<div class="container py-5 text-center">
  <h3 class="mb-5">What can you do?</h3>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="p-4 border rounded shadow-sm bg-dark h-100">
        <div class="feature-icon">➕</div>
        <h5>Add Users</h5>
        <p>Add new users easily using the form.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-4 border rounded shadow-sm bg-dark h-100">
        <div class="feature-icon">✏️</div>
        <h5>Edit Records</h5>
        <p>Update user information anytime.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="p-4 border rounded shadow-sm bg-dark h-100">
        <div class="feature-icon">🗑️</div>
        <h5>Delete Data</h5>
        <p>Remove unnecessary user records safely.</p>
      </div>
    </div>
  </div>
</div>



<!-- 💬 Testimonials -->
<div class="testimonial">
  <div class="container">
    <h3 class="mb-5 text-white">What our users say</h3>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <p class="quote">"This user management system saved me hours every week. Simple and elegant!"</p>
          <p class="author">– Alice Johnson</p>
        </div>
        <div class="carousel-item">
          <p class="quote">"Bootstrap integration made the interface smooth and responsive."</p>
          <p class="author">– Michael Lee</p>
        </div>
        <div class="carousel-item">
          <p class="quote">"Easy to add and manage users. Perfect for my small business."</p>
          <p class="author">– Sarah Williams</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 📊 Stats -->
<div class="stats text-center">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-3"><div class="stat">150+</div><p>Users Managed</p></div>
      <div class="col-md-3"><div class="stat">1200+</div><p>Records Updated</p></div>
      <div class="col-md-3"><div class="stat">500+</div><p>Secure Logins</p></div>
      <div class="col-md-3"><div class="stat">24/7</div><p>Support</p></div>
    </div>
  </div>
</div>

<!-- 🟪 Second-Last CTA (Image on Right) -->
<div class="cta-purple">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2 class="mb-4">Take control of your user data today</h2>
        <p>Whether you're managing a small team or a growing enterprise, our dashboard gives you full control — without the complexity. Built with PHP and Bootstrap, it’s fast, secure, and scalable.</p>
        <p>Enjoy peace of mind with secure sessions, responsive layouts, and a developer-friendly foundation for future enhancements.</p>
        <a href="users.php" class="btn btn-light btn-lg mt-3">Get Started Now</a>
      </div>
      <div class="col-md-6 text-center">
     <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%2Fid%2FOIP.My8KKXaULU-BA8y1KKgylAHaEN%3Fr%3D0%26pid%3DApi&f=1&ipt=2d5688257c1cfe91289d3451906766548ed3c147ba4634ccf8c1eecbe5c4ce04&ipo=images" alt="Dashboard interface">

      </div>
    </div>
  </div>
</div>

<!-- 🔚 Footer -->
<footer>
  <div class="container">
    <p>© <?php echo date('Y'); ?> MySite. All rights reserved.</p>
    <p>
      <a href="#">Facebook</a> |
      <a href="#">Twitter</a> |
      <a href="#">LinkedIn</a>
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
