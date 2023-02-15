<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/profile.css">
        <title>ITMOMENT</title>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__inner">
                <div class="header logo" style="text-align:center"> 
                    <img src="img/ITMOMENT_logo.png"> 
                </div>
                <div class="panel" id="expert-panel">
                    <form class="expert-panel-access" action="login.php" method="POST">
                    <script>
                        var spge = <?php echo json_encode($admin_status); ?>;
                        console.log(spge)
                    </script>
                    <div class="container">
                        <button id="expertbtn" name="expert" type="submit" style="visibility: hidden" >Панель эксперта</button>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>