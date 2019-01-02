<?php require ('partials/head.php'); ?>

<h1>All users</h1>

    <h1>My Tasks</h1>
    <h2>Submit your name</h2>

    <form method="POST" action="/users">
        <input name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>



    <?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>

    <?php endforeach; ?>


<?php require ('partials/footer.php'); ?>