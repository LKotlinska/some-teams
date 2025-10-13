<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
require(__DIR__ . "/resources/functions.php");
?>
<main>
    <h1>
        Kick Off with Your Favorite <span>Teams</span>
    </h1>
    <div class="container">
        <?php
        foreach ($teams as $teamName => $dataName) {
            $cleanLeagueName = formatName($dataName['league']);
        ?>
            <div class="teams-card">
                <h4>
                    <?php echo $teamName; ?>
                </h4>
                <img class="team-logo" src="<?php echo $dataName['logo']; ?>" />
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
