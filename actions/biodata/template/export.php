<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <?php 
            foreach($fields as $field): 
                $label = $field;
                if(is_array($field))
                {
                    $label = $field['label'];
                }
                $label = _ucwords($label);
            ?>
            <th><?=$label?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datas as $index => $data): ?>
        <tr>
            <td>
                <?=$index+1?>
            </td>
            <?php 
            foreach($fields as $key => $field): 
                if(!is_array($field))
                {
                    $key = $field;
                }
            ?>
            <td><?=$data->{$key}?></td>
            <?php endforeach ?>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>