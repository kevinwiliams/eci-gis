<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Papers */

$this->title = $model->child_name;//. ' - '. $model->paper_id;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="papers-view">

    

    <p>
        <?= Html::a('Edit Paper', ['update', 'id' => $model->paper_id], ['class' => 'btn btn-primary']) ?>
        <?php /*echo Html::a('Delete', ['delete', 'id' => $model->paper_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) */?>
    </p>

<h1><?= Html::encode($this->title) ?></h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <h2>
              <?= $model->paperEci->eci_name ?>  <small> <a href="?r=eci/update&id=<?= $model->paperEci->eci_id?>">Edit</a></small>
            </h2>
            <h3>
              <?= "Teacher: ". $model->paperTeacher->teacher_name ?> <small><a href="?r=teachers/update&id=<?= $model->paperTeacher->teacher_id?>">Edit</a></small>
            </h3>
            <h4>
              <?= $model->paperParish->parish_name ?>
            </h4>
               <br>         
            
            <p>Gender:
              <?= $model->gender ?>
            </p>
            <p>Attendance:
              <?= $model->attendance ?>
            </p>
          </div>
          <div class="col-md-6">
            <table cellspacing="0" cellpadding="0" class="table table-condensed">
              <col width="95">
              <col width="64">
              <tr>
                <td><h5>Section 1</h5></td>
                <td width="64" align="right" style="color: #F00"><h4>
                <?php 

                echo $sect1 = $model->item_1 + $model->item_2 + $model->item_3 + $model->item_4 + $model->item_5 + $model->item_6 + $model->item_7 + $model->item_8 + $model->item_9 + $model->item_10; //$sectionOne ?></h4></td>
              </tr>
              <tr>
                <td><h5>Section 2</h5></td>
                <td align="right" style="color: #F00"><h4>
                    <?php
                          echo $sect2 = $model->item_11 + $model->item_12 + $model->item_13 + $model->item_14 + $model->item_15 + $model->item_16 + $model->item_17 + $model->item_18 + $model->item_19 + $model->item_20;
                    ?>
                </h4></td>
              </tr>
              <tr>
                <td><h5>Section 3</h5></td>
                <td align="right" style="color: #F00"><h4>
                  <?php 

                echo $sect3 = $model->item_21 + $model->item_22 + $model->item_23 + $model->item_24 + $model->item_25 + $model->item_26 + $model->item_27 + $model->item_28 + $model->item_29 + $model->item_30; //$sectionOne ?>

                </h4></td>
              </tr>
              <tr>
                <td><h5>Section 4</h5></td>
                <td align="right" style="color: #F00"><h4>
                  <?php 

                echo $sect4 = ($model->item_31 + $model->item_32 + $model->item_33 + $model->item_34 + $model->item_35)/2; //$sectionOne ?>

                </h4></td>
              </tr>
              <tr>
                <td><h5>Section 5</h5></td>
                <td align="right" style="color: #F00"><h4>
                  <?php 

                echo  $sect5 = ($model->item_36 + $model->item_37 + $model->item_38 + $model->item_39 + $model->item_40)/2; //$sectionOne ?>

                </h4></td>
              </tr>
              <tr>
                <td><h4>Total</h4></td>
                <td align="right" style="color: #F00"><h4>
                  <?= $sect1 + $sect2 + $sect3 + $sect4 + $sect5; ?> 

                </h4></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h3>Socio-Emotional Skills</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">
              <col width="154">
              <tr>
                <td width="85"><strong>Item 1</strong></td>
                <td width="154" align="center"><?= $model->item_1 ?></td>
              </tr>
              <tr>
                <td><strong>Item 2</strong></td>
                <td align="center"><?= $model->item_2 ?></td>
              </tr>
              <tr>
                <td><strong>Item 3</strong></td>
                <td align="center"><?= $model->item_3 ?></td>
              </tr>
              <tr>
                <td><strong>Item 4</strong></td>
                <td align="center"><?= $model->item_4 ?></td>
              </tr>
              <tr>
                <td><strong>Item 5</strong></td>
                <td align="center"><?= $model->item_5 ?></td>
              </tr>
              <tr>
                <td><strong>Item 6</strong></td>
                <td align="center"><?= $model->item_6 ?></td>
              </tr>
              <tr>
                <td><strong>Item 7</strong></td>
                <td align="center"><?= $model->item_7 ?></td>
              </tr>
              <tr>
                <td><strong>Item 8</strong></td>
                <td align="center"><?= $model->item_8 ?></td>
              </tr>
              <tr>
                <td><strong>Item 9</strong></td>
                <td align="center"><?= $model->item_9 ?></td>
              </tr>
              <tr>
                <td><strong>Item 10</strong></td>
                <td align="center"><?= $model->item_10 ?></td>
              </tr>
            </table>
          </div>
          <div class="col-md-3">
            <h3>Early Literacy Skills</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">
              <col width="154">
              <tr>
                <td width="85"><strong>Item 11</strong></td>
                <td width="154" align="center"><?= $model->item_11 ?></td>
              </tr>
              <tr>
                <td><strong>Item 12</strong></td>
                <td align="center"><?= $model->item_12 ?></td>
              </tr>
              <tr>
                <td><strong>Item 13</strong></td>
                <td align="center"><?= $model->item_13 ?></td>
              </tr>
              <tr>
                <td><strong>Item 14</strong></td>
                <td align="center"><?= $model->item_14 ?></td>
              </tr>
              <tr>
                <td><strong>Item 15</strong></td>
                <td align="center"><?= $model->item_15 ?></td>
              </tr>
              <tr>
                <td><strong>Item 16</strong></td>
                <td align="center"><?= $model->item_16 ?></td>
              </tr>
              <tr>
                <td><strong>Item 17</strong></td>
                <td align="center"><?= $model->item_17 ?></td>
              </tr>
              <tr>
                <td><strong>Item 18</strong></td>
                <td align="center"><?= $model->item_18 ?></td>
              </tr>
              <tr>
                <td><strong>Item 19</strong></td>
                <td align="center"><?= $model->item_19 ?></td>
              </tr>
              <tr>
                <td><strong>Item 20</strong></td>
                <td align="center"><?= $model->item_20 ?></td>
              </tr>
            </table>
          </div>
          <div class="col-md-3">
            <h3>Early Numeracy Skills</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">
              <col width="154">
              <tr>
                <td width="85"><strong>Item 21</strong></td>
                <td width="154" align="center"><?= $model->item_21 ?></td>
              </tr>
              <tr>
                <td><strong>Item 22</strong></td>
                <td align="center"><?= $model->item_22 ?></td>
              </tr>
              <tr>
                <td><strong>Item 23</strong></td>
                <td align="center"><?= $model->item_23 ?></td>
              </tr>
              <tr>
                <td><strong>Item 24</strong></td>
                <td align="center"><?= $model->item_24 ?></td>
              </tr>
              <tr>
                <td><strong>Item 25</strong></td>
                <td align="center"><?= $model->item_25 ?></td>
              </tr>
              <tr>
                <td><strong>Item 26</strong></td>
                <td align="center"><?= $model->item_26 ?></td>
              </tr>
              <tr>
                <td><strong>Item 27</strong></td>
                <td align="center"><?= $model->item_27 ?></td>
              </tr>
              <tr>
                <td><strong>Item 28</strong></td>
                <td align="center"><?= $model->item_28 ?></td>
              </tr>
              <tr>
                <td><strong>Item 29</strong></td>
                <td align="center"><?= $model->item_29 ?></td>
              </tr>
              <tr>
                <td><strong>Item 30</strong></td>
                <td align="center"><?= $model->item_30 ?></td>
              </tr>
            </table>
          </div>
          <div class="col-md-3">
            <h3>Practical</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">
              <col width="154">
              <tr>
                <td width="85"><strong>Item 31</strong></td>
                <td width="154" align="center"><?= $model->item_31 ?></td>
              </tr>
              <tr>
                <td><strong>Item 32</strong></td>
                <td align="center"><?= $model->item_32 ?></td>
              </tr>
              <tr>
                <td><strong>Item 33</strong></td>
                <td align="center"><?= $model->item_33 ?></td>
              </tr>
              <tr>
                <td><strong>Item 34</strong></td>
                <td align="center"><?= $model->item_34 ?></td>
              </tr>
              <tr>
                <td><strong>Item 35</strong></td>
                <td align="center"><?= $model->item_35 ?></td>
              </tr>
              <tr>
                <td><strong>Item 36</strong></td>
                <td align="center"><?= $model->item_36 ?></td>
              </tr>
              <tr>
                <td><strong>Item 37</strong></td>
                <td align="center"><?= $model->item_37 ?></td>
              </tr>
              <tr>
                <td><strong>Item 38</strong></td>
                <td align="center"><?= $model->item_38 ?></td>
              </tr>
              <tr>
                <td><strong>Item 39</strong></td>
                <td align="center"><?= $model->item_39 ?></td>
              </tr>
              <tr>
                <td><strong>Item 40</strong></td>
                <td align="center"><?= $model->item_40 ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br /><br />  
    <div class="row">
    <div class="col-sm-10">
      <a href="?r=papers/view&id=<?= $model->paper_id - 1 ?>"><button type="button" class="btn btn-info btn-lg">Previous</button></a>
    </div>
    <div class="col-sm-2">
      <a href="?r=papers/view&id=<?= $model->paper_id + 1 ?>"><button type="button" class="btn btn-info btn-lg">Next</button></a>
    </div>
    </div>
  
 

</div>
