## Camagru - упрощенный Instargram <br>

<p align="center">
  <img src="https://raw.githubusercontent.com/mtytos/Camagru-Instagram/master/src/login.png">
</p><br>

- <b>Серверная часть</b> - PHP <br>
- <b>База данных</b> - MySQL + PDO <br>
- <b>Фронт</b> - HTML, CSS (Grid), JavaSript + Ajax <br>

## Настройка БД  <br>
- <em><b>config/database.php</b></em> - настройки подключения к БД. Открываете в редакторе и добавляете ваши настройки<br>
- <em><b>config/setup.php</b></em> - Запускаете в браузере. Автоматическое создание необходимого окружения <br>
также будет создан user - admin / admin для быстрого использования сайта </br>

## РЕАЛИЗОВАНО:<br>
#### Sing In / Sing Up<br>
- защита от SQL-инъекций (prepare)<br>
- защита от XSS <br>
- хэширование пароля + solt<br>
- активация аккаунта по email (ссылка + хэш token)<br>
- регулярки на username, минимальный password, проверка email<br>
- запросы Ajax <br>
- logout с основных страниц<br>

#### Home<br>
- Фото с веб-камеры
- Лента с предпросмотром получившихся снимков 
- Стикеры к фото на выбор
- Возможность загрузки своего изображения
- добавление фото в галерею
- только залогиненные юзеры имеют доступ к home
- Сделать фото с веб-камеры / загрузить свое фото можно только после выбора стикера (условие по ТЗ)

#### Options<br>
- Включение / отключение уведомлений о лайках, комментариях, изменении данных профиля<br>
- Изменение имени, email, пароля пользователя<br>

#### Gallery<br>
- Посты с датой публикации<br>
- Лайки постов<br>
- Комментарии к постам с username<br>
- Владелец может удалить пост / комментарии<br>
- Галерея доступна незарегистрированным пользователям в режиме просмотра без возможности взаимодействия<br><br>

ps почистите cookie перед запуском

###### may the force be with you
