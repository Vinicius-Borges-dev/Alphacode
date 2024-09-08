<?php

foreach ($data as $contato) {
?>

    <tr>
        <td class="fs-5 text-center text-nowrap p-4"><?= $contato['nome'] ?></td>
        <td class="fs-5 text-center text-nowrap p-4">
            <?php 
                $date = explode('-', $contato['dataNascimento']);
                echo $date[2] . "/" . $date[1] . "/" . $date[0];
            ?>
        </td>
        <td class="fs-5 text-center text-nowrap p-4"><?= $contato['email'] ?></td>
        <td class="fs-5 text-center text-nowrap p-4"><?= $contato['celular'] ?></td>
        <td class="text-center" colspan='2'>
            <span class="">
                <button class="border border-0 bg-transparent" onclick="showUpdateForm(<?=$contato['id']?>)">
                    <img src="/public/assets/images/editar.png">
                </button>
                <button class="border border-0 bg-transparent" onclick="deleteContact(<?=$contato['id']?>)">
                    <img src="/public/assets/images/excluir.png">
                </button>
            </span>

        </td>
    </tr>

<?php
}

?>