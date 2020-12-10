<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=$baseUri?>/assets/css/style.css">
    <title>Pokedex</title>
</head>
<body>
    <main>
    
        <header>
            <h1><a href="<?=$router->generate('home')?>">Pokédex</a></h1>
            <nav>
                <ul>
                    <li><a href="<?=$router->generate('home')?>">Liste</a></li>
                    <li><a href="<?=$router->generate('types')?>">Types</a></li>
                </ul>
            </nav>
        </header>

        <div>
