<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/about.php">About</a></li>
            <li><a href="/contact.php">Contact</a></li>
        </ul>
    </nav>

    <ul>
        <?php foreach($customers as $key => $customer) : ?>
            <li><?= $customer->name ?></li>
            <li><?= $customer->phone ?></li>
            <li><?= $customer->email ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>