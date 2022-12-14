
  <?php
  require 'partials/header.php';
  require 'partials/navbar.php';
  require 'partials/banner.php';
  
  ?>

 
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <?php foreach ($notes as $note) : ?>
            <li>
              <!-- create a ankor tag with proper styling -->
              <a href="note?id=<?= $note['id']; ?>" class="text-2xl text-blue-500">
                <p><?= $note['notes_body']; ?></p>
                </a>
            </li>
        <?php endforeach; ?>
      </div>
      <!-- /End replace -->
    </div>
  </main>
<?php
    require 'partials/footer.php';?>