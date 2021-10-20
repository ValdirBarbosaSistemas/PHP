<?php
/*
 * ARRAY_KEYS = Serve para criar um SEGUNDO ARRAY SOMENTE COM AS CHAVES
 * OBS: ELE NÃO ALTERA O ARRAY ORIGINAL
 * ARRAY_VALUES = Serve para criar um SEGUNDO ARRAY SOMENTE COM OS VALORES
 */

$array1 = [
    'nome' => 'Aline Cibelli',
    'idade' => 35,
    'empresa' => 'Eco construções',
    'profissao' => 'Secretaria Executiva',
    'cor' => 'Rosa'
];

$chaves = array_keys($array1);
print_r($chaves);

$valores = array_values($array1);
print_r($valores);
?>
<table border="1">
    <?php foreach ($array1 as $chave => $valor): ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<table border="1">
    <tr>
        <?php foreach ($chaves as $chave): ?>
            <th>
                <?php echo $chave; ?>
            </th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($valores as $valor): ?>
            <td>
                <?php echo $valor; ?>
            </td>
        <?php endforeach; ?>
    </tr>
</table>