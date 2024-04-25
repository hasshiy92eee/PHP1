<?php
require_once 'lib/util.php';
require_once 'lib/db_functions.php';
require_once 'common/header.php';
?>
<div class="main-content wrapper">
  <section>
    <h2>一覧</h2>
    <?php $result = findAll(); ?>
    <?php if (count($result) > 0) : ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $row) : ?>
            <tr>
              <td><?php echo h($row['id']); ?></td>
              <td><?php echo h($row['name']); ?></td>
              <td><?php echo h($row['age']); ?></td>
              <td><?php echo h($row['sex']); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </section>
  <?php require_once 'common/aside.php'; ?>
</div><!-- /.main-content -->

<?php require_once 'common/footer.php';
