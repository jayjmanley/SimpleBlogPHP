<?php
include 'db.php';

$sql = "SELECT id, title, content, author, date_published FROM posts ORDER BY date_published DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='post'>";
    echo "<h2>" . $row["title"]. "</h2>";
    echo "<p>" . $row["content"]. "</p>";
    echo "<p class='author'>Author: " . $row["author"]. "</p>";
    echo "<p class='date'>Published on: " . $row["date_published"]. "</p>";
    echo "</div>";
  }
} else {
  echo "No posts found";
}

$conn->close();
?>
