<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
	  
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
        	<form method="post" action="/admnpanel/addauthor">
        		Введіть ім'я автора:<br>
        		<input type="text" name="firstName"><br>
        		Введать прізвище автора:<br>
        		<input type="text" name="lastName"><br>
        		Введіть коротку біографію:<br>
        		<textarea type="text" name="shortBiography" cols="40" rows="3"></textarea><br>
        		Введіть біографію:<br>
        		<textarea name="biography" cols="60" rows="10"></textarea><br>
        		<input type="submit" name="addAuthor"><br>
        	</form>
        	
         
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>