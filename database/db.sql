USE id8060145_conceptive;
create table dados (
id int(4) auto_increment primary key not null,
categoria varchar(50) not null,
titulo varchar(255) not null,
descricao varchar(1000)
);
insert into dados (categoria,titulo,descricao) values ('linux','Corrigir pacotes apt install-UBUNTU','apt --fix-broken install');


if (isset($_POST['enviar'])){
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$desc = $_POST['descricao'];
$sql = "INSERT INTO dados (categoria,titulo,descricao) VALUES ('$categoria','$titulo','$desc');"
}
