<section class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <section class="modal-dialog modal-xl">
        <section class="modal-content">
            <section class="modal-header">
                <h1 class="modal-title fs-5" id="updateModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </section>
            <section class="modal-body">
                <form onsubmit="sendForm(event, this, 'update')" class="container-fluid p-5">
                    <section class="mb-4" id="input-area">
                        <label for="name" class="form-label fw-semibold fs-5">Nome completo</label>
                        <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="name" name="name" value="<?= $contato['nome'] ?>" required>
                    </section>

                    <section class="mb-4" id="input-area">
                        <label for="email" class="form-label fw-semibold fs-5">E-mail</label>
                        <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="email" name="email" value="<?= $contato['email'] ?>" required>
                    </section>

                    <section class="mb-4" id="input-area">
                        <label for="telefone" class="form-label fw-semibold fs-5">Telefone para contato</label>
                        <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="telefone" name="telefone" value="<?= $contato['telefone'] ?>" required>
                    </section>
                    <section class="mb-4" id="input-area">
                        <label for="dataNascimento" class="form-label fw-semibold fs-5">Data de nascimento</label>
                        <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="dataNascimento" name="dataNascimento" value="<?= $contato['dataNascimento'] ?>" required>
                    </section>

                    <section class="mb-4" id="input-area">
                        <label for="profissao" class="form-label fw-semibold fs-5">Profissao</label>
                        <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="profissao" name="profissao" value="<?= $contato['profissao'] ?>" required>
                    </section>

                    <section class="mb-4" id="input-area">
                        <label for="celular" class="form-label fw-semibold fs-5">Celular para contato</label>
                        <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="celular" name="celular" value="<?= $contato['celular'] ?>" required>
                    </section>
                    <section class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input fs-4" id="receberWhatsapp" <?php if ($contato['receberWhatsapp']) echo 'checked'; ?>>
                        <label class="form-check-label fs-4" for="receberWhatsapp">Número de celular possui Whatsapp</label>
                    </section>

                    <section class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input fs-4" id="receberSms" <?php if ($contato['receberSms']) echo 'checked'; ?>>
                        <label class="form-check-label fs-4" for="receberSms">Enviar notificações por SMS</label>
                    </section>

                    <section class="col-md-6">
                        <section class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input fs-4" id="receberEmail" <?php if ($contato['receberEmail']) echo 'checked'; ?>>
                            <label class="form-check-label fs-4" for="receberEmail">Enviar notificações por E-mail</label>
                        </section>
                    </section>
                    <span class="w-100 d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-alphacode px-3 py-2 fs-4 fw-semibold" data-bs-dismiss="modal">Atualizar contato</button>
                    </span>
                </form>
            </section>
        </section>
    </section>
</section>
</section>
</section>