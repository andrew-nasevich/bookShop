<?php
    if (isset($_GET['currDir']) && isset($_GET['name']))
    {
        echo '<h1>Изменить имя файла/папки</h1>';
        echo '<form action="rename_finish.php" method="GET">';
		echo '<input style=" display: none" type="text" name="currDir" size="40" readonly value="'.$_GET['currDir'].'"></input>';
		
		echo 'Переименовываемая директория/папка<br>';	
        echo '<input type="text" name="name" size="40" readonly value="'.$_GET['name'].'"></input><br><br>';
		
		echo 'Новое имя директории/папки<br>';
        echo '<input type="text" name="newname" size="40" value="'.$_GET['name'].'"></input><br><br>
              <input type="submit" size="40" value="Изменить"></input>
              </form>';
    }
?>
