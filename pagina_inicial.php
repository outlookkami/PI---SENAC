<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HeyEvent | Eventos Corporativos</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="assets\Icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:wght@400;600&display=swap"
        rel="stylesheet">
</head>
<body>

<header>
  <div class="container">
    <div class="logo-container">
      <img class="logo_heyevent" src="assets/Logo HeyEvent Ofc.png" alt="Logo HeyEvent">
      <h1 class="logo">HeyEvent</h1>
    </div>
    <nav class="menu">
      <a href="Sobrenos.php">Sobre</a>
      <a href="contato.php">Contato</a>
      <a class="entrar" href="Login.php"><button>Entrar</button></a>
    </nav>
  </div>
</header>

  <section>
    <div class="container conteudo">
      <div class="texto">
        <h2>Transforme a forma como sua empresa organiza eventos.</h2>
        <p>Na HeyEvent, combinamos tecnologia e inovação para facilitar a organização e a comunicação em eventos empresariais.</p>
        <a href="cadastro.php"><button>Começar Agora</button></a>
      </div>
      <img src="https://cdn.dribbble.com/users/1162077/screenshots/3848914/programmer.gif" alt="Tecnologia" >
    </div>
  </section>

  <section class="servicos">
    <h3>Nossos Serviços</h3>
    <div class="container servicos-lista">
      <div class="card-servico">
        <img src="assets\organizacao.png" alt="Organização">
        <h4>Organização Inteligente</h4>
        <p>Centralize informações, datas e participantes em um único lugar. Planeje, comunique e execute eventos corporativos com praticidade e eficiência.</p>
      </div>
      <div class="card-servico">
        <img src="assets\saas.png" alt="Evolução">
        <h4>Evolução Contínua</h4>
        <p>Nossa proposta vai além: evoluir para um sistema SaaS (Software como Serviço), garantindo escalabilidade e inovação constante.</p>
      </div>
      <div class="card-servico">
        <img src="assets\engajamento.png" alt="Engajamento">
        <h4>Conexão e Engajamento</h4>
        <p>Fortaleça a comunicação entre equipes, incentive a participação e mantenha todos informados sobre os próximos eventos da empresa.</p>
      </div>
    </div>
  </section>

  <section class="depoimentos">
    <h3>O que dizem nossos clientes</h3>
    <div class="depoimentos-lista">
      <div class="div-depoimento">
        <p>“A HeyEvent transformou completamente a forma como organizamos nossos eventos internos. Tudo ficou mais prático e visualmente incrível!”</p>
        <span>— Mariana Alves, Gerente de RH da NexaCorp</span>
      </div>
      <div class="div-depoimento">
        <p>“Agora conseguimos comunicar e gerenciar nossos eventos com muito mais eficiência. A equipe adorou a experiência!”</p>
        <span>— Ricardo Lima, Coordenador de Comunicação da Grupo Vectra</span>
      </div>
    </div>
  </section>

  <footer >
    <div class="container">
      <p>© 2025 HeyEvent. Todos os direitos reservados.</p>
      <div class="links-footer">
        <a href="privacidade_seguranca.php">Privacidade</a>
        <a href="termos_privacidade.php">Termos de Uso</a>
      </div>
    </div>
  </footer>

  <style>
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background-color: #ffffff;
  color: #333;
  line-height: 1.6; 
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
}

header {
  background-color: #fff;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  position: sticky;
  top: 0;
  z-index: 100;
}

header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 0;
}

.logo-container {
  display: flex;
  align-items: center;
  gap: 10px;
}
.logo-container img {
  width: 45px;
  height: auto;
  margin-left: 0;
}



.logo {
  font-family: "Quicksand", sans-serif;
  color: #050065ff;
  font-weight: 700;
  font-size: 1.5rem;
}

.menu a {
  text-decoration: none;
  color: #333;
  margin: 0 1rem;
  transition: color 0.3s;
}

.menu a:hover {
  color: #6C63FF;
}


button{
  background: linear-gradient(90deg, rgba(6, 0, 113, 1));
  color: #fff;
  border: none;
  padding: 0.6rem 1.4rem;
  border-radius: 25px;
  cursor: pointer;
  transition: transform 0.3s ease;
}

button:hover {
  transform: scale(1.05);
}

.conteudo {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
}
.conteudo img{
  width: 450px;
  max-width: 100%;  
}

.texto {
  flex: 1;
}

.texto h2 {
  font-size: 2.5rem;
  color: #222;
  margin-bottom: 1rem;
}

.texto p {
  font-size: 1rem;
  margin-bottom: 1.5rem;
  color: #555;
}


.servicos {
  padding: 4rem 0;
  text-align: center;
}

.servicos h3 {
  font-size: 2rem;
  margin-bottom: 2rem;
}

.servicos-lista {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
  justify-content: center;
}

.card-servico {
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  padding: 2rem;
  max-width: 320px;
  transition: transform 0.3s;
}

.card-servico:hover {
  transform: translateY(-8px);
}

.card-servico img {
  width: 60px;
  margin-bottom: 1rem;
}

.card-servico h4 {
  color: #4F46E5;
  margin-bottom: 0.5rem;
}

.depoimentos {
  background-color: #f8f9ff;
  padding: 4rem 0;
  text-align: center;
}

.depoimentos h3 {
  font-size: 2rem;
  margin-bottom: 2rem;
}

.depoimentos-lista {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center;
}

.div-depoimento {
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  padding: 2rem;
  max-width: 450px;
  font-style: italic;
}

footer {
  background-color: #111;
  color: #fff;
  padding: 2rem 0;
  text-align: center;
}

.links-footer a {
  color: #bbb;
  margin: 0 10px;
  text-decoration: none;
}

.links-footer a:hover {
  color: #fff;
}

@media (max-width: 768px) {
  .conteudo {
    flex-direction: column;
    text-align: center;
  }
  .menu a {
    margin: 0 0.5rem;
  }
}

  </style>
</body>
</html>
