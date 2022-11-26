    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                
                <div class="footer-div">
                    <h4>Наши контакты:</h4>
                    <span>@stasnorman</span><br>
                    <span>E-mail: burnfeniks@yandex.ru</span>
                </div>

                <div class="footer-div">
                    <span>Академия профессионалов, версия 1.0.0</span><br>
                </div>

                <div class="footer-div">
                    <span>Разработано easy4, 2022 г., Москва</span>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>