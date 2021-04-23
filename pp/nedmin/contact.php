<?php
include 'header.php';

$check_contact = $db->prepare("SELECT*FROM contact");
$check_contact->execute();
$control_contact = $check_contact->rowCount();

$fetch_contact = $db -> prepare("SELECT * FROM contact WHERE contact_id=1");
$fetch_contact -> execute();

$fetch = $fetch_contact->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İLETİŞİM SAYFASI</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <?php if(@$_GET['insert_c'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Başarılı!</strong>Veriler başarılı bir şekilde kaydedildi.
                </div>
                <?php } elseif(@$_GET['insert_c'] == 'no'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } elseif(@$_GET['update_c'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Başarılı!</strong>Veriler başarılı bir şekilde güncellendi.
                </div>
                <?php } elseif(@$_GET['update_c'] == 'no'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } ?>
<form class="form-horizontal form-label-left" action="process.php" method="POST">

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['contact_title'] ?>' name="contact_title" required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Açıklaması </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea id="textarea" required="required"  class="form-control col-md-7 col-xs-12" rows="1" name="content" ><?php echo $fetch['content'] ?></textarea>
    </div>
  </div>
  <hr>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yerleşke </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="addresss"  value='<?php echo $fetch['addresss'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yerleşke Linki </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="addresss_link" value='<?php echo $fetch['addresss_link'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel">Telefon Numarası </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="gsm" required="required" value='<?php echo $fetch['gsm'] ?>' class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-Posta </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="email"  required="required" value='<?php echo $fetch['email'] ?>' class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="reset" class="btn btn-round btn-success">Temizle</button>
      <?php if ($control_contact == 1) { ?>
                  <button type="submit" class="btn btn-round btn-success" name="update_contact">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-round btn-warning" name="insert_contact">Ekle</button>
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