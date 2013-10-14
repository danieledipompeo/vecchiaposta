<?php

$areaEntity->addReference($dipartimentoEntity, 'dipartimento');
$dipartimentoEntity->addReference($universitaEntity);

$personaleEntity->addReference($areaEntity, 'area');
$docenteEntity->addReference($usersEntity, 'user');
$docenteEntity->addReference($areaEntity, 'area');

$dipartimentoEntity->addReference($docenteEntity, 'direttore');
$areaEntity->addReference($docenteEntity, 'direttore');

$gruppoRicercaEntity->addReference($docenteEntity, 'responsabile');
$pubblicazioneEntity->addReference($ricercatoreEntity, 'autore');

$personaleEntity->addReference($usersEntity,'user');
$progettoRicercaEntity->addReference($gruppoRicercaEntity);
$progettoRicercaEntity->addReference($ricercatoreEntity,"responsabile");
$programmaDiRicercaEntity->addReference($gruppoRicercaEntity,"gruppo_ricerca");
$finanziamentoEntity->addReference($programmaDiRicercaEntity,"programma_di_ricerca_finanziato");
$topicEntity->addReference($ricercatoreEntity,"autore");

$ricercatoreEntity->addReference($usersEntity, 'user');
$ricercatoreEntity->addReference($areaEntity, 'area');

$sedeEntity->addReference($dipartimentoEntity, 'dipartimento');
$sedeEntity->addReference($universitaEntity, 'universita');
?>
