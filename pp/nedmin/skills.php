<?php
include 'header.php';
?>

<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>YETENEK SAYFASI</h3>
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
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sayfa Açıklaması </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input  class="form-control col-md-7 col-xs-12"
            name="desc" placeholder="Sayfa Açıklaması" required="required" type="text"> 
    </div>
  </div>

  <hr>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">HTML </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="java"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Java </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="html"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">JavaScript </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="javas"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>

  <hr>

  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">HTML Sayaç </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="html_counter"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Java Sayaç </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="java_counter"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">JavaScript Sayaç </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="javas_counter"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
      <button type="reset" class="btn btn-round btn-success">Temizle</button>
      <button id="send" type="submit" class="btn btn-round btn-danger" name="skills_save" >Gönder</button>
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