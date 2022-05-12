<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <h1>Feed de Noticias via REST API</div>
        </div>
        
        <div class="row">
            <?php foreach($data as $row) : ?>
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <div class="card-body">
                            <p>ID: <?= $row['id'] ?></p>
                            <p>Título: <?= $row['title'] ?></p>
                            <p>Título: <?= $row['corpo'] ?></p>
                            <p>Status: <?= $row['status'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
