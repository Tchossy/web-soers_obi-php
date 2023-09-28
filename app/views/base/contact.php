<?php $this->layout("_theme"); ?>

<div class="breadcumb-wrapper" data-bg-src="/base/images/breadcumb/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Contate-nos</h1>
      <div class="breadcumb-menu-wrap">
        <ul class="breadcumb-menu">
          <li><a href="index.html">Lar</a></li>
          <li>Contate-nos</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section class="space-top space-extra-bottom">
  <div class="container">
    <div class="nav contact-tab-menu" id="nav-contactTab" role="tablist">

    </div>


    <div class="tab-content" id="nav-contactTabContent">
      <div class="tab-pane fade show active" id="nav-GermanyAddress" role="tabpanel" aria-labelledby="nav-GermanyAddress-tab">
        <div class="row">
          <div class="col-lg-6 mb-30">
            <div class="contact-box">
              <h3 class="contact-box__title h4">Endereço do escritório</h3>
              <p class="contact-box__text">
                Recapturar completamente as comunidades 24 horas por dia, 7 dias por semana, por meio de padrões
                métricas compatíveis, enquanto conteúdo habilitado para web
              </p>
              <div class="contact-box__item">
                <div class="contact-box__icon">
                  <i class="fal fa-phone-alt"></i>
                </div>
                <div class="media-body">
                  <h4 class="contact-box__label">Número de telefone e e-mail</h4>
                  <p class="contact-box__info">
                    <a href="tel:+244923232537">(+244) 923 232 537</a><a href="mailto:info@soerscorporation.ao">info@soerscorporation.ao</a>
                  </p>
                </div>
              </div>
              <div class="contact-box__item">
                <div class="contact-box__icon">
                  <i class="far fa-map-marker-alt"></i>
                </div>
                <div class="media-body">
                  <h4 class="contact-box__label">Endereço do nosso escritório</h4>
                  <p class="contact-box__info">
                    258 Dancing Street, Linha Miland, HUYI 21563, FrankFrut
                  </p>
                </div>
              </div>
              <div class="contact-box__item">
                <div class="contact-box__icon">
                  <i class="far fa-clock"></i>
                </div>
                <div class="media-body">
                  <h4 class="contact-box__label">Horário Oficial de Trabalho</h4>
                  <p class="contact-box__info">
                    7h00 - 18h00 (Seg - Sex) Sábado, Dom e Feriados Fechado
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-30">
            <div class="contact-box">
              <h3 class="contact-box__title h4">Deixe um recado</h3>
              <p class="contact-box__text">Estamos prontos para ajudá-lo</p>
              <form class="contact-box__form ajax-contact" action="mail.php" method="POST">
                <div class="row gx-20">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" id="name" placeholder="Seu nome" />
                    <i class="fal fa-user"></i>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" name="email" id="email" placeholder="Endereço de email" />
                    <i class="fal fa-envelope"></i>
                  </div>
                  <div class="col-12 form-group">
                    <select name="subject" id="subject">
                      <option selected="selected" disabled="disabled" hidden>
                        Selecione o assunto
                      </option>
                      <option value="Web Development">
                        Desenvolvimento web
                      </option>
                      <option value="UI Design">UI Design</option>
                      <option value="CMS Development">
                        Desenvolvimento de CMS
                      </option>
                      <option value="Theme Development">
                        Desenvolvimento de Tema
                      </option>
                      <option value="Wordpress Development">
                        Desenvolvimento Wordpress
                      </option>
                    </select>
                  </div>
                  <div class="col-12 form-group">
                    <textarea name="message" id="message" placeholder="Digite sua mensagem"></textarea>
                  </div>
                  <div class="col-12">
                    <button class="vs-btn">
                      Enviar mensagem<i class="far fa-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </form>
              <p class="form-messages mb-0 mt-3"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>