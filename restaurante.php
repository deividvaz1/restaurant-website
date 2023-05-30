<?php 

if(isset($_POST['submit']))
{

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $data_problema = $_POST['data_problema'];
  $problema = $_POST['problema'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,data_problema,problema) 
  VALUES ('$nome','$email','$telefone','$data_problema','$problema')");

header("Location: {$_SERVER['REQUEST_URI']}");
exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasty</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="./assets/logo.png">
</head>
<body>

  <div class="header" id="header">
    <button onclick="toggleSidebar()" class="btn_icon_header">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="img_logo_header">
      <img src="./assets/logo.png" alt="Logo Food" class="img_logo_header">
    </div>
    <div class="navigation_header" id="navigation_header">
      <button class="btn_icon_header" onclick="toggleSidebar()">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x"
          viewBox="0 0 16 16">
          <path
            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
        </svg>
      </button>
      <a href="#">Início</a>
      <a href="#outros-servicos">Serviços</a>
      <a href="#cardapio">Cardápio</a>
      <a href="#sobre">Sobre</a>
      <a href="#" class="active" onclick="abrir('vis-modal')">Suporte</a>
      <div id="vis-modal" class="modal">
        <div class="conteudo-modal">
          <div class="cabecalho-modal">
            <h1 class="h1modal">Ajuda e Suporte</h1>
            <span class="modal-fechar" onclick="fechar('vis-modal')">X</span>
          </div>
          <div class="corpo-modal">
            <form action="restaurante.php" method="POST">
                <fieldset>
                    <br />
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required />
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br /><br />
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required />
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <br /><br />
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required />
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br />
                    <label for="data"><b>Data</b></label>
                    <input type="date" name="data_problema" value="data" id="datanasc" required />
                    <br /><br />
                    <section class="inputBox">
                        <input type="text" name="problema" id="problema" class="inputUser" required
                            style="width: 300px; height: 50px" />
                        <label for="problema" class="labelInput">Descrição do problema:</label>
                        <br />
                        <br />
                        <input type="submit" name="submit" id="submit" />
                    </section>
                </fieldset>
            </form>
        </div>
        </div>
      </div>

    </div>
  </div>
  
  
  <div class="swiper mySwiper" tabindex="0" onclick="closeSidebar()" id="swiper">
    <div class="swiper-wrapper" >

      <div class="card swiper-slide">
        <div class="card_image">
          <img src="./assets/prato1.png" alt="card image">
        </div>

        <div class="card_content">
          <span class="card_title">Salada de Peixe</span>
          <span class="card_name">Pedir Agora!</span>
          <p class="card_text">
            Sit esse quis itaque ut enim asperiores illum, quo delectus nulla, totam ex similique
            numquam? Facere, officiis? Debitis tempore consequatur dolor dolorum.</p>
          <button class="card_btn">Veja Mais</button>
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card_image">
          <img src="./assets/prato2.png" alt="card image">
        </div>

        <div class="card_content">
          <span class="card_title" style="align-items: center;">Salmão Grelhado </span>
          <span class="card_title" style="align-items: center;">Com Legumes e Arroz </span>

          <span class="card_name">Pedir Agora!</span>
          <p class="card_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Sit esse quis itaque ut enim asperiores illum, quo delectus nulla, totam ex similique
            numquam? Facere.</p>
          <button class="card_btn">Veja Mais</button>
        </div>
      </div>

      <div class="card swiper-slide">
        <div class="card_image">
          <img src="./assets/prato3.png" alt="card image">
        </div>

        <div class="card_content">
          <span class="card_title">Salada Saudável com Frango</span>
          <span class="card_name">Pedir Agora!</span>
          <p class="card_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Sit esse quis itaque ut enim asperiores illum, quo delectus nulla, totam ex similique
            numquam? Facere, officiis? Debitis tempore consequatur dolor dolorum.</p>
          <button class="card_btn">Veja Mais</button>
        </div>
      </div>


      <div class="description_offer">
        <p class="text_description">
          #1 DA SEMANA.<br><br>
          <span style="font-size: 26px;">COMA,</span><br>
          <span style="font-size: 26px;">SAUDÁVEL,</span><br>
          <span style="font-size: 26px;">SEJA SAUDÁVEL</span><br><br>
          Sit esse quis itaque ut enim<br> asperiores illum, quo<br> delectus nulla, totam ex<br> similique
          numquam? Facere,<br> officiis? Debitis tempore<br> consequatur dolor dolorum.
        </p>
        <button class="btn_order">COMPRE AGORA !</button>
      </div>
    </div>
  </div>

  <div id="outros-servicos" style="color: aliceblue; display: flex; justify-content: center; font-size: 35px; margin-bottom: 12%;">
    <p>OUTROS SERVIÇOS</p>
  </div>
  <div class="center" style="margin-bottom: 21%;">
    <div>
      <img src="./assets/customer-service1.png" alt="">
      <h1 style="font-size: 19px;">Atendimento 24h</h1>
      <p>Lorem ipsum dolor<br> sit amet consectetur.</p>
    </div>
    <div>
      <img src="./assets/fast-delivery1.png" alt="">
      <h1 style="font-size: 22px;">Entrega Rápida</h1>
      <p>Lorem ipsum dolor<br> sit amet consectetur.</p>
    </div>
    <div>
      <img src="./assets/food1.png" alt="">
      <h1 style="font-size: 19px;">Comida Saborosa</h1>
      <p>Lorem ipsum dolor<br> sit amet consectetur.</p>
    </div>
    <div>
      <img src="./assets/customer-service1.png" alt="">
      <h1 style="font-size: 19px;">Atendimento 24h</h1>
      <p>Lorem ipsum dolor<br> sit amet consectetur.</p>
    </div>
  </div>

  <div class="splash">
    <div id="cardapio" class="cardapio">
      <span style="font-weight: 400; font-size: 35px;">Especial do Chef</span><br><br><br><br>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-bottom: 2%;">
      <div class="foods" style="text-align: center;">
        <img src="./assets/pizza.png" alt="">
        <h1 style="font-size: 20px;">Pizza Napolitana</h1>
        <p style="font-weight: lighter;">Fast Food</p>
        <p style="font-weight: bold;">R$11.99</p>
        <button class="food_btn">
          <img src="./assets/cart-regular-24 1.png" alt="">
        </button>
      </div>

      <div class="foods" style="text-align: center;">
        <img src="./assets/hamburguer.png" alt="">
        <h1 style="font-size: 20px;">Hamburguer</h1>
        <p style="font-weight: lighter;">Fast Food</p>
        <p style="font-weight: bold;">R$8.99</p>
        <button class="food_btn">
          <img src="./assets/cart-regular-24 1.png" alt="">
        </button>
      </div>

      <div class="foods" style="text-align: center;">
        <img src="./assets/espaguete.png" alt="">
        <h1 style="font-size: 20px;">Espaguete</h1>
        <p style="font-weight: lighter;">Alimentação Saudável</p>
        <p style="font-weight: bold;">R$15.99</p>
        <button class="food_btn">
          <img src="./assets/cart-regular-24 1.png" alt="">
        </button>
      </div>
    </div>
  </div>

  <div
    style="color: aliceblue; display: flex; justify-content: center; align-items: center; flex-direction: column; margin-bottom: 5%; ">

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-bottom: 2%;">

      <div class="foods" style="text-align: center;">
        <img src="./assets/pizza-2.png" alt="">
        <h1 style="font-size: 20px;">Pizza de Peperonni</h1>
        <p style="font-weight: lighter;">Fast Food</p>
        <p style="font-weight: bold;">R$7.99</p>
        <button class="food_btn">
          <img src="./assets/cart-regular-24 1.png" alt="">
        </button>
      </div>

      <div class="foods" style="text-align: center;">
        <img src="./assets/salada-peixe.png" alt="">
        <h1 style="font-size: 20px;">Salada de Peixe</h1>
        <p style="font-weight: lighter;">Alimentação Saudável</p>
        <p style="font-weight: bold;">R$19.99</p>
        <button class="food_btn">
          <img src="./assets/cart-regular-24 1.png" alt="">
        </button>
      </div>

      <div class="foods" style="text-align: center;">
        <img src="./assets/pizza.png" alt="">
        <h1 style="font-size: 20px;">Neapolitan Pizza</h1>
        <p style="font-weight: lighter;">Fast Food</p>
        <p style="font-weight: bold;">R$11.99</p>
        <button class="food_btn">
          <img src="./assets/cart-regular-24 1.png" alt="">
        </button>
      </div>

    </div>
  </div>

  <div class="descount">
    <img src="./assets/discount-img 1.png" alt="" style="width: 180px; align-self: flex-start;">
    <div style="margin-top: -5%;">
      <h1>De Desconto</h1>
      <p>Nos Novos Produtos!</p>
    </div>
  </div>
  
  <section class="about-us">
    <div class="about-us-text" id="sobre">
      <h1>Sobre Nós</h1>
      <p>Sit esse quis itaque ut enim asperiores illum, quo delectus nulla, totam similique numquam? Facere, officiis? Debitis tempore consequatur dolor dolorum.</p>
    </div>
  </section>
  
 <script >
function abrir(carregarModal){
    console.log("Carregou : " + carregarModal)
    var modal = document.getElementById(carregarModal);

    modal.style.display = 'block'
    document.body.style.overflow = 'hidden';
}

function fechar(fechouModal) {
    console.log("fechou : " + fechouModal)

    let modal = document.getElementById(fechouModal);

    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}
 </script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js">
  </script>


  <!-- Initialize Swiper -->
  <script >
    var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  </script>

</body>
<script >
  var header = document.getElementById('header');
var navigation_header = document.getElementById('navigation_header');
var swiper = document.getElementById('swiper');
var showSidebar = false;

function toggleSidebar ()
{
    showSidebar = !showSidebar;
    console.log(showSidebar);
    if(showSidebar)
    {
        //true
        navigation_header.style.marginLeft = '-10vw';
        navigation_header.style.animationName = 'showSidebar';

    }
    else
    {
        navigation_header.style.marginLeft = '-100vw';
        navigation_header.style.animationName = '';

    }
}

function closeSidebar()
{
    if(showSidebar)
    {
        toggleSidebar();
    }
}

window.addEventListener('resize', function(event) {
    console.log('responsividade')
    if(window.innerWidth > 768 && showSidebar)
    {
        toggleSidebar();
    }
});
</script>


</html>