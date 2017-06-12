<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <div class="signup-form text-center"><!--sign up form-->
                    <h2>Вход на сайт</h2>
                    <form action="" id="enterForm" method="post">
                        <div><input type="text" name="email" placeholder="E-mail" value=""/></div>
                        <div><input type="password" name="password" placeholder="Пароль" value=""/></div>
                        <?php
                        extract($data);
                        if ($answer == false) echo '<div id="error" class= "error">Error</div>';
                        ?>
                        <input type="submit" name="submit" class="btn btn-default" value="Вход"/>
                        <p>"Нет аккаунта?"<a href="user/registration"> Регистрация</a>
                        </p>
                        <div><? //var_dump($data); ?></div>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section>