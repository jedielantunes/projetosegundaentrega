<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page With Light/Dark Mode</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="background">
        <header>
            <div class="logo">
                <img src="img/logo_laranja.jpeg" alt ="logo_laranja">
             </div><!--logo-->

             <ul class="links">
                <li><a href="Index.php"> Inicio</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#planos">Planos</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#clientes">Avaliação</a></li>

             
             </ul>
             <div class="C-icone">
                <span class="Icone"><ion-icon name="search-outline"></ion-icon></span>
                <span class="Icone"><ion-icon name="cart-outline"></ion-icon></span>

             </div><!--C-icon-->
        </header>
        <hr>

        <div class="C-title">
            <div class="title">
                <h1>"4All</h1>
                <h1>Entregas"</h1>
                <br><br>
                <br><br>
            </div><!--title-->
            <P></P>

            <form action="testeL.php" method="POST">

            <input type="text" name="email" placeholder="Email">
            <label for="EMAIL"> EMAIL</label>

            <br><br>
            <input type="password" name="senha" placeholder=" Senha">
            <label for="usuário"> Senha</label>

            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            
                </form>

                <br><br>
                <p> Não tem uma conta?
                  <a href="formulario.php" > Cadastre-se </a>
                </p>
        </div><!--C-title-->
    </div><!--background-->

    <Section id="sobre" class="section-1">
     <h1><span>SOBRE</span> NÓS</h1>

      <div  class="Sobre-nós">
        <div class="sobre-img">
          <img src="img/apresent4All.png" alt="sobre">
        </div><!--sobre-img-->

        <div class="Sobre-nois-title">
          <h2>O que faz nosso aplicativo ?</h2>
          <p>Hoje em dia muitas pessoas não trabalham em casa ou podem trabalhar no turno da noite, até mesmo trabalhar em outras cidades, ficando 100% do tempo ausente de casa, nesse intuito criamos 4All Entregas.  Nossa ideia consiste em que seus destinatários tenham um ponto fixo para receber suas encomendas, ao invés deles cadastrarem seu endereço de casa, eles cadastram o endereço do nosso deposito e após isso, elas são entregues no endereço passado pelo cliente ou podem ser retiradas pessoalmente, tudo isso sendo feito por telefone ou por nosso aplicativo. </p>
          <button>Compre Agora</button>


        </div><!--Sobre-nois-title-->

      </div><!--Sobre-nós-->

    </Section><!---section-1-->

    <section id="planos" class="section-2">
       <h1>NOSSOS<span> PLANOS</span></h1>

       <div class="Container-card-1">

        <div class="card-img">
          <img src="img/basic.jpg" alt="menu">
          <h3>Basic</h3>
          <p></p> <span></span>
          <button>add carrinho</button>
        </div><!--card-img-->

        <div class="card-img">
          <img src="img/delivery.jpg" alt="menu">
          <h3>Plus</h3>
          <p></p> <span></span>
          <button>add carrinho</button>
        </div><!--card-img-->

        <div class="card-img">
          <img src="img/power.jpg" alt="menu">
          <h3>Mega Plus</h3>
          <p></p> <span></span>
          <button>add carrinho</button>
        </div><!--card-img-->

       </div><!--Container-card-1-->


    </section><!--section-2-->

    <section id="produtos" class="section-3">
      <h1>NOSSOS <span>PRODUTOS</span></h1>

      <div class="c-card">

        <div class="cards">
          <div class="icones">
            <a href="#"><ion-icon name="cart-outline"></ion-icon></a>
            <a href="#"><ion-icon name="heart-outline"></ion-icon></a>
            <a href="#"><ion-icon name="eye-outline"></ion-icon></a>
          </div><!--icones-->
          <div><img src="img/Plano Basic.png" alt="produto"></div>
          <div class="title-produtos">
            <h3>"Você Retira"</h3>
            <div class="star">
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-half-outline"></ion-icon></a>
            </div><!--star-->
            <div class="price"> <span></span></div>
          </div><!--title-produtos-->
        </div><!--cards-->

        <div class="cards">
          <div class="icones">
            <a href="#"><ion-icon name="cart-outline"></ion-icon></a>
            <a href="#"><ion-icon name="heart-outline"></ion-icon></a>
            <a href="#"><ion-icon name="eye-outline"></ion-icon></a>
          </div><!--icones-->
          <div><img src="img/Plano Plus.png" alt="produto"></div>
          <div class="title-produtos">
            <h3>"Nós Entregamos ou Você Retira!!!"</h3>
            <div class="star">
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-half-outline"></ion-icon></a>
            </div><!--star-->
            <div class="price"> <span></span></div>
          </div><!--title-produtos-->
        </div><!--cards-->

        <div class="cards">
          <div class="icones">
            <a href="#"><ion-icon name="cart-outline"></ion-icon></a>
            <a href="#"><ion-icon name="heart-outline"></ion-icon></a>
            <a href="#"><ion-icon name="eye-outline"></ion-icon></a>
          </div><!--icones-->
          <div><img src="img/Plano Mega Plus.png" alt="produto"></div>
          <div class="title-produtos">
            <h3>"Entregamos, Você Retira ou Alocado no Armário!"</h3>
            <div class="star">
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-outline"></ion-icon></a>
              <a href="#"><ion-icon name="star-half-outline"></ion-icon></a>
            </div><!--star-->
            <div class="price"><span></span></div>
          </div><!--title-produtos-->
        </div><!--cards-->
      </div><!--C-card-->
    </section><!--section-3-->

    <section id="clientes" class="section-4">

      <h1>ANALISE DOS <span>CLIENTES</span></h1>

      <div class="container-clientes">

        <div class="c">
          <div class="info-img">
            <img src="img/quote-img.png" alt="info">
          </div><!--info-img-->
          <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Animi Nulla Sit Libero Nemo Fuga Sequi Nobis? Necessitatibus Aut Laborum, Nisi Quas Eaque Laudantium Consequuntur Iste Ex Aliquam Minus Vel? Nemo.</p>
          <img src="img/ErickSodre2.jpg" alt="pic-1">
          <h4>John deo</h4>
          <div class="star">
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-half-outline"></ion-icon></a>
          </div><!--star-->
        </div><!--paragrafo-->

        <div class="paragrafo">
          <div class="info-img">
            <img src="img/quote-img.png" alt="info">
          </div><!--info-img-->
          <p>Isabela mora em São Paulo, trabalha como coordenadora em uma empresa de tecnologia, é extremamente ocupada encontrou no app 4All Entregas a possibildiade de receber suas compras dentro da sua realidade de vida diária!</p>
          <img src="img/pic-2.png" alt="pic-2">
          <h4>Isabela Moraes</h4>
          <div class="star">
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-half-outline"></ion-icon></a>
          </div><!--star-->
        </div><!--paragrafo-->

        <div class="paragrafo">
          <div class="info-img">
            <img src="img/quote-img.png" alt="info">
          </div><!--info-img-->
          <p>Lucio trabalha viajando por todo o Brasil e encontrou no app a oportunidade de locar as suas compras e buscar no momento que quiser!!!</p>
          <img src="img/pic-3.png" alt="pic-3">
          <h4>Lucio TI ADS Senac</h4>
          <div class="star">
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-outline"></ion-icon></a>
            <a href="#"><ion-icon name="star-half-outline"></ion-icon></a>
          </div><!--star-->
        </div><!--paragrafo-->


      </div><!--container-clientes-->

    </section><!--section-4-->




 

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>

