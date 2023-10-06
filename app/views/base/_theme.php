<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?= SITE ?></title>
  <meta name="author" content="Tchossy" />
  <meta name="description" content="Soers Obi" />
  <meta name="keywords" content="Tchossy, Tchossy Solution " />
  <meta name="robots" content="INDEX,FOLLOW" />
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

  <!-- Favicon -->
  <link rel="icon" href="<?= BASE_IMG . "/base/images/favicon.png" ?>">

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Styles -->
  <link rel="stylesheet" href="<?= BASE_STYLES . "/app.min.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/style.css" ?>" />
  <link rel="stylesheet" href="<?= BASE_STYLES . "/fontawesome.min.css" ?>" />

  <!-- Outhers -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <meta name="msapplication-TileColor" content="#ffffff" />

  <meta name="theme-color" content="#ffffff" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- MENU MOBILE -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <button class="vs-menu-toggle"><i class="fas fa-times"></i></button>
      <div class="mobile-logo">
        <a href="/" style="margin-right: 1.6rem; max-width: 200px; min-width: 150px"><img src="/base/images/logo.png"
            alt="Soers Obi" class="logo" style="margin-right: 1.6rem; max-width: 200px; min-width: 150px" /></a>
      </div>

      <div class="vs-mobile-menu">
        <ul>
          <li><a href="/">Página Inicial</a></li>

          <!-- <li class="menu-item-has-children">
            <a>Soers Obi</a>
            <ul class="sub-menu">
              <li><a href="/about">Sobre Nós</a></li>

               <li>
                  <a href="index-/slickslider"
                    >Sobre Nós <span class="new-label">new</span></a
                  >
                </li>
            </ul>
          </li> -->

          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#sevices">Serviços</a></li>
          <li><a href="#faq">Perguntas frequentes</a></li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- HEADER -->
  <header class="vs-header header-layout1">
    <div class="container">
      <div class="menu-top">
        <div class="row justify-content-between align-items-center gx-sm-0">
          <!-- MENU -->
          <div class="row align-items-center justify-content-between">
            <div class="col" style="margin-right: 1.6rem; max-width: 200px; min-width: 150px">
              <div class="header-logo">
                <a href="/"><img src="/base/images/logo.png" style="" alt="TechBiz" class="logo" /></a>
              </div>
            </div>

            <nav class="main-menu menu-style1 d-none d-lg-block">
              <ul>
                <li><a href="#">Página Inicial</a></li>

                <!-- <li class="menu-item-has-children">
                  <a href="#">Soers Obi
                    <i style="color: rgba(14, 84, 245, 0.5)" class="bx bx-down-arrow-alt"></i>
                  </a>
                  <ul class="sub-menu">
                    <li>
                      <a href="/about">Sobre Nós </a>
                    </li>
                    <li>
                      <a href="/team">Equipe </a>
                    </li>
                  </ul>
                </li> -->


                <li><a href="#about">Sobre Nós</a></li>
                <li><a href="#sevices">Serviços</a></li>
                <li><a href="#faq">Perguntas frequentes</a></li>
                <li><a href="#contact">Contactos</a></li>
              </ul>
            </nav>

            <!-- BUTTON MENU BURGER -->
            <button class="vs-menu-toggle d-inline-block d-lg-none">
              <i class="fas fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- MAIN -->
  <?= $this->section("content") ?>


  <!-- RODAPE -->
  <footer class="footer-wrapper footer-layout1" data-bg-src="/base/images/shape/bg-footer-1-1.jpg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm footer-info_group">
            <div class="footer-info">
              <div class="footer-info_icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="media-body">
                <span class="footer-info_label">Endereço do escritório</span>
                <div class="footer-info_link">
                  FUBU, no Triângulo do ISPAJ (Projeto nova vida)
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm footer-info_group">
            <div class="footer-info">
              <div class="footer-info_icon"><i class="fas fa-clock"></i></div>
              <div class="media-body">
                <span class="footer-info_label">Horas de trabalho</span>
                <div class="footer-info_link">
                  Dias de semana 8h às 18h Fim de semana 08h às 12h
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm footer-info_group">
            <div class="footer-info">
              <div class="footer-info_icon">
                <i class="fas fa-phone-volume"></i>
              </div>
              <div class="media-body">
                <span class="footer-info_label">Contate-nos</span>
                <div class="footer-info_link">
                  <a href="mailto:info@soerscorporation.ao">info@soerscorporation.ao</a><br /><a
                    href="tel:+2597462153">(+259) 746 2153</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="widget-area">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-4 col-xl-auto">
            <div class="widget footer-widget">
              <h3 class="widget_title">Sobre nós</h3>
              <div class="vs-widget-about">
                <p class="footer-text">
                  Intrinsicly evisculate emerging cutting edge scenarios
                  redefine future-proof e-markets demand line
                </p>
                <div class="footer-social">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 col-xl-auto">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Links</h3>
              <div class="menu-all-pages-container">
                <ul class="menu">
                  <li><a href="#">Sobre nós</a></li>
                  <li><a href="#">Nossa missão</a></li>
                  <li><a href="#">Conheça as equipes</a></li>
                  <li><a href="#">Nossos projetos</a></li>
                  <li><a href="#">Contate-nos</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 col-xl-auto">
            <div class="widget widget_nav_menu footer-widget">
              <h3 class="widget_title">Explorar</h3>
              <div class="menu-all-pages-container">
                <ul class="menu">
                  <li><a href="#">O que nós oferecemos</a></li>
                  <li><a href="#">Nossa história</a></li>
                  <li><a href="#">últimas postagens</a></li>
                  <li><a href="#">Centro de ajuda</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-auto">
            <div class="widget footer-widget">
              <h3 class="widget_title">Localização do escritório</h3>
              <div class="footer-map">
                <iframe title="Soers Obi, Lda"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15766.418088714063!2d13.180621663992971!3d-8.916307898298074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f57083357457%3A0xd9c7b88be32036cc!2zVGFsYXRvbmEsIEZ1YsO6!5e0!3m2!1spt-BR!2sao!4v1676651037855!5m2!1spt-BR!2sao"
                  width="200" height="180" style="border: 0" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-wrap">
      <div class="container">
        <p class="copyright-text">
          Copyright <i class="fas fa-copyright"></i> 2023
          <a class="text-white" href="/">Soers Obi</a>. All rights
          reserved by
          <a class="text-white" href="https://tchossy.com">Tchossy Solution</a>.
        </p>
      </div>
    </div>
  </footer>
  <a href="#" class="scrollToTop scroll-btn">
    <i class="fas fa-arrow-up"></i>
  </a>


  <!-- SCRRIPT -->

  <script src="<?= BASE_VENDOR . "/jquery-3.6.0.min.js" ?>"></script>

  <script src="<?= BASE_JS . "/app.min.js" ?>"></script>
  <script src="<?= BASE_JS . "/layerslider.utils.js" ?>"></script>
  <script src="<?= BASE_JS . "/layerslider.transitions.js" ?>"></script>
  <script src="<?= BASE_JS . "/layerslider.kreaturamedia.jquery.js" ?>"></script>
  <script src="<?= BASE_JS . "/main.js" ?>"></script>

</body>

</html>