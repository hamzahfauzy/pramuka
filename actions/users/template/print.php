<div>
    <img src="<?=$kta_bg?>" style="width:100%;height:250px;object-fit:contain;">
    <table cellspacing="0" cellpadding="5" style="width:100%;position:absolute;top:20px;" align="center">
        <tr>
            <td style="vertical-align:top;border:1px solid #000;width:49%;height:240px;">
                <table style="margin-top:70px">
                    <tr>
                        <td rowspan="3" style="width:100px;vertical-align:bottom;">
                            <img src="<?=$logo?>" alt="" style="width:80px;height:100px;margin-left:10px;object-fit:cover;object-position:top;">
                            <br><br>
                        </td>
                        <td>
                            <table style="font-size:7px;font-weight:bold;">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?=$user->biodata->nama?></td>
                                </tr>
                                <tr>
                                    <td>NTA</td>
                                    <td>:</td>
                                    <td><?=$user->pramuka->no_anggota?></td>
                                </tr>
                                <tr>
                                    <td>Tempat / Tgl. Lahir</td>
                                    <td>:</td>
                                    <td><?=$user->biodata->tempat_lahir.' / '.$user->biodata->tanggal_lahir?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?=$user->biodata->alamat_rumah?></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td><?=$user->biodata->no_hp?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td><?=$user->biodata->agama?></td>
                                </tr>
                                <tr>
                                    <td>Golongan</td>
                                    <td>:</td>
                                    <td><?=$user->pramuka->golongan?></td>
                                </tr>
                                <tr>
                                    <td>Kwarran</td>
                                    <td>:</td>
                                    <td><?=$user->pramuka->ranting->nama?></td>
                                </tr>
                                <tr>
                                    <td>Kwarcab</td>
                                    <td>:</td>
                                    <td><?=$user->pramuka->cabang->nama?></td>
                                </tr>
                                <tr>
                                    <td>Kwarda</td>
                                    <td>:</td>
                                    <td><?=$user->pramuka->daerah->nama?></td>
                                </tr>
                                <tr>
                                    <td>Golongan Darah</td>
                                    <td>:</td>
                                    <td><?=$user->biodata->golongan_darah?></td>
                                </tr>
                                <tr>
                                    <td>Berlaku Hingga</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width:2%"></td>
            <td style="vertical-align:top;border:1px solid #000;width:49%">
                
            </td>
        </tr>
    </table>
</div>