<div id="myloginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body login-modal">
                <div class="clearfix"></div>
                <div id="social-icons-conatainer">
                    <div class="modal-body-left">
                    <h4 class="text-center info" style="padding:2%;">EXISTING USER LOGIN HERE</h4>
                        <form class="col-md-12 " method="POST" id="logInForm">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="preloader-wrapper small active" style="display:none;">
                                <img src="{{ URL::to('/') }}/images/preloader.gif" title="preloader" alt="preloader">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="login">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-body-right">
                        <div class="modal-social-icons">
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Log in with Facebook </a>
                            <a href="{{ url('/auth/twitter') }}" class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Log in with Twitter </a>
                        </div>
                    </div>
                    <!-- <div id="center-line"></div> -->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="modal-footer login_modal_footer">
            </div>
        </div>
    </div>
</div>