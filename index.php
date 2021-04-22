<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad word</title>
</head>
<body>
    <?php
        $Censure = $_GET['badword'];
        $MyString = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis id necessitatibus vitae ab magnam optio asperiores! Cum fuga iusto perferendis facilis exercitationem laborum, iure laudantium architecto, sapiente, et ea.';
        
        $NewMyString = str_replace($Censure, '***', $MyString);
    ?>

    <h1>Il paragrafo e' lungo: <?php echo strlen($MyString); ?></h1>
    <p><?php echo $MyString; ?></p>

    <h1>Il nuovo paragrafo e' lungo: <?php echo strlen($NewMyString); ?></h1>
    <p><?php echo $NewMyString; ?></p>
    <p></p>
</body>
</html>