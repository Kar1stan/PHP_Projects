<?php include_once __DIR__ .'header.php'?>
       <div class="container">
        <div class="row">
          <?php for($i=1;$i<10;$i++){ ?>
          <div class="col-3">
        <div class="card" style="width: 18rem;">
        <img src="<?=$image ?? null ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
       <?php }?>
      </div>
      </div>
<?php include_once 'footer.php'?>
 