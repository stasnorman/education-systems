<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
        <div>
                <a href="cabinet/" style="display: inline-block;
    font-size: 35pt;
    vertical-align: top;
    font-weight: bold;
    padding: 0px 25px;"> ᐸ </a>
                
                <div style="display:inline-block;">
                    <h3>Редактирование данных</h3>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>