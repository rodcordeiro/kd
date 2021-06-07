<?php 
$db= mysqli_connect('localhost', 'id8060145_cordeiro', '@Drigo13', 'id8060145_conceptive');
$valor = "not null";
$sql = "SELECT * FROM dados";

$dados = mysqli_query($db,$sql);
 while ($row = mysqli_fetch_array($dados)) { ?>
<li>
<?php if (preg_match("/#LINK>/", $row['descricao'])){
                            $link = substr($row['descricao'],6);
                            echo"<a href='$link'>$link</a>";
                        }else{
                            echo $row['descricao'];
                        }
      ?>             </li><?php }
                        ?>
