<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/authors.php");
?>
<main>
    <h1>
        <span>Laura Kotlinska</span>
    </h1>
    <h2>
        Web Development student @ YRGO
    </h2>
    <div class="container">
        <div class="about-card">
            <h3>
                About me
            </h3>
            <p>
                Hello, I’m Laura!
            </p>
            <p>    
                I'm an aspiring web developer passionate about building clean,
                responsive, and creative websites. My focus is on creating responsive
                and reliable solutions with attention to both design and functionality.
                I’m always eager to learn new technologies and improve my skills to deliver modern,
                high-quality web experiences.
            </p>
            <p>
                Facts about me:
            </p>
            <ul>
                <?php
                foreach ($authors as $author) {
                    if ($author['hasPet'] == true) :
                ?>
                        <li>
                            I have a <?php echo $author['petType']; ?>
                            called <?php echo $author['petName']; ?>
                        </li>
                    <?php
                    else :
                    ?>
                        <li>
                            I don't own any pets
                        </li>
                    <?php
                    endif;
                    if ($author['likesFootball'] == true) :
                    ?>
                        <li>
                            I'm a fan of <?php echo $author['favoriteTeam']; ?>
                        </li>
                    <?php
                    else :
                    ?>
                        <li>
                            I'm not a fan of any sports
                        </li>
                <?php
                    endif;
                }
                ?>
            </ul>
        </div>
        <div class="about-card">
            <h3>
                Skills
            </h3>
            <div class="icon-container">
                <?php
                foreach ($authors as $author => $data) {
                    foreach ($data['programmingLanguage'] as $skill => $iconUrl) {
                ?>
                        <div class="hobby-icon">
                            <img src="<?php echo $iconUrl ?>">
                            <div class="hover-text">
                                <p> <?php echo $skill ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="about-card">
            <h3>
                Hobbys and interests
            </h3>
            <div class="icon-container">
                <?php
                foreach ($authors as $author => $data) {
                    foreach ($data['hobby'] as $hobby => $iconUrl) {
                ?>
                        <div class="hobby-icon">
                            <img src="<?php echo $iconUrl ?>">
                            <div class="hover-text">
                                <p> <?php echo $hobby ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php
require(__DIR__ . "/footer.php");
