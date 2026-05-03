<h2> AJAX Database Demo </h2>

<button onclick="loadData()">Load Users </button>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <tbody id="data"></tbody>
</table>

<script>

function loadData() {
    fetch("fetch.php")
    .then(res => res.text())
    .then(data => {
        document.getElementById("data").innerHTML = data;
    })
}
</script>
<br>
<a href="../index.php">Back to Home</a>