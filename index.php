<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/page_title_logo.png" type="image/x-icon">
    <title>Bartetik Design</title>
    <link rel="stylesheet" href="vendor/normalize.css">
    <link rel="stylesheet" href="vendor/index.css">
    <link href="https://fonts.cdnfonts.com/css/neutral-face" rel="stylesheet">
</head>

<body>
    <div class="black">
    <div class="page gradient">
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
                    <p class="text-upper">ГЛАВНАЯ ЗАДАЧА.</p>
                    <p class="text-down">С НАМИ&nbsp;</p>
                    <p class="text-upper">ВАШ БРЕНД</p>
                    <p class="text-down">&nbsp;БУДЕТ&nbsp;</p>
                    <p class="text-upper">ЗАМЕТЕН,</p>
                    <p class="text-down">А САЙТ&nbsp;</p>
                    <p class="text-upper">ЭФФЕКТИВНЫМ</p>
                    <p class="text-down">&nbsp;ИНСТРУМЕНТОМ&nbsp;</p>
                    <p class="text-upper">ДЛЯ УВЕЛИЧЕНИЯ</p>
                    <p class="text-down">&nbsp;ПРОДАЖ&nbsp;</p>
                    <p class="text-upper">И ПРИВЛЕЧЕНИЯ</p>
                    <p class="text-down">&nbsp;КЛИЕНТОВ</p>
                </div>
            </div>
            <div class="firstCalc"><?php include('app/blocksphp/marquee.php'); ?></div>
        </div>

        <div id="servicesHref" class="services">
            <h2 class="services__title">Наши услуги</h2>
            <div class="services__blocks">
                <h3 class="services__blocks__h3">Разработка Сайтов "под ключ":</h3>
                <p class="services__blocks__text">Создание визуально привлекательных, функциональных и SEO-оптимизированных сайтов, удовлетворяющих потребности от стартапов до крупных корпораций.</p>
            </div>
            <div class="services__blocks">
                <h3 class="services__blocks__h3">Брендинг:</h3>
                <p class="services__blocks__text">Построение узнаваемого и вызывающего доверие бренда, который отражает уникальность вашего бизнеса.</p>
            </div>
            <div class="services__blocks">
                <h3 class="services__blocks__h3">Графический и Веб Дизайн:</h3>
                <p class="services__blocks__text">Разработка индивидуального дизайна, который поможет выделить вас среди конкурентов.</p>
            </div>
            <div class="services__blocks">
                <h3 class="services__blocks__h3">Логотип и Фирменный Стиль:</h3>
                <p class="services__blocks__text">Создание логотипа и фирменного стиля, которые останутся в памяти ваших клиентов.</p>
            </div>
        </div>
        <div id="aboutusHref" class="aboutus">
            <h2 class="aboutus__title">Почему выбирают нас?</h2>

            <div class="aboutus_flex_block">

                <div class="aboutus_flex_block_column_1">

                    <div class="aboutus__blocks">
                        <h3 class="aboutus__blocks__3">Прозрачность и Ответственность</h3>
                        <p class="aboutus__blocks__text">Оставайтесь в курсе всех этапов проекта с регулярными отчетами и обратной связью.</p>
                        <p class="aboutus__blocks__numb">02</p>
                    </div>

                    <div class="aboutus__blocks">
                        <h3 class="aboutus__blocks__3">Результаты, которые говорят сами за себя</h3>
                        <p class="aboutus__blocks__text">У нас более 10 успешных проектов по разработке логотипов и созданию сложных сайтов</p>
                        <p class="aboutus__blocks__numb">04</p>
                    </div>
                </div>

                <div class="aboutus_flex_block_column_2">

                    <div class="aboutus__blocks">
                        <h3 class="aboutus__blocks__4">Индивидуальный Подход</h3>
                        <p class="aboutus__blocks__text">Мы учитываем уникальные потребности каждого клиента, чтобы предложить оптимальное решение.</p>
                        <p class="aboutus__blocks__numb">01</p>
                    </div>

                    <div class="aboutus__blocks">
                        <h3 class="aboutus__blocks__4">Партнер для Роста Вашего Бизнеса</h3>
                        <p class="aboutus__blocks__text">Мы не просто создаем сайты и бренды, мы помогаем компаниям расти и достигать новых высот в цифровой среде.</p>
                        <p class="aboutus__blocks__numb">03</p>
                    </div>

                </div>

            </div>
        </div>
        <div id="portfolioHref" class="portfolio">
            <h2 class="portfolio__title">Портфолио</h2>
            <p class="portfolio__text__left">Познакомьтесь с нашим портфолио и убедитесь в высоком качестве нашей работы. Мы гордимся каждым проектом и ценим доверие наших клиентов.</p>
            <div class="portfolio__blocks">
                <div class="portfolio__blocks__bg1">
                    <img src="images/bubnovskiy_logo.png" alt="Логотип центра восстановления здоровья">
                    <img class="mbcvz" src="images/mbcvz.png" alt="Скрин с сайта центра восстановления здоровья с телефона">
                    <img class="cvz" src="images/cvz.png" alt="Скрин с сайта центра восстановления здоровья с компьютера">
                    <div class="row_portfolio_item_text">
                        <div class="row_portfolio_item_info">
                            <p><b>Клиент:</b> <span>Центр Восстановления Здоровья</span></p>
                            <p><b>Задача:</b> <span>Разработка сайта-платфоры для медицинской организации</span></p>
                            <p><b>Категория: </b> <span>Сайты</span></p> 
                            <a href="https://cvz-ussuriisk.ru/" aria-label="Открыть сайт Центра восстановления здоровья" target="_blank">Открыть сайт</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__blocks__logo">
                <div class="portfolio__blocks__bg2 sovetnik">
                    <img src="images/sovetnik.png" alt="">
                    <div class="row_portfolio_item_text">
                        <div class="row_portfolio_item_info little__box">
                            <p><b>Клиент:</b> <span>СоветникЪ</span></p>
                            <p><b>Задача:</b> <span>Разработка логотипа для юридической организации</span></p>
                            <p><b>Категория: </b> <span>Логотип</span></p> 
                        </div>
                    </div>
                </div>
                <div class="portfolio__blocks__bg2 smk">
                    <img src="images/smk.png" alt="">
                    <div class="row_portfolio_item_text">
                        <div class="row_portfolio_item_info little__box">
                            <p><b>Клиент:</b> <span>Связь.Монтаж.Коммуникация.</span></p>
                            <p><b>Задача:</b> <span>Разработка логотипа</span></p>
                            <p><b>Категория: </b> <span>Логотип</span></p> 
                        </div>
                    </div>
                </div>
                <div class="portfolio__blocks__bg2 veranda">
                    <img src="images/varanda.png" alt="">
                    <div class="row_portfolio_item_text">
                        <div class="row_portfolio_item_info little__box">
                            <p><b>Клиент:</b> <span>Веранда</span></p>
                            <p><b>Задача:</b> <span>Разработка логотипа для сети цветочных магазинов</span></p>
                            <p><b>Категория: </b> <span>Логотип</span></p> 
                        </div>
                    </div>
                </div>
                <div class="portfolio__blocks__bg2 asha">
                    <img src="images/asha.png" alt="">
                    <div class="row_portfolio_item_text">
                        <div class="row_portfolio_item_info little__box">
                            <p><b>Клиент:</b> <span>Dari Shop</span></p>
                            <p><b>Задача:</b> <span>Разработка логотипа для магазина одежды</span></p>
                            <p><b>Категория: </b> <span>Логотип</span></p> 
                        </div>
                    </div>
                </div>
            </div>
            <p class="portfolio__text__right">ЭТИ И ДРУГИЕ КОМПАНИИ УЖЕ ВОСПОЛЬЗОВАЛИСЬ НАШИМИ УСЛУГАМИ И ВЫДЕЛЯЮТСЯ СРЕДИ КОНКУРЕНТОВ</p>
        </div>
        <?php include('app/blocksphp/marquee.php'); ?>
        
        
        <div id="contactsHref" class="contacts">
            <div class="contacts__blocks1">

                <form class="form" id="form" autocomplete="off">
                    <h3 class="contacts__title">Оставьте заявку</h3>

                    <div class="text-field">
                        <input id="name" class="text-field__inp" type="text" name="name" required>
                        <label class="text-field__placeholder">Ваше имя</label>
                    </div>
                    <div class="text-field">
                        <input id="tel" class="text-field__inp" type="tel" name="tel" required>
                        <label class="text-field__placeholder">Ваш телефон</label>
                    </div>
                    <div>
                        <input type="checkbox" id="terms" required>
                        <label for="terms">Я подтверждаю ознакомление с <a class="href_polit_obrabotki" href="docs/Политика обработки персональных данных.docx">Политикой обработки персональных данных</a> и даю согласие на обработку персональных данных в порядке и на условиях указанных в Политике.</label>
                    </div>
                    <button class="form__btn" type="submit" type="proceed">Заказать дизайн</button>
                </form>
            </div>
            
            <div class="contacts__blocks2">
                <p>Свяжитесь с нами</p>
                <p>+7 (914) 683 - 15 -46</p>
                <p>@magby132</p>
            </div>

        </div>
        </div>

    </div>
    <?php include('app/blocksphp/footer.php'); ?>

    <script src="blocks/canvas/canvas.js"></script>
    <script src="blocks/header/header.js"></script>
    <script src="blocks/run_string/run_string.js"></script>
</body>

</html>