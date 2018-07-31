<?php

// SOME MESSAGES
$lang['404_error']					= 'La page demandée n\, existe pas';
$lang['ins_no_server_requirements']	= 'Votre serveur / hébergeur ne possède pas la configuration minale requise pour faire tourner le jeu.<br /><br/>Configurationminimale: <br />- PHP 5.5.x<br />- MySQL 5.5.x';
$lang['ins_not_writable']               = 'Vous devez autoriser l\'écriture pour les dossiers application et config (chmod 600) pour continuer le processus d\'installation.';
$lang['ins_already_installed']		= 'XG Proyect est déjà installé. Sélectionez une option: <br /><br /> - <a href="../admin.php?page=update">Mettre à jour</a> <br /> 
- <a href="../admin.php?page=migrate">Migrer</a> <br /> - <a href="../">Retour au jeu</a> <br /><br />Si vous ne souhaitez prendre aucune autre mesure, pour la sécurité 
nous vous recommendons de <span style="color:red;text-decoration:underline;">SUPPRIMER</span> le dossier d\'installation.';

// SOME ERROR HEADERS
$lang['ins_error_title']			= 'Alerte!';
$lang['ins_warning_title']			= 'Avertissement!';
$lang['ins_ok_title']				= 'Ok!';

// TOP MENU
$lang['ins_overview']				= 'Overview';
$lang['ins_license']				= 'License';
$lang['ins_install']				= 'Installation';
$lang['ins_language_select']		= 'Sélectionner la langue';


// OVERVIEW PAGE
$lang['ins_install_title']			= 'Installation';
$lang['ins_title']					= 'Introduction';
$lang['ins_welcome']				= 'Bienvenue à XG Proyect!';
$lang['ins_welcome_first_line']		= 'XG Proyect est le meilleur clone d\'OGame. XG Proyect 3 est le plus récent et stable paquet jamais développé. Comme pour toute
autre version, XG Proyect est supporté par l\'équipe de Xtreme-gameZ, fournissant toujours la meilleur stabilité de la release.';
$lang['ins_welcome_second_line']	= 'Le système d\'installation va vous guider à travers le processus, affin que vous puissiez installer ou mettre à jour vers la
plus récente version du projet. Pour tous doutes, problème ou requête, n\hésitez a jeter un oeuil à notre <a href="http://www.xgproyect.org/"><em>communauté de support et 
de développement</em></a>.';
$lang['ins_welcome_third_line']		= "XG Proyect est un projet Opensource, pour consulter la license veuillez cliquer sur License dans le menu principal. Pour 
commencer le processus d\'installation, cliquez sur le bouton installation. Pour mettre à jour ou migrer, connectez-vous au paneau d\'administration.";
$lang['ins_install_license']		= 'License';

// INSTALL PAGE
// GENERAL
$lang['ins_steps']					= 'Étapes';
$lang['ins_step1']					= 'Données de connexion';
$lang['ins_step2']					= 'Vérifier la connexion';
$lang['ins_step3']					= 'Fichier de configuration';
$lang['ins_step4']					= 'Insérer les données';
$lang['ins_step5']					= 'Créer un compte administrateur';
$lang['ins_continue']				= 'Continuer';

// STEP1
$lang['ins_connection_data_title']	= 'Données pour se connecter au serveur de bases de données';
$lang['ins_server_title']			= 'Serveur SQL:';
$lang['ins_db_title']				= 'Base de données:';
$lang['ins_user_title']				= 'Utilisateur:';
$lang['ins_password_title']			= 'Mot de passe:';
$lang['ins_prefix_title']			= 'Préfixe des tables:';
$lang['ins_ex_tag']					= 'Ex:';
$lang['ins_install_go']				= 'Installer';

// ERRORS
$lang['ins_not_connected_error']	= 'Impossible de se connecter à la base de données avec les données fournies.';
$lang['ins_db_not_exists']              = 'Impossible d\'accéder à la base de données avec le nom fourni.';
$lang['ins_empty_fields_error']		= 'Tous les champs sont requis';
$lang['ins_write_config_error']		= 'Erreur a l\'écriture du fichier config.php, assurez-vous que le jeu peut écrire dans ce fichier (chmod 600) ou que le fichier 
existe';
$lang['ins_insert_tables_error']	= 'Ne peut insérer les données dans la base de données, veuillez vous assurer que le serveur de bases de données est actif.';

// STEP2
$lang['ins_done_config']			= 'config.php écrit avec succès.';
$lang['ins_done_connected']			= 'Connexion établie avec succès.';
$lang['ins_done_insert']			= 'Données de base ajoutées avec succès.';

// STEP3
$lang['ins_admin_create_title']		= 'Nouveau compte administrateur';
$lang['ins_admin_create_user']		= 'Utilisateur:';
$lang['ins_admin_create_pass']		= 'Mot de passe:';
$lang['ins_admin_create_email']		= 'Adresse e-mail:';
$lang['ins_admin_create_create']	= 'Créer';

// ERRORS
$lang['ins_adm_empty_fields_error']	    = 'Tous les champs sont requis';
$lang['ins_adm_invalid_email_address']	= 'Veuillez spécifier une adresse e-mail valide';

// STEP 4
$lang['ins_completed']				= 'INSTALLATION COMPLÉTÉE!';
$lang['ins_admin_account_created']	= 'Compte administrateur créé avec succès!';
$lang['ins_delete_install']			= 'Vous devez supprmier le dossier <i>install</i> pour éviter des risques de sécurité!';
$lang['ins_end']					= 'Finalisation';
/* end of INSTALL.php */
