
  <?php
  require 'partials/header.php';
  require 'partials/navbar.php';
  require 'partials/banner.php';
  
  ?>

 
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
       
            <p class="mb-10">
             <!-- create a link which go back to the notes page -->
              <a href="/laravel_with_laracast/php_for_beginners/3.notes-mini-projects/notes" class="text-2xl text-blue-500">Go back to notes</a>
            </p>
              <!-- create a ankor tag with proper styling -->
              
                <p><?= $note['notes_body'] ?></p>
                
            
        
      </div>
      <!-- /End replace -->
    </div>
  </main>
<?php
    require 'partials/footer.php';?>