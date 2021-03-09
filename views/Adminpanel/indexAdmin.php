<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php') ?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
        	<table border="1px ">
            <tr>
              <th>ID автора</th>
              <th>Ім'я автора</th>
              <th>Прізвище автора</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
           <?php foreach ($authorsList as $authorItem) :?>
              <?php $i = 0; ?>
              <tr>
                <td><?php echo $authorItem['id'];  ?></td>
                <td><?php echo $authorItem['first_name'];  ?></td>
                <td><?php echo $authorItem['last_name']; ?></td>
                <td><a href="/admnpanel/select/author/<?php echo $authorItem['id']?>">Повна інфа</a></td>
                <td><a href="/admnpanel/delete/author/<?php echo $authorItem['id']?>">Видалити</a></td>
                <td><a href="/admnpanel/update/author/<?php echo $authorItem['id']?> ">Змінити</a></td>
              </tr>
              
              <?php $i++; ?>
            <?php endforeach;?> 
          </table>

         
        </div>

      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>