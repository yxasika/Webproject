<!DOCTYPE html>

<html lang="en">

<head>
    <title>Contact</title>
    <?php include "head.php" ?>
</head>

<body id="contactform" onload="document.contactform.sender.focus();">

<?php include "navbar.php" ?>
<?php include "cookie_alert.php" ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="content" name="contact" action="home.php">
                <h2>Contact us</h2>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="sender" placeholder="my.adress@example.com" class="form-control"
                           required/>
                </div>
                <div class="form-group">
                    <select class="form-control" required>
                        <option value="" selected disabled>Subject</option>
                        <option value="articles">Articles</option>
                        <option value="author">Author</option>
                        <option value="profile">Profile</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="message">Your message:</label>
                    <textarea id="message" name="message" placeholder="write your text here..." cols="20" rows="10"
                              class="form-control"></textarea>
                </div>
                <div>
                    <input type="submit" value="SEND" class="btn btn-primary float-right"/>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>

</html>
