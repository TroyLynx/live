<?php 
if (isset($_GET['url'])) {
    $url=$_GET['url'];
    $content=file_get_contents($url);
    echo "<h3>Fetched Content:</h3><pre>" . htmlspecialchars($content) . "</pre>";
} else {
    echo "No URL provided.";
}