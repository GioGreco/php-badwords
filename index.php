<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP - form example</title>
</head>
<body>
<div class="wrapper d-flex justify-content-center align-items-center">
    <form class="w-75 d-flex flex-column align-items-center" action="./formattedPar.php" method="POST">
        <div class="parBox mb-3 w-100">
            <textarea class="paragraph form-control p-4" id="exampleFormControlTextarea1" name="paragraph" rows="3"></textarea>
        </div>
        <div class="banBox input-group mb-3 w-50 d-flex flex-column align-items-center">
            <span class="text-uppercase mt-4 mb-3" id="inputGroup-sizing-default">Parola da censurare</span>
            <input type="text" minlength="4" class="bannedWord form-control w-100 rounded-pill text-center" name="banned">
        </div>
        <button type="submit" class="banBtn btn btn-outline-dark rounded-pill">
            <div class="bad">&#35;&#42;&dollar;&#64;&percnt;&#38;&#33;</div>
            <div class="good">&#128519;</div>
        </button>
    </form>
</div>
</body>
</html>