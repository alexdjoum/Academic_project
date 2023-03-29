<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Welcome to HackerPair</title>
</head>
<body>
<h1>Welcome to HackerPair</h1>
<?php
    $pdo=DB::connection()->getPdo();
    if($pdo){
        echo "Successfully Connected to DB and DB Name is".DB::connection()->getDatabaseName();
    }
?>
</body>
</html>