<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="scripts/jquery-ui-1.9.2.custom.min.js"></script>    
    <script src="scripts/ip.grid.js"></script>
    <link href="css/ip.grid.css" rel="stylesheet" />

    <script>

        $(document).ready(function () {

            $('#model_master_spreadsheet').ip_Grid({ rows: 10000,  cols: 26 });

        });

    </script>

    <style>
        body {
            font-family: Arial;
            color: white;
            background-color: #3d3d3d;
            margin: 0;
            padding: 60px;
            position:relative;
        }

        a { color:#46b3ff; text-decoration:dotted; }

        .gridContainer {

            position:relative;
            width:700px;
            height:500px;
        }

        #demo {

            width:100%;
            height:100%;
        }
    </style>

    <title>ip.grid demo</title>

</head>
<body>

    {{-- <h1>Spreadsheet Demo</h1>
    <p>Your sheet must be placed inside a relative container.</p> --}}
    <div class="gridContainer">
        <div id="model_master_spreadsheet"></div>
    </div>
    {{-- <p>For more usage examples and documentation please <a href="http://www.inspireproduction.co.za/#/demo-ui/jquery-spreadsheet">click here</a>.</p> --}}
</body>
</html>
