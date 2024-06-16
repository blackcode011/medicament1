<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Website Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    /* Add custom styles here */
    .search-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .search-input {
      width: 80%;
      font-size: 20px;
      border-radius: 20px;
      padding: 10px 20px;
    }
    .search-button {
      font-size: 20px;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      background-color: transparent;
      border: none;
      color: #007bff;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .search-button:hover {
      color: #0056b3;
    }
    .trend-container {
      margin-top: 50px;
    }
    .carousel-item {
      padding: 10px;
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="\assets\medlogo.png" alt="Logo" height="60"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Medicals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="user-icon.png" alt="User" height="30"></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Search Bar Section -->
<div class="container mt-4 search-container">
  <form action="search.php" method="GET" class="form-inline">
    <div class="input-group">
      <input type="text" class="form-control search-input" placeholder="Search for medicals..." name="query">
      <div class="input-group-append">
        <button class="btn btn-outline-primary search-button" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
</div>

<!-- Link to view search history -->
<div class="container mt-2">
  <a href="http://localhost:3000/patient/search_history.php">View Search History</a>
</div>


 


  <!-- Trend Section -->
  <div class="container mt-4 trend-container">
    <h2>Search Trend</h2>
    <div id="carouselTrend" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h5 class="mb-0">Trend 1</h5>
          <p class="mb-0">Description of trend 1.</p>
        </div>
        <div class="carousel-item">
          <h5 class="mb-0">Trend 2</h5>
          <p class="mb-0">Description of trend 2.</p>
        </div>
        <!-- Add more carousel items here -->
      </div>
      <a class="carousel-control-prev" href="#carouselTrend" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselTrend" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- Content Section -->
  <div class="container mt-4">
    <h1>Welcome to the Dashboard!</h1>
    <!-- Add more content here -->
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>