<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Formulario de Portafolio</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo site_url() . 'dashboard/panel'; ?>">
                                            <span class="pcoded-micon"><i data-feather="home"></i></span>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/portafolio'; ?>">Listado de Portafolio</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Portafolio</a></li>
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
                                        <form enctype="multipart/form-data" method="post" action="<?php echo site_url() . "dashboard/portafolio/validate"; ?>">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <?php if (isset($obj_portafolio)) { ?>
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <input class="form-control" type="text" value="<?php echo isset($obj_portafolio->portafolio_id) ? $obj_portafolio->portafolio_id : ""; ?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                                            <input type="hidden" id="portafolio_id" name="portafolio_id" value="<?php echo isset($obj_portafolio->portafolio_id) ? $obj_portafolio->portafolio_id : ""; ?>">
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($obj_portafolio->name) ? $obj_portafolio->name : ""; ?>" class="input-xlarge-fluid" placeholder="Nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Descripción</label>
                                                        <textarea name="description" id="description" required=""><?php echo isset($obj_portafolio->description) ? $obj_portafolio->description : ""; ?></textarea>
                                                        <script>
                                                            CKEDITOR.replace('description');
                                                        </script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputState">Categoría</label>
                                                        <select name="category_id" id="category_id" class="form-control" required>
                                                            <option value="">[ Seleccionar ]</option>
                                                            <?php foreach ($obj_category as $value): ?>
                                                                <option value="<?php echo $value->category_id; ?>"
                                                                <?php
                                                                if (isset($obj_portafolio->category_id)) {
                                                                    if ($obj_portafolio->category_id == $value->category_id) {
                                                                        echo "selected";
                                                                    }
                                                                } else {
                                                                    echo "";
                                                                }
                                                                ?>><?php echo $value->name; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputState">Estado</label>
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="">[ Seleccionar ]</option>
                                                            <option value="1" <?php
                                                            if (isset($obj_portafolio)) {
                                                                if ($obj_portafolio->status == 1) {
                                                                    echo "selected";
                                                                }
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>Activo</option>
                                                            <option value="0" <?php
                                                            if (isset($obj_portafolio)) {
                                                                if ($obj_portafolio->status == 0) {
                                                                    echo "selected";
                                                                }
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <?php if (isset($obj_portafolio)) { ?>
                                                        <div class="form-group">
                                                            <label>Imagen 1</label><br/>
                                                            <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img1"; ?>' width="100" />
                                                            <input class="form-control" type="hidden" name="img_1" id="img_1" value="<?php echo isset($obj_portafolio) ? $obj_portafolio->img1 : ""; ?>">
                                                        </div>
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label>Imagen 1 (Tamaño 1000 x 600)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" value="Upload Imagen de Envio" name="image_file" id="image_file" onchange="upload_img();">
                                                            <label id="label_img" class="custom-file-label invalid">Elegir archivos...</label>
                                                            <div id="respose_img"></div>
                                                        </div>
                                                    </div>
<?php if (isset($obj_portafolio->img2)) { ?>
                                                        <div class="form-group">
                                                            <label>Imagen 2</label><br/>
                                                            <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img2"; ?>' width="100" />
                                                            <input class="form-control" type="hidden" name="img_2" id="img_2" value="<?php echo isset($obj_portafolio) ? $obj_portafolio->img2 : ""; ?>">
                                                        </div>
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label>Imagen 2 (Tamaño 1000 x 600)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" value="Upload Imagen de Envio" name="image_file2" id="image_file2" onchange="upload_img2();">
                                                            <label id="label_img2" class="custom-file-label invalid">Elegir archivos...</label>
                                                            <div id="respose_img2"></div>
                                                        </div>
                                                    </div>
<?php if (isset($obj_portafolio->img3)) { ?>
                                                        <div class="form-group">
                                                            <label>Imagen 3</label><br/>
                                                            <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img3"; ?>' width="100" />
                                                            <input class="form-control" type="hidden" name="img_3" id="img_3" value="<?php echo isset($obj_portafolio) ? $obj_portafolio->img3 : ""; ?>">
                                                        </div>
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label>Imagen 3 (Tamaño 1000 x 600)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" value="Upload Imagen de Envio" name="image_file3" id="image_file3"  onchange="upload_img3();">
                                                            <label id="label_img3" class="custom-file-label invalid">Elegir archivos...</label>
                                                            <div id="respose_img3"></div>
                                                        </div>
                                                    </div>
<?php if (isset($obj_portafolio->img4)) { ?>
                                                        <div class="form-group">
                                                            <label>Imagen 4</label><br/>
                                                            <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img4"; ?>' width="100" />
                                                            <input class="form-control" type="hidden" name="img_4" id="img_4" value="<?php echo isset($obj_portafolio) ? $obj_portafolio->img4 : ""; ?>">
                                                        </div>
                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <label>Imagen 4 (Tamaño 1000 x 600)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" value="Upload Imagen de Envio" name="image_file4" id="image_file4"  onchange="upload_img4();">
                                                            <label id="label_img4" class="custom-file-label invalid">Elegir archivos...</label>
                                                            <div id="respose_img4"></div>
                                                        </div>
                                                    </div>
                                                    <?php if (isset($obj_portafolio->img5)) { ?>
                                                        <div class="form-group">
                                                            <label>Imagen 5</label><br/>
                                                            <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img5"; ?>' width="100" />
                                                            <input class="form-control" type="hidden" name="img_5" id="img_5" value="<?php echo isset($obj_portafolio) ? $obj_portafolio->img5 : ""; ?>">
                                                        </div>
<?php } ?>
                                                    <div class="form-group">
                                                        <label>Imagen 5 (Tamaño 1000 x 600)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" value="Upload Imagen de Envio" name="image_file5" id="image_file5"  onchange="upload_img5();">
                                                            <label id="label_img5" class="custom-file-label invalid">Elegir archivos...</label>
                                                            <div id="respose_img5"></div>
                                                        </div>
                                                    </div>
                                                    <?php if (isset($obj_portafolio->img6)) { ?>
                                                        <div class="form-group">
                                                            <label>Imagen 6</label><br/>
                                                            <img src='<?php echo site_url() . "static/cms/img/portafolio/$obj_portafolio->portafolio_id/$obj_portafolio->img6"; ?>' width="100" />
                                                            <input class="form-control" type="hidden" name="img_6" id="img_6" value="<?php echo isset($obj_portafolio) ? $obj_portafolio->img6 : ""; ?>">
                                                        </div>
<?php } ?>
                                                    <div class="form-group">
                                                        <label>Imagen 6 (Tamaño 1000 x 600)</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" value="Upload Imagen de Envio" name="image_file6" id="image_file6"  onchange="upload_img6();">
                                                            <label id="label_img6" class="custom-file-label invalid">Elegir archivos...</label>
                                                            <div id="respose_img6"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <button class="btn btn-danger" type="reset" onclick="cancel_portafolio();">Cancelar</button>                    
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
<script src="<?php echo site_url() . 'static/cms/js/portafolio.js' ?>"></script>
