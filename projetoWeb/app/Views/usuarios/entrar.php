<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Entre aqui
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preencha o formulário abaixo para entrar na Detran</small></p>

            <form name="cadastrar" method="POST" action="<?= URL ?>/usuarios/entrar" class="mt-4">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>

                    <input type="text" name="nome" id="nome" class="form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['nome'] ?>">
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" id="email" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?> " value="<?= $dados['email'] ?>">
                    <div class="invalid-feedback">
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="estado">Estado(UF) de localização:<sup class="text-danger">*</sup>
                        <select class="form-select <?= $dados['estado_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['estado'] ?>" name="estado" id="estado" aria-label="Default select 

example">


                            <option selected>AC</option>


                            <option>AM</option>


                            <option>PA</option>


                            <option>RO</option>


                            <option>RR</option>


                            <option>AP</option>


                            <option>TO</option>


                            <option>MA</option>

                            <option>PI(π)</option>


                            <option>CE</option>


                            <option>PE</option>


                            <option>RN</option>


                            <option>PB</option>


                            <option>BA</option>


                            <option>AL</option>


                            <option>SE</option>


                            <option>MT</option>


                            <option>MS</option>


                            <option>GO</option>


                            <option>DF</option>


                            <option>MG</option>


                            <option>SP</option>


                            <option>RJ</option>


                            <option>ES</option>


                            <option>PR</option>


                            <option>SC</option>


                            <option>RS</option>


                        </select>

                    </label>


                    <div class="invalid-feedback">
                        <?= $dados['estado_erro'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" id="senha" class="form-control <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['senha'] ?>">
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

                <div class="form-group">
                    <label for="confirmar_senha">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control <?= $dados['confirmar_senha_erro'] ? 'is-invalid' : '' ?>" value="<?= $dados['confirmar_senha'] ?>">
                    <div class="invalid-feedback">
                        <?= $dados['confirmar_senha_erro'] ?>
                    </div>
                    <input type="checkbox" onclick="Toggle2()"> <b>Mostra a senha confirmada</b>
                    <script>
                        function Toggle2() {
                            var temp = document.getElementById("confirmar_senha");
                            if (temp.type === "password") {
                                temp.type = "text";
                            } else {
                                temp.type = "password";
                            }
                        }
                    </script>
                </div>


                <br>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Entrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="<?= URL ?>/usuarios/cadastrar">Você tem uma conta? Faça o cadastro</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>