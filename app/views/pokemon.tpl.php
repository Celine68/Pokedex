<h2>Détails de <?=$pokemon->getnom()?></h2>
<div class="pokemon-details">
    <div class="pokemon-image">
        <img src="<?=$baseUri?>/assets/img/<?=$pokemon->getNumero()?>.png" alt="Image du pokémon">
    </div>
    <div class="details-div">
        <h3>#<?=$pokemon->getNumero()?> <?=$pokemon->getnom()?></h3>
        <div class="pokemon-type">
            <?php foreach($types as $type) { ?>
            <li style="background-color: #<?=$type->getColor()?>;">
                <a href="<?=$router->generate('type', ['id' => $type->getId()])?>"><?=$type->getName()?></a>
            </li>
            <?php } ?>
        </div>
        <h4>Statistiques</h4>
        <table class="pokemon-stats">
            
            <tr class="pokemon-stat">
                <td class="stat stat-name">PV</td>
                <td class="stat stat-number"><?=$pokemon->getPv()?></td>
                <td class="stat stat-bar">
                    <div class="bar bar-fill" style='width: <?=($pokemon->getPv() * 100) / 255?>%;'></div>
                    <div class="bar bar-rest" style="width: <?=100 -(($pokemon->getPv() * 100) / 255)?>%;"></div>
                </td>
            </tr>
        
            <tr class="pokemon-stat">
                <td class="stat stat-name">Attaque</td>
                <td class="stat stat-number"><?=$pokemon->getAttaque()?></td>
                <td class="stat stat-bar">
                    <div class="bar-fill" style='width: <?=($pokemon->getAttaque() * 100) / 255?>%;'></div>
                    <div class="bar-rest" style="width: <?=100 -(($pokemon->getAttaque() * 100) / 255)?>%;"></div>
                </td>
            </tr>
        
            <tr class="pokemon-stat">
                <td class="stat stat-name">Défense</td>
                <td class="stat stat-number"><?=$pokemon->getDefense()?></td>
                <td class="stat stat-bar">
                    <div class="bar-fill" style='width: <?=($pokemon->getDefense() * 100) / 255?>%;'></div>
                    <div class="bar-rest" style="width: <?=100 -(($pokemon->getDefense() * 100) / 255)?>%;"></div>
                </td>
            </tr>
        
            <tr class="pokemon-stat">
                <td class="stat stat-name">Attaque Spé</td>
                <td class="stat stat-number"><?=$pokemon->getAttaqueSpe()?></td>
                <td class="stat stat-bar">
                    <div class="bar-fill" style='width: <?=($pokemon->getAttaqueSpe() * 100) / 255?>%;'></div>
                    <div class="bar-rest" style="width: <?=100 -(($pokemon->getAttaqueSpe() * 100) / 255)?>%;"></div>
                </td>
            </tr>
        
            <tr class="pokemon-stat">
                <td class="stat stat-name">Défense Spé</td>
                <td class="stat stat-number"><?=$pokemon->getDefenseSpe()?></td>
                <td class="stat stat-bar">
                    <div class="bar-fill" style='width: <?=($pokemon->getDefenseSpe() * 100) / 255?>%;'></div>
                    <div class="bar-rest" style="width: <?=100 -(($pokemon->getDefenseSpe() * 100) / 255)?>%;"></div>
                </td>
            </tr>
        
            <tr class="pokemon-stat">
                <td class="stat stat-name">Vitesse</td>
                <td class="stat stat-number"><?=$pokemon->getVitesse()?></td>
                <td class="stat stat-bar">
                    <div class="bar-fill" style='width: <?=($pokemon->getVitesse() * 100) / 255?>%;'></div>
                    <div class="bar-rest" style="width: <?=100 -(($pokemon->getVitesse() * 100) / 255)?>%;"></div>
                </td>
            </tr>
        </table>

    </div>
</div>
<footer>
    <a href="<?=$router->generate('home')?>">Revenir à la liste</a>
</footer>