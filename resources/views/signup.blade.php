@extends('app')

@section('body')
    <div class="login-container">
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content">
                        <div>
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-4">
                                    <div class="panel registration-form" style="max-width: 400px">
                                        <div class="panel-body">
                                            <div class="text-center">
                                                <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                                <h5 class="content-group">Create new account <small class="display-block">All fields are required</small></h5>
                                            </div>
                                            
                                            <div class="alert alert-danger" *ngIf="error">
                                                <span class="text-semibold">Error</span>
                                            </div>

                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="text" class="form-control" placeholder="Your email">
                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>
                                                <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i></span>
                                            </div>
        
                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="password" class="form-control" placeholder="Password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                                <span class="help-block text-danger"><i class="icon-cancel-circle2 position-left"></i></span>
                                            </div>

                                            <div class="form-group has-feedback has-feedback-left">
                                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-lock text-muted"></i>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <button class="btn bg-indigo-400 btn-block">Register <i class="icon-circle-right2 position-right"></i></button>
                                            </div>

                                            <div class="content-divider text-muted form-group"><span>Already have an account?</span></div>
                                            <a href="/signin" class="btn btn-default btn-block content-group">Sign In</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
