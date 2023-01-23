<?php load_templates('layouts/top') ?>
    <div class="content">
        <div class="panel-header <?=config('theme')['panel_color']?>">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php if(get_role(auth()->user->id)->name != 'User'): ?>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-info card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-interface-6"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Kwartir Cabang</p>
                                        <h4 class="card-title"><?=number_format($kwartir_cabang)?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-success card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-analytics"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Kwartir Ranting</p>
                                        <h4 class="card-title"><?=number_format($kwartir_ranting)?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">User</p>
                                        <h4 class="card-title"><?=number_format($users)?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h2>Selamat datang di aplikasi pendataan pramuka</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
<?php load_templates('layouts/bottom') ?>