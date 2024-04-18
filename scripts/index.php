<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Recommender</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Book Recommender</h1>
    <form action="recommend.php" method="post">
        <label for="bookInput">Enter book title or author:</label>
        <input type="text" id="bookInput" name="userInput" required>
        <button type="submit">Get Recommendations</button>
    </form>
    <div id="recommendations"></div>
    <script src="script.js"></script>
</body>

</html>