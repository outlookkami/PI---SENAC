<!-- script para o banco
 
CREATE TABLE calendario_eventos (
    id_evento int(11) NOT NULL AUTO_INCREMENT,
    titulo_evento varchar(255) utf8_unicode_ci  NOT NULL,
    descricao_evento text utf8_unicode_ci NOT NULL,
    local_evento varchar(255) utf8_unicode_ci DEFAULT NULL,
    categoria_evento varchar(100) DEFAULT NULL,
    data_inicio_evento date NOT NULL,
    horario_evento time NOT NULL,
    google_calendar_event_id varchar(255) DEFAULT NULL,
    data_criacao datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id_evento)
);
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
</head>
<body>

    <div class="ProximosEventos">
        <table class="TableEventos">
            <tr>
                <td><img class="imagensIlustrativasEventos" src="assets/reunião estratégica-pexels.jpg" width="420" alt="Imagem da reunião"></td>
            </tr>
            <tr>
                <td>
                    <h4>Reunião Estratégica Q4</h4>
                </td>
                <td><!-- Tag indicando que é uma Reunião --></td>
            </tr>
            <tr>
                <td>
                    <p>Planejamento e revisão de metas para o último trimestre do ano.</p>
                </td>
            </tr>
            <tr>
                <td><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário"> 15 de Dezembro, 2025</td>
            </tr>
            <tr>
                <td><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 09:00 - 17:00</td>
            </tr>
            <tr>
                <td><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Auditório Principal</td>
            </tr>
            <tr>
                <td> 25 confirmados</td>
            </tr>
            <tr>
                <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
            </tr>
        </table>

        <table class="TableEventos">
            <tr>
                <td><img class="imagensIlustrativasEventos" src="assets/workshop de inovação - pexels.jpg" width="400" alt="Workshop de inovação"></td>
            </tr>
            <tr>
                <td>
                    <h4>Workshop de inovação</h4>
                </td>
                <td><!-- Tag indicando que é um treinamento--></td>
            </tr>
            <tr>
                <td>
                    <p>Metodologias ágeis e design thinking para projetos inovadores.</p>
                </td>
            </tr>
            <tr>
                <td class="IconesEventos"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário">18 de Dezembro, 2025</td>
            </tr>
            <tr>
                <td><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 14:00 - 16:00</td>
            </tr>
            <tr>
                <td><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Sala de conferência A</td>
            </tr>
            <tr>
                <td> +12 confirmados</td>
            </tr>
            <tr>
                <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
            </tr>
        </table>

        <table class="TableEventos" id="TableEventos">
            <tr>
                <td><img class="imagensIlustrativasEventos" src="assets/festa de fim de ano-pexels.jpg" alt="Festa de Fim de Ano"></td>
            </tr>
            <tr>
                <td>
                    <h4>Festa de fim de ano</h4>
                </td>
                <td><!-- Tag indicando que é um evento Social--></td>
            </tr>
            <tr>
                <td>
                    <p>Celebração anual com toda a equipe, premiações, e confraternização.</p>
                </td>
            </tr>
            <tr>
                <td><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário">22 de Dezembro, 2025</td>
            </tr>
            <tr>
                <td><img class="relogio" src="assets/relogio.png" alt="ícone relógio"> 18:00 - 22:00</td>
            </tr>
            <tr>
                <td><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa">Salão de Eventos</td>
            </tr>
            <tr>
                <td> 87 confirmados</td>
            </tr>
            <tr>
                <td><button class="PresençaConfirmada">Presença Confirmada</button></td>
            </tr>
        </table>
    </div>


    <script>

        
    </script>
</body>
</html>


<?php


?>