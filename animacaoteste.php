<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  /* margin: 0;
  height: 100vh;
  display: flex;
  justify-content: flex-start; 
  align-items: stretch; 
  overflow: hidden;
  background-color: #f0f0f0;
  position: relative;  */
}

.bolha {
  position: absolute; 
  top: 0;
  left: 0;
  width: 50px;
  height: 50px;
  background-image: linear-gradient(to bottom, #000F55, #6C0034);
  background-repeat: no-repeat;
  background-size: 100% 100%;
  border-radius: 50%;
  transform: scale(0);
    animation: expandir 0.5s forwards, reduzir 2s 0.5s forwards;
}

@keyframes expandir {
  0% {
    transform: scale(0);
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
  100% {
    transform: scale(1);
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
}

@keyframes reduzir {
  0% {
    width: 50px;
    height: 50px;
    transform: scale(1);
    border-radius: 50%;
  }
  100% {
    width: 50vw;
    height: 100vh;
    transform: scale(1);
    border-radius: 0;
  }
}

.texto {
  opacity: 0;
  font-size: 2rem;
  color: yellowgreen;
  position: absolute;
  /* left: 10%; 
  top: 50%; */
  transform: translateY(-50%);
  animation: aparecer 0.5s forwards;
  animation-delay: 3s; 
  padding: 10px;
}

@keyframes aparecer {
  to {
    opacity: 1;
  }
}
</style>
</head>
<body>
  <div class="bolha"></div>
  <div class="texto">Olá! Eu apareço depois da animação</div>
</body>
</html>
