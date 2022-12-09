<?php include "includes/header.php"; ?>

<div class="form-container">

    <form action="code.php" method="POST">

        <input id="name" name="name" type="text" placeholder="Name" required>
        <br>
        <br>

        <input id="email" name="email" type="email" placeholder="email" required>
        <br>
        <br>

        <input id="subject" name="subject" type="text" placeholder="Subject">
        <br>
        <br>

        <textarea id="comment" name="comment" placeholder="leave your message here..."></textarea>
        <br>
        <br>

        <input id="submit" type="submit" value="Submit">

    </form>

</div>

<div class="contact-img">

    <img class="hidden" src="img/crowdFundingProfile.jpg" alt="Samuel Designing a Website">

</div>

<?php include "includes/footer.php"; ?>