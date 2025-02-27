
<?php

    const API_URL = "https://whenisthenextmcufilm.com/api";
    //Inicializamos una nueva sesión de curl
    $ch = curl_init(API_URL);

    //Indicar que queremor recibir el resultado de la petición y no mostrarla en pantalla.

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    /**
     * ejecutar petición 
     * y guardamos el resultado.
     */

    $result = curl_exec($ch);
    $data = json_decode($result, true);


    curl_close($ch);

    

?>


<head>
<meta charset="UTF-8"/>
<title>La Próxima Película de Marvel</title>
<meta name="description" content="width = device-width, initial-scale = 1.0"

</head>


<main>

    <header>
        <h1>Próxima película de Marvel</h1>
    </header>

    <section>
        <img src="<?= $data["poster_url"]?>" width = "300" alt="Poster de <?= $data["title"]?>"
        style = "border-radius : 16px"
        />
    </section>
    <hgroup>
        <p class="overview" >Producción: <?= $data["type"]; ?></p>
        <h2><?= $data["title"]; ?> <br/> se estrena en <?= $data["days_until"]; ?> días.</h2>
        <p>Sinapsis: <?= $data["overview"]; ?> </p>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <br/>
        <h2>Siguiente Estreno: <br/>
             <?= $data["following_production"]["title"];?>
        </h2>

    </hgroup>
</main>


<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    header{
        display: grid;
        place-content: center;
        margin: 0 10px;
    }

    section{
        position: relative;
        display: flex;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 500px;
    }

</style>