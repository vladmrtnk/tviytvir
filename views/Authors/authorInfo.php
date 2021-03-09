<?php require_once(ROOT.'/views/header.php') ?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
          <!--
          <p class="download-button"><a href="" ><img src="images/download.png" alt="Download">Завантажити текст</a></p> -->
          <h2 class="content-name"><?php echo $author['first_name'] . ' ' . $author['last_name'] ?></h2>
          <!--
          <p class="content-undername">Це під назвою</p>
          -->


            <div class="content-text">
              <div class="biography">
                <?php echo $author['biography'] ?>
              </div>


              <div class="writings-list">
              <nav class="content-menu">
                <?php foreach ($writingList as $writing) :?>
                  <a href="/writings/<?php echo $writing['writing_id']?>"><?php echo $writing['title']?></a><br>
                <?php endforeach;?>
              </nav>
            </div>

            </div>
          
        </div>
        <div class="sidebar"> <!-- Рекламний блок -->
          <?php require_once(ROOT.'/views/sidebar.php') ?> <!-- Загружає сайтбар із зовнішнього файла -->
        </div>
      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>