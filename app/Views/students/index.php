<?php require '../app/Views/inc/header.php'?>
<body>
    <div class="container">
    <h1>Students</h1>
    <a class="btn btn-primary float-end mb-5" href="/students/create">Add New Student</a>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['firstname']; ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['lastname']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/students/edit?id=<?php echo $student['id']; ?>">Edit</a>
                    <form action="/students/delete" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>
