
    <?php include 'header.php' ?>

    <!-- Wrote by Robiul -->

    <section class="login-form">
        <div class="container">
            <div class="row w-100 d-flex justify-content-center alin-item-center main_div">
                <div class="coll-12 py-2 col-md-8 col-xxl-5">
                    <div class="card py-3 px-2">
                        <div class="divition">
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <span class="main_heading">
                                        <h2>Gmailchecker - Phivu137</h2>
                                    </span>
                                    <span>
                                        <P>If have trouble, try again with an other server:</P>
                                    </span>
                                    <span>
                                        <P>gmailchecker.drboxstore.com <BR></BR>
                                            gmailscan.com</P>
                                    </span>
                                </div>
                            </div>
                            <!-- start from  -->
                            <form class="my_form" method="post" action="functionality/login.php">
                                <div class="mb-3">
                                    <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                                        placeholder="User name">
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                                        placeholder="password">
                                </div>
                                <div class="my-3 ">
                                    <button type="submit" class="btn btn-block  btn-lg"><span>
                                            <a>LOGIN</a>
                                        </span></button>
                                </div>
                                <P><span>You don't have an account?</span></P>
                                <div class="my-3 ">
                                    <button type="submit" class="btn-r btn-block  btn-lg"><span>
                                            <a href="register.php">REGISTATION</a>
                                        </span></button>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Landing page card section  -->

    <section class="cards py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <span><i class="fas fa-dollar-sign"></i></span>
                        <h1>VIP</h1>
                        <h2>Unlimited [Gmail Check]</h2>
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <span><i class="fas fa-dollar-sign"></i></span>
                        <h1>VIP</h1>
                        <h2>Auto Phone [Gmail Change]</h2>
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <span><i class="fas fa-dollar-sign"></i></span>
                        <h1>Price/Register</h1>
                        <h2>Skype</h2>
                        <a href="#">Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>