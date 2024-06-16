<?php
    include('middleware.php');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Patient Login and Medication Search</title>
  <style>
    /* Basic styles for login and search sections */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    .login {
      margin-bottom: 20px;
    }

    .login label,
    .search label {
      display: block;
      margin-bottom: 5px;
    }

    .search input,
    .login input {
      padding: 5px;
      width: 100%;
    }

    .search button {
      padding: 5px 10px;
      background-color: #4CAF50; /* Green */
      color: white;
      border: none;
      cursor: pointer;
    }

    .search button:hover {
      background-color: #3e8e41; /* Darker green */
    }

    .search-results {
      border: 10px solid #ddd;
      padding: 10px;
      margin-top: 10px;
    }

    .search-results ul {
      list-style: none;
      padding: 0;
    }

    .search-results li {
      margin-bottom: 5px;
    }
  </style>
</head>

<body>


  <?php


  // Simulate successful login (replace with actual authentication logic)
  //if (isset($_POST['username']) && isset($_POST['password'])) {
   // $isLoggedIn = true; // Assuming successful login for simplicity
 // }// else {
   // $isLoggedIn = false;
 // }

 // if ($isLoggedIn) {
    ?>

    <h2>Medication Search</h2>
    <form class="search" method="post" action="">
      <label for="search-term">Search Medications:</label>
      <input type="text" id="search-term" name="search-term" placeholder="Enter medication name or condition">
      <button type="submit">Search</button>
    </form>

    <?php
    // Sample medication data
    $medications = array(
      array("name" => "Aspirin", "condition" => "Pain relief"),
      array("name" => "Ibuprofen", "condition" => "Pain relief, fever"),
      array("name" => "Paracetamol", "condition" => "Fever")
    );

    if (isset($_POST['search-term'])) {
      $searchTerm = strtolower($_POST['search-term']);
      $searchResults = array();

      foreach ($medications as $medication) {
        if (strpos(strtolower($medication['name']), $searchTerm) !== false || strpos(strtolower($medication['condition']), $searchTerm) !== false) {
          $searchResults[] = $medication;
        }
      }

      if (count($searchResults) > 0) {
        echo "<div class='search-results'>";
        echo "<h3>Search Results</h3>";
        echo "<ul>";
        foreach ($searchResults as $medication) {
          echo "<li><b>" . $medication['name'] . "</b> - " . $medication['condition'] . "</li>";
        }
        echo "</ul>";
        echo "</div>";
      } else {
        echo "<p>No medications found matching your search.</p>";
      }
    }
    ?>

  <?php// } else {
  //  echo "<p>Please login to access medication search.</p>";
 // } ?>

  <script>
    // Optional JavaScript for form validation or user experience enhancements
  </script>

</body>

</html>
