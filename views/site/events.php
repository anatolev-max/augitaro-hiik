<?php

/** @var yii\web\view $this */
/** @var Event $events */

use app\models\Event;
use app\services\Support\SupportService;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Community | Мероприятия';

?>
<section class="events">
    <div class="container">
        <h1>Мероприятия</h1>
        <ul class="event-list">
            <?php foreach ($events as $event): ?>
                <li class="event-list-item">
                    <a href="<?= Url::to(['site/event-page', 'id' => $event->id])?>">
                        <img src="uploads/event/<?= Html::encode($event->image_path) ?>" width="340" height="265" alt="<?= Html::encode($event->title) ?>">
                        <div class="card-body">
                            <h3><?= Html::encode($event->title) ?></h3>
                            <span class="tag">Состоится <?= SupportService::formatDate($event->date) ?></span>
                            <b>Читать подробнее</b>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a class="big-button" href="<?= Url::to(['site/events', 'count' => 4 + intval(Yii::$app->request->get('count', 4))])?>">Смотреть больше</a>
    </div>
</section>
