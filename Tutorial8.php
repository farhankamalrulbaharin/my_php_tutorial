<?php
$blogs = [
    ['title' => 'wan airul party chaos', 'author' => 'Farhan', 'content' => 'Kecik', 'likes' => 30],
    ['title' => 'Adam shoping kart', 'author' => 'Amsyar', 'content' => 'I am vengence', 'likes' => 25],
    ['title' => 'fathil chest investigation', 'author' => 'Adib', 'content' => 'reality', 'likes' => 50]
];

$secondBlogAuthor = $blogs[1]['author'];

$blogs[] = ['title' => 'Emran story', 'author' => 'Emran', 'content' => 'Black Diamonds', 'likes' => 45];

$poppedBlog = array_pop($blogs);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Multidimensional Arrays</title>
</head>
<body>
    <h2>Blogs List</h2>
    <p>Second Blog Author: <?php echo $secondBlogAuthor; ?></p>
    <p>All Blogs Array:</p>
    <pre><?php print_r($blogs); ?></pre>
</body>
</html>