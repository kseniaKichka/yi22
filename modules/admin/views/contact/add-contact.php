<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 06.03.18
 * Time: 19:42
 */

use yii\helpers\Url;

?>
<h1>About</h1>
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
                        Information is not exist.
                        <a href="<?= Url::to('/admin/contact/add')?>">Create now!</a>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>