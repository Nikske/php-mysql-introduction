<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="../logout.php">Log out</a>
        <section class="row">
            <!-- Avatar and language -->
            <article class="col bg-success m-3 p-2 rounded">
                <img src="<?php echo $user['avatar'] ?>">
                <p><img src="img/<?php echo $user['preferred_language']?>.png" alt="<?php echo $user['preferred_language'] ?>"></p>
            </article>
            <!-- User, First and Last name -->
            <article class="col bg-success m-3 p-2 rounded">
                <strong><?php echo $user['username']?></strong>
                <p><?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></p>
                <p><?php echo $user['created_at'] ?></p>
            </article>
        </section>

        <section class="row">
            <!-- Video and quote -->
            <article class="col bg-success m-3 p-2 rounded">
                <a target="_blank" href="<?php echo $user['video'] ?>"><?php echo $user['video'] ?></a>
                <blockquote class="blockquote">
                    &quot;<?php echo $user['quote'] ?>&quot;
                    <footer class="blockquote-footer"><?php echo $user['quote_author'] ?></footer>
                </blockquote>
            </article>
            <!-- Links and email -->
            <article class="col bg-success m-3 p-2 rounded">
                <a target="_blank" href="<?php echo $user['linkedin']?>"><p><?php echo $user['linkedin'] ?></p></a>
                <a target="_blank" href="<?php echo $user['github']?>"><p><?php echo $user['github'] ?></p></a>
                <p><?php echo $user['email'] ?></p>
            </article>
        </section>
    </div>
</body>
</html>