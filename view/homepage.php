<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<section>
    <form method="post">
        <!-- First, last and user name -->
        <div class="form-group">
            <label for="inputFirstName">First name</label>
            <input type="text" id="inputFirstName" name ="inputFirstName" class="form-control" required>
            <label for="inputLastName">Last name</label>
            <input type="text" id="inputLastName" name="inputLastName" class="form-control" required>
            <label for="inputUserName">User name</label>
            <input type="text" id="inputUserName" name="inputUserName" class="form-control" required>
        </div>
        <!-- Linkedin, Github, Email and language -->
        <div class="form-group">
            <label for="inputLinkedin">Linkedin</label>
            <input type="text" id="inputLinkedin" name="inputLinkedin" class="form-control" required>
            <label for="inputGithub">Github</label>
            <input type="text" id="inputGithub" name="inputGithub" class="form-control" required>
            <label for="inputEmail">Email</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" required>
            <label for="inputLanguage">Preferred language</label>
            <select class="form-control" id="inputLanguage" name="inputLanguage">
                <option value="en">EN</option>
                <option value="nl">NL</option>
                <option value="de">DE</option>
                <option value="fr">FR</option>
            </select>
        </div>
        <!-- Avatar, video and quote -->
        <div class="form-group">
            <label for="inputAvatar">Avatar</label>
            <input type="text" id="inputAvatar" name="inputAvatar" class="form-control" required>
            <label for="inputVideo">Video</label>
            <input type="text" id="inputVideo" name="inputVideo" class="form-control" required>
            <label for="inputQuote">Quote</label>
            <input type="text" id="inputQuote" name="inputQuote" class="form-control" required>
            <label for="inputQuoteAuthor">Quote author</label>
            <input type="text" id="inputQuoteAuthor" name="inputQuoteAuthor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">GO</button>
    </form>
</section>
</body>
</html>