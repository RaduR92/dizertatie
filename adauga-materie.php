  <?php include('header.php'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Acasa</a>
        </li>
        <li class="breadcrumb-item active">Adauga Materie</li>
      </ol>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form class="form-horizontal">
            <fieldset>

            <legend>Adauga materie</legend>

            <div class="form-group">
              <label class="col-md-4 control-label" for="nume_materie">Nume materie</label>  
              <div class="col-md-4">
              <input id="nume_materie" name="nume_materie" type="text" placeholder="" class="form-control input-md" required="">
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="specializare">Specializare</label>  
              <div class="col-md-4">
              <input id="specializare" name="specializare" type="text" placeholder="" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="profesor_coordonator">Profesor Coordonator</label>
              <div class="col-md-4">
                <select id="profesor_coordonator" name="profesor_coordonator" class="form-control">
                  <option value="profesor_1">Profesor 1</option>
                  <option value="profesor_2">Profesor 2</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="adauga_materie"></label>
              <div class="col-md-4">
                <button id="adauga_materie" name="adauga_materie" class="btn btn-primary">Adauga Materie</button>
              </div>
            </div>

            </fieldset>
            </form>

        </div>
      </div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('footer.php'); ?>