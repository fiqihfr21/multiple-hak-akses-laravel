@extends('layouts.master')

@section('content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                    <div class="portlet box blue-hoki">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>Form Actions On Top </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="javascript:;" class="reload"> </a>
                                    <a href="javascript:;" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="#" class="form-horizontal">
                                    
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Text</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" placeholder="Enter text">
                                                <span class="help-block"> A block of help text. </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Email Address</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="email" class="form-control" placeholder="Email Address"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Password</label>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Left Icon</label>
                                            <div class="col-md-4">
                                                <div class="input-icon">
                                                    <i class="fa fa-bell-o"></i>
                                                    <input type="text" class="form-control" placeholder="Left icon"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Right Icon</label>
                                            <div class="col-md-4">
                                                <div class="input-icon right">
                                                    <i class="fa fa-microphone"></i>
                                                    <input type="text" class="form-control" placeholder="Right icon"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Input With Spinner</label>
                                            <div class="col-md-4">
                                                <input type="password" class="form-control spinner" placeholder="Password"> </div>
                                        </div>
                                        <div class="form-group last">
                                            <label class="col-md-3 control-label">Static Control</label>
                                            <div class="col-md-4">
                                                <p class="form-control-static"> email@example.com </p>
                                            </div>
                                        </div>

                                        <div class="form-actions top">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        
@endsection