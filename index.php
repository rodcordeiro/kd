<?php
$db= mysqli_connect('localhost', 'id8060145_cordeiro', '@Drigo13', 'id8060145_conceptive');
$valor = "not null";
$sql = "SELECT * FROM dados";
if (isset($_POST['filtrar'])){
    $categoria = $_POST['categoria'];
    $sql .= " where categoria like '$categoria'";
}
if (isset($_POST['zerar'])){
    $sql = "SELECT * FROM dados";
}
$dados = mysqli_query($db,$sql);

if (isset($_POST['enviar'])){
    $categoria = $_POST['categoria'];
    $titulo = $_POST['titulo'];
    $desc = $_POST['descricao'];
    $descri = str_replace("<", "&lt;", $desc);
    $descricao = str_replace(">", "&gt;", $descri);
    $sql = "INSERT INTO dados (categoria,titulo,descricao) VALUES ('$categoria','$titulo','$descricao');";
    if(mysqli_query($db,$sql)){
    header('location: index.php');
    } else {
        echo "$sql";
    }
}
?>
<?php

?>
<html>
<head>  
    <title>Deposito de comandos</title>
    <!-- Definições da página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta charset="utf-8">
    <meta name="robots" content="no-index">
    <meta property="author" content="Rodrigo Cordeiro">
    <meta name="dc.creator.address" content="rodrigomendoncca@gmail.com">
    
    <!-- ALTERAR A COR DA ABA -->
    <meta name="theme-color" content="#666666">
    <meta name="msapplication-TileColor" content="#666666">
    <meta name="msapplication-navbutton-color" content="#666666">
    <meta name="apple-mobile-web-app-status-bar-style" content="#666666">

    <!-- Informações da página -->
    <link rel='home' href='https://rodconceptive.000webhostapp.com/kd/index.php'>
    <!-- Informações sobre o Site quando o link é compartilhado-->
    <meta property='og:type' content='website'>
    <meta property='og:locale' content='pt_BR' />
    <meta property='og:image' content='https://rodcordeiro.github.io/shares/favicons/cloud_network/android-icon-192x192.png'>
    <meta property='og:site_name' content='Deposito de comandos'>
    <meta property='og:title' content='Deposito de comandos'>
    <meta property='og:determiner' content='the'>
    <meta property='og:url' content='https://rodconceptive.000webhostapp.com/kd/index.php'>
    <meta property='og:description' content='Deposito de Comandos'>
    <meta property='og:image:secure_url' content='https://rodcordeiro.github.io/shares/favicons/cloud_network/android-icon-192x192.png' />
    <meta name='twitter:card' content='summary' />
    <meta name='twitter:description' content='Deposito de comandos' />
    <meta name='twitter:title' content='Deposito de comandos' />
    <meta name='twitter:site' content='@drigocordeiro13' />
    <meta name='twitter:image' content='https://rodcordeiro.github.io/shares/favicons/cloud_network/android-icon-192x192.png' />
    <meta name='twitter:creator' content='@drigocordeiro13' />
    <link rel='prefetch' href='https://rodconceptive.000webhostapp.com/kd/index.php'>
    <link rel='prerender' href='https://rodconceptive.000webhostapp.com/kd/index.php'>
    <meta itemprop='name' content='Deposito de comandos' />
    <meta itemprop='url' content='https://rodconceptive.000webhostapp.com/kd/index.php' />
    <meta property='description' content='Deposito de comandos'>
    <!-- Outros dados como o site, como permissão para indexação do site, faixa etária, idioma, etc. -->
    <meta name='robots' content='index'>
    <meta name='rating' content='general'>
    <meta name='language' content='pt-br'>
    <!-- Informações sobre o Autor -->
    <meta property='author' content='Rodrigo Cordeiro'>
    <meta name='dc.creator.address' content='rodrigomendoncca@gmail.com'>


    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="76x76" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="114x114" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/favicon-16x16.png">
    <link rel="manifest" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/manifest.json">
    <meta name="msapplication-TileImage" content="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/ms-icon-144x144.png">
    <!-- third-generation iPad with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-144x144.png">
    <!-- iPhone with high-resolution Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-114x114.png">
    <!-- first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-72x72.png">
    <!-- non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/apple-icon-57x57.png">
    <!-- basic favicon -->
    <link rel="shortcut icon" href="HTTPS://rodcordeiro.github.io/shares/favicons/cloud_network/favicon-32x32.png">
    <!-- /FAVICON-->




    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <style type="text/css">
        <?php 
        if (isset($_GET['Pesquisar'])) {
            echo "
        #pesquisa{
            display:block;

            }#normal{
                display:none;
            }
            ";
        }else{
            echo "
        #pesquisa{
            display:none;
            }#normal{
                display:block;
            }
            ";
        }

        ?>
    </style>
</head>
<body>
    <section>
        <div id="card">
            <form action="index.php" method="post">
                <input type="text" name="titulo" placeholder="Título">
                <select name="categoria">
                    <option>--Categoria--</option>
                    <option>linux</option>
                    <option>windows</option>
                    <option>cmd</option>
                    <option value="c_sharp">c#</option>
                    <option>html</option>
                    <option>js</option>
                    <option>css</option>
                    <option>php</option>
                    <option>sql</option>
                </select>
                <input type="submit" name="enviar"><br>
                <textarea name="descricao"></textarea>
            </form>
        <span>Links= #Link:URL_DO_Link</span>
        <hr>
        <form action="index.php" method="post">
                <select name="categoria">
                    <option value="'' or 1=1">--Categoria--</option>
                    <option>linux</option>
                    <option>windows</option>
                    <option>cmd</option>
                    <option value="c_sharp">c#</option>
                    <option>html</option>
                    <option>js</option>
                    <option>css</option>
                    <option>php</option>
                    <option>sql</option>
                </select>
                <input type="submit" name="filtrar" value="Filtrar"><br>
        </form>
        <form action="index.php" method="post"><input type="submit" name="zerar" value="Zerar"><br></form>
        </div>
        <div id="normal">
            <?php while ($row = mysqli_fetch_array($dados)) { ?>
                <div class="card">
                    <p class="cred">
                        <img src="<?php echo $row['categoria']; ?>.png" alt="<?php echo $row['categoria']; ?>">
                        <span class="label"> | <?php echo $row['titulo']; ?></span>
                    </p>
                    <div class="desc"><pre>
                        <p><?php 
                        if (preg_match("/#Link:/", $row['descricao']) || preg_match("/#LINK:/", $row['descricao'])){
                            $link = substr($row['descricao'],6);
                            echo"<a href='$link'>$link</a>";
                        }else{
                            echo $row['descricao'];
                        }
                        ?></p>
                    </pre></div>
                </div>
            <?php } ?>
        </div>
    </section>
    <script type="text/javascript">
    // Created by Andrew G

    window.onload=function(){
        $(".desc").slideUp(0);
        $(".card").click(function(){
            var top = this.offsetTop;
            $("body").animate({
                scrollTop : (top - 75)
            }, 250);
            $(".desc").slideUp(250);
            $(".card").css({
                "boxShadow" : "none"
            });
            $(".cred").css({
                "background" : "#f2f2f2"
            });
            $(".label").css({
                "border-bottom" : "1px solid #f2f2f2"
            });
            $(this).css({
                "boxShadow" : "0 2px 4px #111"
            });
            $(this).children().last().slideDown(250);        
        });
    };
</script>
</body>
</html>



