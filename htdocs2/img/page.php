<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/addFile.php" metod="POST" enctype="multipart/form-data">
<input type="file" name="file" >
<input type="submit" value="Загрузить">

<?php foreach($result as $img): ?>
 
    <img src="/img/<?= $img['path'] ?>" width="200px">
    
<?php endforeach; ?>

</form>
</body>
</html>