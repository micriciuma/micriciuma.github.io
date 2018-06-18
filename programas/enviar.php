<?
$hoje_tmp = getdate();
$hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);

$assunto_mensagem = $_POST["assunto_mensagem"];

$dioc = $_POST["dioc"]; 
$area = $_POST["area"]; 
$paroquia = $_POST["paroquia"]; 
$local = $_POST["local"]; 
$munic = $_POST["munic"]; 
$nome = $_POST["nome"]; 
$crachadele = $_POST["crachadele"]; 
$nascdele = $_POST["nascdele"]; 
$nomedela = $_POST["nomedela"]; 
$crachadela = $_POST["crachadela"]; 
$nascdela = $_POST["nascdela"]; 
$casamento = $_POST["casamento"];
$foneres = $_POST["foneres"];
$fonecom = $_POST["fonecom"];
$fax = $_POST["fax"];
$celdele = $_POST["celdele"];
$celdela = $_POST["celdela"];
$endrua = $_POST["endrua"];
$compl = $_POST["compl"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"]; 
$estado = $_POST["estado"]; 
$email = $_POST["e-mail"]; 
$hospedagem = $_POST["hospedagem"]; 
$mensagem = $_POST["mensagem"];

global $email; 

$enviou = mail("pillones@gmail.com",  
"$assunto_mensagem",

"Assunto: $assunto_mensagem

Arquidiocese ou diocese de: $dioc
Área: $area
Paróquia: $paroquia
Localidade: $local
Município: $munic
Nome completo dele: $nome
Nome dele no crachá: $crachadele
Data de nascimento dele: $nascdele
Nome completo dela: $nomedela
Nome dela no crachá: $crachadela
Data de nascimento dela: $nascdela
Data do casamento: $casamento
Telefone residencial: $foneres
Telefone comercial: $fonecom
Fax: $fax
Celular dele: $celdele
Celular dela: $celdela
Endereço Residencial: $endrua
Complemento: $compl
Bairro: $bairro
Cep/Cidade: $cidade
Estado: $estado
E-mail: $email
Hospedagem: $hospedagem
Adesão na Alimentação: $mensagem",
"From: $email <$nome>");

if ($enviou){
echo "<b>$nome</b>, sua mensagem foi enviada com sucesso.<br>Em breve lhe responderemos.";
}

else {
echo "<b>$nome</b>, não foi possível enviar sua mensagem.<br>Tente novamente.";
}
?>
