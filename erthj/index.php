<!DOCTYPE php>
<php style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Check Out Our Work Process, INTUITIVE">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Главная.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <?php
	//Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = ''; //пароль, по умолчанию пустой
		$db_name = 'sysbrone'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	//Формируем тестовый запрос:
		$query = "SELECT Name FROM products WHERE ID > 0";





    //Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

    //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
      for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
      	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($data[]);
?>
    
    
    
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Главная.php" data-home-page-title="Главная" class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-gradient u-header u-sticky u-header" id="sec-074a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Главная.php" class="u-image u-logo u-image-1" data-image-width="2001" data-image-height="913" title="Главная">
          <img src="images/Logo.png" class="u-logo-image u-logo-image-1" alt="">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Главная.php" style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Главная.php" style="padding: 10px 20px;">Аккаунт</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.php">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.php">Аккаунт</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_10c4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"><b>система бронирования</b>
          <br><b>детских путевок</b>
          <br><b>в
оздоровительные лагеря</b>
        </h5>
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-2">Просто выберете, что Вам нужно</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-image u-image-circle u-image-1" alt="" data-image-width="1200" data-image-height="900"></div>
                <div class="u-align-center u-container-style u-group u-palette-1-base u-shape-circle u-group-1">
                  <div class="u-container-layout u-valign-middle">
                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">01</h3>
                  </div>
                </div>
                <p class="u-align-right u-text u-text-4">Для<br>родителя
                </p>
                <p class="u-align-center u-text u-text-grey-40 u-text-5">Войти или зарегестрироваться для покупки путёвки для своего ребёнка или детей.</p>
                <a href="Авторизация-для-родителя.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-2-base u-radius-50 u-btn-1">ВОЙТИ</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-image u-image-circle u-image-2" alt="" data-image-width="1199" data-image-height="800"></div>
                <div class="u-align-center u-container-style u-group u-palette-1-base u-shape-circle u-group-2">
                  <div class="u-container-layout u-valign-middle">
                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-6">02</h3>
                  </div>
                </div>
                <p class="u-align-right u-text u-text-7">Для<br>организации
                </p>
                <p class="u-align-center u-text u-text-grey-40 u-text-8">Войти или зарегстрировать организацию для создания новой путёвки в оздоровительный лагерь</p>
                <a href="Авторизация-для-организации.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-3-light-2 u-palette-2-base u-radius-50 u-btn-2">войти</a>
              </div>
            </div>
          </div>
        </div>
        <a href="Кабинет-для-родителя.php" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">Кабинет для родителя</a>
      </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-cb19"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Спасибо, что выбрали Нас</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></php>