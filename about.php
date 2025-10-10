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
            <p>Hello!<br>
                I’m Laura,an aspiring web developer passionate about building clean,
                responsive, and user-friendly websites. My focus is on creating accessible
                and reliable solutions with attention to both design and functionality.
                I’m always eager to learn new technologies and improve my skills to deliver modern,
                high-quality web experiences.</p>
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
