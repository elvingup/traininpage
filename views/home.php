<!-- banner da pagina inicial  -->
<?php
$dados = [
    [
        "title" => "Trabalho Full Stack PHP",
        "description" => "Trabalhos completos de front-end com back-end",
        "img" => "b1.png",
        "mobile" => "b1m.png"
    ],
    [
        "title" => "Trabalho Full Stack PHP",
        "description" => "Trabalhos completos de front-end com back-end",
        "img" => "b2.png",
        "mobile" => "b2m.png"
    ],
];
?>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">

    <?php foreach($dados as $ch => $b){ 
        $active = ($ch == 0) ? 'active' : '';
        $img = ($isMobile) ? $b['mobile'] : $b['img'];
        ?>

    <div class="carousel-item <?php echo $active ?>">
      <img src="<?php echo URL_SITE."img/".$img ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="bg-success">
            <strong>
            <?php echo $b['title'] ?>
            </strong>   
        </h5>
        <p class="bg-success"><?php echo $b['description'] ?></p>
        <a href="####" class="btn btn-success"><strong>ASSINE JÁ!</strong></a>
      </div>
    </div>

    <?php }?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- STACKS -->
<?php
    $stacks = [
        [
            "title" => "PHP",
            "description" => "Curso em progresso",
            "img" => "php.png",
            "btnAction" => "https://google.com",
            "btnLabel" => "Visitar o site"
        ],
        [
            "title" => "JavaScript",
            "description" => "Curso em progresso",
            "img" => "mysql.png",
            "btnAction" => "https://google.com",
            "btnLabel" => "Visitar o site"
        ],
        [
            "title" => "HTML",
            "description" => "Curso em progresso",
            "img" => "js.jpeg",
            "btnAction" => "https://google.com",
            "btnLabel" => "Visitar o site"
        ],
        [
            "title" => "CSS",
            "description" => "Curso em progresso",
            "img" => "node.webp",
            "btnAction" => "https://google.com",
            "btnLabel" => "Visitar o site"
        ]
    ];
?>

<div class="container pt-5">
    <div class="row">
        <?php
            foreach($stacks as $stack){
                $url_site = URL_SITE;
                //heredoc
                echo <<<HTML

                <div class="col col-sm-12 col-md-3">
                    <div class="card">
                        <img src="{$url_site}img/{$stack['img']}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{$stack['title']}</h5>
                            <p class="card-text">{$stack['description']}</p>
                            <a href="{$stack['btnAction']}" class="btn btn-primary">{$stack['btnLabel']}</a>
                        </div>
                    </div>
                </div>
                HTML;
            }
        ?>
    </div>
</div>