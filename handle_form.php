<?php
// handle_form.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $authorName = $_POST['author_name'];
    $authorBio = $_POST['author_bio'];

    // Here, you can process the data, such as saving it to a database
    
    // Redirect to the result page
    header("Location: result.php?author_name=" . urlencode($authorName) . "&author_bio=" . urlencode($authorBio));
    exit();
}
?>
