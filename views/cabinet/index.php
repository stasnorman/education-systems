<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['nameUser'];?>! Ваша роль: <?php echo $user['roleUser'];?>. Ваш емейл: <?php echo $user['email'];?></h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>

                <?php if($user['roleUser'] == 'Администратор') { ?>
                            <li><a href="/admin">Админ</a></li>
                <?php } ?>
            </ul>
            
        </div>
    </div>
    <div style="text-align: center;
    margin-top: 5%;
    background: white;
    padding: 20px;">
    <h1>Путь разработчика</h1>
    <img src="https://i.gifer.com/origin/b0/b0b38da25a5c761bbef6d19cc300439d.gif" style="    display: flex;
    width: 100px;
    transform: scale(-1, 1);"/>
        <div class="pointA"></div>
        
        <div class="pathHero"></div>
        <div class="pointB"></div>

        <div style="display:inline-block; width: 25%; vertical-align: top;">
            <div style="width:100%; height:auto; margin:55px;">
                <h3>Моя карта способностей</h3>
                <img src="../template/images/blog/template-diagram.png" style="width:100%;"/>
            </div>
        </div>

        <div style="display:inline-block; width: 70%; vertical-align: top;">
            <div style="width:70%; height:auto; margin:55px;">
                <h3>Список уроков и заданий</h3>
                <table style="width:100%; background: lightseagreen; color: white; ">
                    <tr>
                        <td style="width:5%;">ID урока</td>
                        <td style="padding: 5px;">Название</td>
                        <td style="padding: 5px;">Тип задания</td>
                        <td style="padding: 5px;">Перейти</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>