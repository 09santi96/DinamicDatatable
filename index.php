<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/jquery.dataTables.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <section
        <div class="color">1</div>
        <div class="color">2</div>
        <div class="color">3</div>   
    </section>
    <header class="search_bar">
            <div>
                <h1>SYADSA SEARCH SYSTEM</h1>
            </div>
    </header>
    <!-- ------------------------------------------TABLE-------------------------------------- --> 
    <div class="header_fixed">
        <table id="serverSideTable" class="">

            <thead>
                <tr>
                    <th>Ubicacion</th>
                    <th>Num caja</th>
                    <th>Cliente</th>
                    <th>Deposito</th>
                    <th>Rack</th>
                    <th>Nivel</th>
                    <th>Columna</th>
                    <th>Piso</th>
                   
                </tr>
            </thead> 

            <tfoot>
                <tr>
                    <th>Ubicacion</th>
                    <th>Num caja</th>
                    <th>Cliente</th>
                    <th>Deposito</th>
                    <th>Rack</th>
                    <th>Nivel</th>
                    <th>Columna</th>
                    <th>Piso</th>
                </tr>
            </tfoot>
        </table>
    </div>
<script type="text/javascript" src="./js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="./js/datatables.js"></script>
<script type="text/javascript" src="./js/initTable.js"></script>

</body>
</html>