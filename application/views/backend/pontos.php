<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
        <!-- /.col-lg-6 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?= 'Lista '.$subtitulo.' de '.$usuario ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <style>
                            img{
                                width: 240px;
                            }
                        </style>
                            <?php 
                                $this->table->set_heading("Foto","Data","Hora","tipo","NSR","Alterar");
                                 foreach($pontos as $ponto){
                                    // if($publicacao->img == 1){
                                    //     $fotopub = img("assets/frontend/img/publicacao/".md5($publicacao->id).".jpg"); 
                                    // }else{
                                        $foto = img("assets/frontend/img/semFoto2.png"); 
                                    // }                                    
                                    $data = $ponto->data;
                                    $hora = $ponto->data;
                                    $tipo = $ponto->tipo;
                                    $nsr = $ponto->NSR;
                                    $alterar = anchor(base_url('admin/pontos/alterar/'.md5($ponto->id)),'<i class="fa fa-refresh fa-fw"></i> Alterar');

                                    $this->table->add_row($foto,$data,$hora,$tipo,$nsr,$alterar);
                                 }
                                $this->table->set_template(array(
                                    'table_open' => '<table class="table table-striped">'
                                ));
                                echo $this->table->generate();
                            ?>
                        </div>
                        
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
