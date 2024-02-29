@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
                <div class="inner pb-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Choose a Shift</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>N</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
                <div class="inner pb-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Choose a Line</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>UB #1 Mixline</option>
                                    <option>UB #2 Mixline</option>
                                    <option>UF #1 PPL</option>
                                    <option>UF #2</option>
                                    <option>UR #2 PPL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                Ribbon Default <br>
                                <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                Ribbon Large <br>
                                <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                Ribbon Extra Large <br>
                                <small>.ribbon-wrapper.ribbon-xl .ribbon</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
