<?php require_once(ROOT.'/views/Adminpanel/headerAdmin.php');
    
?> <!-- Загружає шапку із зовнішнього файла -->

      <div class="row"> <!-- Блок із контентним і рекламним блоками -->
        <div class="content"> <!-- Контентний блок -->
           
          <table border="1px ">
            <tr>
              <th>ID автора</th>
              <th>Ім'я автора</th>
              <th>Прізвище автора</th>
              <th>Коротка біографія</th>
              <th>Біографія</th>
            </tr>
            <tr>
              <td><?php echo $author['id'];  ?></td>
              <td><?php echo $author['first_name'];  ?></td>
              <td><?php echo $author['last_name']; ?></td>
              <td><?php echo $author['short_biography'];  ?></td>
              <td><?php echo $author['biography'];  ?></td>
            </tr> 
          </table>
          <p>
            <table border="1px ">
            <tr>
              <th>ID втору</th>
              <th>Назва твору</th>
              
            </tr>
            <h2>Список творів:</h2>
           <?php foreach ($writingList as $writing) :?>
              
              <tr>
                <td><?php echo $writing['writing_id'];  ?></td>
                <td><?php echo $writing['title'];  ?></td>
                <td><a href="/admnpanel/select/writing/<?php echo $writing['writing_id']?>">Повна інфа</a></td>
                <td><a href="/admnpanel/delete/writing/<?php echo $writing['writing_id']?>">Видалити</a></td>
                <td><a href="/admnpanel/update/writing/<?php echo $writing['writing_id']?>">Змінити</a></td>
              </tr>
              
              
            <?php endforeach;?> 
          </table>
          </p>





        </div>
      </div>
      <div class="footer"> <!-- Футер -->
        <?php require_once(ROOT.'/views/footer.php') ?>
      </div>
    </div>
  </body>
</html>