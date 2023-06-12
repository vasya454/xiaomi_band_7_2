<?php
    //print __DIR__;
    require_once(__DIR__ . "/header.php");
?>
		<div class="content">
		    <hr>
            <h3>Контакты:</h3>
            <form>
            <label>Имя: <br><input type="name" name="name" class="contacts_body_inputs"></label><br>
            <label>Email: <br><input type="email" name="email" class="email"></label><br>
            <label>Тема: <br><input type="text" name="theme" class="contacts_body_inputs"></label><br>
            <label>Сообщение: <br><textarea id="contacts_body_comment"></textarea></label><br>
            <input type="submit" name="message" id="message" value="Отправить"><br>
            </form>
            <h3>Обратная связь:</h3>
            <p>Телефон: +7(917)902-94-05</p>
            <p>E-mail:lakomkinvy@mail.ru</p>
            <p>Наш адрес: 190013, Санкт-Петербург, Можайская, 2 (1 этаж)</p>
            <p>Время работы: 18:30-21:30 (Пн, Вт, Чт)</p>
		</div>
    <?php
    require_once(__DIR__ . "/footer.php");
?>
