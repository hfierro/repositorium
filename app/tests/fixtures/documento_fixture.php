<?php
/* Documento Fixture generated on: 2011-07-27 19:17:08 : 1311808628 */
class DocumentoFixture extends CakeTestFixture {
	var $name = 'Documento';

	var $fields = array(
		'id_documento' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'texto' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'autor' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255, 'comment' => 'se refiere a id_usuario'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'id_dominio' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255, 'comment' => 'se refiere a id_contexto'),
		'premiado_validacion' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id_documento', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id_documento' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'texto' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'autor' => 1,
			'created' => '2011-07-27 19:17:08',
			'modified' => '2011-07-27 19:17:08',
			'id_dominio' => 1,
			'premiado_validacion' => 1
		),
	);
}
?>