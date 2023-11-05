<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>STATISTIKA</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
    
            table, th, td {
                border: 1px solid black;
            }
    
            th, td {
                padding: 10px;
                text-align: center;
            }
    
            th {
                background-color: #f2f2f2;
            }
    
            .navigation {
                text-align: center;
                margin-top: 20px;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:nth-child(odd) {
                background-color: #e6e6e6;
            }

            .table-wrapper {
                overflow-x: auto;
            }

            .table-wrapper table {
                width: 100%;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot@0.8.3/jquery.flot.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flot@0.8.3/jquery.flot.pie.js"></script>
    
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Statistik</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> EzzCube <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

            <aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu"> 
                        <span class="input-group-btn"> </span>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{route('index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Pengolahan Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('data_tunggal')}}">Data Tunggal</a>
                                </li>
                                <li>
                                    <a href="{{route('data_frekwensi')}}">Data Frekuensi</a>
                                </li>
                                <li>
                                    <a href="{{route('data_deskripsi')}}">Data Deskripsi</a>
                                </li>
                                <li>
                                    <a href="{{route('data_bergolong')}}">Data Bergolong</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </aside>
            <!-- /.sidebar -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <b> Data Bergolong </b> </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <h1>Data Skor</h1>

                
                    <table>
                        <thead>
                            <tr>
                                <th>Kelas Interval</th>
                                <th>Nilai Tengah</th>
                                <th>Frekuensi</th>
                                <th>Frekuensi Relatif</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataBergolong as $data)
                            <tr>
                                <td>{{ $data['ik_b'] }} - {{ $data['ik_a'] }}</td>
                                <td>{{ $data['n_tengah'] }}</td>
                                <td>{{ $data['frek'] }}</td>
                                <td>{{ $data['frek_rel'] }}</td>
                                <td>{{ $data['persentase'] }}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Flot Charts JavaScript -->
        <script src="../js/flot/excanvas.min.js"></script>
        <script src="../js/flot/jquery.flot.js"></script>
        <script src="../js/flot/jquery.flot.pie.js"></script>
        <script src="../js/flot/jquery.flot.resize.js"></script>
        <script src="../js/flot/jquery.flot.time.js"></script>
        <script src="../js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../js/flot-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>

</html>
