<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 06.03.18
 * Time: 19:42
 */

use yii\helpers\Url;
print_r($info);
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
                        <th>Left Column</th>
                        <th>Center Column</th>
                        <th>Right Column</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $info->titlePage ?></td>
                        <td><?= $info->descriptionPage ?></td>
                        <td><?= $info->leftColumn ?></td>
                        <td>@<?= $info->centrColumn ?></td>
                        <td>@<?= $info->rightColumn ?></td>
                        <td><a href="<?= Url::to('/admin/about/edit')?>">Edit</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>