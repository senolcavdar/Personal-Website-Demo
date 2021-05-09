<?php
include 'header.php';

$check_skill = $db->prepare("SELECT*FROM about_me");
$check_skill->execute();
$control_skill = $check_skill->rowCount();

$fetch_skill = $db -> prepare("SELECT * FROM about_me WHERE about_id=1");
$fetch_skill -> execute();

$fetch = $fetch_skill->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>HAKKIMDA VE YETENEK SAYFASI</h3>
              </div>


            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                <?php if(@$_GET['insert'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Başarılı!</strong>Veriler başarılı bir şekilde kaydedildi.
                </div>
                <?php } elseif(@$_GET['insert'] == 'no'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } elseif(@$_GET['update'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                  </button>
                  <strong>Başarılı!</strong>Veriler başarılı bir şekilde güncellendi.
                </div>
                <?php } elseif(@$_GET['update'] == 'no'){ ?>
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
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['about_title'] ?>' name="about_title"  required="required" type="text">
    </div>
  </div>

  <hr>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Biyografi </label>
    <div class="col-md-6 col-sm-6 col-xs-12" >
        <textarea id="textarea" required="required" name="cv_title" class="form-control col-md-7 col-xs-12" rows="4" ><?php echo $fetch['cv_title'] ?></textarea>
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">CV
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="file" name="cv" required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <hr>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yetenekler Başlığı
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['skill_title'] ?>' name="skill_title" required="required" type="text">
    </div>
  </div>
  
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">1.Yetenek </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="first_skill" value='<?php echo $fetch['first_skill'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">2.Yetenek </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="second_skill" value='<?php echo $fetch['second_skill'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">3.Yetenek </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="third_skill" value='<?php echo $fetch['third_skill'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">1.Yetenek Sayacı </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="first_counter" value='<?php echo $fetch['first_counter'] ?>' required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">2.Yetenek Sayacı </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="second_counter" value='<?php echo $fetch['second_counter'] ?>'  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">3.Yetenek Sayacı </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="third_counter" value='<?php echo $fetch['third_counter'] ?>'  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>


  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="reset" class="btn btn-round btn-success">Temizle</button>

      <?php if ($control_skill == 1) { ?>
                  <button type="submit" class="btn btn-round btn-success" name="update_skills">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-round btn-warning" name="insert_skills">Ekle</button>
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