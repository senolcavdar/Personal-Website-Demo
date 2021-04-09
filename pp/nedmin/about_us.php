<?php
include 'header.php';
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

<form class="form-horizontal form-label-left" novalidate>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı 
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Sayfa Başlığı" required="required" type="text">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Biyografi </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12" rows="4" ></textarea>
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Facebook </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="facebook"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Instagram </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="instagram"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Twitter </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="twitter"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Github </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="github"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Linkedin </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="linkedin"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Discord </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="discord"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="reset" class="btn btn-round btn-success">Temizle</button>
      <button id="send" type="submit" class="btn btn-round btn-danger" name="about_us_save" >Gönder</button>
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