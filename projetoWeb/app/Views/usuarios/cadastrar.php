<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preencha o formulário abaixo para fazer seu cadastro</small></p>

            <form name="cadastrar" method="POST" action="<?php  URL?>/usuarios/cadastrar" action="<?php URL ?>/usuarios/entrar" class="mt-4">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>

                    <input type="text" name="nome" id="nome" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['nome'] ?>" required>
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['email'] ?> " required>
                    <div class="invalid-feedback">
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" id="senha" class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['senha'] ?> " required>
                    <input type="checkbox" onclick="Toggle()"> <b>Mostra a senha</b>
                    <script>
                        function Toggle() {
                            var temp = document.getElementById("senha");
                            if (temp.type === "password") {
                                temp.type = "text";
                            } else {
                                temp.type = "password";
                            }
                        }
                    </script>
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>

                </div>
               
                <br>
                <div class="row">
                    <div class="col">
                        <input type="submit"  hrefvalue="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="<?= URL ?>/usuarios/entrar">Você não tem uma conta? Entre nesse grupo</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>