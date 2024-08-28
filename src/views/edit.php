<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphacode - edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/styles/index.css">
</head>

<body>
    <nav class="bg-alphacode d-flex align-items-center">
        <img src="/public/assets/images/logo_alphacode.png" alt="logo alphacode">
        <h1 class="text-white mx-4">Cadastro de contatos</h1>
    </nav>

    <form onsubmit="updateContact(event, this)" class="container-fluid p-5">
        <section class="row">
            <section class="col-md-6">
                <section class="mb-4" id="input-area">
                    <label for="name" class="form-label fw-semibold fs-5">Nome completo</label>
                    <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="name" name="name" value="<?=$nome ?>" required>
                </section>

                <section class="mb-4" id="input-area">
                    <label for="email" class="form-label fw-semibold fs-5">E-mail</label>
                    <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="email" name="email" value="<?=$email ?>" required>
                </section>

                <section class="mb-4" id="input-area">
                    <label for="telefone" class="form-label fw-semibold fs-5">Telefone para contato</label>
                    <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="telefone" name="telefone" value="<?=$telefone?>" required>
                </section>
            </section>

            <section class="col-md-6">
                <section class="mb-4" id="input-area">
                    <label for="dataNascimento" class="form-label fw-semibold fs-5">Data de nascimento</label>
                    <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="dataNascimento" name="dataNascimento" value="<?=$dataNascimento?>" required>
                </section>

                <section class="mb-4" id="input-area">
                    <label for="profissao" class="form-label fw-semibold fs-5">Profissao</label>
                    <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="profissao" name="profissao" value="<?=$profissao?>" required>
                </section>

                <section class="mb-4" id="input-area">
                    <label for="celular" class="form-label fw-semibold fs-5">Celular para contato</label>
                    <input type="text" class="form-control alphacode-input rounded-0 p-0 py-2 fs-4" id="celular" name="celular" value="<?=$celular?>" required>
                </section>
            </section>

            <section class="col-md-6">
                <section class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input fs-4" id="receberWhatsapp">
                    <label class="form-check-label fs-4" for="receberWhatsapp">Número de celular possui Whatsapp</label>
                </section>

                <section class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input fs-4" id="receberSms">
                    <label class="form-check-label fs-4" for="receberSms">Enviar notificações por SMS</label>
                </section>
            </section>

            <section class="col-md-6">
                <section class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input fs-4" id="receberEmail">
                    <label class="form-check-label fs-4" for="receberEmail">Enviar notificações por E-mail</label>
                </section>
            </section>
        </section>
        <span class="w-100 d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-alphacode px-3 py-2 fs-4 fw-semibold">Atualizar contato</button>
        </span>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="/public/assets/js/services/form.js"></script>
</body>

</html>