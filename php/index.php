<?php
include('discs.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css">
    <title>Dischi PHP</title>
</head>
<body>
    <header>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
            <div class="container-card">
            <?php
                foreach($discs as $disc){
            ?>      
              
            <div class="content-card">
                <img class="img-card" src="<?= $disc['poster'] ?>" alt="<?= $disc['author']?>">
                <h4><?= $disc['title'] ?></h4>
                <p><?= $disc['author'] ?></p>
                <p><?= $disc['year'] ?></p>
            </div>
            <?php
                }
            ?>    
    </div>
            </div>
        </div>
    </main>
    
</body>
</html>