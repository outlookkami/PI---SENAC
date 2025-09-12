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

<?php


?>