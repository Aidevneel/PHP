<html>
<head><title>HOME TITLE CHANGE</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="whole">
    <?php include_once 'css/header.php'; ?> 
    <?php include_once 'css/header.php'; ?> 
    <div class = "middle">
        <div id="content">
            <p>The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will </p>
            <form action = "<?php echo $_SERVER['PHP_SELF'] ?> " method="post">
                Username:<input type="text" class=" textbox" name="un">
                Password:<input type="password" class=" textbox" name="pw">
                <input type="submit" name="submit">
            </form>
            <p>The PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it willThe PHP strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will </p>
        </div>
        <?php include_once 'css/sidebar.php'; ?>
    </div>
    <?php include_once 'css/footer.php'; ?>
</div>

<?php
if(isset($_POST['submit'])){
    echo "<h1>" . $_POST['un'] . "</h1>" . "<br>" ;
    echo "<h1>" . $_POST['pw']. "</h1>" . "<br>";
}
?>

</body>
</html>