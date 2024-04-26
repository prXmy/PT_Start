<?php
$link = mysqli_connect('db', 'root', 'kali', 'first');
$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id=$id";
$res = mysqli_query($link, $sql);
$rows = mysqli_fetch_array($res);
$title = $rows['title'];
$main_text = $rows['main_text'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Вернер В.С.</title>
<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css*" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
echo "<h1> $title </h1>";
echo "<p> $main_text </p>";
?>
</body>
</html>