<?php
use dosamigos\fileupload\FileUploadUI;
use pendalf89\filemanager\Module;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel pendalf89\filemanager\models\Mediafile */

$urlUpload = ['upload'];
$urlFilemanager = ['file/filemanager'];
if ($customPath) {
    $urlUpload['path'] = $customPath;
    $urlFilemanager['path'] = $customPath;
}

?>

<header id="header"><span class="glyphicon glyphicon-upload"></span> <?= Module::t('main', 'Upload manager') ?></header>

<div id="uploadmanager">
    <p><?= Html::a('← ' . Module::t('main', 'Back to file manager'), $urlFilemanager) ?></p>
    <?= FileUploadUI::widget([
        'model' => $model,
        'attribute' => 'file',
        'clientOptions' => [
            'autoUpload'=> Yii::$app->getModule('filemanager')->autoUpload,
        ],
        'url' => $urlUpload,
        'gallery' => false,
    ]) ?>
</div>