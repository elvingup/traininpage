<div class="row pt-5">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE?>img/pro.png" alt="Imagem do Desenvolvedor" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-8">
        <h2>Jorge Henrique Talento</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat ipsam fugit obcaecati natus veritatis, voluptatem officia nam sit eum in maiores, delectus culpa corrupti cum, quos nesciunt ducimus molestiae placeat.
            Saepe earum rem temporibus quaerat dicta deserunt error laboriosam labore sint numquam eveniet beatae vel, consequuntur ad dolore, sed fuga voluptatibus. Ut perferendis illum libero quas cumque amet odit soluta.
            Rerum optio iure dolorum aspernatur! Assumenda quo atque magnam eveniet eligendi sunt accusantium, praesentium ipsa itaque, qui maiores accusamus vitae numquam saepe, error ducimus quasi neque amet deserunt deleniti cum?
            Recusandae porro, illo ipsa temporibus, sed autem quam non quod est in maxime iste modi delectus officiis velit magni, explicabo nostrum officia minima id! Eaque exercitationem voluptate odit. Facere, saepe!
            Assumenda exercitationem in quam quis fuga aut provident est amet error vel? Voluptatem laudantium nostrum non. A aliquam expedita hic culpa sapiente. Voluptatibus, provident nulla corporis sequi magni vel totam!
            Aut neque autem enim quibusdam nesciunt molestias aspernatur iusto quia alias sint itaque voluptatem ipsa libero eum rem necessitatibus provident excepturi repudiandae, veritatis vel totam. Iure obcaecati quisquam molestias adipisci.
            Consectetur soluta, tempora quam pariatur enim nisi sed id quod ullam non, reprehenderit inventore ea eaque cumque? Cumque asperiores vitae nulla hic veniam ducimus dolorem, dolorum sit error quidem minima.
            Dignissimos asperiores quos cumque nulla molestiae provident! Ad temporibus ullam eos libero quidem dicta alias tempora, consequuntur vero sunt ut minus cupiditate neque officia veniam dolorum ipsam atque expedita itaque!
            Repudiandae architecto quos adipisci magni. Velit, corrupti doloribus in accusantium accusamus beatae corporis quia nemo dolorem porro inventore, eveniet reprehenderit eum numquam dignissimos, enim ad sint suscipit. Unde, autem explicabo.
            Commodi et voluptatum, quis ipsa deserunt quam modi libero architecto autem aliquam, dolores assumenda at quia consequatur vel veritatis in praesentium est, non aperiam maxime harum itaque. Itaque, harum voluptate!
            Recusandae, quae quaerat! Veniam a eius cupiditate distinctio modi dolorum ipsa explicabo. Suscipit ipsam quibusdam atque veniam vero animi voluptatum fugiat quidem quia itaque velit, dolorum vel id excepturi nam!
        </p>
    </div>
</div>

<!-- Segunda Linha: Âmbitos de Trabalho -->
<!-- Dados a serem exibidos na Segunda Linha -->
<?php
$text = "Estudante talentoso e promissor progredindo em Curso de Formação";
$atuacao = [
    [
        "titulo" => "PHP", 
        "icon" => "bi-filetype-php", 
        "text" => $text
    ],
    [
        "titulo" => "Base de Dados", 
        "icon" => "bi-database-gear", 
        "text" => $text
    ],
    [
        "titulo" => "JQUERY", 
        "icon" => "bi-filetype-js", 
        "text" => $text
    ],
    [
        "titulo" => "JAVA", 
        "icon" => "bi-filetype-java", 
        "text" => $text
    ]
];
?>
<!-- loop que exibe os dados da Segunda Linha -->
<div class="row pt-5">
    <?php
        foreach($atuacao as $area){
            // heredoc: contém o card com ícone, área e descrição
            echo <<<HTML
            <div class="col-sm-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi {$area['icon']} fs-1"></i>
                        <h3>{$area['titulo']}</h3>
                        <p>{$area['text']}</p>
                    </div>
                </div>
            </div>                                                                
            HTML;
        }
    ?>
</div>