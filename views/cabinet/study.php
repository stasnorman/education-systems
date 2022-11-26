<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div>
                <a href="cabinet/" style="display: inline-block; font-size: 35pt; vertical-align: top; font-weight: bold; padding: 0px 25px;"> ᐸ </a>
                <div style="display:inline-block;">
                    <h3>Мой учебный план</h3>
                </div>
            </div>

            <form method="post">
                <?php for ($i=1; $i < 10; $i++) { ?>
                    <table style="width:95%;">
                        <tr style="padding: 10px; background: #428bca; color: white; font-size: 15pt;">
                            <td>Раздел <?php echo $i; ?></td>
                            <td></td>
                        </tr>
                    </table>
                    
                    <?php for ($j=1; $j < 4; $j++) { ?>
                        <table style="width:95%;">
                            <tr>
                                <td style="text-align: -webkit-center; width: 50px;"><input type="checkbox" class="check"/></td>
                                <td style="text-align: left;" > Описание (PHP, MySQL, Frontend, UNIX, Bitrix, Дополнительно, SoftSkills) <?php echo $j; ?>. Которое описывает навык, который хочет прокачать обучающийся. Тут описывается задание </td>
                            </tr>
                        </table>
                    <?php } ?>
                <?php } ?>

                <input type="submit" value="Сохранить мой УП" style="position: fixed; right: 4%; top: 34.9%; background: linear-gradient(45deg, #ed8a35, #ffbd83); border: 0px; padding: 14px; color: white; font-weight: bold; text-shadow: 0px 0px 3px black; border-radius: 10px;"/>
            </form>

            
        
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>