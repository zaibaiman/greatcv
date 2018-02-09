@extends('app')

@section('body')
    <div class="login-container">
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content">
                        <div>
                            <div class="panel panel-body login-form width-400">
                                <div class="text-center">
                                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                    <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
                                </div>
                                <div class="alert alert-danger" *ngIf="error">
                                    <span class="text-semibold">Error</span>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group login-options">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" uniform-style checked="checked">
                                            Remember
                                            </label> -->
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="login_password_recover.html">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn bg-pink-400 btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                                <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
                                <a href="/signup" class="btn btn-default btn-block content-group">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
