<?php include __DIR__ . "/partials/head.php"; ?>

<?php include __DIR__ . "/partials/nav.php"; ?>

<!-- Le contenu spécifique à la page -->
    <main class="container my-5">
        <h1 class="text-center my-3 display-5">Nouveau film</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form method="post">
                        <div class="mb-3">
                          <label for="name">Le nom du film <span class="text-danger">*</span></label>
                          <input type="text" name="name" id="name" class="form-control">
                      </div>
                        <div class="mb-3">
                          <label for="actors">Le nom du/des acteurs <span class="text-danger">*</span></label>
                          <input type="text" name="actors" id="actors" class="form-control">
                      </div>
                        <div class="mb-3">
                          <label for="review">La note / 5 </label>
                          <input type="number" step=".1" name="review" id="review" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="comment">Laissez un commentaire</label>
                        <textarea name="comment" id="commnet" class="form-control" rows="4"></textarea>                    
                      </div>
                      <div>
                        <input type="submit" class="btn btn-primary">
                      </div>
                   </form>
                </div>
            </div>
        </div>
    </main>

 <?php include __DIR__ . "/partials/footer.php"; ?>   
 <?php include __DIR__ . "/partials/foot.php"; ?>