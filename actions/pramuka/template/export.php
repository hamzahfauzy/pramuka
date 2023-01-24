<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Daerah</th>
            <th>Cabang</th>
            <th>Ranting</th>
            <th>Sekolah</th>
            <th>No. Anggota</th>
            <th>Golongan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $index => $data): ?>
        <tr>
            <td>
                <?=$index+1?>
            </td>
            <td><?=$data->nama?></td>
            <td><?=$data->daerah?></td>
            <td><?=$data->cabang?></td>
            <td><?=$data->ranting?></td>
            <td><?=$data->sekolah?></td>
            <td><?=$data->no_anggota?></td>
            <td><?=$data->golongan?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>