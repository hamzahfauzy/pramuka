<table cellspacing="0" cellpadding="5" style="width:100%;" align="center">
    <tr>
        <td width="295" style="vertical-align:top;border:1px solid #000;border-radius:8px;">
            <h3 align="center" style="padding:0;margin:0;">KARTU TANDA ANGGOTA</h3>
            <hr>
            <table>
                <tr>
                    <td rowspan="3" style="width:100px">
                        <img src="<?=$logo?>" alt="" style="width:100px;height:120px;">
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?=$user->name?></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td>:</td>
                                <td><?=$user->biodata->asal_sekolah?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?=$user->biodata->alamat_rumah?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
        <td width="10"></td>
        <td width="295"  style="vertical-align:top;border:1px solid #000;border-radius:8px;">
            <h3 align="center" style="padding:0;margin:0;">Catatan</h3>
            <hr>
            <ol>
                <li>Catatan 1</li>
                <li>Catatan 2</li>
                <li>Catatan 3</li>
                <li>Catatan 4</li>
            </ol>
        </td>
    </tr>
</table>