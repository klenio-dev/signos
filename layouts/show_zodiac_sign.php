<?php
include('header.php');

// Ativar exibição de erros
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Recebe a data de nascimento do formulário
$data_nascimento = $_POST['data_nascimento'];

// Carrega o arquivo XML
$signos = simplexml_load_file('signos.xml');

// Converte a data de nascimento para dia e mês no formato correto
list($ano, $mes, $dia) = explode('-', $data_nascimento);
$data_formatada = sprintf('%02d/%02d', $dia, $mes);

$signo_encontrado = "";
$descricao = "";

// Função para verificar se uma data está dentro do intervalo
function dataEstaNoIntervalo($data, $inicio, $fim) {
    // Adicionar ano fixo para consistência
    $ano_atual = date('Y');
    $data = DateTime::createFromFormat('d/m/Y', "$data/$ano_atual");
    $inicio = DateTime::createFromFormat('d/m/Y', "$inicio/$ano_atual");
    $fim = DateTime::createFromFormat('d/m/Y', "$fim/$ano_atual");

    // Comparação
    if ($inicio <= $fim) {
        return $data >= $inicio && $data <= $fim;
    } else {
        return $data >= $inicio || $data <= $fim;
    }
}

// Percorre os signos para encontrar o correspondente
foreach ($signos->signo as $signo) {
    $data_inicio = (string) $signo->dataInicio;
    $data_fim = (string) $signo->dataFim;

    if (dataEstaNoIntervalo($data_formatada, $data_inicio, $data_fim)) {
        $signo_encontrado = $signo->signoNome;
        $descricao = $signo->descricao;
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Signo</title>
    <!-- Link para o CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Seu Signo</h2>
        <?php if ($signo_encontrado): ?>
            <div class="alert alert-success text-center">
                <h4><?php echo $signo_encontrado; ?></h4>
                <p><?php echo $descricao; ?></p>
            </div>
        <?php else: ?>
            <div class="alert alert-danger text-center">
                <p>Data inválida ou signo não encontrado.</p>
            </div>
        <?php endif; ?>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>