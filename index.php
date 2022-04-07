<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <?php 
    $testo = 'lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolore delectus illo ducimus, enim explicabo cumque. Quod dolorem voluptatibus necessitatibus, alias animi explicabo excepturi voluptatem vel non molestias asperiores nulla.Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae dolore delectus illo ducimus, enim explicabo cumque. Quod dolorem voluptatibus necessitatibus, alias animi explicabo excepturi voluptatem vel non molestias asperiores nulla.';
    $bad_words = $_GET['bad_words']
    ?>
    <h3><?= 'Il testo è lungo: ' . strlen($testo) ?> </h3>
    <p><?php echo str_replace($bad_words, '***', $testo) ?></p>
</body>
</html>