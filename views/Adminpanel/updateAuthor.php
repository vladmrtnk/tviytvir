<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
	  
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
          
        	<form method="post" action="/admnpanel/update">
            ID автора:<br>
            <input type="text" name="id" value="<?php echo($authorInfo['id']) ?>" readonly><br>
        		Iм'я автора:<br>
        		<input type="text" name="firstName" value="<?php echo($authorInfo['first_name']) ?>"><br>
        		Прізвище автора:<br>
        		<input type="text" name="lastName" value="<?php echo($authorInfo['last_name']) ?>"><br>
        		Коротка біографія:<br>
        		<textarea type="text" name="shortBiography" cols="40" rows="3"><?php echo($authorInfo['short_biography']) ?></textarea><br>
        		Біографія:<br>
        		<textarea name="biography" cols="60" rows="10"><?php echo($authorInfo['biography']) ?></textarea><br>
        		<input type="submit" name="updtAuthor"><br>
        	</form>
        	
         
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>