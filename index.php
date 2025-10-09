<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
?>
<main>
    <div class="main-container">
        <?php
        foreach ($teams as $teamName => $dataName) {
        ?>
            <div class="card">
                <h3>
                    <?php echo $teamName; ?>
                </h3>
                <img class="team-logo" src="<?php echo $dataName['logo']; ?>" />
                <table>
                    <tbody>
                        <tr colspan="2">
                            <td colspan="2">

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

                    </tbody>
                </table>
                <a href="<?php echo $dataName['url']; ?>">Read more...</a>
            </div>
        <?php
        };
        ?>
    </div>
</main>
<?php
require(__DIR__ . "/footer.php");
