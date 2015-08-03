<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Blogs</h1>
<ul>
<?php foreach ($infos as $blog): ?>
    <li>
        <?= Html::encode("{$blog->title} ({$blog->content})") ?>
        
    </li>
<?php endforeach; ?>
</ul>

