<?php
session_start();

// Check if a search term is submitted
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $searchTerm = trim($_GET['query']);
    
    // Store search term in session
    if (!isset($_SESSION['search_history'])) {
        $_SESSION['search_history'] = array();
    }
    $_SESSION['search_history'][] = $searchTerm;

    // Redirect to search results page or any other page
    header("Location: search_results.php?query=" . urlencode($searchTerm));
    exit();
}

// Redirect to dedicated history page (optional)
if (isset($_GET['showHistory'])) {
    header('Location: search_history.php');
    exit;
}
?>
