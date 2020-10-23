<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <h4 class="breadcrumb-item"><?php echo esc_html($title); ?></h4>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-tv"></i>
          </div>
          <div class="mr-5"> Elektronik</div><br>
          <p><?php echo $elektronik ?></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-tshirt"></i>
          </div>
          <div class="mr-5">Pakaian Pria</div><br>
          <p><?php echo $pakaian_pria ?></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-tshirt"></i>
          </div>
          <div class="mr-5">Pakaian Wanita</div><br>
          <p><?php echo $pakaian_wanita ?></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-tshirt"></i>
          </div>
          <div class="mr-5">Pakaian Anak</div><br>
          <p><?php echo $pakaian_anak ?></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-futbol"></i>
          </div>
          <div class="mr-5">Olahraga</div><br>
          <p><?php echo $olahraga ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->


