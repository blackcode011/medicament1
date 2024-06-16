<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search History</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Search History</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:3000/dashboard/index.php">Back to Dashboard</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Content Section -->
  <div class="container mt-4">
    <h1>My Search History</h1>
    <p>This is where you can view your past searches.</p>
    
    <!-- Display search history here -->
    <?php if (isset($_SESSION['search_history']) && !empty($_SESSION['search_history'])): ?>
      <ul class="list-group">
        <?php foreach ($_SESSION['search_history'] as $searchTerm): ?>
          <li class="list-group-item"><?php echo $searchTerm; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p>No search history available.</p>
    <?php endif; ?>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
