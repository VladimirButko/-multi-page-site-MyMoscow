<?php
    $title = "Контакты";
    include("header.php");
?>
<body>
    <div class="header-contacts">
        <div class="header-contacts-links wrapper">
            <div class="logo"></div>
            <h2>MyMoscow</h2>
            <nav>
                <a href="index.php" target="_blank">Главная</a>
                <a href="index-trips.php" target="_blank">Наши услуги</a>
                <a href="#">О компании</a>
                <a href="#">Контакты</a>
                <a href="#">Отзывы</a>
            </nav> 
            <div class="burger">
                <div class="burger-line"></div>
            </div> 
        </div>
        <div class="header-contacts-content-contacts wrapper">
            <h1>MyMoscow</h1>
            <p>Агенство интересных маршрутов</p>
            <h2>-Контакты-</h2>
        </div>
    </div>
    <main>
        <div class="headline-contacts wrapper">
            <h1>Контакты</h1>
        </div>
        <div class="text-contakts">
            <p class="p-contacts">Мы - команда тех, кто любит историю и любит Москву</p>
            <p class="p-contacts"> Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.</p>
            <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
        </div>
        <div class="contacts-content-box">
            <div class="contacts-content-box-alex">
                <div class="picture-content-contakts pic-alex"></div>
                <div class="text-alex">
                    <h2>Александр Рыбаков</h2>
                    <h3>директор</h3>
                    <p>По всем вопросам пишитe</p>
                    <p class="p-email">rybakov@mymoscow.ru</p>
                </div>
            </div>
            <div class="contacts-content-box-elena">
                <div class="picture-content-contakts pic-elena"></div>
                <div class="text-elena">
                    <h2>Елена Белкина</h2>
                    <h3>руководитель корпоротивного отдела</h3>
                    <p>По вопросам корпоротивных экскурсий:</p>
                    <p class="p-email">belkina@mymoscow.ru</p>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="content-form-contacts-box">
            <div class="content-form-contacts-box-contakts">
                <article class="cards-box placeholder">
                     <img src="icon/placeholder.png" alt="">
                    <div class="icons-contacts">
                        <p>Москва,<br>Большая Спасская 12</p>
                    </div>
                </article>
                <article class="cards-box mail">
                    <img src="icon/mail.png" alt="">
                    <article class="icons-contacts">
                        <div class="icons-contact"></div>
                        <p>E-mail:<br>info@mymoscow.ru</p>
                    </article>
                </article>
                <article class="cards-box telephone">
                    <img src="icon/telephone.png" alt="">
                    <div class="icons-contacts">
                        <p>Телефон:<br>8 (495) 626-46-00</p>
                    </div>
                </article>
            </div>
            <div class="content-form-contacts-box-form">
                <h3>Напишите нам</h3>
                <form method="POST" action="form.php">
                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="email" name="email" placeholder="E-mail">
                    <textarea name="comment" placeholder="Ваше сообщение"></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </section>
    <div class="map-box">
        <div class="map-content-box"></div>
        <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/-/CCcgB2Yg" width="100%" height="620" frameborder="0" allowfullscreen="true"></iframe>
        </div>
    </div>
    <div class="content-info">
        <div class="content-info-box wrapper">
            <div class="content-info-box-left">
                <div class="logotip"></div>
                <h2>MyMoscow</h2>
                <p>Мы приглашаем тебя на самые разные экскурсии по Москве. Автобусные и пешеходные, на целый день или на несколько часов, на свежем воздухе или с заходом в здания - у нас в ассортименте более 20 авторских экскурсий по Москве, выбирай и узнавай Москву вместе с нами!</p>
            </div>
            <div class="content-info-box-center">
                <h2>Контакты</h2>
                <div class="article-content">
                    <article class="pic-side">
                        <img src="icon/placeholder.png" alt="">
                        <p>Москва, Большая спаская 12</p>
                    </article>
                    <article class="pic-side">
                        <img src="icon/mail.png" alt="">
                        <p>moscow@imoscow.ru</p>
                    </article>
                    <article class="pic-side">
                        <img src="icon/telephone.png" alt="">
                        <p>8(495)6264600</p>
                    </article>
                </div>
            </div>
            <div class="content-info-box-right">
            <h2>Последние новости</h2>
            <p>Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenae</p>
            <p class="p-side">5 марта 2018</p>
            <p>Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per </p>
            <p class="p-side">12 декарбря 2017</p>
            </div>
        </div>
    </div>
        <?php include("footer.php"); ?>
