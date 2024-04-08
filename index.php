<?php
    require("commands.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Списк матчей</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="/static/js/jquery-3.7.1.js"></script>
        
        <link href="/static/css/main.css" rel="stylesheet">
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
        <script src="/static/js/main.js"></script>
    </body>
</html>
