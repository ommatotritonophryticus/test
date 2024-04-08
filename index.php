<?php
    require("commands.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Списк матчей</title>
        
    </head>

    <body>
    
        <div>
            <?php foreach($rounds as $round_count => $round) { ?>    
            <div>    
                <h1>Круг <?= $round_count ?></h1>
                
                <?php foreach(array_chunk($round, 10) as $tour_count => $tour) { ?>
                <div>
                        <h2>Тур <?= $tour_count ?></h2  >
                    <table>
                        <tr>
                            <th>Хозяева</th>
                            <th></th>
                            <th>Гости</th>
                        </tr>
                        <?php foreach($tour as $round) { ?>
                            <tr>
                                <td> <?= $round[0] ?></td>
                                <td>-</td>
                                <td><?= $round[1] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </body>
</html>
