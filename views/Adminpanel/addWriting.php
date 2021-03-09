<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
	  
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
        	<form method="post" action="/admnpanel/addwriting">
            Виберіть автора:<br>
            <select name="selectID">
              <?php foreach($auth as $value): ?>
                <option value="<?php echo $value['id'] ?>" ><?php echo $value['first_name'] . ' ' . $value['last_name']; ?></option>
              <?php endforeach; ?>  
            </select><br>
        		Введіть назву твору:<br>
        		<input type="text" name="title"><br>
        		Введать текст твору:<br>
        		<textarea name="fullText" cols="60" rows="10"></textarea><br>
        		<input type="submit" name="addWriting"><br>
        	</form>
        	
          
         
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>