<p>Cliquez sur un type pour voir tous les Pokémons de ce type</p>

<ul class="types-list">
    <?php foreach ($types as $type) { ?>
    <li>
        <a style="background-color: #<?=$type->getColor()?>" href="<?=$router->generate('type', ['id' => $type->getId()])?>">
            <?=$type->getName()?>
        </a>
    </li>
    <?php } ?>
</ul>