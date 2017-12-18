<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Edit Account Info</h4>
<!--                <p class="category">Complete your profile</p>-->
            </div>
            <div class="card-content">
                <form method="POST" action="<?=BASE_PATH?>/account/save">
                    <input type="password" style="display: none" />
                    <div class="row">
<!--                        <div class="col-md-5">-->
<!--                            <div class="form-group label-floating">-->
<!--                                <label class="control-label">Company (disabled)</label>-->
<!--                                <input type="text" class="form-control" disabled>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Username</label>
                                <input type="text" name="username" class="form-control" value="<?=(!empty($user->username) ? $user->username : '')?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Update Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="new-password" />
                            </div>
                        </div>
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group label-floating">-->
<!--                                <label class="control-label">Email address</label>-->
<!--                                <input type="email" class="form-control">-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Fist Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?=(!empty($user->first_name) ? $user->first_name : '')?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="<?=(!empty($user->last_name) ? $user->last_name : '')?>">
                            </div>
                        </div>
                    </div>
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <div class="form-group label-floating">-->
<!--                                <label class="control-label">Adress</label>-->
<!--                                <input type="text" class="form-control">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group label-floating">-->
<!--                                <label class="control-label">City</label>-->
<!--                                <input type="text" class="form-control">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group label-floating">-->
<!--                                <label class="control-label">Country</label>-->
<!--                                <input type="text" class="form-control">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="form-group label-floating">-->
<!--                                <label class="control-label">Postal Code</label>-->
<!--                                <input type="text" class="form-control">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <div class="form-group">-->
<!--                                <label>About Me</label>-->
<!--                                <div class="form-group label-floating">-->
<!--                                    <label class="control-label"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>-->
<!--                                    <textarea class="form-control" rows="5"></textarea>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <button type="submit" class="btn btn-primary pull-right" data-background-color="green">Update Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="#pablo">
                    <img class="img" src="<?=BASE_PATH?>/img/faces/chris.jpg" />
                </a>
            </div>
            <div class="content">
<!--                <h6 class="category text-gray">CEO / Co-Founder</h6>-->
                <h4 class="card-title">Chris Esser</h4>
<!--                <p class="card-content">-->
<!--                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...-->
<!--                </p>-->
<!--                <a href="#pablo" class="btn btn-primary btn-round" data-background-color="green">Follow</a>-->
            </div>
        </div>
    </div>
</div>