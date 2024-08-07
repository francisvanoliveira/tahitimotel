<?php include('config.php'); ?>

<!DOCTYPE html> 
<!--Site Tahiti Motel v 2022 1.6.36
Desenvolvedor: Francisvan Oliveira Pessoa
Empresa: GR7 Tecnologia
-->
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="oadRao9DapZYZ9xgEquhOCE0XMGmR_8n0Jr5wNmq3Os" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo INCLUDE_PATH; ?>icone/favicon-16x16.png" />
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style.css">
  <title>Tahiti Motel</title>

  <!-- SEO -->
  <meta name="description" content="GR7 Tecnologia">
  <meta name="author" content="GR7 Tecnologia">
  <meta name="keywords" content="GR7 Tecnologia"/>

  <link rel="alternate" href="" hreflang="pt-br" />
  <meta name="robots" content="index, follow">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta property="og:url" content="https://www.tahitimotel.com.br/" />
  <meta property="og:title" content="Tahiti Motel" />
  <meta property="og:image" content="https://www.tahitimotel.com.br/img/compartilha.jpg" />
  <meta property="og:description" content="O Tahiti Motel está todo preparado para lhe proporcionar uma estadia de qualidade. Queremos que experimente algo novo e inesquecível, unindo luxo, sofisticação e entretenimento" />
  <meta name="theme-color" content="#fe2813">

  <meta property="business:contact_data:country_name" content="Brasil" />
  <meta property="business:contact_data:website" content="https://www.tahitimotel.com.br/" />
  <meta property="business:contact_data:region" content="AM" />
  <meta property="business:contact_data:email" content="contato@tahitimotel.com.br" />
  <meta property="business:contact_data:phone_number" content="+55 92 98175-6235" />


  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="O Tahiti Motel está todo preparado para lhe proporcionar uma estadia de qualidade. Queremos que experimente algo novo e inesquecível, unindo luxo, sofisticação e entretenimento"/>
  <meta name="twitter:title" content="Tahiti Motel" />
  <meta name="twitter:image" content="https://www.tahitimotel.com.br/img/compartilha.jpg" />


  <meta name="geo.placename" content="Manaus" />
  <meta name="geo.region" content="BR" />
  <meta name="description" content="O Tahiti Motel está todo preparado para lhe proporcionar uma estadia de qualidade. Queremos que experimente algo novo e inesquecível, unindo luxo, sofisticação e entretenimento" />
  <link rel="canonical" href="https://www.tahitimotel.com.br/" />

  <meta property="og:type" content="website" />
  <meta property="og:locale" content="pt_BR" />
  <meta name="format-detection" content="telephone=no">
  <!-- SEO -->
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="logo">
          <a href="#inicio">
            <img src="<?php echo INCLUDE_PATH; ?>img/logo_tahiti.png" alt="Tahiti Motel">
          </a>
        </div>
        <div class="brand">
          <a href="#inicio">
            <h1>Tahiti Motel</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#inicio" data-after="Início">Início</a></li>
            <li><a href="#servicos" data-after="Serviços">Serviços</a></li>
            <li><a href="#suites" data-after="Suítes">Suítes</a></li>
            <li><a href="#cardapio" data-after="Cardápio">Cardápio</a></li>
            <li><a href="#contato" data-after="Contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero -->
  <section id="inicio">
    <div class="inicio container">
      <div class="texto-ini">
        <h1>Prazer! <span></span></h1>
        <h1>Descobrir novas experiências? <span></span></h1>
        <h1>Tahiti Motel <span></span></h1>
        <a href="https://api.whatsapp.com/send?phone=5592981756235" target="_blank" type="button" class="cta">Fale Conosco</a>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Serviços -->
  <section id="servicos">
    <div class="servicos container">
      <div class="servicos-topo">
        <h1 class="section-title">Serviços</h1>
        <p>O Tahiti Motel está todo preparado para lhe proporcionar uma estadia de qualidade. Queremos que experimente algo novo e inesquecível, unindo luxo, sofisticação e entretenimento. </p>
      </div>
      <div class="servicos-bottom">
        <div class="servicos-item">
          <h2>Wifi e SmarTV</h2>
          <p>Internet na suítes para você usar em seus dispositivos. Todas as nossas TV's são smart com acesso aos principais apps de streaming. **Não disponibilizamos contas de acesso.</p>
        </div>
        <div class="servicos-item">
          <h2>Suítes Temáticas</h2>
          <p>O Tahiti Motel é conhecido em Manaus por oferencer suítes temáticas que proporcionam uma imersão total para suas fantasias.</p>
        </div>
        <div class="servicos-item">
          <h2>Objetos Eróticos</h2>
          <p>Brinquedos eróticos para apimentar a sua diversão. **A utlização dos objetos é cobrado à parte, consulte sempre a recepção.</p>
        </div>
        <div class="servicos-item">
          <h2>Decoração</h2>
          <p>Quer fazer aquela surpresa para a pessoa amada? Prepraramos a suíte de acondo com seus pedidos. **Fale conosco e confira as condições.</p>
        </div>
        <div class="servicos-item">
          <h2>Cozinha</h2>
          <p>Deliciosas opções, café da manhã, lanches, almoço, sopas, pizzas e sobremesas. **Cozinha 24 horas.</p>
        </div>
        <div class="servicos-item">
          <h2>Drinks</h2>
          <p>Uma carta completa de bebidas, vinhos e drinks para deixar completo o seu momento especial.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- fim serviços -->

  <!-- Suites -->
  <section id="suites">
    <div class="suites container">
      <div class="suites-header">
        <h1 class="section-title">Suítes</h1>
      </div>
      <div class="opcao-suite bordadir">
        <div class="suite-item">
          <div class="suite-info bordadir">
            <h1>Tahiti</h1>
            <h2>Suíte com Piscina</h2>
            <h2>R$ 450,00 3 Horas</h2>
            <p>Piscina, SPA, sauna, boate, sala de TV e 2 quartos.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img bordaEsq imgTahiti">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/tahiti.jpeg" alt="Tahiti">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Niau Fetiche</h1>
            <h2>Suíte Temática</h2>
            <h2>R$ 390,00 3 Horas</h2>
            <p>Suíte temática 50 tons de cinza, síte duplex, piscina, boate e jacuzzi.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgNiauFet">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/niau_fetiche.jpeg" alt="Niau Fetiche">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Niau</h1>
            <h2>Suíte com Piscina</h2>
            <h2>R$ 350,00 3 Horas</h2>
            <p>Suíte duplex, piscina, boate, jacuzzi e pole dance.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgNiau">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/niau.jpeg" alt="Niau">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Bora-Bora</h1>
            <h2>Suíte com Piscina</h2>
            <h2>R$ 330,00 3 Horas</h2>
            <p>Piscina, banheira na área interna, tantra chair, e pole dance.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgBora">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/bora-bora.jpeg" alt="Bora-bora">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Manihi Fetiche</h1>
            <h2>Suíte Temática</h2>
            <h2>R$ 200,00 3 Horas</h2>
            <p>Suíte temática 50 tons de cinza e com hidro.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgManiniFet">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/manini_fetiche.jpeg" alt="Mini Fetiche">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Manihi</h1>
            <h2>Suíte com Banheira</h2>
            <h2>R$ 180,00 3 Horas</h2>
            <p>Banheira na área externa, tantra chair, futton.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgManini">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/manini.jpeg" alt="Mini Fetiche">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Papeete</h1>
            <h2>Suite com Hidro</h2>
            <h2>R$ 160,00 3 Horas</h2>
            <p>Banheira na área interna, tantra chair e pole dance.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgPapeete">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/papeete.jpeg" alt="Pappete">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info">
            <h1>Moorea</h1>
            <h2>Suite Luxo</h2>
            <h2>R$ 120,00 3 Horas</h2>
            <p>Mini-solarium.</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img imgMoorea">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/moorea.jpeg" alt="Moorea">
          </div>
        </div>
        <div class="suite-item">
          <div class="suite-info bordadirfim">
            <h1>Tikehau</h1>
            <h2>Suite Básica</h2>
            <h2>R$ 95,00 3 Horas</h2>
            <p>Solarium</p>
            <p>**Preço sujeito a alteração, sempre confirme antes na recepção.</p>
          </div>
          <div class="suite-img bordaEsqfim imgTikehau">
            <img src="<?php echo INCLUDE_PATH; ?>img/suites/tikehau.jpeg" alt="Tikehau">
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <!-- fim suite -->

  <!-- Cardapio -->
  <section id="cardapio">
    <div class="cardapio container">
      <div class="colu-esquerda">
        <div class="cardapio-img">
          <img src="<?php echo INCLUDE_PATH; ?>img/cardapio.jpg" alt="Cardápio Tahiti Motel">
        </div>
      </div>
      <div class="colu-direita">
        <h1 class="section-title">Cardápio</h1>
        <h2>Conheça nossos pratos e nossa carta de vinhos e drinks</h2>
        <p>Venha passar momentos especiais com a gente! O nosso cardápio foi preparado com muito amor para esses momentos.
          Escolhemos os melhores ingrediendes, ótimas receitas e boas opções de drinks, combinação perfeita para esse momento ser apaixonante com quem você ama.

        </p>
        <a href="<?php echo INCLUDE_PATH; ?>cardapio.pdf" target="_blank" class="cta">Veja Aqui</a>
      </div>
    </div>
  </section>
  <!-- fim cardapio -->

  <!-- Contato -->
  <section id="contato">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contato</h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <a href="https://api.whatsapp.com/send?phone=5592981756235" target="_blank">
              <h1>WhatsApp</h1>
              <h2>+55 92 98175-6235</h2>
            </a>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>E-mail</h1>
            <h2>contato@tahitimotel.com.br</h2>
          </div>
        </div>
        <div class="contact-item local">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1 class=>Endereço</h1>
            <h2>Estrada da Ponta Negra, 4919, Ponta Negra, Manaus-AM 69037-000</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Fim contato -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1>Tahiti Motel</h1>
      </div>
      <h2>O local ideal para suas aventuras prazerosas!</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/tahitimotelmanaus" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/tahitimotel/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
      </div>
      <div class="dev">
        <p>Copyright &copy; 2022, Tahiti Motel - Todos os diretos reservados | Desenvolvido por <a href="https://www.gr7tecnologia.com.br/" target="_blank">GR7 Tecnologia</a></p>
      </div>
    </div>
  </section>
  <!-- Fim footer -->

  <div id="modal-localizacao" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h1>Localização</h1>
      <iframe class="mapagoogle" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0570013535894!2d-60.078938184650745!3d-3.0794581410806208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c1019ade9f12b%3A0xb11f39c7c3ac93a8!2sTahiti%20Motel!5e0!3m2!1spt-BR!2sbr!4v1622051766399!5m2!1spt-BR!2sbr" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      <h3><i class="fa fa-map-marker"></i> Estrada da Ponta Negra, 4919, Ponta Negra, Manaus-AM 69037-000</h3>
      <div class="locale">
        <a class="btnuber" href="https://m.uber.com/ul/?action=setPickup&client_id=hdW9LTbe060JrtcY0hW0GiRTpm2rTsy-&pickup=my_location&dropoff[formatted_address]=Tahiti%20Motel%20-%20Estr.%20da%20Ponta%20Negra%20-%20Ponta%20Negra%2C%20Manaus%20-%20AM%2C%20Brasil&dropoff[latitude]=-3.079464&dropoff[longitude]=-60.076749">UBER</a>
        <a class="btnwaze" href="https://ul.waze.com/ul?place=ChIJK_HprRkQbJIRqJOsw8c5H7E&ll=-3.07946350%2C-60.07674950&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location">WAZE</a> 
      </div>
    </div>
  </div>

  <!--Modal para slide imagens suítes-->
  <div id="modal-tahiti" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Tahiti</h2>
      <div class="box">
        <div class="box-image slideTahiti"><img src="<?php echo INCLUDE_PATH; ?>img/suites/tahiti.jpeg" alt=""></div>
        <div class="box-image slideTahiti"><img src="<?php echo INCLUDE_PATH; ?>img/suites/tahiti2.jpeg" alt=""></div>
        <div class="box-image slideTahiti"><img src="<?php echo INCLUDE_PATH; ?>img/suites/tahiti3.jpeg" alt=""></div>
      </div>
    </div>
  </div>

  <div id="modal-niau-fet" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Niau Fetiche</h2>
      <div class="box">
        <div class="box-image slideNiauFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau_fetiche/niau_fetiche.jpeg" alt=""></div>
        <div class="box-image slideNiauFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau_fetiche/niau_fetiche1.jpeg" alt=""></div>
        <div class="box-image slideNiauFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau_fetiche/niau_fetiche2.jpeg" alt=""></div>
        <div class="box-image slideNiauFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau_fetiche/niau_fetiche3.jpeg" alt=""></div>
        <div class="box-image slideNiauFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau_fetiche/niau_fetiche4.jpeg" alt=""></div>
      </div>     
    </div>
  </div>

  <div id="modal-niau" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Niau</h2>
      <div class="box">
        <div class="box-image slideNiau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau/niau.jpeg" alt=""></div>
        <div class="box-image slideNiau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau/niau1.jpeg" alt=""></div>
        <div class="box-image slideNiau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau/niau2.jpeg" alt=""></div>
        <div class="box-image slideNiau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau/niau3.jpeg" alt=""></div>
        <div class="box-image slideNiau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau/niau4.jpeg" alt=""></div>
        <div class="box-image slideNiau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/niau/niau5.jpeg" alt=""></div>
      </div>      
    </div>
  </div>

  <div id="modal-bora" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Bora-Bora</h2>
      <div class="box">
        <div class="box-image slideBora"><img src="<?php echo INCLUDE_PATH; ?>img/suites/bora/bora.jpeg" alt=""></div>
        <div class="box-image slideBora"><img src="<?php echo INCLUDE_PATH; ?>img/suites/bora/bora1.jpeg" alt=""></div>
        <div class="box-image slideBora"><img src="<?php echo INCLUDE_PATH; ?>img/suites/bora/bora2.jpeg" alt=""></div>
        <div class="box-image slideBora"><img src="<?php echo INCLUDE_PATH; ?>img/suites/bora/bora3.jpeg" alt=""></div>
      </div>        
    </div>
  </div>

  <div id="modal-manini-fet" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Manihi Fetiche</h2>
      <div class="box">
        <div class="box-image slideManihiFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi_fetiche/manihi_fetiche.jpeg" alt=""></div>
        <div class="box-image slideManihiFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi_fetiche/manihi_fetiche1.jpeg" alt=""></div>
        <div class="box-image slideManihiFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi_fetiche/manihi_fetiche2.jpeg" alt=""></div>
        <div class="box-image slideManihiFet"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi_fetiche/manihi_fetiche3.jpeg" alt=""></div>
      </div>
    </div>
  </div>

  <div id="modal-manini" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Manihi</h2>
      <div class="box">
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi.jpeg" alt=""></div>
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi1.jpeg" alt=""></div>
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi2.jpeg" alt=""></div>
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi3.jpeg" alt=""></div>
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi4.jpeg" alt=""></div>
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi5.jpeg" alt=""></div>
        <div class="box-image slideManihi"><img src="<?php echo INCLUDE_PATH; ?>img/suites/manihi/manihi6.jpeg" alt=""></div>
      </div>      
    </div>
  </div>

  <div id="modal-papeete" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Papeete</h2>
      <div class="box">
        <div class="box-image slidePapeete"><img src="<?php echo INCLUDE_PATH; ?>img/suites/papeete/papeete.jpeg" alt=""></div>
        <div class="box-image slidePapeete"><img src="<?php echo INCLUDE_PATH; ?>img/suites/papeete/papeete2.jpeg" alt=""></div>
        <div class="box-image slidePapeete"><img src="<?php echo INCLUDE_PATH; ?>img/suites/papeete/papeete3.jpeg" alt=""></div>
      </div>
    </div>
  </div>

  <div id="modal-moorea" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Moorea</h2>
      <div class="box">
        <div class="box-image slideMoorea"><img src="<?php echo INCLUDE_PATH; ?>img/suites/moorea/moorea.jpeg" alt=""></div>
        <div class="box-image slideMoorea"><img src="<?php echo INCLUDE_PATH; ?>img/suites/moorea/moorea1.jpeg" alt=""></div>
        <div class="box-image slideMoorea"><img src="<?php echo INCLUDE_PATH; ?>img/suites/moorea/moorea2.jpeg" alt=""></div>
        <div class="box-image slideMoorea"><img src="<?php echo INCLUDE_PATH; ?>img/suites/moorea/moorea3.jpeg" alt=""></div>
        <div class="box-image slideMoorea"><img src="<?php echo INCLUDE_PATH; ?>img/suites/moorea/moorea4.jpeg" alt=""></div>
      </div>
    </div>
  </div>

  <div id="modal-tikehau" class="modal-container">
    <div class="modal">
      <button class="fechar">x</button>
      <h2 class="tituloSlide">Fotos Suíte Tikehau</h2>
      <div class="box">
        <div class="box-image slideTikehau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/tikehau/tikehau.jpeg" alt=""></div>
        <div class="box-image slideTikehau"><img src="<?php echo INCLUDE_PATH; ?>img/suites/tikehau/tikehau2.jpeg" alt=""></div>
      </div>
    </div>
  </div>
  <!--Fim Modal para slide imagens suítes-->

  <a href="https://api.whatsapp.com/send?phone=5592981756235" target="_blank" id="link-whatsapp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <div class="cookie-container">
    <p>
      Utilizamos cookies e tecnologia para aprimorar sua experiência de navegação de acordo com o Aviso de Privacidade.
      <a href="<?php echo INCLUDE_PATH; ?>privacidade.html" target="_blank">Política de Privacidade</a> e <a href="<?php echo INCLUDE_PATH; ?>termodeuso.html" target="_blank">Termo de Uso</a>.
    </p>
   
    <div class="btn">
      <button class="cookie-btn">
        Aceito
      </button>
    </div>
  </div>
  
  <script src="<?php echo INCLUDE_PATH; ?>app.js"></script>
</body>

</html>