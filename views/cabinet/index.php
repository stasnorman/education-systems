<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['nameUser'];?>! Ваша роль: <?php echo $user['roleUser'];?>. Ваш емейл: <?php echo $user['email'];?></h4>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/history">Список покупок</a></li>
                <li><a href="/cabinet/testpage">Тестовая</a></li>
                <li><a href="/cabinet/testpage2">Тестовая 2</a></li>

                <?php if($user['roleUser'] == 'Администратор') { ?>
                            <li><a href="/admin">Админ</a></li>
                <?php } ?>
                
            
              
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>