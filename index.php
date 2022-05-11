<?php
    require_once "upload.php"
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <?php  if($displeyInputs): ?>
        <div>
            <p><?= $erorr ?></p>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    name:
                    <input type="text" name="name" required>
                </div>

                <div>
                    lastname:
                    <input type="text" name="lastname" required>
                </div>
                <div>
                    upload image:
                    <input type="file" name="image" required>
                </div>
                <input type="submit" name="submit" >
            </form>
        </div>
    <?php  else: ?>
        <div>
            <img src="image/<?= $fileName ?>" alt="image">
            <p><?= $name ?></P>
            <p><?= $lastname ?></P>
        </div>
    <?php endif ?>
</body>
</html>