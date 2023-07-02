<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se todos os campos do formulário foram preenchidos
    if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["subject"])) {
        // Obtenha os valores enviados pelo formulário
        $firstname = $_POST["firstname"];
        $email = $_POST["lastname"];
        $problema = $_POST["problema"];
        $subject = $_POST["subject"];

        // Endereço de email para onde você deseja enviar o email
        $destinatario = "rauldiogoms@gmail.com";

        // Crie o corpo do email
        $mensagem = "Detalhes do formulário de contato:\n";
        $mensagem .= "Primeiro nome: " . $firstname . "\n";
        $mensagem .= "Email: " . $email . "\n";
        $mensagem .= "Problema: " . $problema . "\n";
        $mensagem .= "Descrição: " . $subject;

        // Envie o email
        if (mail($destinatario, "Formulário de Contato", $mensagem)) {
            echo "Email enviado com sucesso.";
        } else {
            echo "Ocorreu um erro ao enviar o email.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}
?>