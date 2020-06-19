<?php include './views/partials/header.php' ?>

    <main class="home">
        <p class="year-action js-year"><span>1980</span></p>
        <div class="timeLine">
            <div class="line js-line">
                <div class="timeLine-cursor js-timeLine-cursor" ></div>
            </div>
        </div>
        <div class="vinyle">
            <div class="poster">
                <p class="date-vinyle js-date-vinyle"><span>1980</span></p>
                <!--<img src="images/vinile.svg" class="vinile-poster">-->
                <img src="public/images/albums/diams.jpg" alt="" class="poster-affiche js-poster-affiche">
            </div>
        </div>
        <a href="" class="enter">Enter</a>
    </main>
    <script>const yearsDB =  <?= json_encode($years) ?></script>
    <script>const TopArtistFromYearsDB =  <?= json_encode($topFromEachYear) ?></script>

<?php include './views/partials/footer.php' ?>