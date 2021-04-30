<?php
/**
 * Configuración default para el componente text
 */

return [
	'name' => 'Indicador',
	'description' => 'Indicador a partir de consulta',
	'general' => [
		'nombre' => [
			'type' => 'varchar',
			'name' => 'Nombre',
			'detail' => 'Nombre del componente',
			'required' => false,
			'value' => 'Texto',
		],
		'invisible_box' => [
			'type' => 'checkbox',
			'name' => '¿Caja transparente?',
			'detail' => 'Caja visible o no visible',
			'required' => false,
			'default_values' => [
				'true' => 'Si',
				'false' => 'No',
			],
			'value' => 'false',
		],
		'ancho' => [
			'type' => 'enum',
			'name' => 'Anchura del componente',
			'detail' => 'Ancho de la caja del componente',
			'required' => false,
			'default_values' => [
				'3' => '25%',
				'4' => '30%',
				'6' => '50%',
				'8' => '60%',
				'9' => '75%',
				'12' => '100%',
			],
			'value' => '4',
		],
		'alto' => [
			'type' => 'enum',
			'name' => 'Altura del componente',
			'detail' => 'Ancho de la caja del componente',
			'required' => false,
			'default_values' => [
				'h-md-auto' => 'Auto',
				'h-md-25' => '25%',
				'h-md-50' => '50%',
				'h-md-75' => '75%',
				'h-md-100' => '100%',
			],
			'value' => 'h-md-50',
		],
	],
	'conexión' => [
		'external_connection' => [
			'type' => 'connections',
			'name' => 'Conexión externa',
			'detail' => 'Conexión a un servidor de base de datos externo',
			'external_table' => 'system__connections',
			'external_field' => 'connection',
			'value' => '',
		],
	],
	'contenido' => [
		'query' => [
			'type' => 'text',
			'name' => 'Consulta',
			'detail' => 'Consulta para extraer el datoa  mostrar, el valor debe llamarse "value"',
			'required' => true,
			'value' => '',
		],
		'info_text' => [
			'type' => 'varchar',
			'name' => 'Información del valor',
			'detail' => 'Texto que se muestra junto al valor numérico',
			'required' => true,
			'value' => '',
		],
		'remote_url' => [
			'type' => 'varchar',
			'name' => 'Dirección al hacer click',
			'detail' => 'Campo para url',
			'required' => true,
			'value' => '',
		],
		'background_color' => [
			'type' => 'varchar',
			'name' => 'Color de fondo',
			'detail' => 'Color de fondo de la caja',
			'required' => true,
			'value' => '',
		],
		'font_color' => [
			'type' => 'varchar',
			'name' => 'Color del texto',
			'detail' => 'Color del texto de la caja',
			'required' => true,
			'value' => '',
		],
		'icon' => [
			'type' => 'varchar',
			'name' => 'Icono',
			'detail' => 'Icono de la caja',
			'required' => true,
			'value' => '',
		],
	],
];