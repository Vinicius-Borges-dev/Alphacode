<?php 

foreach ($contatos as $contato) {
?>

    <tr>
        <td class="fs-4 text-nowrap"><?=$contato['nome']?></td>
        <td class="fs-4 text-center text-nowrap"><?=$contato['dataNascimento']?></td>
        <td class="fs-4 text-center text-nowrap"><?=$contato['email']?></td>
        <td class="fs-4 text-center text-nowrap"><?=$contato['celular']?></td>
        <td class="text-center"><button class="border border-0 bg-transparent" onclick="updateContact(<?=$contato['id']?>)"> <img src="/public/assets/images/editar.png"></button></td>
        <td class="text-center"><button class="border border-0 bg-transparent" onclick="deleteContact(<?=$contato['id']?>)"> <img src="/public/assets/images/excluir.png"></button></td>
    </tr>

<?php
}

?>