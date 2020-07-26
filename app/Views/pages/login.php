    <div class="container-login100" >
        <div class="wrap-login100 p-l-110 p-r-110 p-t-30 p-b-30">
            <form class="login100-form flex-sb flex-w" action="/" method="POST">
                <span class="login100-form-title">
                    Sign in
                </span>

                <div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="email" name="email" autofocus required autocomplete="off">
                    <span class="focus-input100"></span>
                </div>

                <div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

                    <a href="#" class="txt2 bo1 m-l-5">
                        Forgot?
                    </a>
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="password" required autocomplete="off">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17 p-b-10">
                    <button type="submit" class="login100-form-btn lead">
                        Sign In
                    </button>
                </div>

                <?php if (session()->get('success')) {  ?>
                    <div class="col-12">
                        <div class="alert alert-success text-center" role="alert">
                            <?= session()->get('success') ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if (isset($validation)) {  ?>
                    <div class="alert alert-danger col-12 text-center" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php } ?>

                <div class="col-12 text-center">
                    <small class="txt1">
                        Or
                    </small>
                </div>

                <button type="button" class="btn-face m-b-20">
                    <i class="fab fa-facebook-f text-white"></i>
                    Facebook
                </button>

                <button type="button" class="btn-google m-b-20">
                    <img src="assets/images/icons/icon-google.png" alt="GOOGLE">
                    Google
                </button>

                <div class="w-full text-center p-t-5">
						<span class="txt2">
							Not a member?
						</span>

                    <a type="button" href="/register" class="txt2 bo1">
                        Sign up now
                    </a>
                </div>
            </form>
        </div>
    </div>
