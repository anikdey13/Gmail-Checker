<?php include 'header.php' ?>


<!-- Registration form -->
<section class="reg-form">
<div class="container">
    <div class="row w-100 d-flex justify-content-center alin-item-center main_div">
        <div class="coll-12 py-2 col-md-8 col-xxl-5">
            <div class="card py-3 px-2">
                <div class="divition">
                    <div class="row">
                        <div class="col-12 mx-auto">
                            <p>gmailchecker.drboxstore.com
                                gmailscan.com</p>
                        </div>
                    </div>
                    <!-- start from  -->
                    <form class="my_form" method="post" action="functionality/register.php">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                                placeholder="User name">
                        </div>
                        <div class="mb-3 py-3">
                            <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1"
                                placeholder="Fullname">
                        </div>
                        <div class="mb-3 ">
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="password">
                        </div>
                        <div class="mb-3 pt-3">
                            <input type="password" name="confirm_password" class="form-control" id="exampleFormControlInput1"
                                placeholder="Confirm password">
                        </div>
                        <div class="my-3 ">
                            <button type="submit" class="btn-r btn-block  btn-lg"><span>
                                    <a>REGISTATION</a>
                                </span></button>
                        </div>
                        <P><span>Already have an account?</span></P>
                        <div class="my-3 ">
                            <button type="button" class="btn btn-block  btn-lg"><span>
                                    <a href="index.php">LOGIN</a>
                                </span></button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>




</body>

</html>