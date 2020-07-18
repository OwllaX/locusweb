<section id="four" class="wrapper style1 special fade-up">
  <div class="container">
    <header class="major">
      <h2></h2>
    </header>
    <div class="box alt">
      <div class="row gtr-uniform">
      <?php
        try {
          if (count($lHeaderSection4) == count($lFaSection4) && count($lHeaderSection4) == count($lParagraphSection4)) {
            for ($i=0; $i < count($lHeaderSection4); $i++) {
              echo '
              <section class="col-4 col-6-medium col-12-xsmall">
                <span class="icon solid alt major '.$lFaSection4[$i].' "></span>
                <h3>'.$lHeaderSection4[$i].'</h3>
                <p>'.$lParagraphSection4[$i].'</p>
              </section>
              ';
            }
          }
        } catch (\Exception $e) {

        }
      ?>
      </div>
    </div>
  </div>
</section>
