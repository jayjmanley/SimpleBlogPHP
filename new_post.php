<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $author = $_POST['author'];

  $sql = "INSERT INTO posts (title, content, author) VALUES (?, ?, ?)";
  
  // Prepare and bind
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $title, $content, $author);
  
  // execute query
  $stmt->execute();

  // redirect to homepage after successfully creating a post
  header('Location: /index.php');
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>New Post</title>
</head>
<body>
    <form action="/new_post.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>
