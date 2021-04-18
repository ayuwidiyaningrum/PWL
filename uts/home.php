<div class="jumbotron">
<?php
      $member = $_SESSION['MEMBER'];
      if(!isset($member)){
      ?>
  <h1 class="display-4">Welcome</h1>
  <p class="lead">Happy Work and Success</p>
  <?php
      }else{
      ?>
  <hr class="my-4">
  <h1 class="display-4">Welcome <?= $member['fullname'];?></h1> 
  <p class="lead">Happy Work and Success</p>
  <?php
      }
      ?>
  <!-- <p></p> -->
  <!-- <a class="btn btn-primary btn-lg" href="index.php?hal=formLogin" role="button">Login</a> -->
</div>
