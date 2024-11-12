<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
    <!-- CSS -->
    <link href="<?php echo base_url(); ?>assets/css/materialize.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <section id="content">
        <div class="container">
            <div class="section">
                <div class="divider"></div>
                <!-- Basic Form -->
                <div id="basic-form" class="section">
                    <div id="table-datatables">
                        <h4 class="header">Ubah Barang</h4>
                        <hr>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card-panel">
                                    <div class="row">
                                        <form class="col s12" action="<?php echo base_url();?>barang/ubah/<?= $dataBarang->idBarang ?>" method="POST">
                                            <div class="row">
                                                <div class="input-field col s1">
                                                    <input id="name" name="idBarang" type="text" value="<?= $dataBarang->idBarang ?>" required readonly>
                                                    <label for="ID" class="active">ID</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="nama" name="namaBarang" type="text" value="<?= $dataBarang->namaBarang ?>" required>
                                                    <label for="namaBarang" class="active">Nama Barang</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s5">
                                                    <input id="harga" name="harga" type="text" value="<?= $dataBarang->harga ?>" required>
                                                    <label for="harga" class="active">Harga</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn cyan waves-effect waves-light" type="submit" name="action">Ubah
                                                        <i class="mdi-content-send right"></i>
                                                    </button>
                                                    <a href="<?php echo base_url()?>barang/dataBarang" class="btn red waves-effect waves-light right">Batal
                                                        <i class="mdi-content-undo right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Panggil JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
</body>
</html>
