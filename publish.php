<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $header = $_POST['header'];
    $subheader = $_POST['subheader'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];
    $journalist_id = $_POST['journalist'];
    $isBannerArticle = isset($_POST['setAsBannerArticle']) ? 'Y' : 'N';
    $pub_date = date("Y-m-d H:i:s"); // Assuming publication date is now
    $status = isset($_POST['publish_now']) ? 'published' : 'draft';
    $category_id = 1; // Replace with actual category ID from your form or other logic

    // Handling file uploads
    $bannerImage = $_FILES['bannerImage'];
    $bannerImagePath = 'uploads/' . basename($bannerImage['name']);

    // Move uploaded file to designated directory
    if (move_uploaded_file($bannerImage['tmp_name'], $bannerImagePath)) {
        // Insert the article
        $sql = "INSERT INTO article (headline, subhead, content_text, if_banner, pub_date, status, category_id)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssssi", $header, $subheader, $content, $isBannerArticle, $pub_date, $status, $category_id);

        if ($stmt->execute()) {
            $article_id = $stmt->insert_id;

            // Insert into article_media table
            $sqlMedia = "INSERT INTO article_media (article_id, media_filepath) VALUES (?, ?)";
            $stmtMedia = $con->prepare($sqlMedia);
            $stmtMedia->bind_param("is", $article_id, $bannerImagePath);
            $stmtMedia->execute();

            echo "New article created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $stmt->close();
    } else {
        echo "Failed to upload banner image.";
    }

    $con->close();
}
?>
