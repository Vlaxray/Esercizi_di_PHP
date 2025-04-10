<?php 
function write_logo() 
{
    echo '<img src="Screenshot1.jpg" />';
}
function write_copyright_notice()
{
    $year = date(format: 'Y');
    echo '&copy; ' . $year;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <h1><?php write_logo(); ?> The Candy Store</h1>
    </header>
    <article>
        <h2>Welcome to the Candy Store</h2>
    </article>
    <footer><?php write_logo(); ?>
            <?php write_copyright_notice(); ?>
    </footer>
                  
</body>
</html>
<?php
// This is a comment        
