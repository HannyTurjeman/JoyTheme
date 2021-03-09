<?php
    /*
    Template Name: Joy Home Page
    */
    get_header();
?>

<!-- <main>
<div class="container">
    <img src="data:image/jpeg;base64,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" alt="cat">
</div>
</main> -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&family=Satisfy&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
</style>
<main>
    <div class="container">
        <header>
            <h1>Hanny Turjeman</h1>
            <p>Full Stack Developer</p>
        </header>
            <section>
                <main>
                    <img src="<?php echo get_bloginfo('template_url') ?>/photos/hanny.jpg"/>
                    <span>
                        <i class="fas fa-phone-alt"></i>
                        <p class="phone">050-5455554</p>
                        <br>
                        <i class="fas fa-envelope"></i>
                        <p class="mail">hannylevy@gmail.com</p>
                        <br>
                        <i class="fab fa-linkedin"></i>
                        <a href="linkedin.com/in/hanny-turjeman-28265676">My Linkedin</a>
                    </span>
                </main>
                <nav>
                    <span>
                        <h2>About me</h2>
                        <p>I'm Hanny, I'm an engineer with 8 years experience at Amdocs <br>
                          and right now Career changing to Full stack Developer.<br> <br>

                            What do I bring with me?<br>
                            A practical experience from projects that I do in the <br>
                            Full Stack Course that i'm learning right now, <br>
                            super motivation and ability to learn by myself.<br> <br>
                            will be happy to hear from you:)
                        </p>
                    </span>
                    <div>

                    </div>
                </nav>
            </section>
        <footer>
            <h1>Be in touch:)</h1>
        </footer>
    </div>
</main>

