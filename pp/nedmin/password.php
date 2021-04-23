<?php
include 'header.php';
$check_pass = $db->prepare("SELECT*FROM main");
$check_pass->execute();
$control_pass = $check_pass->rowCount();

$fetch_pass = $db -> prepare("SELECT * FROM main WHERE main_id=1");
$fetch_pass -> execute();

$fetch = $fetch_pass->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                <h3>Ayarlar Sayfası</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
            <?php if(@$_GET['insert_user'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                    <strong>Başarılı!</strong>Veriler başarılı bir şekilde kaydedildi.
                </div>
                <?php } elseif(@$_GET['insert_user'] == 'no'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                    <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } elseif(@$_GET['update_user'] == 'ok'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                    <strong>Başarılı!</strong>Veriler başarılı bir şekilde güncellendi.
                </div>
                <?php } elseif(@$_GET['update_user'] == 'no'){ ?>
                <div class="alert alert-success alert dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                    <strong>Hata!</strong>Bir sorunla karşılaşıldı.
                </div>
                <?php } ?>
            <form class="form-horizontal form-label-left" action="process.php" method="POST">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Eski Şifre</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="password"  name="passold"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>
    <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yeni Şifre</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="password"  name="passnew"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>

    <div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Yeni Şifre Tekrarı </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="password"  name="rpassnew"  required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>


    <div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button type="reset" class="btn btn-round btn-success">Temizle</button>
        <button type="submit" class="btn btn-round btn-success" name="update_user">Güncelle</button>           
    </div>
    </div>


</div>
</div>
</div>
</div>
</div>
</div>

<?php
include 'footer.php';
?>