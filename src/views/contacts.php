<?php 
foreach ($contatos as $contato) {
?>

    <tr>
        <td class="fs-4"><?=$contato['nome']?></td>
        <td class="fs-4"><?=$contato['dataNascimento']?></td>
        <td class="fs-4"><?=$contato['email']?></td>
        <td class="fs-4"><?=$contato['celular']?></td>
        <td> <img src="/public/assets/images/editar.png"></td>
        <td> <img src="/public/assets/images/excluir.png"></td>
    </tr>

<?php
}

?>