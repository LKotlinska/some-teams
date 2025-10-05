<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
?>
<main>
    <?php
    foreach ($teams as $teamName => $dataName) {
    ?>
        <table>
            <caption>
                <?php echo $teamName; ?>
            </caption>
            <tbody>
                <tr colspan="2">
                    <td colspan="2">
                        <img src="<?php echo $dataName['logo']; ?>" />
                    </td>
                </tr>
                <tr>
                    <th>
                        League
                    </th>
                    <td>
                        <?php echo $dataName['league']; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Ranking
                    </th>
                    <td>
                        <?php echo $dataName['uefa-coefficient-ranking']; ?>;
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
                <tr>
                    <th>
                        Opponents
                    </th>
                    <td>
                        <?php
                        foreach ($dataName['opponents'] as $opponentValue) {
                        ?>
                            <?php echo $opponentValue; ?> <br>
                        <?php
                        };
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <a href="<?php echo $dataName['url']; ?>" class="button">Read more...</a>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php
    };
    ?>
</main>
<?php
require(__DIR__ . "/footer.php");
