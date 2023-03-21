<?php include("blades/header.php") ?>
<div class="container border rounded mt-5 bg-white">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <label>Nome</label>
        <input type="text" name="alunoNome"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade"><br>
        M<input type="radio" value="m" name="alunoSexo"><br>
        F<input type="radio" value="f" name="alunoSexo"><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>
<?php include("blades/footer.php") ?>