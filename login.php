        <main>
            <form action="mypage.php" method="post">
                        <div class="form_contents">
                        <div class="error_message">メールアドレスまたはパスワードが間違っています。</div>
                        <div class="mail">
                            <label>メールアドレス</label><br>
                            <input type="text" class="formbox" size="40" value="<?php  ?>"name="mail">
                </div>


                        <div class="password">
                        <label>パスワード</label></label><br>
                            <input type="password" class="formbox" size="40" name="password" required>
                        </div>

                        <div class="login_check">
                        <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
                        <?php
                        if(isset()){
                            echo "checked='checked'";
                        }
                        ?>ログイン状態を保持する</label>
                        </div>

                        <div class="loginbutton">
                            <input type="submit" class="submit_button" size="35" value="ログイン">
                        </div>

            </form>
        </main>
    <form>
      ©︎ 2018 InterNous.inc All rights reserver
    </form>
    </body>
    </html>






            </div>


