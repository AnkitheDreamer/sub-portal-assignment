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
            <h2>Stored Subscribers</h2>
            <table border='1'>
                <tr>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Interests</th>
                </tr>
                <?php
                require "../db.php";
                $sql = "SELECT  fullname, phonenumber, email, interests FROM subscriber";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["fullname"] . "</td>";
                        echo "<td>" . $row["phonenumber"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["interests"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </table>
        </section>
        <footer>
        Ankit.Fashion ©️ 2024
        </footer>
    </div>
</body>

</html>