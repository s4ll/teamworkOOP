<!DOCTYPE html>
<html>
<head>
    <title>Nilai</title>
    <style>
        body{
        background-color : #ECE5C7 ;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
        margin-top: 80px ;
    }

    h1 {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #116A7B;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #116A7B;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Form Nilai</h1>
    <form method="POST" action="table.php">
        <label for="mtk">Masukan nilai MTK:</label>
        <input type="number" name="mtk" id="mtk" required>
        <br></br>
        <label for="pjok">Masukan nilai PJOK:</label>
        <input type="number" name="pjok" id="pjok" required>
        <br></br>
        <label for="pipas">Masukan nilai Pipas:</label>
        <input type="number" name="pipas" id="pipas" required>
        <br></br>
        <label for="indo">Masukan nilai INDO:</label>
        <input type="number" name="indo" id="indo" required>
        <br></br>
        <input type="submit" name="kirim" value="Submit">
    </form>
    </div>
</body>
</html>