<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
	  
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
          
        	<form method="post" action="/admnpanel/update">
            ID твору:<br>
            <input type="text" name="writingId" value="<?php echo($writingInfo['writing_id']) ?>" readonly><br>
            ID автора:<br>
            <input type="text" name="authorId" value="<?php echo($writingInfo['author_id']) ?>" readonly><br>
            Назва твору:<br>
            <input type="text" name="title" value="<?php echo($writingInfo['title']) ?>"><br>
            Текст твору:<br>
            <textarea name="fullText" cols="60" rows="10"><?php echo($writingInfo['full_text']) ?></textarea><br>
        		<input type="submit" name="updtWriting"><br>
        	</form>
        	
         
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>