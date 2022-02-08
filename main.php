<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP task</title>
    <link rel="stylesheet" href="assets/css/style.css">
<body>
    <div class="flex-container">
        <div class="header">
            <div class="logo">
                <div class="logoText"> 
                    <h1>Это страница-визитка</h1>
                    <p>Практическое задание</p>
                </div>
                <div class="logoImg">
                <?php echo '<img src="assets/img/phplogo.png" width = "90">' ?>
                <?php echo '<img src="assets/img/biglogo.png" width = "180">' ?>
                </div>
            </div>
            <div class="navbar">
                <?php include 'assets/php/navbar.inc.php' ?>
            </div>
        </div>  
        <div class="mainContent">
            <div class="info">
                <div class="description">
                    <h3><?php echo $p ?></h3>
                </div>
                <div class="myPhoto">
                    <?php include 'assets/php/myImg.inc.php' ?>
                </div>
                <div class="shortList">
                    <p>
                        Меня зовут:
                        <?php echo $name, ' ',$surname . '<br>';
                              echo 'Мой город:', ' ',$sity; ?>
                    </p>
                    <p>
                        Мне
                        <?php echo $age, 'год' ?>
                    </p>
                    <p>Это первое задание по <i><b>PHP</i></b>!</p>
                    <p>Мы уже изучили базовые понятия!</p>
                </div>      
                <div class="knowledge">
                    <p>
                    У нас есть три переменные:
                    <?php echo 'a:', $a, '; ','b:', $b, '; ','c:', $c ?>
                    </p>
                    <p> Результат суммы:
                    <?php echo $a + $b + $c ?> 
                    </p>
                    <p> Результат умножения:
                    <?php echo $a * $b * $c ?>
                    </p>
                    <p>
                        Это были простейшие операции! В следующих заданиях реализуем более сложные!
                    </p>
                </div> 
                <div class="goalContent">
                    <?php include 'assets/php/goal.inc.php' ?>
                </div>
            </div>
            <div class="sidebar">
                <?php include 'assets/php/sidebar.inc.php' ?>
            </div>
        </div>
        <div class="footer">
        <span id='fContent'>Gambit47@yandex.ru</span>
        </div>
    </div>
    <script src="assets/script/script.js"> </script>
</body> 
</html>