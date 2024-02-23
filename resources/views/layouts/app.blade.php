@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function createChart(labels, datasetLabel, data, chartType, identifier) {
            const config = {
                type: chartType,
                data: {
                    labels: labels,
                    datasets: [{
                        label: datasetLabel,
                        backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"],
                        borderColor: "rgb(255, 99, 132)",
                        data: data,
                    }],
                },
                options: {},
            };

            new Chart(document.getElementById(identifier), config);
        }

        // Call the function with your chart data
        const labels = ["Organik", "Non Organik", "B3"];
        const datasetLabel = "My First dataset";
        const data = [7, 10, 5];
        const chartType = "line";

        const identifier = {
            "topline": "bar",
            "energy": "bar",
            "waste": "doughnut",
            "eww": "line",
            "map": "line"
        };


        for (const [key, value] of Object.entries(identifier)) {
            createChart(labels, datasetLabel, data, value, key);
        }

    </script>
@stop
