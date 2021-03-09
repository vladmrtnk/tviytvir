<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
	  
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
        	<table border="1px">
            <tr>
              <th>ID твору</th>
              <th>Назва твору</th>
              <th>Текст твору</th>
              
            </tr>
            <tr>
              <td><?php echo $writing['writing_id']; ?></td>
              <td><?php echo $writing['title']; ?></td>
              <td><?php echo $writing['full_text']; ?></td>
              <td><a href="/admnpanel/delete/writing/<?php echo $writing['writing_id']?>">Видалити</a></td>
              <td><a href="/admnpanel/update/writing/<?php echo $writing['writing_id']?>">Редагувати</a></td>
            </tr>


          </table>
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>