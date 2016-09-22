
<?php

//use  yii\web\Session;

$session = Yii::$app->session;

    if (!$session->isActive) {
       $session->open();
    }



/* @var $this yii\web\View */

$this->title = 'ECC - Age 4 Assessment Papers';

?>
<div class="site-index">

   <div class="jumbotron">
        <h1>Welcome to the ECC GIS Data Entry System!</h1>

        <p class="lead">Please watch the below video before you begin.</p>
        
    </div>
    <div class="body-content">
    <div class="row">
        <div class="col-md-4">
       
        <select class="form-control" name="region" id="region">
            <option value="index">View All</option>
            <option value="region1" <?= (isset($_SESSION['region']) && ($_SESSION['region'] == 1) ? "selected" : ""); ?> >Region 1</option>
            <option value="region2" <?= (isset($_SESSION['region']) && ($_SESSION['region'] == 2) ? "selected" : ""); ?> >Region 2</option>
            <option value="region3" <?= (isset($_SESSION['region']) && ($_SESSION['region'] == 3) ? "selected" : ""); ?> >Region 3</option>
            <option value="region4" <?= (isset($_SESSION['region']) && ($_SESSION['region'] == 4) ? "selected" : ""); ?> >Region 4</option>
            <option value="region5" <?= (isset($_SESSION['region']) && ($_SESSION['region'] == 5) ? "selected" : ""); ?> >Region 5</option>
            <option value="region6" <?= (isset($_SESSION['region']) && ($_SESSION['region'] == 6) ? "selected" : ""); ?> >Region 6</option>
        </select>

        <br /><br />
        <p><a class="btn btn-lg btn-success" href="?r=gis/index" id="goLink">Go ></a></p>
        </div>

    </div>
    </div>
<!--
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>

    -->
</div>

<?php
$this->registerJs("

    $('#region').on('change', function() {

        //alert( $('#region').val() );
        var region = $('#region').val();
        
        $('#goLink').prop('href','?r=gis/'+region);

    })

    
");
?>

