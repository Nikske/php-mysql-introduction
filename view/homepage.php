<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id="page-wrapper">
        <section>
            <form method="post">
                <div class="form-group">
                    <label for="inputFirstName">First name</label>
                    <input type="text" id="inputFirstName" class="form-control">
                    <label for="inputLastName">Last name</label>
                    <input type="text" id="inputLastName" class="form-control">
                    <label for="inputUserName">User name</label>
                    <input type="text" id="inputUserName" class="form-control">
                </div>

                <div class="form-group">
                    <label for="inputLinkedin">Linkedin</label>
                    <input type="text" id="inputLinkedin" class="form-control">
                    <label for="inputGithub">Github</label>
                    <input type="text" id="inputGithub" class="form-control">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control">
                    <label for="inputLanguage">Preferred language</label>
                    <select class="form-control" id="inputLanguage">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputAvatar">Avatar</label>
                    <input type="text" id="inputAvatar" class="form-control">
                    <label for="inputVideo">Video</label>
                    <input type="text" id="inputVideo" class="form-control">
                    <label for="inputQuote">Quote</label>
                    <input type="text" id="inputQuote" class="form-control">
                    <label for="inputQuoteAuthor">Quote author</label>
                    <input type="text" id="inputQuoteAuthor" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">GO</button>
            </form>
        </section>
    </div>
</body>
</html>