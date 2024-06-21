<?php require '../app/Views/inc/header.php'?>
<body>
    <h1>Create New Student</h1>
    <form action="/students/store" method="post">
        <label for="firstname">Name:</label><br>
        <input type="text" id="name" name="firstname" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="lastname">Phone:</label><br>
        <input type="text" id="lastname" name="lastname"><br><br>
        <button type="submit">Submit</button>
    </form>
    <a href="/students">Back to list</a>
</body>
</html>
