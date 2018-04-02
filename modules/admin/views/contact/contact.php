<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 08.03.18
 * Time: 12:20
 */

?>

<h1>Contact</h1>

<div class="row-fluid">
    <!-- block -->
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Values</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Small Title</th>
                        <th>Coordinats</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $model->titlePage ?></td>
                        <td><?= $model->descriptionPage ?></td>
                        <td><?= $model->smallTitlePage ?></td>
                        <td><?= $model->coordinats ?></td>
                        <td><a href="<?= \yii\helpers\Url::to('/admin/contact/edit')?>">Edit</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
