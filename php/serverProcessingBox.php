<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'cajas_ubi';

// Table's primary key
$primaryKey = 'COd_Posicion';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => 'COd_Posicion', 'dt' => 0 ),
	array( 'db' => 'Cod_Caja',  'dt' => 1 ),
	array( 'db' => 'Cod_Cliente',   'dt' => 2 ),
	array( 'db' => 'Cod_Deposito',     'dt' => 3 ),
	array( 'db' => 'Cod_Rack',   'dt' => 4 ),
	array( 'db' => 'Cod_Nivel', 'dt' => 5 ),
	array( 'db' => 'Cod_Col',  'dt' => 6 ),
	array( 'db' => 'Cod_Piso',   'dt' => 7 )
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'digitaldocbd',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


