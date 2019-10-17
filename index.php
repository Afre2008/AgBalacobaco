<?php require_once('header.php'); ?>


    <section id="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/Balacobaco-logo.png" alt="Primeiro Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/Balacobaco-logo.png" alt="Segundo Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/Balacobaco-logo.png" alt="Terceiro Slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
    </section>
    <section id="servicos">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="mb-5">Serviços</h2>

          </div>

        </div>
        <div class="row">
          <?php listarservicos(); ?>
        </div>
      </div>

    </section>
    <section id="sobre">
      <div class="container">
        <div class="row">
          <div class="col">
            <img src="img/Balacobaco-logo.png" class="img-fluid" alt="">
          </div>
          <div class="col">
            <h2>Sobre</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae molestias sunt voluptatem saepe sit pariatur, perspiciatis nesciunt cupiditate, aut aliquam magnam alias assumenda suscipit laborum debitis consequuntur hic. Quia, nulla?</p>
          </div>
        </div>
      </div>
    </section>
    <section class="blog">
      <div class="row">

      </div>

    </section>
    <section id="contato">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Entre em contato</h2>
            <form>
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <input type="text" class="form-control" id="mensagem">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary">enviar</button>
                  </div>
              </form>
          </div>
          <div class="col">
            <h2>Mapa</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0509766002706!2d-46.67744558554189!3d-23.60250466899689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7e792ef9%3A0x1eaad4d76eaaf389!2sAv.%20Dr.%20Cardoso%20de%20Melo%2C%2090%20-%20Vila%20Ol%C3%ADmpia%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1569681999674!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>          </div>
        </div>
      </div>
    </section>



    <?php require_once('footer.php'); ?>


