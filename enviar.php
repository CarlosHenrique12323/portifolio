<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['subject']);
    $mensagem = htmlspecialchars($_POST['message']);

    // Definir o destinatário e o assunto do e-mail
    $destinatario = "carloshenriquedasilvasouza013@gmail.com"; // Substitua pelo seu e-mail
    $titulo = "Mensagem de Contato: $assunto";

    // Montar o corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem: $mensagem\n";

    // Definir o cabeçalho do e-mail
    $cabecalhos = "From: $nome <$email>\r\n";
    $cabecalhos .= "Reply-To: $email\r\n";

    // Enviar o e-mail
    if (mail($destinatario, $titulo, $corpo, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
