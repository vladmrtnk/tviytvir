<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
	  
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
        	<form method="post" action="/admnpanel/delete">
            Що видаляти:<br>
            <input type="radio" name="whatDelete" value="author">Автор<br>
            <input type="radio" name="whatDelete" value="writing">Твір<br>
        		Яким способом видаляти:<br>
        		<input type="radio" name="howMethodDelete" value="byId">by ID<br>
            <input type="radio" name="howMethodDelete" value="byTitle">by Title<br>
            <input type="radio" name="howMethodDelete" value="byFirstName">by First Name<br>
            <input type="radio" name="howMethodDelete" value="byLastName">by Last Name<br><br>
            Введіть інформацію про видалення:<br>
        		<input type="text" name="infoDelete">
        		
        		<input type="submit" name="deleteSubm"><br>
        	</form>
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>