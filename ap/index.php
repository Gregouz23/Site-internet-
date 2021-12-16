<html lang="fr">
    <head>
        <link rel="stylesheet" href="style.css" :>

    </head>

    <header>
        <nav>
            <?php
            $data=yaml_parse_file('data/menu.yaml');
            foreach($data as $cle=>$val){
                echo '<a class="btn-grad" href="#'.$cle.'">'.$val.'</a> ';
            }
            ?>
        </nav>
    </header>

    <body>
        <main>
            <?php
            $data=yaml_parse_file('data/menu.yaml');
            foreach($data as $cle=>$val){
                echo '<section id="'.$cle.'">';
                include("php/".$cle.".php") ;
                echo '</section>';
            }

            ?>      
        </main>
    </body>
</html>