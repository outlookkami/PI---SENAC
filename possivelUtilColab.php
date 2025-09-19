<?php if ($result-> num_rows > 0 ): ?>
    <?php while($row = $result -> fetch_assoc()):?>
            <table class="TableEventos" id="TableEventos">
                <tr>
                    <td class="imagensIlustrativasEventos"><?= $row['imagem_evento']?></td>
                </tr>
                <tr class="tituloTag">
                    <td>
                        <h4><?= $row['titulo_evento']?></h4>
                    </td>
                    <td class="tag"><?= $row['tag_evento']?></td>
                </tr>
                <tr>
                    <td>
                        <p><?= $row['descricao_evento']?></p>
                    </td>
                </tr>
                <tr>
                    <td class="IconesEventos" id="data_evento"><img class="calendariop" src="assets/calendariop.png" alt="ícone calendário"><?= $row['data_evento']?></td>
                </tr>
                <tr>
                    <td id="horario_evento"><img class="relogio" src="assets/relogio.png" alt="ícone relógio"><?= $row['horario_evento']?></td>
                </tr>
                <tr>
                    <td id="local_evento"><img class="IconesEventos" src="assets/mapa.png" alt="ícone mapa"><?= $row['local_evento']?></td>
                </tr>
                <tr>
                    <td><button class="ConfirmarPresença">Confirmar Presença</button></td>
                </tr>
            </table>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum evento encontrado.</p>
        <?php endif; ?>