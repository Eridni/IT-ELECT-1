<!DOCTYPE html>
<html>
<head>
  <title>Welcome Page</title>
  
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
    a.button {
      display: inline-block;
      padding: 10px 20px;
      background-color: blue;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }
    a.button:hover {
      background-color: red;
    }
  </style>
</head>
<body>

  <h2>Welcome to the Form Portal</h2>

  <?php echo "Hello World!";?>


  <p>Click the button below to fill out the form.</p>

  
    <form action="display.php" method="get">

    <a href="homepage.html" class="button">Go to Form</a>`
    </form>

  
</body>
</html>
