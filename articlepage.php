<?php
include 'connection.php'; // Include your database connection file

// Ensure article_id is provided and is a valid integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $article_id = $_GET['id'];

    // Query to fetch article details
    $query = "SELECT a.headline, a.subhead, a.content_text, a.pub_date, c.category_name, m.media_filepath, CONCAT(e.editor_name, ' | ', DATE_FORMAT(a.pub_date, '%M %d, %Y')) AS author_date, ec.editor_name AS media_creator
              FROM article AS a
              INNER JOIN category AS c ON a.category_id = c.category_id
              INNER JOIN article_media AS am ON a.article_id = am.article_id
              INNER JOIN media AS m ON am.media_id = m.media_id
              INNER JOIN article_author AS aa ON a.article_id = aa.article_id
              INNER JOIN editors AS e ON aa.editor_id = e.editor_id
              INNER JOIN media_creator AS mc ON m.media_id = mc.media_id
              INNER JOIN editors AS ec ON mc.editor_id = ec.editor_id
              WHERE a.article_id = ?
              LIMIT 1";

    // Prepare and bind parameter
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch article details
        $row = $result->fetch_assoc();
        $id = $article_id;
        $headline = $row['headline'];
        $subhead = $row['subhead'];
        $content_text = $row['content_text'];
        $pub_date = $row['pub_date'];
        $category_name = $row['category_name'];
        $media_filepath = $row['media_filepath'];
        $author_date = $row['author_date'];
        $media_creator = $row['media_creator'];
    } else {
        echo "No article found with ID: " . $article_id;
        exit();
    }

    $stmt->close();
} else {
    echo "Invalid article ID.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>The Searcher</title>
  <link href="articlepage.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <header class="py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="homepage.html">
        <img src="logo_no_name.png" alt="The Searcher Logo" height="50">
      </a>
      <nav>
        <a href="#" class="text-dark mr-3">News</a>
        <a href="#" class="text-dark mr-3">Opinion</a>
        <a href="#" class="text-dark mr-3">Literary</a>
        <a href="#" class="text-dark mr-3">Sports</a>
        <a href="#" class="text-dark">About Us</a>
      </nav>
    </div>
  </header>
  <main class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <section class="artimg mb-4">
            <img src="<?php echo $media_filepath ?>" alt="Article: Image of many students">
            <div>Photo by: <?php echo $media_creator ?></div>
          </section>
          <section class="article">
            <div class="category"><?php echo $category_name ?></div>
            <div class="headline"><?php echo $headline ?></div>
            <div class="subhead"><?php echo $subhead ?></div>
            <div class="author-date"><?php echo $author_date ?></div>
          </section>
          <div class="content">
            <?php echo $content_text ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer py-3">
    <div class="container text-center">
      &copy; <?php echo date("Y"); ?> The Searcher. All rights reserved.
    </div>
  </footer>
</body>
</html>
