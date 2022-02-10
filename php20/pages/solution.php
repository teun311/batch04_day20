<?php include "pages/includes/header.php";?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Solution</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class=" row form-group">
                                <label for="" class="col-md-4 col-form-label">First Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="first_num"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="last_num"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4 col-form-label">Selet One</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="type1" value="incre">Increment</label>
                                    <label for=""><input type="radio" name="type2" value="decre">Decrement</label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" value="" class="btn btn-outline-success btn-block">
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "pages/includes/footer.php";?>



