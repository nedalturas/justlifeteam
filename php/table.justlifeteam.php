<?php

/*
 * Editor server script for DB table justlifeteam
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `justlifeteam` (
	`id` int(10) NOT NULL auto_increment,
	`company_name` varchar(255),
	`coordinator_name` varchar(255),
	`company_type` varchar(255),
	`company_status` varchar(255),
	`city_coverage` varchar(255),
	`service_type` varchar(255),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'justlifeteam', 'id' )
	->fields(
		Field::inst( 'company_name' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'coordinator_name' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'company_type' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'company_status' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'city_coverage' )
			->validator( Validate::notEmpty() ),
		Field::inst( 'service_type' )
			->validator( Validate::notEmpty() )
	)
	->process( $_POST )
	->json();
