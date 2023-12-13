<!-- SERVIÇOS -->
<?php
$querservicos = "SELECT * FROM servicos";
$querdb = mysqli_query($con, $querservicos) or die("Erro ao tentar fazer a consulta.");

$servicos = [];
$item = 0;

while ($row = mysqli_fetch_array($querdb)) {
    $servicos[$item] = $row;

    $item++;
}
?>

<div class="container">
    <div class="row">

        <?php
        foreach ($servicos as $item => $b) {
            $url_site = URL_SITE;

            $img = ($isMobile) ? $b['mobile'] : $b['img'];

            echo <<<HTML
            <div class="col col-sm-12 col-md-6 p-5">
                <div class="card p-5">
                <img src="{$url_site}img/{$img}" class="card-img-top" alt="Tipo de Serviços de Desenvolvimento Web">
                <div class="card-body">
                    <p class="card-text"><strong>
                        {$b['description']}
                    </strong></p>
                </div>
                </div>
            </div>
            HTML;
        }
        ?>



    </div>
</div>
<!-- FRONTEND -->

<!-- BACKEND -->

 <!-- BANCO DE DADOS  -->

  <!-- WEB SERVER   -->

   <!-- QUALITY ASSURANCE    -->

    <!-- AGILE     -->