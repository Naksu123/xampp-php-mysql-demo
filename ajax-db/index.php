<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AJAX Database Demo</title>
    <script>
        function fetchUsers() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("userTableBody").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "fetch.php", true);
            xhttp.send();
        }
    </script>
</head>

<body>
    <h2>AJAX Database Demo</h2>
    <button onclick="fetchUsers()">Fetch Users</button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <!-- Data will be loaded here -->
        </tbody>
    </table>
    <br>
    <a href="../index.php">Back to Home</a>
</body>

</html>