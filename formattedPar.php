<?php

$paragraph = $_POST['paragraph'];

if(isset($_POST['banned'])){
    $bannedWord = $_POST['banned'];
    $censoredParagraph = str_ireplace($bannedWord, '***', $paragraph);
}
else{
    $bannedWord = '';
    $censoredParagraph = 'Non è stata censurata nessuna parola!';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP form - censored</title>
</head>
<body>
    <div class="wrapper d-flex">

        <div class="w-25 h-100 d-flex justify-content-center align-items-center">
            <div class="badParBox w-75 h-50 d-flex flex-column justify-content-start align-items-center p-3">
                <h4 class="text-center mb-2">&#128286;</h4>
                <span class="parLength mb-2 text-uppercase">Lunghezza paragrafo: <?php echo strlen($paragraph).' '.'caratteri'; ?></span>
                <div class="badPar"><?php echo $paragraph; ?></div>
            </div>
        </div>
        <div class="w-75 h-100 d-flex justify-content-center align-items-center">
            <div class="goodParBox w-75 h-75 p-3">
                <h4 class="text-center mb-2">&#9989;</h4>
                <div class="badPar"><?php echo $censoredParagraph; ?></div>
            </div>
        </div>

    </div>
</body>
</html>