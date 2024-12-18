<!doctype html>
<html lang="PT-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <metaname="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="pag_inicial.css">
  <title>Farmácia KFBG</title>
</head>


<body>



  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="IMG/logo_farmacia.png" alt="Logo da Farmácia KFBG" width="150px" height="60px"
            style="margin-left: 10%;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"
          style="background-image: linear-gradient(60deg,#152d54,#345d9e); z-index: 2;">
          <form action="pesquisar_index.php" method="post" class="d-flex" role="search">
            <input class="form-control me-2" type="text" name="pesquisa" placeholder="O que você procura ?"
              aria-label="text">
            <select name="tipo">
              <option value="remedio">Remédios</option>
              <option value="produto">Produtos</option>
            </select>
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>

          </form>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 5%;">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Todas as Categorias</a>
              <ul class="dropdown-menu" style="background-image: linear-gradient(60deg,#152d54,#345d9e);">
                <li><a class="dropdown-item" href="#">Dermocosméticos</a></li>
                <li><a class="dropdown-item" href="#">Fitness e Nutrição</a></li>
                <li><a class="dropdown-item">Higiene e Beleza</a></li>
                <li><a class="dropdown-item" href="#">Mamães e Bebês</a></li>
                <li><a class="dropdown-item" href="#">Medicamentos e Saúde</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#" style="color: #fc2d2d;">Ofertas</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Medicamentos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Higiene e Beleza</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Mamães e Bebês</a></li>
            <li>
              <hr class="dropdown-divider" style="color: black; width: 100dp;">
            </li>
          </ul>
          <a class="link_log" href="login.html">Login</a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"
      style="margin: 0% 1% 0% 1%; margin-top: 0.5%;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="IMG/banner_cosmetico.png" class="d-block w-100" height="230pt" alt="...">
        </div>
        <div class="carousel-item">
          <img src="IMG/banner_remedios.png" class="d-block w-100" height="230pt" alt="...">
        </div>
        <div class="carousel-item">
          <img src="IMG/banner_cosmetico3.png" class="d-block w-100" height="230pt" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev" style="margin-left: -1%;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next" style="margin-right: -1%;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="image-container">
      <img src="IMG/creme.png" alt="Cremes">
      <img src="IMG/pasta.png" alt="Pastas">
      <img src="IMG/gilete.png" alt="Gilete">
      <img src="IMG/remedios.png" alt="Remedios">
      <img src="IMG/protetor.png" alt="Protetor">
      <img src="IMG/produtos.png" alt="Produtos de Bebê">
    </div>

    <div class="image-container2">
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/buscopam.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Dorflex <br> R$21,70</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/hidratante.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Hidratante<br> R$44,99</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/protex.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Protex <br> R$11,90</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/frauda.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Frauda Pamperes <br> R$64,59</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/pharmaton.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Pharmathon <br> R$48,90</p>
        </div>
      </div>
    </div>

    <h2 style="font-size: 18pt; margin-top: 3%; margin-left: 4%;">Remedios e Cosmeticos</h2>
    <div class="image-container2" style="margin-top: 2%;">
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/buscopam.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Dorflex <br> R$21,70</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/pharmaton.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Pharmathon <br> R$48,90</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/naldecon.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">Naldecon <br> R$25,90</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/seca acne.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Acnase <br> R$18,90</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/oleo.png" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p>Bioderma <br> R$39,99 </p>
        </div>
      </div>
    </div>

    <h2 style="font-size: 18pt; margin-top: 3%; margin-left: 4%;">Higiene e Banho</h2>
    <div class="image-container2" style="margin-top: 2%;">
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/shampoo.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">Shampoo<br> R$18,70</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/bebe.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">Kit Cuidados essenciais<br> R$35,90</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/protetor_2.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">Protetor solar <br> R$25,90</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/hidratante.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">Hidratante <br> R$44,99</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <a href="#"><img src="IMG/protex.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">Protex <br> R$11,90</p>
        </div>
      </div>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="margin: 3% 1% 0% 1%;">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="IMG/banner_cosmetico2.png" class="d-block w-100" height="230pt">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="IMG/banner_cosmetico4.png" class="d-block w-100" height="230pt">
        </div>
        <div class="carousel-item">
          <img src="IMG/banner_remedios2.png" class="d-block w-100" height="230pt">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </main>

  <footer>
    <p style="color: white; font-size: 15pt; margin: 2% 0% 0% 3%;">Nos encontre nas redes sociais e nas lojas de
      aplicativos :</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram"
      viewBox="0 0 16 16">
      <path
        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin"
      viewBox="0 0 16 16">
      <path
        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google-play"
      viewBox="0 0 16 16">
      <path
        d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055zM1 13.396V2.603L6.846 8zM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27" />
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple"
      viewBox="0 0 16 16">
      <path
        d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
      <path
        d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
    </svg>

    <div class="tel">
      <p>Fale com a KFBG : </p>
      <div class="aqui">
        <p>Televendas : 4002-8922 </p>
        <p style="margin-top: -0.7%;">Atendimento : 0800 275 1313</p>
      </div>
    </div>


  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>