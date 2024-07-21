<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
</head>

<body>
    <h1><?php echo $business['name']; ?></h1>
    <ul>
        <?php foreach ($business['category'] as $category) {
            echo "<li> $$category </li>";
        } ?>
    </ul>
</body>

</html>