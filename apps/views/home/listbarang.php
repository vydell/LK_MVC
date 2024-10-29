<table>
    <tr>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Quantity</th>
    </tr>
    <?php foreach ($data as $item) : ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['nama']; ?></td>
            <td><?= $item['qty']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>