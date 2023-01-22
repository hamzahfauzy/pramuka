<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kwartir Ranting</th>
            <th>Asal Sekolah</th>
            <th>No HP</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $index => $data): ?>
        <tr>
            <td>
                <?=$index+1?>
            </td>
            <td><?=$data->name?></td>
            <td><?=Form::getData('options-obj:ranting,id,nama',$data->ranting_id,true);?></td>
            <td><?=Form::getData('options-obj:biodata,user_id,asal_sekolah',$data->id,true);?></td>
            <td><?=Form::getData('options-obj:biodata,user_id,no_hp',$data->id,true);?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>