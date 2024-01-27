    <nav class="navbar navbar-default menu1">
      <div class="fullwidth menu-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">
            <img alt="Tanpog Ventures" src="img_tanpog/tanpog-ventures-logo.svg" width="230" height="65">
          </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar1">
          <ul class="nav navbar-nav navbar-right"> 
            <li class="<?= ($activePage == 'cleaners') ? 'active':''; ?>"><a href="cleaners.php">Tanpog Cleaners</a></li>
            <li class="<?= ($activePage == 'bodycare') ? 'active':''; ?>"><a href="bodycare.php">Tanpog Body Care</a></li>
            <!--
            <li>
              <ul class="lang">
                <li>
                  <div id="google_translate_element"></div>
                  <script type="text/javascript">
                    function googleTranslateElementInit() {
                      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,fr,nl,sv,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
                    }
                  </script>
                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </li>
              </ul>
            </li>
            -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <nav class="navbar navbar-default navbar-fixed-top menu2">
      <div class="fullwidth menu-container">
        <div class="navbar-header">
          
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>

          <a href="index.php" class="navbar-brand">
            <img alt="Tampog Ventures" src="img_tanpog/tanpog-ventures-logo.svg" width="230" height="65">
          </a>
        </div>
        <div class="navbar-collapse collapse" id="navbar2">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?= ($activePage == 'cleaners') ? 'active':''; ?>"><a href="cleaners.php">Tanpog Cleaners</a></li>
            <li class="<?= ($activePage == 'bodycare') ? 'active':''; ?>"><a href="bodycare.php">Tanpog Body Care</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
