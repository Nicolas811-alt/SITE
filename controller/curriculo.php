<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];

$nome = $_POST["efc"];
$nome = $_POST["emc"];
$nome = $_POST["esc"];
$nome = $_POST["pgc"];
$nome = $_POST["mc"];

$empresa = $_POST["empresa"];
$data_admissao = $_POST["data_admissao"];
$data_demissao = $_POST["data_demissao"];
$atividade_exercida = $_POST["atividade_exercida"];

$descrisao = $_POST["descrisao"];
$horas = $_POST["horas"];
$ano_comclusao = $_POST["ano_conclusao"];

$informacoes = $_POST["informacoes"];

echo "DADOS PESSOAIS"
echo $nome;
echo $telefone;
echo $email;
echo "ESCOLARIDADE";
echo $efc;
echo $emc;
echo $esc;
echo $pgc;
echo $mc;
echo "EXPERIENCIA PROFISSIONAL";
echo $empresa;
echo $data_admissao;
echo $data_demissao;
echo $atividade_exercida;
echo "CURSO E IDIOMAS";
echo $descrisao;
echo $horas;
echo $ano_conclusao;
echo "INFORMACOES ADICIONAIS";
echo $informacoes;
?>


