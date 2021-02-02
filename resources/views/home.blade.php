@extends('layouts.app')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(areaChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Pensiun', 50],
            ['Sekolah', 43],
            ['Aset', 10],
            ['Menikah', 47],
            ['Dana Darurat', 28]
        ]);

        // Set chart options
        var options = {'title':'Register Users base on Merchant',
            'width':800,
            'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }

    function areaChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            ['Jan', 10],
            ['Feb', 5],
            ['Mar', 10],
            ['Apr', 5],
            ['May', 4],
            ['Jun', 5],
            ['Jul', 20],
            ['Aug', 10],
            ['Sept', 11],
            ['Okt', 14],
            ['Nov', 23],
            ['Dec', 20],

        ]);

        // Set chart options
        var options = {'title':'Register Users base on Merchant',
            'width':400,
            'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_area'));
        chart.draw(data, options);
    }



</script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="chart_div"></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="chart_area"></div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-sm">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h3>46</h3>
                                            <p class="card-text">New User</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h3>10</h3>
                                            <p class="card-text">Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h3>178</h3>
                                            <p class="card-text">Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="card bg-light">
                                        <div class="card-body text-center">
                                            <h3>20</h3>
                                            <p class="card-text">Products</p>
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
