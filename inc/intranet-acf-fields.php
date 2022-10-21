<?php
if( function_exists('acf_add_local_field_group') ):

// SERVICE REST SEDOO
acf_add_local_field_group(array(
	'key' => 'group_623ddc96cf354',
	'title' => 'REST API SEDOO',
	'fields' => array(
		array(
			'key' => 'field_623ddcc2c273f',
			'label' => 'Adresse du getfile',
			'name' => 'intranet_API_getfile_url',
			'type' => 'text',
			'instructions' => 'https://api.sedoo.fr/intranet-omp-service-rest/data/v1_0/getfile?product=intranet-filetree&campaign=intranetomp&file=',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://api.sedoo.fr/intranet-omp-service-rest/data/v1_0/getfile?product=intranet-filetree&campaign=intranetomp&file=',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'sedoo-intranet-services-admin-page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

// Dossiers filebrowser  -- contact en commentaire pour l'instant
acf_add_local_field_group(array(
    'key' => 'group_6231ff4e5fc5e',
    'title' => 'Fichiers en relation',
    'fields' => array(
        array(
            'key' => 'field_6232038f994b5',
            'label' => 'Racine de l\'arborescence de fichiers',
            'name' => 'intranet_taxo_root',
            'type' => 'text',
            'instructions' => 'Récupérer l\'url pour accéder au dossier, depuis le gestionnaire de fichiers <a href="https://fb2.sedoo.fr/" target="_blank">"fileBrowser" </a>',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'https://fb2.sedoo.fr/files/irap/Finances/Achats/',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'taxonomy',
                'operator' => '==',
                'value' => 'category',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
));

// Déclarer un service
acf_add_local_field_group(array(
	'key' => 'group_62330e13209bb',
	'title' => 'Déclarer un service',
	'fields' => array(
		array(
			'key' => 'field_62330e2ae2563',
			'label' => 'Description du service',
			'name' => 'intranet_service',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_62330e7ce2564',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Ajouter un service',
			'sub_fields' => array(
				array(
					'key' => 'field_62330eb4e2566',
					'label' => 'Catégorie',
					'name' => 'intranet_service_categorie',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'category',
					'field_type' => 'multi_select',
					'allow_null' => 0,
					'add_term' => 0,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'multiple' => 0,
				),
				array(
					'key' => 'field_62330e7ce2564',
					'label' => 'nom du service',
					'name' => 'intranet_service_nom',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_62330e9ee2565',
					'label' => 'Mail de contact',
					'name' => 'intranet_service_mail',
					'type' => 'email',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_623b02e25e797',
					'label' => 'Gestionnaire(s) en charge',
					'name' => 'intranet_service_gestionnaires',
					'type' => 'user',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'role' => '',
					'allow_null' => 0,
					'multiple' => 1,
					'return_format' => 'object',
				),
				array(
					'key' => 'field_62623199f9f4d',
					'label' => 'Restreindre à un laboratoire',
					'name' => 'intranet_service_application_restrict',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_624523741dacf',
					'label' => 'Laboratoire',
					'name' => 'intranet_service_application_group',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_62623199f9f4d',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						4 => 'CESBIO',
						5 => 'GET',
						2 => 'IRAP',
						6 => 'LAERO',
						9 => 'LEFE',
						7 => 'LEGOS',
						3 => 'UAR',
					),
					'default_value' => false,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-gestion-des-services',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));
	
// Applications externes
acf_add_local_field_group(array(
	'key' => 'group_62332d0123e8c',
	'title' => 'Ajouter une application',
	'fields' => array(
		array(
			'key' => 'field_62332d013232a',
			'label' => 'Application en ligne externe',
			'name' => 'intranet_apiext',
			'type' => 'repeater',
			'instructions' => 'Pour les icônes, voir <a href="https://fonts.google.com/icons?icon.query=lock&icon.set=Material+Icons" target="_blank">https://fonts.google.com/icons</a><br>Insérer le nom de l\'icône (voir fenetre droite après selection de l\'icône',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_62332d0133ab5',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Ajouter un service externe',
			'sub_fields' => array(
				array(
					'key' => 'field_62332d0133ab5',
					'label' => 'nom de l\'application',
					'name' => 'intranet_apiext_application_nom',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_62332a2633ab5',
					'label' => 'Description',
					'name' => 'intranet_apiext_application_description',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_62332d0133abf',
					'label' => 'URL du service',
					'name' => 'intranet_apiext_application_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_62332d0133adb',
					'label' => 'Catégorie',
					'name' => 'intranet_apiext_application_categorie',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'category',
					'field_type' => 'multi_select',
					'allow_null' => 0,
					'add_term' => 0,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'object',
					'multiple' => 0,
				),
				array(
					'key' => 'field_62332eb41c13d',
					'label' => 'Icône',
					'name' => 'intranet_apiext_application_icone',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'identifiant de l\'icône ',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_626ab199f9f4d',
					'label' => 'Restreindre à un laboratoire',
					'name' => 'intranet_apiext_application_restrict',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_6245ad741dacf',
					'label' => 'Laboratoire',
					'name' => 'intranet_apiext_application_group',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_626ab199f9f4d',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						4 => 'CESBIO',
						5 => 'GET',
						2 => 'IRAP',
						6 => 'LAERO',
						9 => 'LEFE',
						7 => 'LEGOS',
						3 => 'UAR',
					),
					'default_value' => false,
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-applications-externes',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));
    
/**
 * BLOCKS
 */
// Filetree
acf_add_local_field_group(array(
	'key' => 'group_6244220d40ea0',
	'title' => 'Block filetree',
	'fields' => array(
		array(
			'key' => 'field_624426d2b7342',
			'label' => 'Titre du bloc',
			'name' => 'intranet_filetree_block_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Tous les fichiers de la catégorie XXXX',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_624426efb7343',
			'label' => 'Description',
			'name' => 'intranet_apiext_block_description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_62442768b7344',
			'label' => 'Associer à une catégorie ?',
			'name' => 'intranet_filetree_block_association',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_624425ecb7341',
			'label' => 'Racine de l\'arborescence de fichiers',
			'name' => 'intranet_filetree_block_root',
			'type' => 'text',
			'instructions' => 'Récupérer l\'url pour accéder au dossier, depuis le gestionnaire de fichiers <a href="https://fb2.sedoo.fr/" target="_blank">"fileBrowser" </a>',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_62442768b7344',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'https://fb2.sedoo.fr/files/LABO/finances/achats/',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_624427afb7345',
			'label' => 'Catégorie à associer',
			'name' => 'intranet_filetree_block_category',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_62442768b7344',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'category',
			'field_type' => 'radio',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/intranet-filetree-block',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

// liste services extérieur
acf_add_local_field_group(array(
	'key' => 'group_6241d783272d1',
	'title' => 'Block apiext',
	'fields' => array(
		array(
			'key' => 'field_6241d79ea8e46',
			'label' => 'Titre',
			'name' => 'intranet_apiext_block_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6241d7b8a8e47',
			'label' => 'Catégorie',
			'name' => 'intranet_apiext_block_category',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'category',
			'field_type' => 'checkbox',
			'add_term' => 1,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
			'allow_null' => 0,
		),
		array(
			'key' => 'field_6241d8622a428',
			'label' => 'Description',
			'name' => 'intranet_apiext_block_description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'wpautop',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/intranet-apiext-block',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

// Tuiles cliquables
acf_add_local_field_group(array(
	'key' => 'group_628206db870c0',
	'title' => 'super tile field group',
	'fields' => array(
		array(
			'key' => 'field_6282396cf76e8',
			'label' => 'Type de tuile',
			'name' => 'intranet_super_tile_block_type_choice',
			'type' => 'radio',
			'instructions' => '<ol>Quel type de tuile souhaitez-vous créer ? (3 choix possibles)
			<li>Tuile formulaire (Jaune)- raccourci vers un formulaire</li>
			<li>Tuile application (Verte)- raccourci vers une page ou une application.</li>
			<li>Tuile tutelle (variable en fonction de la tutelle)- raccourci vers une page ou une application.</li>		
			</ol>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'formulaire' => 'formulaire',
				'application' => 'application',
				'tutelle' => 'tutelle',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_628206f22220e',
			'label' => 'Vers quelle tutelle pointera le lien ?',
			'name' => 'intranet_super_tile_block_tutelle',
			'type' => 'radio',
			'instructions' => 'Sélectionner la tutelle',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6282396cf76e8',
						'operator' => '==',
						'value' => 'tutelle',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'cnrs' => 'CNRS',
				'ut3' => 'UT3',
				'ird' => 'IRD',
				'gouv' => 'Gouvernement / ministère',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_628206f0ac20e',
			'label' => 'Titre',
			'name' => 'intranet_super_tile_block_title',
			'type' => 'text',
			'instructions' => 'Saisissez le titre du block',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Saisissez le titre ici',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_62820730ac20f',
			'label' => 'Lien / Url',
			'name' => 'intranet_super_tile_block_link',
			'type' => 'link',
			'instructions' => 'Saisissez l\'url vers laquelle vous souhaitez rediriger l\'utilisateur.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
		array(
			'key' => 'field_628207bbac210',
			'label' => 'Icone',
			'name' => 'intranet_super_tile_block_icone',
			'type' => 'text',
			'instructions' => 'Saisissez le nom de l’icône que vous souhaitez inclure dans le block. Pour trouver le nom de l\'icône, consulter <a href="https://fonts.google.com/icons?icon.query=lock&icon.set=Material+Icons" target="_blank">https://fonts.google.com/icons</a>.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/intranet-tile-super-block',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));


endif;		

?>