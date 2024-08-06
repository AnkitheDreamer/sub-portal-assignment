<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Subscriber</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <a href="../"><img width="50" height="50" src="../img/logo.png" alt="" /></a>
            <a href="../add-sub/">Add New Subscriber</a>

            <a href="../view-sub/" style="float: right">See All Subscribers</a>
        </nav>
        <section>
            <h2>Information Form</h2>
            <form action="./add.php" method="POST">

                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="phonenumber">Phone Number:</label>
                <input type="tel" id="phonenumber" name="phonenumber" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="interests">Interests:</label>
                <textarea id="interests" name="interests" rows="4" cols="50" required></textarea>

                <input type="submit" value="Submit">
            </form>
        </section>
        <footer>
        Ankit.Fashion ©️ 2024
      </footer>
    </div>
</body>

</html>