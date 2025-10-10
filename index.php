<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
?>
<main>
    <h1>
        Kick Off with Your Favorite <span>Teams</span>
    </h1>
    <div class="container">
        <?php
        foreach ($teams as $teamName => $dataName) {
            // Removes paranthesis
            $cleanLeagueName = preg_replace("/\s*\(.*?\)/", "", $dataName['league']);
            // Removes slash
            $cleanLeagueName = str_replace("\\", "", $cleanLeagueName);
            // Capitalizes words
            $cleanLeagueName = ucwords(strtolower(trim($cleanLeagueName)));
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
