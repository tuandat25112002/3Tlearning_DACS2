
@extends('dashboard')
@section('admin_content')
<section id="main-content">


    <section class="wrapper">
        <div class="chart_agile">
            <div class="col-md-6 floatcharts_w3layouts_left">

                <div class="floatcharts_w3layouts_top">
                    <div class="floatcharts_w3layouts_bottom">
                        <div id="graph13"></div>
                        <script>
                        // Use Morris.Bar
                        Morris.Bar({
                          element: 'graph13',
                          data: [
                            {x: '2011 Q1', y: 0},
                            {x: '2011 Q2', y: 1},
                            {x: '2011 Q3', y: 2},
                            {x: '2011 Q4', y: 3},
                            {x: '2012 Q1', y: 4},
                            {x: '2012 Q2', y: 5},
                            {x: '2012 Q3', y: 6},
                            {x: '2012 Q4', y: 7},
                            {x: '2013 Q1', y: 8}
                          ],
                          xkey: 'x',
                          ykeys: ['y'],
                          labels: ['Y'],
                          barColors: function (row, series, type) {
                            if (type === 'bar') {
                              var red = Math.ceil(255 * row.y / this.ymax);
                              return 'rgb(' + red + ',0,0)';
                            }
                            else {
                              return '#000';
                            }
                          }
                        });
                        </script>

                    </div>
                </div>
            </div>
            <div class="col-md-6 floatcharts_w3layouts_left">
                <div class="floatcharts_w3layouts_top">
                    <div class="floatcharts_w3layouts_bottom">
                        <div id="graph12"></div>
                        <script>
                        // Use Morris.Bar
                        Morris.Bar({
                          element: 'graph12',
                          data: [
                            {x: '2011 Q1', y: 3, z: 2, a: 3},
                            {x: '2011 Q2', y: 2, z: null, a: 1},
                            {x: '2011 Q3', y: 0, z: 2, a: 4},
                            {x: '2011 Q4', y: 2, z: 4, a: 3}
                          ],
                          xkey: 'x',
                          ykeys: ['y', 'z', 'a'],
                          labels: ['Y', 'Z', 'A'],
                          stacked: true
                        });
                        </script>

                    </div>

                </div>
            </div>
            <div class="col-md-6 floatcharts_w3layouts_left">
                <div class="floatcharts_w3layouts_top">
                    <div class="floatcharts_w3layouts_bottom">
                        <div id="graph17"></div>
                        <script>
                        // This crosses a DST boundary in the UK.
                        Morris.Area({
                          element: 'graph17',
                          data: [
                            {x: '2013-03-30 22:00:00', y: 3, z: 3},
                            {x: '2013-03-31 00:00:00', y: 2, z: 0},
                            {x: '2013-03-31 02:00:00', y: 0, z: 2},
                            {x: '2013-03-31 04:00:00', y: 4, z: 4}
                          ],
                          xkey: 'x',
                          ykeys: ['y', 'z'],
                          labels: ['Y', 'Z']
                        });
                        </script>

                    </div>
                </div>
            </div>
            <div class="col-md-6 floatcharts_w3layouts_left">
                <div class="floatcharts_w3layouts_top">
                    <div class="floatcharts_w3layouts_bottom">
                        <div id="graph18"></div>
                        <script>
                        /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                        var day_data = [
                          {"period": "2012-10-01", "licensed": 3407, "sorned": 660},
                          {"period": "2012-09-30", "licensed": 3351, "sorned": 629},
                          {"period": "2012-09-29", "licensed": 3269, "sorned": 618},
                          {"period": "2012-09-20", "licensed": 3246, "sorned": 661},
                          {"period": "2012-09-19", "licensed": 3257, "sorned": 667},
                          {"period": "2012-09-18", "licensed": 3248, "sorned": 627},
                          {"period": "2012-09-17", "licensed": 3171, "sorned": 660},
                          {"period": "2012-09-16", "licensed": 3171, "sorned": 676},
                          {"period": "2012-09-15", "licensed": 3201, "sorned": 656},
                          {"period": "2012-09-10", "licensed": 3215, "sorned": 622}
                        ];
                        Morris.Bar({
                          element: 'graph18',
                          data: day_data,
                          xkey: 'period',
                          ykeys: ['licensed', 'sorned'],
                          labels: ['Licensed', 'SORN'],
                          xLabelAngle: 60
                        });
                        </script>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
</section>
@endsection
