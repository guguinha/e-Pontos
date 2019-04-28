<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo.'s' ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?= 'Alterar dados do '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open('admin/usuarios/salvar_alteracoes');

                                foreach($usuarios as $usuario){
                            ?>
                            <div class="form-group">
                                    <label id="txt-nome">Nome do Usuário</label>
                                    <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Digite o nome do usuário..." value="<?php echo $usuario->nome ?>">
                            </div>
                            <!-- <div class="form-group">
                                    <label id="txt-email">Email</label>
                                    <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Digite o email do usuário..." value="<?php echo $usuario->email ?>">
                            </div> -->
                            <div class="form-group">
                                    <label id="txt-user">Login</label>
                                    <input type="text" id="txt-user" name="txt-user" class="form-control" placeholder="Digite o login do usuário..." value="<?php echo $usuario->login ?>">
                            </div>
                            <input type="hidden" name="txt-id" id="txt-id" value="<?php echo $usuario->id ?>" >
                            <button type="submit" class="btn btn-default">Atualizar</button>
                            <?php
                                //}
                                echo form_close();
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
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?= 'Imagem de destaque do '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row" style="padding-bottom:10px;">
                        <div class="col-lg-3 col-lg-offset-3">
                        <?php 
                            // if($usuario->img == 1){
                            //     echo img("assets/frontend/img/usuarios/".md5($usuario->id).".jpg"); 
                            // }else{
                                echo img("assets/frontend/img/semFoto.png"); 
                            // }
                        ?>
                        </div>  
                    </div>
                    <!-- /.row (nested) -->
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <?php 
                                $divopen = '<div class="form-group">';
                                $divclose = '</div>';
                                echo form_open_multipart('admin/usuarios/nova_foto');
                                echo form_hidden('id', md5($usuario->id));
                                echo $divopen;
                                $imagem= array('name' => 'userfile', 'id' => 'userfile', 'class' =>'form-control');
                                echo form_upload($imagem);
                                echo $divclose;
                                echo $divopen;
                                $botao= array('name' => 'btn-adicionar', 'id' => 'btn-adicionar', 'class' =>'btn btn-default', 'value' => 'Adicionar nova Imagem');
                                echo form_submit($botao);
                                echo $divclose;
                                echo form_close();
                            ?>
                        </div>
                        
                    </div> -->
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?= 'Alterar Senha do '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open('admin/usuarios/salvar_nova_senha');

                                //foreach($usuarios as $usuario){
                            ?>
                            <div class="form-group">
                                    <label id="txt-senha">Nova senha</label>
                                    <input type="password" id="txt-senha" name="txt-senha" class="form-control" >
                            </div>
                            <div class="form-group">
                                    <label id="txt-confir-senha">Confirmar nova senha</label>
                                    <input type="password" id="txt-confir-senha" name="txt-confir-senha" class="form-control" >
                            </div>
                            <input type="hidden" name="txt-id" id="txt-id" value="<?php echo $usuario->id ?>" >
                            <button type="submit" class="btn btn-default">Atualizar Senha</button>
                            <?php
                                }//fechamento do foreach
                                echo form_close();
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