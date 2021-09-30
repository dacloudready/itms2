<?=$this->extend('layout/center_content'); ?>

<?=$this->section('content'); ?>
    <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="text-center mt-4">
                    <h1 class="h2">ITMS</h1>
                    <p class="lead">
                        Sign in to your account to continue
                    </p>
                </div>
               <span class="errors text-danger p-5">
                   <?=(isset($errors)) ? $errors : ''; ?>
               </span>
                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <form action="<?=base_url('/login')?>" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                    <small>
                                        <a href="pages-reset-password.html">Forgot password?</a>
                                    </small>
                                </div>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                        <span class="form-check-label">
                                        Remember me next time
                                        </span>
                                    </label>
                                </div>
                                <div class="text-center mt-3">
                                    <!-- <a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
                                    <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?=$this->endSection(); ?>