<?php
include 'header.php';

$check_main = $db->prepare("SELECT*FROM main");
$check_main->execute();
$control_main = $check_main->rowCount();

$fetch_main = $db -> prepare("SELECT * FROM main WHERE main_id=1");
$fetch_main -> execute();

$fetch = $fetch_main->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>HAKKIMDA SAYFASI</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <?php if(@$_GET['insert_m'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Başarılı!</strong>Veriler başarılı bir şekilde kaydedildi.
                </div>
                <?php } elseif(@$_GET['insert_m'] == 'no'){ ?>
                <div class="alert alert-warning alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } elseif(@$_GET['update_m'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Başarılı!</strong>Veriler başarılı bir şekilde güncellendi.
                </div>
                <?php } elseif(@$_GET['update_m'] == 'no'){ ?>
                <div class="alert alert-warning alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } ?>
<form class="form-horizontal form-label-left" action="process.php" method="POST">

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">İsim
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['main_title'] ?>' name="main_title"  required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Soyisim 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['main_title2'] ?>' name="main_title2"  required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">İş Adı
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['job_title'] ?>' name="job_title"  required="required" type="text">
    </div>
  </div>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Facebook </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="facebook" value='<?php echo $fetch['facebook'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Instagram </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="instagram" value='<?php echo $fetch['instagram'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Twitter </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="twitter" value='<?php echo $fetch['twitter'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Github </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="github" value='<?php echo $fetch['github'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Linkedin </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="linkedin" value='<?php echo $fetch['linkedin'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Discord </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="discord" value='<?php echo $fetch['discord'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="reset" class="btn btn-round btn-success">Temizle</button>
      <?php if ($control_main == 1) { ?>
                  <button type="submit" class="btn btn-round btn-success" name="update_main">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-round btn-warning" name="insert_main">Ekle</button>
                <?php } ?>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php
include 'footer.php';
?>