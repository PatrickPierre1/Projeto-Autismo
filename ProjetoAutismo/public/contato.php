<?php
  include "header.php";
  include "config.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    if (empty($email) || empty($mensagem)) {
        echo "Digite sua informações nos campos!";
    }else {
        $sql = "INSERT INTO contato(nome, email, mensagem) VALUES ('$nome','$email','$mensagem')";
        $inserir = $pdo->prepare($sql);

        $inserir->execute();
    }
}
?>
<section class="contato d-flex justify-content-center align-items-center bg-dark p-5">
    <div class="form-container">
        <form class="form" method="POST">
        <div class="form-group">
                <label style="overflow: hidden;" for="nome">Insira seu nome</label>
                <input required name="nome" id="nome" type="text">
            </div>
            <div class="form-group">
                <label style="overflow: hidden;"  for="email">Insira seu email</label>
                <input required name="email" id="email" type="text">
            </div>
            <div class="form-group">
                <label style="overflow: hidden;"  for="textarea">Fale conosco</label>
                <textarea required cols="50" rows="10" id="textarea" name="mensagem"></textarea>
            </div>
            <button style="overflow: hidden;" type="submit" onclick="alert('Enviado com sucesso!')" class="form-submit-btn">Enviar</button>
        </form>
    </div>
</section>

<?php
  include "footer.php";
?>