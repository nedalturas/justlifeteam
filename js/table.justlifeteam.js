
/*
 * Editor client script for DB table justlifeteam
 * Created by http://editor.datatables.net/generator
 */

addEventListener("DOMContentLoaded", function () {
	var editor = new DataTable.Editor( {
		ajax: 'php/table.justlifeteam.php',
		table: '#justlifeteam',
		fields: [
			{
				"label": "Company Name:",
				"name": "company_name"
			},
			{
				"label": "Coordinator Name:",
				"name": "coordinator_name"
			},
			{
				"label": "Company Type:",
				"name": "company_type",
				"type": "select",
				"options": [
					"Marketplace",
					" Exclusive"
				]
			},
			{
				"label": "Company Status:",
				"name": "company_status",
				"type": "select",
				"options": [
					"Active",
					" Inactive"
				]
			},
			{
				"label": "City Coverage:",
				"name": "city_coverage",
				"type": "select",
				"options": [
					"Dubai",
					" Abu Dhabi",
					" Sharjah",
					" Ajman"
				]
			},
			{
				"label": "Service Type:",
				"name": "service_type"
			}
		]
	} );

	var table = new DataTable('#justlifeteam', {
		ajax: 'php/table.justlifeteam.php',
		columns: [
			{
				"data": "company_name"
			},
			{
				"data": "coordinator_name"
			},
			{
				"data": "company_type"
			},
			{
				"data": "company_status"
			},
			{
				"data": "city_coverage"
			},
			{
				"data": "service_type"
			}
		],
		layout: {
			topStart: {
				buttons: [
					{ extend: 'create', editor: editor },
					{ extend: 'edit', editor: editor },
					{ extend: 'remove', editor: editor }
				]
			}
		},
		select: true
	});
});

