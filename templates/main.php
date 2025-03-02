<main>

    <header>
        <h1>Próxima película de Marvel</h1>
    </header>

    <section>
        <img src="<?= $poster_url ?>" width = "300" alt="Poster de <?= $title; ?>"
        style = "border-radius : 16px"
        />
    </section>
    <hgroup>
        <p class="overview" >Producción: <?= $type ?></p>
        <h2><?= $title ?> <br/> <?= $until_message ?> </h2>
        <p>Sinapsis: <?= $overview ?> </p>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <br/>
        <h2>Siguiente Estreno: <br/>
             <?= $following_production ?>
        </h2>
    </hgroup>
</main>