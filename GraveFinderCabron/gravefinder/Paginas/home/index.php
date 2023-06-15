<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <title>Inicio</title>
</head>
<body>
  <!-- Header -->
  <header>
    <!-- Navbar -->
    <nav class="nav-container">
      <div class="a-container">
        <a href="#" class="a-menu">Inicio</a>
        <a href="../buscador/index.php" class="a-menu">Elegir Cementerio</a>
        <a href="../Contacto/index.html" class="a-menu">Contacto</a>
        <a href="../Tarjeta/index.html" class="a-menu">Tarjeta</a>
      </div>
      <div class="logo-container"><img class="img-logo" src="img/GRAVE.png" alt="logo"></div>
    </nav>    
  </header>
  <!-- Eslogan -->
  <section id="home">
    <div class="home-container">
      <div class="home-text">
        <h1>Encuentra su tumba, <br>
            no pierdas el recuerdo</h1>
      </div>
    </div>
  </section>
  <!-- Elegir Cementerio -->
  <main>
    <div class="cementerio" id="cementerio">
      <div>
        <h2 class="title">Elige un Cementerio</h2>
        <div class="cementerio-main">
          <div class="cementerio-text">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut harum excepturi eveniet doloremque provident pariatur, beatae ratione quod quam dolorem sed nobis ullam consequuntur vitae tempore obcaecati eaque ex omnis?</p>
            <div class="busqueda">
              <form action="../buscador/index.php" method="post" class="form-busqueda">
                <input type="text" class="text-busqueda" placeholder="Nombre del Cementerio" name="cementerio">
                <input type="submit"class="submit-busqueda" value="Buscar"> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Sobre nosotros -->
  <div class="about" id="about">
         <h2 class="title"> Quienes Somos</h2>

         <div class="card">
           <div class="card-list">
              <div class="card-image">
                <img src="img/fuegito.jpeg" alt="Photo by Anastase Maragos | Unsplash"/>
              </div>
              <div class="card-text"> 
                <h4>David fuegito</h4>
                <p>No sé que hace</p>
                <a href="#join">
                  <button class="w3-btn w3-red w3-margin-top w3-round" style="width:100%">Join</button>
                </a>

              </div>
           </div>
           <div class="card-list">
            <div class="card-image">
              <img src="img/presi.jpeg" alt="Photo by Sergio Pedemonte | Unsplash"/>
            </div>
            <div class="card-text"> 
              <h4>Pablo Presi</h4>
              <p>Frontend</p>
              <a href="#join">
                <button class="w3-btn w3-red w3-margin-top w3-round" style="width:100%">Join</button>
              </a>
            </div>

           </div>
           <div class="card-list"><div class="card-image">
            <img src="img/rangel.jpeg" alt="Photo by Spencer Davis | Unsplash"
            />
          </div>
          <div class="card-text"> 
            <h4>Juancho Rangel</h4>
            <p>Backend</p>
            <a href="#join">
              <button class="w3-btn w3-red w3-margin-top w3-round" style="width:100%">Join</button>
            </a>

          </div>

           </div>
         </div>
      </div>

</body>
</html>