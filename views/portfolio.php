<!-- portfolio -->
<?php
$querportfolio = "SELECT * FROM portfolio";
$querdb = mysqli_query($con, $querportfolio) or die("Erro ao tentar fazer a consulta.");

$portfolio = [];
$item = 0;

while($datum = mysqli_fetch_assoc($querdb)){
    $portfolio[$item] = $datum;

    $item++;
}
?>
<div class="container">
    <div class="row">

        <?php
        foreach($portfolio as $ch => $b){
            $url_site = URL_SITE;
            $img = ($isMobile) ? $b['mobile'] : $b['img'];

            echo <<<HTML
            <div class="col col-sm-12 col-md-12 p-5">
                <div class="card p-5">
                <img src="{$url_site}img/{$img}" class="card-img-top" alt="Projeto no Portfolio">
                <div class="card-body">
                    <p class="card-text" style="font-size: 2rem;"><strong>
                        {$b['title']}
                    </strong></p>
                </div>
                </div>
            </div>
            HTML;
        }
        ?>
    
    </div>
</div>
