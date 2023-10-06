<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bartetik</title>
    <link rel="stylesheet" href="vendor/normalize.css">
    <link rel="stylesheet" href="vendor/index.css">
    <link href="https://fonts.cdnfonts.com/css/neutral-face" rel="stylesheet">
</head>

<body>
    <div class="page">
        <?php include('app/blocksphp/header.php'); ?>


        <canvas id="canvas"></canvas>
        <div class="container-text">
            <div class="fake__header">

            </div>
            <div class="canvas-text__left100hv">
                <div class="canvas-text__left">
                    <p class="text-down">МЫ — КОМАНДА&nbsp;</p>
                    <p class="text-upper">ПРОФЕССИОНАЛЬНЫХ&nbsp;</p>
                    <p class="text-upper">ДИЗАЙНЕРОВ&nbsp;</p>
                    <p class="text-upper">И РАЗРАБОТЧИКОВ,&nbsp;</p>
                    <p class="text-down">ПОМОГАЮЩИХ БИЗНЕСУ&nbsp;</p>
                    <p class="text-down">ПРОЦВЕТАТЬ В&nbsp;</p>
                    <p class="text-down">ЦИФРОВОМ МИРЕ</p>
                </div>
            </div>
            <div class="canvas-text__right100hv">
                <div class="canvas-text__right">
                    <p class="text-down">ВАШ&nbsp;</p>
                    <p class="text-upper">УСПЕХ</p>
                    <p class="text-down">&nbsp;—&nbsp;</p>
                    <p class="text-down">НАША&nbsp;</p>
                    <p class="text-upper">ГЛАВНАЯ ЗАДАЧА.&nbsp;</p>
                    <p class="text-down">С НАМИ&nbsp;</p>
                    <p class="text-upper">ВАШ БРЕНД</p>
                    <p class="text-down">&nbsp;БУДЕТ&nbsp;</p>
                    <p class="text-upper">ЗАМЕТЕН,&nbsp;</p>
                    <p class="text-down">А САЙТ&nbsp;</p>
                    <p class="text-upper">ЭФФЕКТИВНЫМ</p>
                    <p class="text-down">&nbsp;ИНСТРУМЕНТОМ&nbsp;</p>
                    <p class="text-upper">ДЛЯ УВЕЛИЧЕНИЯ</p>
                    <p class="text-down">&nbsp;ПРОДАЖ&nbsp;</p>
                    <p class="text-upper">И ПРИВЛЕЧЕНИЯ</p>
                    <p class="text-down">&nbsp;КЛИЕНТОВ</p>
                </div>
            </div>

            <?php include('app/blocksphp/marquee.php'); ?>


        </div>

    </div>

    <?php include('app/blocksphp/footer.php'); ?>

    <script src="blocks/canvas/canvas.js"></script>
    <script src="blocks/run_string/run_string.js"></script>
</body>

</html>