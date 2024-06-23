-- 
-- Editor SQL for DB table justlifeteam
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `justlifeteam` (
	`id` int(10) NOT NULL auto_increment,
	`company_name` varchar(255),
	`coordinator_name` varchar(255),
	`company_type` varchar(255),
	`company_status` varchar(255),
	`city_coverage` varchar(255),
	`service_type` varchar(255),
	PRIMARY KEY( `id` )
);