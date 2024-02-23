@extends('layouts.app')

@section('content')
    <div class="row">
        {{-- responsive 3 columns --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Top 5 Line & Down 5 Line</div>
                <div class="card-body">
                    <canvas id="topline" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Energy Management</div>
                <div class="card-body">
                    <canvas id="energy" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Waste Management</div>
                <div class="card-body">
                    <canvas id="waste" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Akumulasi EWW</div>
                <div class="card-body">
                    <canvas id="eww" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Interactive Map Line</div>
                <div class="card-body">
                    <canvas id="map" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection
