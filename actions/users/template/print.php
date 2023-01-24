<div>
    <img src="<?=$kta_bg?>" style="width:100%;height:200px;object-fit:contain;">
    <table cellspacing="0" cellpadding="5" style="width:100%;position:absolute;top:20px;" align="center">
        <tr>
            <td style="vertical-align:top;border:1px solid #000;border-radius:8px;width:49%">
                <br>
                <br>
                <br>
                <table>
                    <tr>
                        <td rowspan="3" style="width:100px">
                            <img src="<?=$logo?>" alt="" style="width:100px;height:100px;">
                        </td>
                        <td>
                            <b><i>Nama</i></b><br>
                            <?=$user->name?>
                            <br>
                            <br>
                            <b><i>Asal Sekolah</i></b><br>
                            <?=$user->biodata->asal_sekolah?>
                            <br>
                            <br>
                            <b><i>Alamat</i></b><br>
                            <?=$user->biodata->alamat_rumah?>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
            </td>
            <td style="width:2%"></td>
            <td style="vertical-align:top;border:1px solid #000;border-radius:8px;width:49%">
                
            </td>
        </tr>
    </table>
</div>