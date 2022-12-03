<!DOCTYPE php>
<php style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Кабинет админа</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Кабинет-админа.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'sysbrone';
$link = mysqli_connect($host, $user, $pass, $db_name);

if (!$link) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
}
$varDocument = "a";
$result = mysqli_query($link,"SELECT * FROM `products` ORDER BY ID DESC LIMIT 1 ");
while($goods = mysqli_fetch_assoc($result))
{
$varDocument= $goods['Name'];
}
echo $varDocument;

?>
    
    
    
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Кабинет админа">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-gradient u-header u-sticky u-header" id="sec-074a"><div class="u-clearfix u-sheet u-sheet-1">
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
    <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-e1f4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="email" name="form">
            <div class="u-form-date u-form-group u-label-top">
              <label for="name-6797" class="u-label">Дата начала</label>
              <input type="date" placeholder="Дата начала смены" id="name-6797" name="DataNachalo" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
            </div>
            <div class="u-form-date u-form-group u-label-top">
              <label for="email-6797" class="u-label">Дата конца</label>
              <input type="date" placeholder="Дата конца смены" id="email-6797" name="DataConec" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
            </div>
            <div class="u-form-group u-form-select u-label-top u-form-group-3">
              <label for="select-2cd5" class="u-label">Название смены</label>
              <div class="u-form-select-wrapper">
                <select id="select-2cd5" name="NazvCmeni" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
                  <option value=""></option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-label-top">
              <a href="files/f7b0afb0-ccea-bc6b-13ac-03c62dec435a.pdf" class="u-btn u-btn-submit u-button-style u-file-link">Сформировать отчёт в Excel<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="e5a62908410ebc25578e400f622365b0">
          </form>
        </div>
        <div class="u-form u-form-2">
          <form action="https://forms.nicepagesrv.com/Form/Process" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="email" name="form">
            <div class="u-form-group u-form-select u-label-top u-form-group-5">
              <label for="select-2cd5" class="u-label">Название таблицы</label>
              <div class="u-form-select-wrapper">
                <select id="select-2cd5" name="Table" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="required">
                  <option value=$varDocument></option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-label-top">
              <a href="files/f7b0afb0-ccea-bc6b-13ac-03c62dec435a.pdf" class="u-btn u-btn-submit u-button-style u-file-link">Сформировать отчёт таблицы в Excel<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="e5a62908410ebc25578e400f622365b0">
          </form>
        </div>
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/0ebc5eda-4388-75ba-c504-d39557196aa2.png" alt="" data-image-width="900" data-image-height="900">
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