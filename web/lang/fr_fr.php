<?php
//
// ZoneMinder web UK French language file, $Date$, $Revision$
// Copyright (C) 2001-2008 Philip Coombes
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//

// ZoneMinder French Translation by Jerome Hanoteau

// Notes for Translators
// 0. Get some credit, put your name in the line above (optional)
// 1. When composing the language tokens in your language you should try and keep to roughly the
//   same length text if possible. Abbreviate where necessary as spacing is quite close in a number of places.
// 2. There are four types of string replacement
//   a) Simple replacements are words or short phrases that are static and used directly. This type of
//     replacement can be used 'as is'.
//   b) Complex replacements involve some dynamic element being included and so may require substitution
//     or changing into a different order. The token listed in this file will be passed through sprintf as
//     a formatting string. If the dynamic element is a number you will usually need to use a variable
//     replacement also as described below.
//   c) Variable replacements are used in conjunction with complex replacements and involve the generation
//     of a singular or plural noun depending on the number passed into the zmVlang function. See the 
//     the zmVlang section below for a further description of this.
//   d) Optional strings which can be used to replace the prompts and/or help text for the Options section
//     of the web interface. These are not listed below as they are quite large and held in the database
//     so that they can also be used by the zmconfig.pl script. However you can build up your own list
//     quite easily from the Config table in the database if necessary.
// 3. The tokens listed below are not used to build up phrases or sentences from single words. Therefore
//   you can safely assume that a single word token will only be used in that context.
// 4. In new language files, or if you are changing only a few words or phrases it makes sense from a 
//   maintenance point of view to include the original language file and override the old definitions rather
//   than copy all the language tokens across. To do this change the line below to whatever your base language
//   is and uncomment it.
// require_once( 'zm_lang_en_gb.php' );

// You may need to change the character set here, if your web server does not already
// do this by default, uncomment this if required.
//
// Example
// header( "Content-Type: text/html; charset=iso-8859-1" );

// You may need to change your locale here if your default one is incorrect for the
// language described in this file, or if you have multiple languages supported.
// If you do need to change your locale, be aware that the format of this function
// is subtlely different in versions of PHP before and after 4.3.0, see
// http://uk2.php.net/manual/en/function.setlocale.php for details.
// Also be aware that changing the whole locale may affect some floating point or decimal 
// arithmetic in the database, if this is the case change only the individual locale areas
// that don't affect this rather than all at once. See the examples below.
// Finally, depending on your setup, PHP may not enjoy have multiple locales in a shared 
// threaded environment, if you get funny errors it may be this.
//
// Examples
// setlocale( 'LC_ALL', 'en_GB' ); All locale settings pre-4.3.0
// setlocale( LC_ALL, 'en_GB' ); All locale settings 4.3.0 and after
// setlocale( LC_CTYPE, 'en_GB' ); Character class settings 4.3.0 and after
// setlocale( LC_TIME, 'en_GB' ); Date and time formatting 4.3.0 and after

// Set date and time format (example: sam. 18 avril, 19h02)
setlocale(LC_ALL, "fr_FR.UTF-8");
define("DATE_FMT_CONSOLE_LONG", "%a %d %b, %Hh%M");
define( "STRF_FMT_DATETIME_SHORT", "%d/%m/%y %H:%M:%S" );
define( "STRF_FMT_DATETIME_SHORTER", "%d/%m %H:%M:%S" );

// Simple String Replacements
$SLANG = array(
    '24BitColour'          => 'Couleur 24 bits',
    '32BitColour'          => 'Couleur 32 bits',          // Added - 2011-06-15
    '8BitGrey'             => 'Gris 8 bits',
    'Action'               => 'Action',
    'Actual'               => 'R??el',
    'AddNewControl'        => 'Ajouter contr??le',
    'AddNewMonitor'        => 'Ajouter cam??ra',
    'AddNewServer'         => 'Add New Server',         // Added - 2018-08-30
    'AddNewStorage'        => 'Add New Storage',        // Added - 2018-08-30
    'AddNewUser'           => 'Ajouter utilisateur',
    'AddNewZone'           => 'Ajouter zone',
    'Alarm'                => 'Alarme',
    'AlarmBrFrames'        => 'Images<br/>alarme',
    'AlarmFrame'           => 'Image alarme',
    'AlarmFrameCount'      => 'Nb d\'image(s) en alarme',
    'AlarmLimits'          => 'Limites alarme',
    'AlarmMaximumFPS'      => 'i/s maximum pendant alarme',
    'AlarmPx'              => 'Px alarme',
    'AlarmRGBUnset'        => 'Vous devez d??finir une couleur RVB pour l\'alarme',
    'AlarmRefImageBlendPct'=> '% fusion image r??f??rence en alarme', // Added - 2015-04-18
    'Alert'                => 'Alerte',
    'All'                  => 'Tous',
    'AnalysisFPS'          => 'i/s ?? traiter en analyse',           // Added - 2015-07-22
    'AnalysisUpdateDelay'  => 'D??lai mise ?? jour analyse',  // Added - 2015-07-23
    'Apply'                => 'Appliquer',
    'ApplyingStateChange'  => 'Appl. chgt ??tat',
    'ArchArchived'         => 'Archiv?? seul.',
    'ArchUnarchived'       => 'Non-arch. seul.',
    'Archive'              => 'Archiver',
    'Archived'             => 'Archiv??s',
    'Area'                 => 'Surface',
    'AreaUnits'            => 'Surface (px/%)',
    'AttrAlarmFrames'      => 'Images alarme',
    'AttrArchiveStatus'    => 'Etat Archive',
    'AttrAvgScore'         => 'Score moy.',
    'AttrCause'            => 'Cause',
    'AttrDiskBlocks'       => 'Blocs disque',
    'AttrDiskPercent'      => '% disque',
    'AttrDiskSpace'        => 'Disk Space',             // Added - 2018-08-30
    'AttrDuration'         => 'Dur??e',
    'AttrEndDate'          => 'End Date',               // Added - 2018-08-30
    'AttrEndDateTime'      => 'End Date/Time',          // Added - 2018-08-30
    'AttrEndTime'          => 'End Time',               // Added - 2018-08-30
    'AttrEndWeekday'       => 'End Weekday',            // Added - 2018-08-30
    'AttrFilterServer'     => 'Server Filter is Running On', // Added - 2018-08-30
    'AttrFrames'           => 'Images',
    'AttrId'               => 'Id',
    'AttrMaxScore'         => 'Score max.',
    'AttrMonitorId'        => 'N??',
    'AttrMonitorName'      => 'Nom cam??ra',
    'AttrMonitorServer'    => 'Server Monitor is Running On', // Added - 2018-08-30
    'AttrName'             => 'Nom',
    'AttrNotes'            => 'Notes',
    'AttrStartDate'        => 'Start Date',             // Added - 2018-08-30
    'AttrStartDateTime'    => 'Start Date/Time',        // Added - 2018-08-30
    'AttrStartTime'        => 'Start Time',             // Added - 2018-08-30
    'AttrStartWeekday'     => 'Start Weekday',          // Added - 2018-08-30
    'AttrStateId'          => 'Run State',              // Added - 2018-08-30
    'AttrStorageArea'      => 'Storage Area',           // Added - 2018-08-30
    'AttrStorageServer'    => 'Server Hosting Storage', // Added - 2018-08-30
    'AttrSystemLoad'       => 'Charge syst??me',
    'AttrTotalScore'       => 'Score total',
    'Auto'                 => 'Auto',
    'AutoStopTimeout'      => 'Temporisation arr??t',
    'Available'            => 'Disponibles',              // Added - 2009-03-31
    'AvgBrScore'           => 'Score<br/>moy.',
    'Background'           => 'Arri??re-plan',
    'BackgroundFilter'     => 'Lancer les filtres en arri??re-plan',
    'BadAlarmFrameCount'   => 'Le nombre d\'images en alarme doit ??tre un entier sup??rieur ou ??gal ?? 1',
    'BadAlarmMaxFPS'       => 'Le nombre maximum d\'i/s en alarme doit ??tre un entier ou un nombre ?? virgule flottante sup??rieur ?? 0',
    'BadAnalysisFPS'       => 'Le nombre d\'i/s ?? traiter en analyse doit ??tre un entier ou un nombre ?? virgule flottante sup??rieur ?? 0', // Added - 2015-07-22
    'BadAnalysisUpdateDelay'=> 'Le d??lai de mise ?? jour analyse doit ??tre un nombre entier sup??rieur ou ??gal ?? 0', // Added - 2015-07-23
    'BadChannel'           => 'Le canal doit ??tre un nombre entier sup??rieur ou ??gal ?? 0',
    'BadColours'           => 'La valeur de la couleur cible est invalide', // Added - 2011-06-15
    'BadDevice'            => 'Le chemin de l\'??quipement ??tre d??fini',
    'BadFPSReportInterval' => 'L\'intervalle de rafra??chissement  de l\'information i/s doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadFormat'            => 'Le format doit ??tre un nombre entier sup??rieur ou ??gal ?? 0',
    'BadFrameSkip'         => 'Le nombre d\'images ?? sauter doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadHeight'            => 'La valeur de la hauteur est invalide',
    'BadHost'              => 'Le nom d\'h??te doit ??tre une adresse ip ou un nom dns valide sans le pr??fixe http://',
    'BadImageBufferCount'  => 'La taille du tampon d \'images doit ??tre un entier sup??rieur ou ??gal ?? 10',
    'BadLabelX'            => 'La coordonn??e X pour l\'horodatage doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadLabelY'            => 'La coordonn??e Y pour l\'horodatage doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadMaxFPS'            => 'Le nombre maximum d\'i/s doit ??tre un entier ou un nombre ?? virgule flottante sup??rieur ?? 0',
    'BadMotionFrameSkip'   => 'Le nombre d\'images ?? sauter en cas de d??tection doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadNameChars'         => 'Les noms ne peuvent contenir que des lettres, chiffres, les espaces, trait d\'union ou soulign??',
    'BadPalette'           => 'La palette doit ??tre d??finie', // Added - 2009-03-31
    'BadPath'              => 'Le chemin doit ??tre d??fini',
    'BadPort'              => 'Le port doit ??tre un nombre entier sup??rieur ou ??gal ?? 0',
    'BadPostEventCount'    => 'Le nombre d\'images post-??v??nements doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadPreEventCount'     => 'Le nombre d\'images pr??-??v??nements doit ??tre un entier sup??rieur ou ??gal ?? 0 et doit rester inf??rieur ?? la taille du tampon d\'images',
    'BadRefBlendPerc'      => 'Le pourcentage de fusion de l\'image de r??f??rence doit ??tre un entier sup??rieur ?? 0 et inf??rieur ?? 100',
    'BadSectionLength'     => 'La longueur de la section doit ??tre un entier sup??rieur ou ??gal ?? 30',
    'BadSignalCheckColour' => 'La cha??ne de caract??res pour la couleur d\'??tat du signal est invalide',
    'BadSourceType'        => 'Source Type \"Web Site\" requires the Function to be set to \"Monitor\"', // Added - 2018-08-30
    'BadStreamReplayBuffer'=> 'Le tampon d\'images pour la relecture doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadWarmupCount'       => 'Le nombre d\'images tests doit ??tre un entier sup??rieur ou ??gal ?? 0',
    'BadWebColour'         => 'La cha??ne de caract??res pour la couleur web est invalide',
    'BadWebSitePath'       => 'Please enter a complete website url, including the http:// or https:// prefix.', // Added - 2018-08-30
    'BadWidth'             => 'La valeur de la largeur est invalide',
    'Bandwidth'            => 'D??bit',
    'BandwidthHead'        => 'D??bit',	// This is the end of the bandwidth status on the top of the console, different in many language due to phrasing
    'BlobPx'               => 'Pix. forme',
    'BlobSizes'            => 'Tailles de forme',
    'Blobs'                => 'Formes',
    'Brightness'           => 'Luminosit??;',
    'Buffer'               => 'Tampon',                 // Added - 2015-04-18
    'Buffers'              => 'Tampons',
    'CSSDescription'       => 'Remplacer la feuille de style CSS par d??faut', // Added - 2015-04-18
    'CanAutoFocus'         => 'Automatique',
    'CanAutoGain'          => 'Automatique',
    'CanAutoIris'          => 'Automatique',
    'CanAutoWhite'         => 'Automatique',
    'CanAutoZoom'          => 'Automatique',
    'CanFocus'             => 'Focus',
    'CanFocusAbs'          => 'Absolu',
    'CanFocusCon'          => 'Continu',
    'CanFocusRel'          => 'Relatif',
    'CanGain'              => 'Gain',
    'CanGainAbs'           => 'Absolu',
    'CanGainCon'           => 'Continu',
    'CanGainRel'           => 'Relatif',
    'CanIris'              => 'Iris',
    'CanIrisAbs'           => 'Absolu',
    'CanIrisCon'           => 'Continu',
    'CanIrisRel'           => 'Relatif',
    'CanMove'              => 'D??placer',
    'CanMoveAbs'           => 'Absolu',
    'CanMoveCon'           => 'Continu',
    'CanMoveDiag'          => 'Diagonale',
    'CanMoveMap'           => 'Sur plan',
    'CanMoveRel'           => 'Relatif',
    'CanPan'               => 'Panoramique' ,
    'CanReset'             => 'R??Z',
	'CanReboot'             => 'Can Reboot',
    'CanSetPresets'        => 'Stockage pr??pos.',
    'CanSleep'             => 'Veille',
    'CanTilt'              => 'Inclinaison',
    'CanWake'              => 'R??veil',
    'CanWhite'             => 'Bal. des blancs',
    'CanWhiteAbs'          => 'Absolu',
    'CanWhiteBal'          => 'Bal. des blancs',
    'CanWhiteCon'          => 'Continu',
    'CanWhiteRel'          => 'Relatif',
    'CanZoom'              => 'Zoom',
    'CanZoomAbs'           => 'Absolu',
    'CanZoomCon'           => 'Continu',
    'CanZoomRel'           => 'Relatif',
    'Cancel'               => 'Annuler',
    'CancelForcedAlarm'    => 'Annuler alarme forc??e',
    'CaptureHeight'        => 'Hauteur',
    'CaptureMethod'        => 'M??thode',         // Added - 2009-02-08
    'CapturePalette'       => 'Palette',
    'CaptureResolution'    => 'R??solution',     // Added - 2015-04-18
    'CaptureWidth'         => 'Largeur',
    'Cause'                => 'Cause',
    'CheckMethod'          => 'M??thode v??rif. alarme',
    'ChooseDetectedCamera' => 'Choisir', // Added - 2009-03-31
    'ChooseFilter'         => 'Choisir filtre',
    'ChooseLogFormat'      => 'Choisir un format de journal',    // Added - 2011-06-17
    'ChooseLogSelection'   => 'Choisir une s??lection de journaux', // Added - 2011-06-17
    'ChoosePreset'         => 'Choisir pr??r??glage',
    'Clear'                => 'Effacer',                  // Added - 2011-06-16
    'CloneMonitor'         => 'Clone',                  // Added - 2018-08-30
    'Close'                => 'Fermer',
    'Colour'               => 'Couleur',
    'Command'              => 'Commande',
    'Component'            => 'Composant',              // Added - 2011-06-16
    'ConcurrentFilter'     => 'Run filter concurrently', // Added - 2018-08-30
    'Config'               => 'Config',
    'ConfiguredFor'        => 'Configur?? pour',
    'ConfirmDeleteEvents'  => 'Etes-vous s??r de vouloir effacer le(s) ??v??nement(s) s??lectionn??(s)?',
    'ConfirmPassword'      => 'R??p??ter mot de passe',
    'ConjAnd'              => 'et',
    'ConjOr'               => 'ou',
    'Console'              => 'Console',
    'ContactAdmin'         => 'Contactez votre administrateur SVP',
    'Continue'             => 'Continuer',
    'Contrast'             => 'Contraste',
    'Control'              => 'Contr??le',
    'ControlAddress'       => 'Adresse',
    'ControlCap'           => 'Capacit?? de contr??le',
    'ControlCaps'          => 'Capacit??s de contr??le',
    'ControlDevice'        => 'Equipement',
    'ControlType'          => 'Type',
    'Controllable'         => 'Control??ble',
    'Current'              => 'En cours',                // Added - 2015-04-18
    'Cycle'                => 'Cycle',
    'CycleWatch'           => 'Vision de cycle',
    'DateTime'             => 'Date/Heure',              // Added - 2011-06-16
    'Day'                  => 'Aujourd\'hui',
    'Debug'                => 'Debug',
    'DefaultRate'          => 'Vitesse par d??faut',
    'DefaultScale'         => 'Echelle par d??faut',
    'DefaultView'          => 'Vue par d??faut',
    'Deinterlacing'        => 'D??sentrelacement',          // Added - 2015-04-18
    'Delay'                => 'D??lai',                  // Added - 2015-04-18
    'Delete'               => 'Effacer',
    'DeleteAndNext'        => 'Eff. &amp; suiv.',
    'DeleteAndPrev'        => 'Eff. &amp; prec.',
    'DeleteSavedFilter'    => 'Eff. filtre sauv??',
    'Description'          => 'Description',
    'DetectedCameras'      => 'Cam??ra(s) d??tect??e(s)',       // Added - 2009-03-31
    'DetectedProfiles'     => 'Profil(s) d??tect??(s)',      // Added - 2015-04-18
    'Device'               => 'Equipement',                 // Added - 2009-02-08
    'DeviceChannel'        => 'Canal',
    'DeviceFormat'         => 'Format vid??o',
    'DeviceNumber'         => 'Num??ro cam??ra',
    'DevicePath'           => 'Chemin de l\'??quipement',
    'Devices'              => 'Cam??ras',
    'Dimensions'           => 'Dimensions',
    'DisableAlarms'        => 'D??sactiver les alarmes',
    'Disk'                 => 'Stockage',
    'Display'              => 'Affichage',                // Added - 2011-01-30
    'Displaying'           => 'Affich??s',             // Added - 2011-06-16
    'DoNativeMotionDetection'=> 'R??aliser d??tection native',
    'Donate'               => 'Veuillez faire un don',
    'DonateAlready'        => 'Non, j\'ai d??j?? donn??',
    'DonateEnticement'     => 'Vous utilisez ZoneMinder depuis quelque temps et nous esp??rons que vous trouvez cette solution utile. Bien que ZoneMinder est, et restera, une solution libre et ouverte (open source), son d??veloppement et son maintien n??cessitent des moyens financiers. Si vous voulez aider au d??veloppement et ?? l\'ajout de fonctionnalit??s, veuillez consid??rer la possibilit?? d\'effectuer un don. Les dons sont bien s??r optionnels mais grandement appr??ci??s et vous pouvez donner le montant que vous d??sirez.<br><br>Si vous voulez effectuer un don, veuillez s??lectionner l\'option ci-dessous ou veuillez vous rendre sur https://zoneminder.com/donate/ ?? l\'aide de votre navigateur internet.<br><br>Merci d\'utiliser ZoneMinder et n\'oubliez pas de visiter les forums sur ZoneMinder.com pour le support ou des suggestions pour rendre votre exp??rience de ZoneMinder encore meilleure.',
    'DonateRemindDay'      => 'Pas encore, me rappeler dans 1 jour',
    'DonateRemindHour'     => 'Pas encore, me rappeler dans 1 heure',
    'DonateRemindMonth'    => 'Pas encore, me rappeler dans 1 mois',
    'DonateRemindNever'    => 'Non, je ne veux pas faire de don, ne me rappeler pas',
    'DonateRemindWeek'     => 'Pas encore, me rappeler dans 1 semaine',
    'DonateYes'            => 'Oui, je souhaiterais faire un don maintenant',
    'Download'             => 'T??l??charger',
    'DownloadVideo'        => 'Download Video',         // Added - 2018-08-30
    'DuplicateMonitorName' => 'Dupliquer le nom de la cam??ra', // Added - 2009-03-31
    'Duration'             => 'Dur??e',
    'Edit'                 => 'Editer',
    'EditLayout'           => 'Edit Layout',            // Added - 2018-08-30
    'Email'                => 'Email',
    'EnableAlarms'         => 'Activer les alarmes',
    'Enabled'              => 'Activ??',
    'EnterNewFilterName'   => 'Entrer nom nouv. filtre',
    'Error'                => 'Erreur',
    'ErrorBrackets'        => 'Erreur, v??rifiez que toutes les parenth??ses ouvertes sont ferm??es',
    'ErrorValidValue'      => 'Erreur, v??rifiez que tous les termes ont une valeur valide',
    'Etc'                  => 'etc',
    'Event'                => 'Ev??nement',
    'EventFilter'          => 'Filtre ??v??nement',
    'EventId'              => 'Id',
    'EventName'            => 'Nom',
    'EventPrefix'          => 'Pr??fixe',
    'Events'               => 'Ev??nements',
    'Exclude'              => 'Exclure',
    'Execute'              => 'Ex??cuter',
    'Exif'                 => 'Embed EXIF data into image', // Added - 2018-08-30
    'Export'               => 'Exporter',
    'ExportDetails'        => 'Exporter d??tails ??v??nements',
    'ExportFailed'         => 'Exportation ??chou??e',
    'ExportFormat'         => 'Format',
    'ExportFormatTar'      => 'Tar',
    'ExportFormatZip'      => 'Zip',
    'ExportFrames'         => 'Exporter d??tails image',
    'ExportImageFiles'     => 'Exporter fichiers images',
    'ExportLog'            => 'Exporter fichiers journaux',             // Added - 2011-06-17
    'ExportMiscFiles'      => 'Exporter autres fichiers',
    'ExportOptions'        => 'Options d\'exportation',
    'ExportSucceeded'      => 'Exportation r??ussie',       // Added - 2009-02-08
    'ExportVideoFiles'     => 'Exporter fichiers vid??o',
    'Exporting'            => 'Exportation',
    'FPS'                  => 'i/s',
    'FPSReportInterval'    => 'Interv. de rafra??ch. i/s',
    'FTP'                  => 'FTP',
    'Far'                  => 'Loin',
    'FastForward'          => 'Avance rapide',
    'Feed'                 => 'Flux',
    'Ffmpeg'               => 'Ffmpeg',                 // Added - 2009-02-08
    'File'                 => 'Fichier',
    'Filter'               => 'Filtre',                 // Added - 2015-04-18
    'FilterArchiveEvents'  => 'Archiver',
    'FilterDeleteEvents'   => 'Effacer',
    'FilterEmailEvents'    => 'Envoyer les d??tails par email',
    'FilterExecuteEvents'  => 'Ex??cuter une commande',
    'FilterLog'            => 'Filtre',             // Added - 2015-04-18
    'FilterMessageEvents'  => 'Envoyer les d??tails par message',
    'FilterMoveEvents'     => 'Move all matches',       // Added - 2018-08-30
    'FilterPx'             => 'Filtre Px',
    'FilterUnset'          => 'Vous devez sp??cifier une largeur et une hauteur de filtre',
    'FilterUpdateDiskSpace'=> 'Update used disk space', // Added - 2018-08-30
    'FilterUploadEvents'   => 'Transf??rer',
    'FilterVideoEvents'    => 'Cr??er vid??o',
    'Filters'              => 'Filtres',
    'First'                => 'Prem.',
    'FlippedHori'          => 'Invers?? horizontalement',
    'FlippedVert'          => 'Invers?? verticalement',
    'FnMocord'              => 'Mocord',            // Added 2013.08.16.
    'FnModect'              => 'Modect',            // Added 2013.08.16.
    'FnMonitor'             => 'Monitor',            // Added 2013.08.16.
    'FnNodect'              => 'Nodect',            // Added 2013.08.16.
    'FnNone'                => 'Aucun',            // Added 2013.08.16.
    'FnRecord'              => 'Record',            // Added 2013.08.16.
    'Focus'                => 'Focus',
    'ForceAlarm'           => 'Forcer alarme',
    'Format'               => 'Format',
    'Frame'                => 'Image',
    'FrameId'              => 'N??',
    'FrameRate'            => 'Cadence image',
    'FrameSkip'            => 'Saut image',
    'Frames'               => 'Images',
    'Func'                 => 'Fct',
    'Function'             => 'Mode',
    'Gain'                 => 'Gain',
    'General'              => 'G??n??ral',
    'GenerateDownload'     => 'Generate Download',      // Added - 2018-08-30
    'GenerateVideo'        => 'G??n??rer vid??o',
    'GeneratingVideo'      => 'G??n??ration vid??o',
    'GoToZoneMinder'       => 'Aller sur ZoneMinder.com',
    'Grey'                 => 'Gris',
    'Group'                => 'Groupe',
    'Groups'               => 'Groupes',
    'HasFocusSpeed'        => 'Vitesse',
    'HasGainSpeed'         => 'Vitesse gain',
    'HasHomePreset'        => 'Position par d??faut',
    'HasIrisSpeed'         => 'Vitesse',
    'HasPanSpeed'          => 'Vitesse',
    'HasPresets'           => 'Pr??positions',
    'HasTiltSpeed'         => 'Vitesse',
    'HasTurboPan'          => 'Turbo',
    'HasTurboTilt'         => 'Incl. turbo',
    'HasWhiteSpeed'        => 'Vitesse',
    'HasZoomSpeed'         => 'Vitesse',
    'High'                 => 'Haut',
    'HighBW'               => 'Haut d??bit',
    'Home'                 => 'Maison',
    'Hostname'             => 'Hostname',               // Added - 2018-08-30
    'Hour'                 => 'Heure',
    'Hue'                  => 'Teinte',
    'Id'                   => 'N??',
    'Idle'                 => 'Vide',
    'Ignore'               => 'Ignorer',
    'Image'                => 'Image',
    'ImageBufferSize'      => 'Taille tampon image',
    'Images'               => 'Images',
    'In'                   => 'Dans',
    'Include'              => 'Inclure',
    'Inverted'             => 'Invers??',
    'Iris'                 => 'Iris',
    'KeyString'            => 'Cha??ne cl??',
    'Label'                => 'Etiquette',
    'Language'             => 'Langue',
    'Last'                 => 'Dernier',
    'Layout'               => 'Disposition',                 // Added - 2009-02-08
    'Level'                => 'Niveau',                  // Added - 2011-06-16
    'Libvlc'               => 'Libvlc',
    'LimitResultsPost'     => 'r??sultat(s) seulement', // This is used at the end of the phrase 'Limit to first N results only'
    'LimitResultsPre'      => 'Limiter au(x) premier(s)', // This is used at the beginning of the phrase 'Limit to first N results only'
    'Line'                 => 'Ligne',                   // Added - 2011-06-16
    'LinkedMonitors'       => 'Cam??ra(s) li??e(s)',
    'List'                 => 'Liste',
    'ListMatches'          => 'List Matches',           // Added - 2018-08-30
    'Load'                 => 'Charge',
    'Local'                => 'Local',
    'Log'                  => 'Journal',                    // Added - 2011-06-16
    'LoggedInAs'           => 'Connect?? en tant que',
    'Logging'              => 'Journalisation',                // Added - 2011-06-16
    'LoggingIn'            => 'Connexion',
    'Login'                => 'Connexion',
    'Logout'               => 'D??connexion',
    'Logs'                 => 'Journaux',                   // Added - 2011-06-17
    'Low'                  => 'Bas',
    'LowBW'                => 'Bas d??bit',
    'Main'                 => 'Principal',
    'Man'                  => 'Man',
    'Manual'               => 'Manuel',
    'Mark'                 => 'S??lectionner',
    'Max'                  => 'Max',
    'MaxBandwidth'         => 'D??bit max',
    'MaxBrScore'           => 'Score<br/>max',
    'MaxFocusRange'        => 'Plage max',
    'MaxFocusSpeed'        => 'Vitesse max',
    'MaxFocusStep'         => 'Pas max',
    'MaxGainRange'         => 'Plage gain max',
    'MaxGainSpeed'         => 'Vitesse gain max',
    'MaxGainStep'          => 'Pas gain max',
    'MaxIrisRange'         => 'Plage max',
    'MaxIrisSpeed'         => 'Vitesse max',
    'MaxIrisStep'          => 'Pas max',
    'MaxPanRange'          => 'Plage max',
    'MaxPanSpeed'          => 'Vitesse max',
    'MaxPanStep'           => 'Pas max',
    'MaxTiltRange'         => 'Plage max',
    'MaxTiltSpeed'         => 'Vitesse max',
    'MaxTiltStep'          => 'Pas max',
    'MaxWhiteRange'        => 'Plage max',
    'MaxWhiteSpeed'        => 'Vitesse max',
    'MaxWhiteStep'         => 'Pas max',
    'MaxZoomRange'         => 'Plage max',
    'MaxZoomSpeed'         => 'Vitesse max',
    'MaxZoomStep'          => 'Pas max',
    'MaximumFPS'           => 'i/s maximum',
    'Medium'               => 'Moyen',
    'MediumBW'             => 'Moy. d??bit',
    'Message'              => 'Message',                // Added - 2011-06-16
    'MinAlarmAreaLtMax'    => 'La surface minimum en alarme doit ??tre inf??rieure au maximum',
    'MinAlarmAreaUnset'    => 'Vous devez sp??cifier la surface minimum en alarme (nb de pixels)',
    'MinBlobAreaLtMax'     => 'La surface minimum des formes doit ??tre inf??rieure au maximum',
    'MinBlobAreaUnset'     => 'Vous devez sp??cifier la surface minimum des formes (nb de pixels)',
    'MinBlobLtMinFilter'   => 'La surface minimum des formes doit ??tre inf??rieure ?? la surface minimum filtr??e',
    'MinBlobsLtMax'        => 'Le nombre minimum de formes doit ??tre inf??rieur au maximum',
    'MinBlobsUnset'        => 'Vous devez sp??cifier le nombre minimum de formes',
    'MinFilterAreaLtMax'   => 'La surface minimum filtr??e doit ??tre inf??rieure au maximum',
    'MinFilterAreaUnset'   => 'Vous devez sp??cifier la surface minimum filtr??e (nb de pixels)',
    'MinFilterLtMinAlarm'  => 'La surface minimum filtr??e doit ??tre inf??rieure ?? la surface minimum en alarme',
    'MinFocusRange'        => 'Plage min',
    'MinFocusSpeed'        => 'Vitesse min',
    'MinFocusStep'         => 'Pas min',
    'MinGainRange'         => 'Plage gain min',
    'MinGainSpeed'         => 'Vitesse gain min',
    'MinGainStep'          => 'Pas gain min',
    'MinIrisRange'         => 'Plage min',
    'MinIrisSpeed'         => 'Vitesse min',
    'MinIrisStep'          => 'Pas min',
    'MinPanRange'          => 'Plage min',
    'MinPanSpeed'          => 'Vitesse min',
    'MinPanStep'           => 'Pas min',
    'MinPixelThresLtMax'   => 'Le seuil minimum de pixels doit ??tre inf??rieur au maximum',
    'MinPixelThresUnset'   => 'Vous devez sp??cifier le seuil minimum de pixels',
    'MinTiltRange'         => 'Plage min',
    'MinTiltSpeed'         => 'Vitesse min',
    'MinTiltStep'          => 'Pas min',
    'MinWhiteRange'        => 'Plage min',
    'MinWhiteSpeed'        => 'Vitesse min',
    'MinWhiteStep'         => 'Pas min',
    'MinZoomRange'         => 'Plage min',
    'MinZoomSpeed'         => 'Vitesse min',
    'MinZoomStep'          => 'Pas min',
    'Misc'                 => 'Divers',
    'Mode'                 => 'Mode',                   // Added - 2015-04-18
    'Monitor'              => 'Cam??ra',
    'MonitorIds'           => 'N??&nbsp;cam??ra',
    'MonitorPreset'        => 'Pr??r??glage cam??ra',
    'MonitorPresetIntro'   => 'S??lectionnez un pr??r??glage dans la liste ci-dessous.<br><br>Veuillez noter que la sauvegarde entra??nera l\'??crasement des param??tres d??j?? configur??s pour la cam??ra en cours.<br><br>',
    'MonitorProbe'         => 'Autod??tection cam??ras',          // Added - 2009-03-31
    'MonitorProbeIntro'    => 'La liste ci-dessous montre les cam??ras d??tect??es localement ou sur le r??seau, qu\'elles soient d??j?? configur??es ou non.<br/><br/>S??lectionnez la cam??ra d??sir??e dans la liste.<br/><br/>Veuillez noter que toutes les cam??ras ne sont pas forc??ment d??tect??es et que la sauvegarde entra??nera l\'??crasement des param??tres d??j?? configur??s pour la cam??ra en cours.<br/><br/>', // Added - 2009-03-31
    'Monitors'             => 'Cam??ras',
    'Montage'              => 'Montage',
    'MontageReview'        => 'Montage Review',         // Added - 2018-08-30
    'Month'                => 'Mois',
    'More'                 => 'Plus',                   // Added - 2011-06-16
    'MotionFrameSkip'      => 'Saut image en alarme',
    'Move'                 => 'D??placement',
    'Mtg2widgrd'           => '2 colonnes',              // Added 2013.08.15.
    'Mtg3widgrd'           => '3 colonnes',              // Added 2013.08.15.
    'Mtg3widgrx'           => '3 colonnes, ??chelle auto, ??largir sur alarme',              // Added 2013.08.15.
    'Mtg4widgrd'           => '4 colonnes',              // Added 2013.08.15.
    'MtgDefault'           => 'D??faut',              // Added 2013.08.15.
    'MustBeGe'             => 'doit ??tre sup. ou ??gal ??',
    'MustBeLe'             => 'doit ??tre inf. ou ??gal ??',
    'MustConfirmPassword'  => 'Confirmez le mot de passe',
    'MustSupplyPassword'   => 'Entrez un mot de passe',
    'MustSupplyUsername'   => 'Entrez un nom d\'utilisateur',
    'Name'                 => 'Nom',
    'Near'                 => 'Pr??s',
    'Network'              => 'R??seau',
    'New'                  => 'Nouv.',
    'NewGroup'             => 'Nouv. groupe',
    'NewLabel'             => 'Nouv. label',
    'NewPassword'          => 'Mot de passe',
    'NewState'             => 'Nouv. ??tat',
    'NewUser'              => 'Nouv. utilisateur',
    'Next'                 => 'Suivant',
    'No'                   => 'Non',
    'NoDetectedCameras'    => 'Pas de cam??ras d??tect??es',    // Added - 2009-03-31
    'NoDetectedProfiles'   => 'No Detected Profiles',   // Added - 2018-08-30
    'NoFramesRecorded'     => 'Pas d\'images enregistr??es pour cet ??v??nement',
    'NoGroup'              => 'Pas de groupe',
    'NoSavedFilters'       => 'Pas de filtres sauvegard??s',
    'NoStatisticsRecorded' => 'Pas de statistiques disponibles pour cet ??v??nmnt/imag.',
    'None'                 => 'Aucun',
    'NoneAvailable'        => 'Aucun disponible',
    'Normal'               => 'Normal',
    'Notes'                => 'Notes',
    'NumPresets'           => 'Nombre',
    'Off'                  => 'D??sactiver',
    'On'                   => 'Activer',
    'OnvifCredentialsIntro'=> 'Veuillez fournir un nom d\'utilisateur et un mot de passe pour la cam??ra s??lectionn??e.<br/>Si aucun utilisateur n\'a ??t?? cr???? pour la cam??ra alors l\'utilisateur saisi sera cr???? avec le mot de passe associ??.<br/><br/>', // Added - 2015-04-18
    'OnvifProbe'           => 'ONVIF',                  // Added - 2015-04-18
    'OnvifProbeIntro'      => 'La liste ci-dessous montre les cam??ras ONVIF d??tect??es et si elles sont d??j?? utilis??es ou disponibles.<br/><br/>S??lectionnez la cam??ra souhait??e dans la liste ci-dessous.<br/><br/>Veuillez noter que toutes les cam??ras ne sont pas forc??ment d??tect??es et que la sauvegarde entra??nera l\'??crasement des param??tres d??j?? configur??s pour la cam??ra en cours.<br/><br/>', // Added - 2015-04-18
    'OpEq'                 => '??gal ??',
    'OpGt'                 => 'sup. ??',
    'OpGtEq'               => 'plus grand ou ??gal ??',
    'OpIn'                 => 'en lot',
    'OpIs'                 => 'is',                     // Added - 2018-08-30
    'OpIsNot'              => 'is not',                 // Added - 2018-08-30
    'OpLt'                 => 'inf. ??',
    'OpLtEq'               => 'inf. ou ??gal ??',
    'OpMatches'            => 'correspond',
    'OpNe'                 => 'diff. de',
    'OpNotIn'              => 'pas en lot',
    'OpNotMatches'         => 'ne correspond pas',
    'Open'                 => 'Ouvrir',
    'OptionHelp'           => 'Aide',
    'OptionRestartWarning' => 'Ces changements peuvent n??cessiter un red??marrage de ZoneMinder pour ??tre pleinement op??rationnels.',
    'OptionalEncoderParam' => 'Optional Encoder Parameters', // Added - 2018-08-30
    'Options'              => 'Options',
    'OrEnterNewName'       => 'ou entrez nouv. nom',
    'Order'                => 'Ordre',
    'Orientation'          => 'Orientation',
    'Out'                  => 'Arri??re',
    'OverwriteExisting'    => 'Ecraser l\'existant',
    'Paged'                => 'Pagin??e',
    'Pan'                  => 'Panoramique',
    'PanLeft'              => 'Pano. gauche',
    'PanRight'             => 'Pano. droite',
    'PanTilt'              => 'Pano. / Incl.',
    'Parameter'            => 'Param??tre',
    'Password'             => 'Mot de passe',
    'PasswordsDifferent'   => 'Les 2 mots de passe sont diff??rents',
    'Paths'                => 'Chemins',
    'Pause'                => 'Pause',
    'Phone'                => 'T??l??phone',
    'PhoneBW'              => 'D??bit t??l.',
    'Pid'                  => 'PID',                    // Added - 2011-06-16
    'PixelDiff'            => 'Diff. pixel',
    'Pixels'               => 'nb pixels',
    'Play'                 => 'Lire',
    'PlayAll'              => 'Tout lire',
    'PleaseWait'           => 'Attendez',
    'Plugins'              => 'Greffons',
    'Point'                => 'Point',
    'PostEventImageBuffer' => 'Nb d\'image(s) post-??v??nement',
    'PreEventImageBuffer'  => 'Nb d\'image(s) pr??-??v??nement',
    'PreserveAspect'       => 'Pr??server les proportions',
    'Preset'               => 'Pr??r??glage',
    'Presets'              => 'Pr??r??glages',
    'Prev'                 => 'Pr??c??dent',
    'Probe'                => 'Autod??tection',                  // Added - 2009-03-31
    'ProfileProbe'         => 'D??tection de flux',           // Added - 2015-04-18
    'ProfileProbeIntro'    => 'La liste ci-dessous montre les profils de flux existants pour la cam??ra s??lectionn??e.<br/><br/>S??lectionnez le profil d??sir?? dans la liste ci-dessous.<br/><br/>Veuillez noter que ZoneMinder ne peut pas configurer de profils additionels et que la sauvegarde entra??nera l\'??crasement des param??tres d??j?? configur??s pour la cam??ra en cours.<br/><br/>', // Added - 2015-04-18
    'Progress'             => 'Progression',               // Added - 2015-04-18
    'Protocol'             => 'Protocole',
    'RTSPDescribe'         => 'Use RTSP Response Media URL', // Added - 2018-08-30
    'RTSPTransport'        => 'RTSP Transport Protocol', // Added - 2018-08-30
    'Rate'                 => 'Vitesse',
    'Real'                 => 'R??el',
    'RecaptchaWarning'     => 'Your reCaptcha secret key is invalid. Please correct it, or reCaptcha will not work', // Added - 2018-08-30
    'Record'               => 'Enregistrer',
    'RecordAudio'          => 'Whether to store the audio stream when saving an event.', // Added - 2018-08-30
    'RefImageBlendPct'     => '% fusion image r??f??rence',
    'Refresh'              => 'Rafra??chir',
    'Remote'               => 'Distant',
    'RemoteHostName'       => 'Nom d\'h??te',
    'RemoteHostPath'       => 'Chemin',
    'RemoteHostPort'       => 'Port',
    'RemoteHostSubPath'    => 'Sous-chemin',    // Added - 2009-02-08
    'RemoteImageColours'   => 'Nombre de couleurs',
    'RemoteMethod'         => 'M??thode',          // Added - 2009-02-08
    'RemoteProtocol'       => 'Protocole',        // Added - 2009-02-08
    'Rename'               => 'Renommer',
    'Replay'               => 'Relire',
    'ReplayAll'            => 'Tous les ??v??nements',
    'ReplayGapless'        => 'Rejouer sans blancs',
    'ReplaySingle'         => 'Rejouer seul',
    'ReportEventAudit'     => 'Audit Events Report',    // Added - 2018-08-30
    'Reset'                => 'R??Z',
    'ResetEventCounts'     => 'R??Z compteur ??vts',
    'Restart'              => 'Red??marrer',
    'Restarting'           => 'Red??marrage',
    'RestrictedCameraIds'  => 'N??',
    'RestrictedMonitors'   => 'Cam??ra(s) uniquement visible(s)',
    'ReturnDelay'          => 'D??lai de retour',
    'ReturnLocation'       => 'Position de retour',
    'Rewind'               => 'Reculer',
    'RotateLeft'           => 'Rotation g.',
    'RotateRight'          => 'Rotation d.',
    'RunLocalUpdate'       => 'Veuillez ??xecuter zmupdate.pl pour mettre ?? jour', // Added - 2011-05-25
    'RunMode'              => 'Mode de lancement',
    'RunState'             => 'Changer d\'??tat',
    'Running'              => 'En marche',
    'Save'                 => 'Sauvegarder',
    'SaveAs'               => 'Sauvegarder sous',
    'SaveFilter'           => 'Sauvegarder filtre',
    'SaveJPEGs'            => 'Save JPEGs',             // Added - 2018-08-30
    'Scale'                => 'Echelle',
    'Score'                => 'Score',
    'Secs'                 => 'Secs',
    'Sectionlength'        => 'Longueur section',
    'Select'               => 'S??lectionner',
    'SelectFormat'         => 'S??lectionner format',          // Added - 2011-06-17
    'SelectLog'            => 'S??lectionner journal',             // Added - 2011-06-17
    'SelectMonitors'       => 'S??lectionner cam??ras',
    'SelfIntersecting'     => 'Les bords du polygone ne doivent pas se croiser',
    'Set'                  => 'D??finir',
    'SetNewBandwidth'      => 'R??gler le d??bit',
    'SetPreset'            => 'D??finir pr??r??glage',
    'Settings'             => 'R??glages',
    'ShowFilterWindow'     => 'Filtres',
    'ShowTimeline'         => 'Afficher chronologie',
    'SignalCheckColour'    => 'Couleur v??rif. signal',
    'SignalCheckPoints'    => 'Signal Check Points',    // Added - 2018-08-30
    'Size'                 => 'Taille',
    'SkinDescription'      => 'Remplacer le skin par d??faut', // Added - 2011-01-30
    'Sleep'                => 'Veille',
    'SortAsc'              => 'Asc',
    'SortBy'               => 'Trier par',
    'SortDesc'             => 'Desc',
    'Source'               => 'Source',
    'SourceColours'        => 'Couleurs',         // Added - 2009-02-08
    'SourcePath'           => 'Chemin',            // Added - 2009-02-08
    'SourceType'           => 'Type de source',
    'Speed'                => 'Vitesse',
    'SpeedHigh'            => 'Rapide',
    'SpeedLow'             => 'Lent',
    'SpeedMedium'          => 'Moyen',
    'SpeedTurbo'           => 'Turbo',
    'Start'                => 'D??marrer',
    'State'                => 'Etat',
    'Stats'                => 'Stats',
    'Status'               => 'Statut',
    'StatusConnected'      => 'Capturing',              // Added - 2018-08-30
    'StatusNotRunning'     => 'Not Running',            // Added - 2018-08-30
    'StatusRunning'        => 'Not Capturing',          // Added - 2018-08-30
    'StatusUnknown'        => 'Unknown',                // Added - 2018-08-30
    'Step'                 => 'Pas',
    'StepBack'             => 'Reculer',
    'StepForward'          => 'Avancer',
    'StepLarge'            => 'Pas large',
    'StepMedium'           => 'Pas moyen',
    'StepNone'             => 'Pas nul',
    'StepSmall'            => 'Pas faible',
    'Stills'               => 'Photos',
    'Stop'                 => 'Arr??ter',
    'Stopped'              => 'Arr??t??',
    'StorageArea'          => 'Storage Area',           // Added - 2018-08-30
    'StorageScheme'        => 'Scheme',                 // Added - 2018-08-30
    'Stream'               => 'Flux',
    'StreamReplayBuffer'   => 'Nb d\'image(s) pour relecture',
    'Submit'               => 'Soumettre',
    'System'               => 'Syst??me',
    'SystemLog'            => 'Journal syst??me',             // Added - 2011-06-16
    'TargetColorspace'     => 'Espace de couleur cible',      // Added - 2015-04-18
    'Tele'                 => 'T??l??',
    'Thumbnail'            => 'Miniature',
    'Tilt'                 => 'Incliner',
    'Time'                 => 'Heure',
    'TimeDelta'            => 'Temps',
    'TimeStamp'            => 'Horodatage',
    'Timeline'             => 'Chronologie',
    'TimelineTip1'         => 'Passez votre souris sur le graphique pour visualiser un aper??u de l\'image et les d??tails de l\'??v??nement.',              // Added 2013.08.15.
    'TimelineTip2'         => 'Cliquez sur les sections color??es du graphique ou sur l\'image pour voir l\'??v??nement.',              // Added 2013.08.15.
    'TimelineTip3'         => 'Cliquez sur le fond pour zoomer sur une plage de temps plus r??duite autour de votre clic.',              // Added 2013.08.15.
    'TimelineTip4'         => 'Utilisez les contr??les ci-dessous pour faire un zoom arri??re ou naviguer en arri??re et avancer sur l\'intervalle de temps.',              // Added 2013.08.15.
    'Timestamp'            => 'Horodatage',
    'TimestampLabelFormat' => 'Format',
    'TimestampLabelSize'   => 'Taille de police',
    'TimestampLabelX'      => 'Coordonn??e X',
    'TimestampLabelY'      => 'Coordonn??e Y',
    'Today'                => 'Aujourd\'hui',
    'Tools'                => 'Outils',
    'Total'                => 'Total',                  // Added - 2011-06-16
    'TotalBrScore'         => 'Score<br/>total',
    'TrackDelay'           => 'D??lai suivi',
    'TrackMotion'          => 'Suivre d??tection',
    'Triggers'             => 'D??clenchements',
    'TurboPanSpeed'        => 'Vitesse turbo',
    'TurboTiltSpeed'       => 'Vitesse turbo',
    'Type'                 => 'Type',
    'Unarchive'            => 'D??sarchiver',
    'Undefined'            => 'Ind??fini',              // Added - 2009-02-08
    'Units'                => 'Unit??',
    'Unknown'              => 'Inconnu',
    'Update'               => 'Mettre ?? jour',
    'UpdateAvailable'      => 'Mise ?? jour dispo.',
    'UpdateNotNecessary'   => 'Pas de mise ?? jour dispo.',
    'Updated'              => 'Mis ?? jour',                // Added - 2011-06-16
    'Upload'               => 'Transf??rer',                 // Added - 2011-08-23
    'UseFilter'            => 'Utiliser filtre',
    'UseFilterExprsPost'   => '&nbsp;filtre&nbsp;expressions', // This is used at the end of the phrase 'use N filter expressions'
    'UseFilterExprsPre'    => 'Utiliser&nbsp;', // This is used at the beginning of the phrase 'use N filter expressions'
    'UsedPlugins'	   => 'Filtres utilis??s',
    'User'                 => 'Utilisateur',
    'Username'             => 'Nom',
    'Users'                => 'Utilisateurs',
    'V4L'                  => 'V4L',
    'V4LCapturesPerFrame'  => 'Nb captures par image',
    'V4LMultiBuffer'       => 'Mise en tampon multiple',
    'Value'                => 'Valeur',
    'Version'              => 'Version',
    'VersionIgnore'        => 'Ignorer cette version',
    'VersionRemindDay'     => 'Me rappeler dans 1 jour',
    'VersionRemindHour'    => 'Me rappeler dans 1 heure',
    'VersionRemindNever'   => 'Ne pas avertir des nvelles versions',
    'VersionRemindWeek'    => 'Me rappeler dans 1 sem.',
    'Video'                => 'Vid??o',
    'VideoFormat'          => 'Format de la vid??o',
    'VideoGenFailed'       => 'Echec g??n??ration vid??o !',
    'VideoGenFiles'        => 'Fichiers vid??o existants',
    'VideoGenNoFiles'      => 'Aucun fichier vid??o trouv??',
    'VideoGenParms'        => 'Param??tres g??n??ration vid??o',
    'VideoGenSucceeded'    => 'Vid??o g??n??r??e avec succ??s !',
    'VideoSize'            => 'Taille vid??o',
    'VideoWriter'          => 'Video Writer',           // Added - 2018-08-30
    'View'                 => 'Voir',
    'ViewAll'              => 'Tout voir',
    'ViewEvent'            => 'Voir ??v??nement',
    'ViewPaged'            => 'Vue pagin??e',
    'Wake'                 => 'R??veiller',
    'WarmupFrames'         => 'Nb d\'image(s) tests',
    'Watch'                => 'Regarder',
    'Web'                  => 'Web',
    'WebColour'            => 'Couleur web',
    'WebSiteUrl'           => 'Website URL',            // Added - 2018-08-30
    'Week'                 => 'Semaine',
    'White'                => 'Blanc',
    'WhiteBalance'         => 'Balance des blancs',
    'Wide'                 => 'Large',
    'X'                    => 'X',
    'X10'                  => 'X10',
    'X10ActivationString'  => 'X10:cha??ne activation',
    'X10InputAlarmString'  => 'X10:cha??ne alarme entr??e',
    'X10OutputAlarmString' => 'X10:cha??ne alarme sortie',
    'Y'                    => 'Y',
    'Yes'                  => 'Oui',
    'YouNoPerms'           => 'Permissions n??cessaires pour cette ressource.',
    'Zone'                 => 'Zone',
    'ZoneAlarmColour'      => 'Couleur alarme (Rouge/Vert/Bleu)',
    'ZoneArea'             => 'Surface de la zone',
    'ZoneExtendAlarmFrames' => 'Nb image(s) pour extension alarme',
    'ZoneFilterSize'       => 'Largeur/hauteur surface filtr??e (nb pixels)',
    'ZoneMinMaxAlarmArea'  => 'Surface en alarme min/max (nb pixels)',
    'ZoneMinMaxBlobArea'   => 'Surface des formes min/max (nb pixels)',
    'ZoneMinMaxBlobs'      => 'Nombre de formes min/max',
    'ZoneMinMaxFiltArea'   => 'Surface filtr??e min/max (nb pixels)',
    'ZoneMinMaxPixelThres' => 'Seuil pixels min/max (0-255)',
    'ZoneMinderLog'        => 'Journal de ZoneMinder',         // Added - 2011-06-17
    'ZoneOverloadFrames'   => 'Nb image(s) ignor??e(s) apr??s d??pass. seuil',
    'Zones'                => 'Zones',
    'Zoom'                 => 'Zoom',
    'ZoomIn'               => 'Zoom avant',
    'ZoomOut'              => 'Zoom arri??re',
);

// Complex replacements with formatting and/or placements, must be passed through sprintf
$CLANG = array(
    'CurrentLogin'         => 'Utilisateur actuel: \'%1$s\'',
    'EventCount'           => '%1$s %2$s', // par ex. '37 ??v??nts' (voir Vlang ci-dessous)
    'LastEvents'           => '%1$s derniers %2$s', // par ex. '37 derniers  ??v??nts' (voir Vlang ci-dessous)
    'LatestRelease'        => 'La derni??re version est v%1$s, vous avez v%2$s.',
    'MonitorCount'         => '%1$s %2$s', // par exemple '4 cam??ras' (voir Vlang ci-dessous)
    'MonitorFunction'      => 'Cam??ra %1$s Fonction',
    'RunningRecentVer'     => 'Vous avez la derni??re version de ZoneMinder, v%s.',
    'VersionMismatch'      => 'Discordance entre version syst??me (%1$s) et base de donn??es (%2$s).', // Added - 2011-05-25
);

// The next section allows you to describe a series of word ending and counts used to 
// generate the correctly conjugated forms of words depending on a count that is associated
// with that word.
// This intended to allow phrases such a '0 potatoes', '1 potato', '2 potatoes' etc to
// conjugate correctly with the associated count.
// In some languages such as English this is fairly simple and can be expressed by assigning
// a count with a singular or plural form of a word and then finding the nearest (lower) value.
// So '0' of something generally ends in 's', 1 of something is singular and has no extra
// ending and 2 or more is a plural and ends in 's' also. So to find the ending for '187' of
// something you would find the nearest lower count (2) and use that ending.
//
// So examples of this would be
// $zmVlangPotato = array( 0=>'Potatoes', 1=>'Potato', 2=>'Potatoes' );
// $zmVlangSheep = array( 0=>'Sheep' );
//
// where you can have as few or as many entries in the array as necessary
// If your language is similar in form to this then use the same format and choose the
// appropriate zmVlang function below.
// If however you have a language with a different format of plural endings then another
// approach is required . For instance in Russian the word endings change continuously
// depending on the last digit (or digits) of the numerator. In this case then zmVlang
// arrays could be written so that the array index just represents an arbitrary 'type'
// and the zmVlang function does the calculation about which version is appropriate.
//
// So an example in Russian might be (using English words, and made up endings as I
// don't know any Russian!!)
// $zmVlangPotato = array( 1=>'Potati', 2=>'Potaton', 3=>'Potaten' );
//
// and the zmVlang function decides that the first form is used for counts ending in
// 0, 5-9 or 11-19 and the second form when ending in 1 etc.
//

// Variable arrays expressing plurality, see the zmVlang description above
$VLANG = array(
    'Event'                => array( 0=>'??v??nements', 1=>'??v??nement', 2=>'??v??nements' ),
    'Monitor'              => array( 0=>'cam??ras', 1=>'cam??ra', 2=>'cam??ras' ),
);

// You will need to choose or write a function that can correlate the plurality string arrays
// with variable counts. This is used to conjugate the Vlang arrays above with a number passed
// in to generate the correct noun form.
//
// In languages such as English this is fairly simple 
// Note this still has to be used with printf etc to get the right formating
function zmVlang( $langVarArray, $count )
{
    krsort( $langVarArray );
    foreach ( $langVarArray as $key=>$value )
    {
        if ( abs($count) >= $key )
        {
            return( $value );
        }
    }
    die( 'Erreur, impossible de corr??ler la cha??ne de caract??res' );
}

// This is an version that could be used in the Russian example above
// The rules are that the first word form is used if the count ends in
// 0, 5-9 or 11-19. The second form is used then the count ends in 1
// (not including 11 as above) and the third form is used when the 
// count ends in 2-4, again excluding any values ending in 12-14.
// 
// function zmVlang( $langVarArray, $count )
// {
//  $secondlastdigit = substr( $count, -2, 1 );
//  $lastdigit = substr( $count, -1, 1 );
//  // or
//  // $secondlastdigit = ($count/10)%10;
//  // $lastdigit = $count%10;
// 
//  // Get rid of the special cases first, the teens
//  if ( $secondlastdigit == 1 && $lastdigit != 0 )
//  {
//      return( $langVarArray[1] );
//  }
//  switch ( $lastdigit )
//  {
//      case 0 :
//      case 5 :
//      case 6 :
//      case 7 :
//      case 8 :
//      case 9 :
//      {
//          return( $langVarArray[1] );
//          break;
//      }
//      case 1 :
//      {
//          return( $langVarArray[2] );
//          break;
//      }
//      case 2 :
//      case 3 :
//      case 4 :
//      {
//          return( $langVarArray[3] );
//          break;
//      }
//  }
//  die( 'Error, unable to correlate variable language string' );
// }

// This is an example of how the function is used in the code which you can uncomment and 
// use to test your custom function.
//$monitors = array();
//$monitors[] = 1; // Choose any number
//echo sprintf( $zmClangMonitorCount, count($monitors), zmVlang( $zmVlangMonitor, count($monitors) ) );

// In this section you can override the default prompt and help texts for the options area
// These overrides are in the form show below where the array key represents the option name minus the initial ZM_
// So for example, to override the help text for ZM_LANG_DEFAULT do
$OLANG = array(
	'OPTIONS_FFMPEG' => array(
		'Help' => "Parameters in this field are passed on to FFmpeg. Multiple parameters can be separated by ,~~ ".
		          "Examples (do not enter quotes)~~~~".
		          "\"allowed_media_types=video\" Set datatype to request fromcam (audio, video, data)~~~~".
		          "\"reorder_queue_size=nnn\" Set number of packets to buffer for handling of reordered packets~~~~".
		          "\"loglevel=debug\" Set verbosity of FFmpeg (quiet, panic, fatal, error, warning, info, verbose, debug)"
	),
	'OPTIONS_LIBVLC' => array(
		'Help' => "Parameters in this field are passed on to libVLC. Multiple parameters can be separated by ,~~ ".
		          "Examples (do not enter quotes)~~~~".
		          "\"--rtp-client-port=nnn\" Set local port to use for rtp data~~~~". 
		          "\"--verbose=2\" Set verbosity of libVLC"
	),
	
    'LANG_DEFAULT' => array(
        'Prompt' => "Langage par d??faut pour l'interface web",
        'Help' => "ZoneMinder est exploitable dans votre langue si le fichier de traduction appropri?? est disponible sur votre syst??me. Cette option permet de changer la langue anglaise par d??faut par la langue de votre choix dans la liste."
    ),
);

?>
