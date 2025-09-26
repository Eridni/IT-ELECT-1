<html>
    <style>
        body {
        font-family: Arial, sans-serif;
        background: black;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 50px;
        color: white;
        }
        h2 {
        text-align: center;
        margin-bottom: 20px;
        color: white;
        }
        .form-container {
        background: linear-gradient(to right, blue 50%, black 50%);
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 81, 255, 0.5);
        width: 320px;
        color: white;
        display: flex;
        flex-direction: column;
        gap: 10px;
        }
        input[type="log out"] {
        display: inline-block;
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
        }
        input[type="log out"]:hover {
        background-color: red;
        }
    </style>
    <body>
    <div class="form-container">
        <form action="index.php">
            <h2>
                Welcome <?php echo $_POST["fname"]; ?><br>
                Your family name is <?php echo $_POST["lname"]; ?><br>
                Your ID <?php echo $_POST["id"]; ?><br><br>
                Your Email <br><span style="color: green;"><?php echo $_POST["email"]; ?></span><br>
                Your Password <br><span style="color: green;"><?php echo $_POST["password"]; ?>
            </h2>
            <input type="Log out" value="Log out">
    </div>
    </form>
    </body>
</html>
