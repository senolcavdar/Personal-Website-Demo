<?php
include 'header.php';

$check_settings = $db->prepare("SELECT*FROM site_settings");
$check_settings->execute();
$control_settings = $check_settings->rowCount();

$fetch_settings = $db->prepare("SELECT * FROM site_settings WHERE settings_id=1");
$fetch_settings->execute();

$fetch = $fetch_settings->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>AYARLAR SAYFASI</h3>
      </div>


    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <?php if (@$_GET['insert_se'] == 'ok') { ?>
            <div class="alert alert-success alert dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
              </button>
              <strong>Başarılı!</strong>Veriler başarılı bir şekilde kaydedildi.
            </div>
          <?php } elseif (@$_GET['insert_se'] == 'no') { ?>
            <div class="alert alert-warning alert dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
              </button>
              <strong>Hata!</strong>Bir sorunla karşılaşıldı.
            </div>
          <?php } elseif (@$_GET['update_se'] == 'ok') { ?>
            <div class="alert alert-success alert dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
              </button>
              <strong>Başarılı!</strong>Veriler başarılı bir şekilde güncellendi.
            </div>
          <?php } elseif (@$_GET['update_se'] == 'no') { ?>
            <div class="alert alert-warning alert dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
              </button>
              <strong>Hata!</strong>Bir sorunla karşılaşıldı.
            </div>
          <?php } ?>
          <?php if (@$_GET['updatepass'] == 'no'){?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  >
                    <strong>Hata!</strong>  Girilen şifre eski şifre ile aynı!
                    <button type="button" style="margin-top: 3px;" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div>
        <?php } elseif(@$_GET['updatepass'] == 'hasadmin'){?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  >
                    <strong>Hata!</strong>  Bu kayıt mevcut.
                    <button type="button" style="margin-top: 3px;" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div> 

        <?php } elseif (@$_GET['updatepass'] == 'lowchar'){?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  >
                    <strong>Hata!</strong> Şifreniz 6 karakterden kısa.
                    <button type="button" style="margin-top: 3px;" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div> 


        <?php } elseif (@$_GET['updatepass'] == 'inequal'){ ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert"  >
                    <strong>Hata!</strong> Yeni şifre ve yeni şifre tekrarı aynı değil.
                    <button type="button" style="margin-top: 3px;" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true">×</span>
                    </button>
        </div> 
        <?php } ?>

          <form class="form-horizontal form-label-left" action="process.php" method="POST">
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="site_title" value='<?php echo $fetch['site_title'] ?>' required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel">Sayfa Logosu </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="logo" value='<?php echo $fetch['logo'] ?>' required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <hr>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Eski Şifre</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yeni Şifre</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="passnew" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yeni Şifre Tekrarı </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="rpassnew" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="reset" class="btn btn-round btn-success">Temizle</button>
                <?php if ($control_settings == 1) { ?>
                  <button type="submit" class="btn btn-round btn-success" name="update_settings">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-round btn-warning" name="insert_settings">Ekle</button>
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