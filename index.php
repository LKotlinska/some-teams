<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
?>
<main>
    <?php
    foreach ($teams as $teamName => $dataName) {
    ?>
        <table>
            <tbody>
                <caption>
                    <?php echo $teamName; ?>
                </caption>
                <tr colspan="2">
                    <td>
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
                            <?php echo "<br>" . $opponentValue; ?>
                        <?php
                        };
                        ?>
                    </td>
                </tr>
                <tr colspan="2">
                    <td>
                        <button href="<?php echo $dataName['url']; ?>">Read more...</button>
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
