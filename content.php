<content class="content">
<? foreach ($info as $data): ?>
  <div class="item">
    <img class="img-res" src="<?= $data['image']; ?>" alt="">
    <div class="text"><?= $data['text']; ?></div>
  </div>
  <? endforeach; ?>
</content>