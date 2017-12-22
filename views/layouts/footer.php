<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><a href=""><span style="color: #FFFFFF;">BC</span><span>Market</span></a></h2>
                        <p>Ми щиро вибачаємось, якщо наші жарти вас скривдили, проте можливо варто замислитись. Цей сайт несе в собі соцальний характер, він спрямований на те, щоб змусити людей замислитися над тим, що відбувається навколо, це була наша головна ціль</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="font-family:'Times New Roman' ">Навігатор </h2>
                        <ul>
                            <?php if(User::isGuest()): ?>
                            <li><a href="/user/login/"> Логін</a></li>
                            <li><a href="/user/register/">Реєстрація</a></li>
                            <?php else: ?>
                            <li><a href="/cabinet/"></i>Мій аккаунт</a></li>
                            <li><a href="/user/logout/"></i>Вихід</a></li>
                            <?php endif; ?>
                            <li><a href="#">Воно нічого не дасть</a></li>
                            <li><a href="/cart/">Кошик</a></li>
                            <li><a href="/index.php/">Головна сторінка</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="font-family:'Times New Roman' ">Категорії</h2>
                        <ul>
                            <?php foreach ($categories as $categoryItem): ?>
                            <li>
                                <a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryItem['id'] == $categoryId) echo active?>"><?php echo $categoryItem['name']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Зворотній зв'язок</h2>
                        <p>Зареєструйтесь, будь ласка, аби розмовляти з адміністрацією</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Введіть e-mail">
                            </form action="#">
                            <br/>
                            <form>
                                
                                <input type="submit" value="Відправити">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2017 BVMK Inc. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="/template/js/owl.carousel.min.js"></script>
    <script src="/template/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="/template/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="/template/js/main.js"></script>
    <script src="/template/js/cart.js"></script>

    <script type="text/javascript" src="scripts/scroll_more.js"></script>
    <script src="scripts/wow.min.js"></script>
    
  </body>
</html>