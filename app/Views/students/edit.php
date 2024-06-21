<?php require '../app/Views/inc/header.php'?>
<body>
    <h1>Edit Student</h1>
    <form action="/students/update" method="post">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <label for="firstname">Name:</label><br>
        <input type="text" id="name" name="firstname" value="<?php echo $student['firstname']; ?>" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $student['email']; ?>" required><br>
        <label for="lastname">Phone:</label><br>
        <input type="text" id="phone" name="lastname" value="<?php echo $student['lastname']; ?>"><br><br>
        <button type="submit">Update</button>
    </form>
    <a href="/students">Back to list</a>
</body>
</html>
