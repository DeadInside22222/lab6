<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <?php include 'header.inc'; ?>
</head>
<body>



          <form method="post" action="process.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="" required><br>
        <input type="hidden" name="tokerm" value="a106224013">
        <input type="submit" value="login">
        </form>
        
</body>
</html>