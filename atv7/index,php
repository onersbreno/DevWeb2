<?php
include_once("persistencia.php");

$dados = buscarDados("dados.json"); //Busca cadastros que foram salvos 

$msgErro = "";
$nome = "";
$genero = "";
$ano_surgimento = "";
$num_albuns = "";
$num_integrantes = "";

if (isset($_POST['nome'])) {
    $nome = trim($_POST["nome"]);
    $genero = trim($_POST["genero"]);
    $ano_surgimento = trim($_POST["ano_surgimento"]);
    $num_albuns = trim($_POST["num_albuns"]);
    $num_integrantes = trim($_POST["num_integrantes"]);

    $erros = array();  //array para erros

    if ($nome == '') {
        array_push($erros, "informe o nome da banda");
    }
    if ($genero == '') {
        array_push($erros, "informe o gênero");
    }
    if ($ano_surgimento == '') {
        array_push($erros, "informe o ano de surgimento");
    }
    if ($num_albuns == '') {
        array_push($erros, "informe a quantidade de álbuns");
    }
    if ($num_integrantes == '') {
        array_push($erros, "informe a quantidade de integrantes");
    }

    if (empty($erros)) { //se tudo der certo
        $dado = array(
            "id" => uniqid(),
            "nome" => $nome,
            "genero" => $genero,
            "ano_surgimento" => $ano_surgimento,
            "num_albuns" => $num_albuns,
            "num_integrantes" => $num_integrantes
        );

        array_push($dados, $dado);
        salvarDados($dados, "dados.json");

        header("location: index.php");
    } else {
        $msgErro = implode("<br>", $erros);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bandas</title>
</head>

<body>
    <h1> Cadastro de Bandas </h1>

    <div class="container">
        <form method="POST">
            <input type="text" name="nome" id="nome" placeholder="Nome da banda" value="<?= $nome ?>"><br><br>

            <select name="genero">
                <option value="">Selecione o gênero</option>
                <option value="Rock" <?= $genero == 'Rock' ? 'selected' : '' ?>> Rock </option>
                <option value="Grunge" <?= $genero == 'Grunge' ? 'selected' : '' ?>> Grunge </option>
                <option value="Pop" <?= $genero == 'Rock Alternativo' ? 'selected' : '' ?>> Grunge </option>
                <option value="Pop Rock" <?= $genero == 'Pop Rock' ? 'selected' : '' ?>> Pop Rock </option>
                <option value="Pop Punk" <?= $genero == 'Pop Punk' ? 'selected' : '' ?>> Pop Punk </option>
                <option value="Punk" <?= $genero == 'Punk' ? 'selected' : '' ?>> Punk </option>
                <option value="Hardcore" <?= $genero == 'Hardcore' ? 'selected' : '' ?>> Hardcore </option>
                <option value="Post-Hardcore" <?= $genero == 'Post-Hardcore' ? 'selected' : '' ?>> Post-Hardcore </option>
                <option value="Emocore" <?= $genero == 'Emocore' ? 'selected' : '' ?>> Emocore </option>
                <option value="Metalcore" <?= $genero == 'Metalcore' ? 'selected' : '' ?>> Metalcore </option>
                <option value="Metal" <?= $genero == 'Metal' ? 'selected' : '' ?>> Metal </option>
                <option value="Metal Alternativo" <?= $genero == 'Metal Alternativo' ? 'selected' : '' ?>> Metal Alternativo </option>
                <option value="Nu-Metal" <?= $genero == 'Nu-Metal' ? 'selected' : '' ?>> Nu-Metal </option>
            </select><br><br>

            <input type="number" name="ano_surgimento" id="ano_surgimento" placeholder="Ano de surgimento" value="<?= $ano_surgimento ?>"><br><br>

            <input type="number" name="num_albuns" id="num_albuns" placeholder="Quantidade de álbuns" value="<?= $num_albuns ?>"><br><br>

            <input type="number" name="num_integrantes" id="num_integrantes" placeholder="Quantidade de integrantes" value="<?= $num_integrantes ?>"><br><br>

            <input type="submit" value="Cadastrar Banda">
        </form>

        <div id="divErro" style="color: #f7768e;"> <?= $msgErro ?> </div>
    </div>

    <h3>Bandas cadastradas</h3>

    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Gênero</th>
                <th>Ano de surgimento</th>
                <th>Álbuns</th>
                <th>Integrantes</th>
                <th>Excluir</th>
            </tr>
            <?php foreach ($dados as $u): ?>
                <tr>
                    <td> <?= $u['id'] ?></td>
                    <td> <?= $u['nome'] ?></td>
                    <td> <?= $u['genero'] ?></td>
                    <td> <?= $u['ano_surgimento'] ?></td>
                    <td> <?= $u['num_albuns'] ?></td>
                    <td> <?= $u['num_integrantes'] ?></td>
                    <td> <a href="excluir.php?id=<?= $u['id'] ?>"
                            onclick="return confirm('Confirma a exclusão desta banda?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
