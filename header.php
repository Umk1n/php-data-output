<header class="header">
  <h1 class="logo">A</h1>
  <div class="header-menu">
  <? foreach ($info_title as $data): ?>
    <a href=""><?= $data['title']; ?></a>
  <? endforeach; ?>
  </div>
</header>