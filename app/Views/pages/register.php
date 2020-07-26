<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="login100-form flex-sb flex-w" action="/register" method="POST">
                <?php if (isset($validation)) {  ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-6">
                        <div class="">
                            <span class="txt1">
                                Firstname
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" autofocus name="firstname" required>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <span class="txt1">
                                Lastname
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="lastname" required>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                </div>

                <div class="p-t-10 p-b-9">
                    <span class="txt1">
                        Email
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="email" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password" required>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Confirm Password
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password_confirm" required>
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                </div>

                <div class="container-login100-form-btn m-t-17 p-b-10">
                    <button type="submit" class="login100-form-btn lead">
                        Register
                    </button>
                </div>

                <div class="w-full text-center p-t-10">
                    <a type="button" href="/" class="txt2 bo1">
                       Already have an account
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>