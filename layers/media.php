<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>INDOMAS</title>
</head>

<body>
    <div class="media">
        <h1>Ceritakan saja</h1>
        <?php // if(isset($_SESSION['email'])) : ?>
        <form action="" style="display: flex; flex-direction: row;">
            <input type="text" name="cerita" id="cerita" placeholder="Ceritakan Saja">
            <input class="form-control" name="foto" id="foto" type="file">
            <button>Upload</button>
        </form>
        <?php // endif ?>
        <br>
        <div class="card" style="width: 90%;">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/radarmalang/2021/02/1cbeeae6-f8cb-480c-8767-0edcc9eaeb3f.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</body>

</html>