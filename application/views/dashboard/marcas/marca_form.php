<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Formulario de Testomonios</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                      <a href="<?php echo site_url().'dashboard/panel';?>">
                          <span class="pcoded-micon"><i data-feather="home"></i></span>
                      </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/testimonios';?>">Listado de Testimonios</a></li>
                  <li class="breadcrumb-item"><a href="#!">Testimonio</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="main-body">
          <div class="page-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Datos</h5>
                  </div>
                  <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/marcas/validate";?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <?php 
                                if(isset($obj_marcas)){ ?>
                                  <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" type="text" value="<?php echo isset($obj_marcas->marca_id)?$obj_marcas->marca_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                        <input type="hidden" id="marca_id" name="marca_id" value="<?php echo isset($obj_marcas->marca_id)?$obj_marcas->marca_id:"";?>">
                                  </div>
                            <?php } ?>
                            </div>
                          <div class="form-group col-md-6">
                              <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($obj_marcas->name)?$obj_marcas->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
                              </div>
                              <div class="form-group">
                                <label for="inputState">Estado</label>
                                    <select name="active" id="active" class="form-control">
                                     <option value="">[ Seleccionar ]</option>
                                      <option value="1" <?php if(isset($obj_marcas)){
                                          if($obj_marcas->active == 1){ echo "selected";}
                                      }else{echo "";} ?>>Activo</option>
                                      <option value="0" <?php if(isset($obj_marcas)){
                                          if($obj_marcas->active == 0){ echo "selected";}
                                      }else{echo "";} ?>>Inactivo</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                              <?php 
                                  if(isset($obj_marcas)){ ?>
                                      <div class="form-group">
                                          <label>Imagen 1</label><br/>
                                          <img src='<?php echo site_url()."static/backoffice/img/marcas/$obj_marcas->img";?>' width="100" />
                                          <input class="form-control" type="hidden" name="img_2" id="img_2" value="<?php echo isset($obj_marcas)?$obj_marcas->img:"";?>">
                                      </div>
                            <?php } ?>
                              <div class="form-group">
                                    <label>Imagen 1 (Tamaño 126 x 102)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" value="Upload Imagen de Envio" name="image_file" id="image_file">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    </div>
                              </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-danger" type="reset" onclick="cancel_marca();">Cancelar</button>                    
                    </form>
                </div>
            </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo site_url().'static/cms/js/marca.js'?>"></script>
