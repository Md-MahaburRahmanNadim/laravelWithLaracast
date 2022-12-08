<?php
$currentDirectoryFullPath = __DIR__;
// create pathOfGreatGrandParentFolder by removing last 3 folders from current directory
$pathOfGreatGrandParentFolder = substr($currentDirectoryFullPath,strrpos($currentDirectoryFullPath,'\laravel'),-strlen('/view/partials/') );
// create pathofGreatGrandParentFolder by removing first 3 folders from current directory

// $indexPath = substr($currentDirectoryFullPath,0,strpos($currentDirectoryFullPath,'laravel') );
$indexPath = $pathOfGreatGrandParentFolder . '\index.php';
// contact path 
$contactPath = $pathOfGreatGrandParentFolder . '\contact.php';
// about path
$aboutPath = $pathOfGreatGrandParentFolder . '\about.php';

?>
  <?php
          $fullPathOfCurrentFolder = __DIR__;
          $pathOfCurrentFolder = basename($fullPathOfCurrentFolder);
          $pathOfParentFolder = basename(dirname($fullPathOfCurrentFolder));
          $pathOfGrandParentFolder = basename(dirname(dirname($fullPathOfCurrentFolder)));
          $pathOfGreatGrandParentFolder = basename(dirname(dirname(dirname($fullPathOfCurrentFolder))));
          $pathOfGreatGreatGrandParentFolder = basename(dirname(dirname(dirname(dirname($fullPathOfCurrentFolder)))));
          $pathOfGreatGreatGreatGrandParentFolder = basename(dirname(dirname(dirname(dirname(dirname($fullPathOfCurrentFolder))))));
          $pathOfGreatGreatGreatGreatGrandParentFolder = basename(dirname(dirname(dirname(dirname(dirname(dirname($fullPathOfCurrentFolder)))))));
          // create full directory path
          $fullPathOfCurrentFolder = $pathOfGreatGreatGreatGreatGrandParentFolder . '/' . $pathOfGreatGreatGreatGrandParentFolder . '/' . $pathOfGreatGreatGrandParentFolder . '/' . $pathOfGreatGrandParentFolder . '/' . $pathOfGrandParentFolder . '/' . $pathOfParentFolder . '/' . $pathOfCurrentFolder;
          $pathParse = parse_url($fullPathOfCurrentFolder);
          $pathInfo = pathinfo($fullPathOfCurrentFolder);

          
          ?>
          <h2>This is aobut us page</h2>
          <h1><?= $fullPathOfCurrentFolder?></h1>
          <h1><?= $pathOfCurrentFolder?></h1>
          <h1><?= $pathOfParentFolder?></h1>
          <h1><?= $pathOfGrandParentFolder?></h1>
          <h1><?= $pathOfGreatGrandParentFolder?></h1>
          <h1><?= $pathOfGreatGreatGrandParentFolder?></h1>
          <h1><?= $pathOfGreatGreatGreatGrandParentFolder?></h1>
          <h1><?= $pathOfGreatGreatGreatGreatGrandParentFolder?></h1>
          <h1><?= $fullPathOfCurrentFolder?></h1>
          <h1><?php print_r($pathParse)?></h1>
          <h1><?php var_dump($pathInfo)?></h1>