<?php
require(__DIR__ . "/header.php");
require(__DIR__ . "/resources/data.php");
?>
<main>
    <table>
        
        <tbody>
            <caption>Team name</caption>
            <tr colspan="2">
            <img src="https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg" />
            </tr>
            <tr>
                <th>
                    League
                </th>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <th>
                    Ranking
                </th>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <th>
                    City
                </th>
                <td>
                    data
                </td>
            </tr>
            <tr>
                <th>
                    Opponents
                </th>
                <td>
                    data
                </td>  
            </tr>
        </tbody>
    </table>
    <?php
        foreach($teams as $teamName => $dataName){
            echo $teamName . "<br>";
            echo $dataName['league'];
            echo $dataName['uefa-coefficient-ranking'];
            echo $dataName['city'];
            echo $dataName['url'];
            echo $dataName['logo'];
            foreach($dataName['opponents'] as $opponentValue){
                echo "<br>" . $opponentValue;
            }
        }
    ?>
</main>
<?php
require(__DIR__ . "/footer.php");
