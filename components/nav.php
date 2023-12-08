<?php
    $navItens = [
        ["url" => "home", "label" => "HOME"],
        ["url" => "profissional", "label" => "O PROFISSIONAL"],
        ["url" => "portfolio", "label" => "PORTFÓLIO"],
        ["url" => "servicos", "label" => "SERVIÇOS"],
        ["url" => "contato", "label" => "CONTATO"]
    ];
    
    $page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo URL_SITE.'img/dgit.png'?>" id="logo" class="mx-5"></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">      
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
            foreach($navItens as $nav){
                $active = ($nav['url'] == $page) ? "active" : "";
                // heredoc
                echo <<<HTML
                <li class="nav-item">
                  <a class="nav-link {$active}" aria-current="page" href="?page={$nav['url']}">{$nav['label']}</a>
                </li>

                HTML;
            }
        ?>
        
    </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>