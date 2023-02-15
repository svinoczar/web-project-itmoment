<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/profile.css">
        <title>ITMOMENT</title>
        <style>
            #expertbtn {
                cursor: wait
            }
        </style>
    </head>
    <body>
    <header class="header" id="header">
        <div class="header__inner">
            <div class="header logo" style="text-align:center"> 
                <img src="img/ITMOMENT_logo.png"> 
            </div>
            <div class="panel" id="expert-panel">
                <form class="expert-panel-access" action="login.php" method="POST">  
                <div class="container">
                    <button id="expertbtn" name="expert" type="submit"  >Панель эксперта</button>
                </div>
            </div>
    </body>
</html>