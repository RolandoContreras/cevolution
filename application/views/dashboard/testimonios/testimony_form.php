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
                    <form enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/testimonios/validate";?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <?php 
                                if(isset($obj_testimony)){ ?>
                                  <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" type="text" value="<?php echo isset($obj_testimony->testimony_id)?$obj_testimony->testimony_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                        <input type="hidden" id="testimony_id" name="testimony_id" value="<?php echo isset($obj_testimony->testimony_id)?$obj_testimony->testimony_id:"";?>">
                                  </div>
                            <?php } ?>
                            </div>
                          <div class="form-group col-md-6">
                              <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($obj_testimony->name)?$obj_testimony->name:"";?>" class="input-xlarge-fluid" placeholder="Cliente" required="">
                              </div>
                              <div class="form-group">
                                  <label>Descripción</label>
                                  <textarea name="description" id="description" required=""><?php echo isset($obj_testimony->description)?$obj_testimony->description:"";?></textarea>
                                    <script>
                                            CKEDITOR.replace('description');
                                    </script>
                              </div>
                          </div>
                          <div class="form-group col-md-6">
                              <?php 
                                  if(isset($obj_testimony)){ ?>
                                      <div class="form-group">
                                          <label>Imagen 1</label><br/>
                                          <img src='<?php echo site_url()."static/backoffice/img/testimonios/$obj_testimony->img";?>' width="100" />
                                          <input class="form-control" type="hidden" name="img_2" id="img_2" value="<?php echo isset($obj_testimony)?$obj_testimony->img:"";?>">
                                      </div>
                            <?php } ?>
                              <div class="form-group">
                                    <label>Imagen 1 (Tamaño 120 x 120)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" value="Upload Imagen de Envio" name="image_file" id="image_file">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    </div>
                              </div>
                              <div class="form-group">
                                <label>Web</label>
                                <input class="form-control" type="text" id="web" name="web" value="<?php echo isset($obj_testimony->web)?$obj_testimony->web:"";?>" class="input-xlarge-fluid" placeholder="Web" required="">
                              </div>
                              <div class="form-group">
                                <label for="inputState">Estado</label>
                                <select name="active" id="active" class="form-control" required="">
                                     <option value="">[ Seleccionar ]</option>
                                      <option value="1" <?php if(isset($obj_testimony)){
                                          if($obj_testimony->active == 1){ echo "selected";}
                                      }else{echo "";} ?>>Activo</option>
                                      <option value="0" <?php if(isset($obj_testimony)){
                                          if($obj_testimony->active == 0){ echo "selected";}
                                      }else{echo "";} ?>>Inactivo</option>
                                </select>
                            </div>
                              
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-danger" type="reset" onclick="cancel_testimony();">Cancelar</button>                    
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
<script src="<?php echo site_url().'static/cms/js/testimony.js'?>"></script>
