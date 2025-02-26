<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Two-Factor Code</title>
</head>
<body>
    <h2>Update Two-Factor Code</h2>
    <form action="update_twofa.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="new_twofacode">New Two-Factor Code:</label>
        <input type="text" id="new_twofacode" name="new_twofacode" required>
        <br><br>
        <button type="submit">Update Code</button>
    </form>
</body>
</html>
