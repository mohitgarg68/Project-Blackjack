<html>
<head>
    <title>Login with Facebook | Puneet Kalra</title>
</head>
<body>
    

    <div>

        <form>
            <?php if (@$user_profile):  // call var_dump($user_profile) to view all data ?>
                <div>
                    
                    <?php

                        $this->session->set_userdata(array('fbid' => $user_profile['id']));
                        redirect('main/fregister');

                    ?>
                    
                </div>
            <?php else: ?>
                <h2>Login with Facebook</h2>
                <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Login</a>
            <?php endif; ?>

        </form>


    </div>
</body>
</html>