<?php load_templates('layouts/top') ?>
    <div class="content">
        <div class="panel-header <?=config('theme')['panel_color']?>">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">User</h2>
                        <h5 class="text-white op-7 mb-2">Memanajemen data user</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <?php if(in_array(get_role(auth()->user->id)->name,['administrator','Admin'])): ?>
                        <a href="<?=routeTo('users/create',['role'=>'user'])?>" class="btn btn-secondary btn-round">Buat User</a>
                        <a href="<?=routeTo('users/export')?>" class="btn btn-primary btn-round">Export</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php if($success_msg): ?>
                            <div class="alert alert-success"><?=$success_msg?></div>
                            <?php endif ?>
                            <div class="table-responsive table-hover table-sales">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20px">#</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Kwartir Ranting</th>
                                            <th>Verifikasi</th>
                                            <th class="text-right">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($datas as $index => $data): ?>
                                        <tr>
                                            <td>
                                                <?=$index+1?>
                                            </td>
                                            <td><?=$data->name?></td>
                                            <td><?=$data->username?></td>
                                            <td><?=Form::getData('options-obj:ranting,id,nama',$data->ranting_id,true);?></td>
                                            <td><?=$data->verification_at?></td>
                                            <td>
                                                <?php /*
                                                <a href="<?=routeTo('users/detail',['id'=>$data->id])?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Biodata</a>
                                                */ ?>
                                                <?php if(is_allowed(get_route_path('users/print',[]),auth()->user->id)): ?>
                                                <a href="<?=routeTo('users/print',['id'=>$data->id])?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i> Cetak</a>
                                                <?php endif ?>
                                                <?php if(!$data->verification_at): ?>
                                                <a href="<?=routeTo('users/verification',['id'=>$data->id])?>" class="btn btn-sm btn-success"><i class="fas fa-user-check"></i> Verifikasi</a>
                                                <?php endif ?>
                                                <a href="<?=routeTo('users/edit',['id'=>$data->id,'role' => 'user'])?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                <a href="<?=routeTo('users/delete',['id'=>$data->id,'role' => 'user'])?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php load_templates('layouts/bottom') ?>