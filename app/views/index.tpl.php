<h2><?=$title?></h2>

<?php foreach ($pokemons as $pokemon) { ?>
<div class="pokemon">
    <figure class="pokemon-simple">
        <img src="<?=$baseUri?>/assets/img/<?=$pokemon->getNumero()?>.png" alt="Image du Pokemon">
        <figcaption>
            <a href="<?=$router->generate('pokemon', ['id' => $pokemon->getId()])?>">#<?=$pokemon->getNumero()?> <?=$pokemon->getNom()?></a>
        </figcaption>
    </figure>
</div>
<?php } ?>
