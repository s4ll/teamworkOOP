    <html>
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
        margin-top: 150px ;
    }

    h1 {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
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

    <body>
        <div class="container">
            <h1>Form Login</h1>
            <form method="POST" action="#">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
                <br> <br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                <br> <br>
                <input type="submit" name = "kirim" value="Login">
            </form>
        </div>
    </body>
    </html>
    <?php 

    if(isset($_POST['kirim'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username) || empty($password)) {
                echo "<script>alert('Masukan NAMA dan PASSWORD !!! ');</script>";
            } else {
                $conn = mysqli_connect("localhost", "root", "", "saldata");
                $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) == 1) {
                    echo "<script>
                        alert('Berhasil login');
                        document.location.href = 'input.php'; 
                    </script>";
                } else {
                    echo "<script>alert('Masukan NAMA dan PASSWORD yang benar !!! ');</script>";
                }

                mysqli_close($conn);
            }
    }