<?php
  include "header.php";
  include "config.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    if (empty($email) || empty($mensagem)) {
        
    }else {
        $sql = "INSERT INTO contato(email, mensagem) VALUES ('$email','$mensagem')";
        $inserir = $pdo->prepare($sql);

        $inserir->execute();
        
        exit();
    }
}
?>
<section class="contato d-flex justify-content-center align-items-center bg-dark p-5">
    <div class="form-container">
        <form class="form" method="POST">
            <div class="form-group">
                <label for="email">Insira seu email</label>
                <input required name="email" id="email" type="text">
            </div>
            <div class="form-group">
                <label for="textarea">Fale conosco</label>
                <textarea required cols="50" rows="10" id="textarea" name="mensagem"></textarea>
            </div>
            <button type="submit" class="form-submit-btn">Enviar</button>
        </form>
    </div>
</section>

<?php
  include "footer.php";
?>