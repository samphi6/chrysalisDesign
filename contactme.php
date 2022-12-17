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

    <div class="contact-img">

        <img class="hidden-left" src="img/crowdFundingProfile.jpg" alt="Samuel Designing a Website">

        <div class="logo hidden"><img src="img/cc_logoWhiteText.png" alt="Chrysalis Design and Development logo">

            <div class="contacts">

                <button href="https://www.linkedin.com/in/samueltphillipsbok/">Hey! i'm On Linked<i class="fa-brands fa-linkedin-in"></i></button>

                <a href="mailto:codedchrysalis@gmail.com"><i class="fa-sharp fa-solid fa-envelope"></i>codedchrysalis@gmail.com</a>

                <a href="samuelphillipsbok.com"><i class="fa-sharp fa-solid fa-bookmark"></i>samueltphillipsbok.com</a>


            </div>

        </div>

    </div>
</div>

<?php include "includes/footer.php"; ?>