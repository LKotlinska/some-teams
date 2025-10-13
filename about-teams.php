<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
require(__DIR__ . "/resources/functions.php");
?>

<h1>
    Learn about your favorite <span>teams</span>
</h1>
<div class="container">
    <?php
    foreach ($teams as $teamName => $dataName) {
        $cleanLeagueName = formatName($dataName['league']);
    ?>
        <!-------- creates the id for the anchor on the index page -------->
        <div id="<?php echo $teamName; ?>" class="about-card more-card">
            <h4>
                <?php echo $teamName; ?>
            </h4>
            <!-------- contains nameless divs to control the layout with flex  -------->
            <div class="card-container">
                <div>
                    <img class="team-logo" src="<?php echo $dataName['logo']; ?>" />
                </div>
                <div>
                    <table>
                        <tbody>
                            <tr>
                                <th>
                                    League
                                </th>
                                <td>
                                    <?php echo $cleanLeagueName; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Ranking
                                </th>
                                <td>
                                    <?php echo $dataName['uefa-coefficient-ranking']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    City
                                </th>
                                <td>
                                    <?php echo $dataName['city']; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- different table for opponents to seperate from previous table content -->
                <div>
                    <table>
                        <tbody>
                            <tr>
                                <th>
                                    Opponents
                                </th>
                                <td>
                                    <?php
                                    foreach ($dataName['opponents'] as $opponent) {
                                    ?>
                                        <li>
                                            <?php echo $opponent; ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="<?php echo $dataName['url']; ?>">Go to official website</a>
        </div>

    <?php
    };
    ?>
</div>
<?php
require(__DIR__ . '/footer.php');
