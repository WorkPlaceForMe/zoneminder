<?php
//
// ZoneMinder web Polish language file, $Date$, $Revision$
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
//
// ZoneMinder Polish Translation by Robert Krysztof
// 2016-08-25 Updated by Dawid Kasza > dawid.kasza@gmail.com
// 2019-06-05 Updated by GospoGied  > adm_gospogied(at)poczta.fm
//
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
header( "Content-Type: text/html; charset=utf-8" );

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
//setlocale( LC_ALL, 'pl_PL:UTF-8' ); // All locale settings pre-4.3.0
// setlocale( LC_ALL, 'pl_PL:UTF-8' );   // All locale settings 4.3.0 and after
//setlocale( LC_CTYPE, 'pl_PL:UTF-8' ); // Character class settings 4.3.0 and after
//setlocale( LC_TIME, 'pl_PL:UTF-8' );  // Date and time formatting 4.3.0 and after

//
// Date and time formats, specific to this language
//

define( "DATE_FMT_CONSOLE_LONG", "%d.%m.%Y, %H:%M" );			// This is the main console date/time, date() or strftime() format
define( "DATE_FMT_CONSOLE_SHORT", "%H:%m" );                    // This is the xHTML console date/time, date() or strftime() format

define( "STRF_FMT_DATETIME", "%b. %e. %Y., %H:%M" );            // Strftime locale aware format for dates with times
define( "STRF_FMT_DATE", "%b. %e. %Y." );                       // Strftime locale aware format for dates without times
define( "STRF_FMT_TIME", "%H:%m:%S" );                          // Strftime locale aware format for times without dates

define( "STRF_FMT_DATETIME_SHORT", "%y/%m/%d %H:%M:%S" );       // Strftime shorter format for dates with time
define( "STRF_FMT_DATETIME_SHORTER", "%m.%d. %H:%M:%S" );       // Strftime shorter format for dates with time, used where space is tight (events list)

// Simple String Replacements
$SLANG = array(
    '24BitColour'          => 'Kolor (24 bity)',
    '32BitColour'          => 'Kolor (32 bity)',
    '8BitGrey'             => 'Cz/b (8 bit??w)',
    'Action'               => 'Dzia??anie:',
    'Actual'               => 'Domy??lna',
    'AddNewControl'        => 'Dodaj nowy kontroler',
    'AddNewMonitor'        => 'Dodaj nowy monitor',
    'AddNewServer'         => 'Dodaj nowy serwer',
    'AddNewStorage'        => 'Dodaj nowy magazyn',
    'AddNewUser'           => 'Dodaj u??ytkownika',
    'AddNewZone'           => 'Dodaj now?? stref??',
    'Alarm'                => 'Alarm',
    'AlarmBrFrames'        => 'Ramki<br/>alarmowe',
    'AlarmFrame'           => 'Ramka alarmowa',
    'AlarmFrameCount'      => 'Ilo???? ramek alarmowych',
    'AlarmLimits'          => 'Ograniczenia alarmu',
    'AlarmMaximumFPS'      => 'Maksymalny FPS alarmu',
    'AlarmPx'              => 'Alarm Px',
    'AlarmRGBUnset'        => 'Musisz ustawi?? kolor RGB alarmu',
    'AlarmRefImageBlendPct'=> 'Mieszanie alarmu z obrazem referencyjnym %ge',
    'Alert'                => 'Gotowo????',
    'All'                  => 'Wszystko',
    'AnalysisFPS'          => 'FPS analizy',
    'AnalysisUpdateDelay'  => 'Op????nienie aktualizacji analizy',
    'Apply'                => 'Zastosuj',
    'ApplyingStateChange'  => 'Zmieniam stan pracy',
    'ArchArchived'         => 'Tylko zarchiwizowane',
    'ArchUnarchived'       => 'Tylko niezarchiwizowane',
    'Archive'              => 'Dodaj do archiwum',
    'Archived'             => 'Zarchiwizowane',
    'Area'                 => 'Obszar',
    'AreaUnits'            => 'Obszar (px/%)',
    'AttrAlarmFrames'      => 'Ramki alarmowe',
    'AttrArchiveStatus'    => 'Status archiwum',
    'AttrAvgScore'         => '??red. wynik',
    'AttrCause'            => 'Pow??d',
    'AttrDiskBlocks'       => 'Dysk Bloki',
    'AttrDiskPercent'      => 'Procent zaj??to??ci',
    'AttrDiskSpace'        => 'Miejsce na dysku',
    'AttrDuration'         => 'Czas trwania',
    'AttrEndDate'          => 'Ko??cowa data',
    'AttrEndDateTime'      => 'Ko??cowa data/godzina',
    'AttrEndTime'          => 'Ko??cowy czas',
    'AttrEndWeekday'       => 'Ko??cowy tydzie??',
    'AttrFilterServer'     => 'Filtr serwera pracuje na',
    'AttrFrames'           => 'Klatki',
    'AttrId'               => 'Nr',
    'AttrMaxScore'         => 'Maks. wynik',
    'AttrMonitorId'        => 'Nr monitora',
    'AttrMonitorName'      => 'Nazwa monitora',
    'AttrMonitorServer'    => 'Monitor serwera pracuje na',
    'AttrName'             => 'Nazwa',
    'AttrNotes'            => 'Notatki',
    'AttrStartDate'        => 'Pocz??tkowa data',
    'AttrStartDateTime'    => 'Pocz??tkowa data/czas',
    'AttrStartTime'        => 'Pocz??tkowy czas',
    'AttrStartWeekday'     => 'Pocz??tkowy tydzie??',
    'AttrStateId'          => 'Stan dzia??ania',
    'AttrStorageArea'      => 'Magazyn',
    'AttrStorageServer'    => 'Serwer hostuj??cy',
    'AttrSystemLoad'       => 'Obci????enie systemu',
    'AttrTotalScore'       => 'Ca??kowity wynik',
    'Auto'                 => 'Auto',
    'AutoStopTimeout'      => 'Czas automatycznego stopu',
    'Available'            => 'Dost??pne',
    'AvgBrScore'           => '??red.<br/>wynik',
    'Background'           => 'Dzia??a w tle',
    'BackgroundFilter'     => 'Uruchom filtr w tle',
    'BadAlarmFrameCount'   => 'Liczba ramek alarmowych musi by?? liczb?? ca??kowit?? jeden lub wi??cej',
    'BadAlarmMaxFPS'       => 'Maks. FPS alarmu musi by?? dodatni?? liczb?? ca??kowit?? lub zmiennoprzecinkow??',
    'BadAnalysisFPS'       => 'Analiza FPS musi by?? dodatni?? liczb?? ca??kowit?? lub zmiennoprzecinkow??',
    'BadAnalysisUpdateDelay'=> 'Op????nienie aktualizacji analizy musi by?? ustawione na liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadChannel'           => 'Kana?? musi by?? ustawiony na liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadColours'           => 'Kolor docelowy musi by?? ustawiony na prawid??ow?? warto????',
    'BadDevice'            => 'Urz??dzenie musi mie?? poprawn?? warto????',
    'BadFPSReportInterval' => 'Liczba bufor??w interwa??u raportu FPS musi by?? liczb?? ca??kowit?? r??wn?? 0 lub wi??cej',
    'BadFormat'            => 'Format musi by?? ustawiony na liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadFrameSkip'         => 'Liczba pomijanych ramek musi by?? liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadHeight'            => 'Wysoko???? musi by?? ustawiona na prawid??ow?? warto????',
    'BadHost'              => 'Host musi by?? ustawiony na prawid??owy adres IP lub nazw?? hosta, nie do????czaj http://',
    'BadImageBufferCount'  => 'Rozmiar bufora obrazu musi by?? liczb?? ca??kowit?? 10 lub wi??ksz??',
    'BadLabelX'            => 'Wsp????rz??dna X etykiety musi by?? ustawiona na liczb?? ca??kowit?? r??wn?? zero lub wi??ceje',
    'BadLabelY'            => 'Wsp????rz??dna Y etykiety musi by?? ustawiona na liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadMaxFPS'            => 'Maksymalna liczba klatek na sekund?? musi by?? dodatni?? liczb?? ca??kowit?? lub zmiennoprzecinkow??',
    'BadMotionFrameSkip'   => 'Liczba pomijanych ramek ruchu musi by?? liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadNameChars'         => 'Nazwy mog?? zawiera?? tylko litery, cyfry oraz my??lnik i podkre??lenie',
    'BadPalette'           => 'Paleta musi mie?? poprawn?? warto????',
    'BadPath'              => '??cie??ka musi mie?? poprawn?? warto????',
    'BadPort'              => 'Port musi by?? ustawiony na prawid??owy numer',
    'BadPostEventCount'    => 'Liczba zdj???? po zdarzeniu musi by?? liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadPreEventCount'     => 'Liczba obraz??w przed zdarzeniem musi wynosi?? co najmniej zero i mniej ni?? rozmiar bufora obrazu',
    'BadRefBlendPerc'      => 'Procent mieszania z referencyjnym obrazem musi by?? dodatni?? liczb?? ca??kowit??',
    'BadSectionLength'     => 'D??ugo???? sekcji musi by?? liczb?? ca??kowit?? 30 lub wi??ksz??',
    'BadSignalCheckColour' => 'Kolor kontroli sygna??u musi by?? prawid??owym ci??giem kolor??w RGB',
    'BadSourceType'        => 'Typ ??r??d??a \"Web Site\" wymaga ustawienia funkcji \"Monitorowanie\"',
    'BadStreamReplayBuffer'=> 'Bufor odtwarzania strumieniowego musi by?? liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadWarmupCount'       => 'Ramki rozgrzewaj??ce musz?? by?? liczb?? ca??kowit?? r??wn?? zero lub wi??cej',
    'BadWebColour'         => 'Kolor strony musi by?? prawid??owy dla strony web',
    'BadWebSitePath'       => 'Wprowad?? pe??ny adres URL strony, w tym prefiks http: // lub https: //.',
    'BadWidth'             => 'Szeroko???? musi by?? ustawiona na poprawn?? warto????',
    'Bandwidth'            => 'Przepustowo????',
    'BandwidthHead'        => 'Przepustowo????',	// This is the end of the bandwidth status on the top of the console, different in many language due to phrasing
    'BlobPx'               => 'Plamka Px',
    'BlobSizes'            => 'Rozmiary plamek',
    'Blobs'                => 'Plamki',
    'Brightness'           => 'Jaskrawo????',
    'Buffer'               => 'Bufor',
    'Buffers'              => 'Bufory',
    'CSSDescription'       => 'Zmie?? domy??lny css dla tego komputera',
    'CanAutoFocus'         => 'Mo??e auto. skupia??',
    'CanAutoGain'          => 'Mo??e auto. wzmacnia??',
    'CanAutoIris'          => 'Mo??e auto. ust. ogniskow??',
    'CanAutoWhite'         => 'Mo??e auto. ust. balans bieli',
    'CanAutoZoom'          => 'Mo??e auto. zbli??a??',
    'CanFocus'             => 'Mo??e ust. ogniskow??',
    'CanFocusAbs'          => 'Mo??e ust. ogniskow?? ca??kowicie',
    'CanFocusCon'          => 'Mo??e ust. ogniskow?? ci??gle',
    'CanFocusRel'          => 'Mo??e ust. ogniskow?? relatywnie',
    'CanGain'              => 'Mo??e wzmacnia?? ',
    'CanGainAbs'           => 'Mo??e wzmacnia?? absolutnie',
    'CanGainCon'           => 'Mo??e wzmacnia?? ci??gle',
    'CanGainRel'           => 'Mo??e wzmacnia?? relatywnie',
    'CanIris'              => 'Mo??e ust. ogniskow??',
    'CanIrisAbs'           => 'Mo??e ust. ogniskow?? ca??kowicie',
    'CanIrisCon'           => 'Mo??e ust. ogniskow?? ci??gle',
    'CanIrisRel'           => 'Mo??e ust. ogniskow?? relatywnie',
    'CanMove'              => 'Mo??na obraca??',
    'CanMoveAbs'           => 'Mo??na obraca?? ca??kowicie',
    'CanMoveCon'           => 'Mo??na obraca?? ci??gle',
    'CanMoveDiag'          => 'Mo??na obraca?? po przek??tnej',
    'CanMoveMap'           => 'Mo??na obraca?? mapowanie',
    'CanMoveRel'           => 'Mo??na obraca?? relatywnie',
    'CanPan'               => 'Mo??na panoram??' ,
    'CanReset'             => 'Mo??na resetowa??',
    'CanReboot'            => 'Mo??na restartowa??',
    'CanSetPresets'        => 'Mo??na ustawia?? predefiniowana',
    'CanSleep'             => 'Mo??na usypia??',
    'CanTilt'              => 'Mo??na odchyla??',
    'CanWake'              => 'Mo??na wybudza??',
    'CanWhite'             => 'Mo??e ust. balans bieli',
    'CanWhiteAbs'          => 'Mo??e ust. balans bieli ca??kowicie',
    'CanWhiteBal'          => 'Mo??e ust. balans bieli',
    'CanWhiteCon'          => 'Mo??e ust. balans bieli ci??gle',
    'CanWhiteRel'          => 'Mo??e ust. balans bieli relatywnie',
    'CanZoom'              => 'Mo??na zbli??a??',
    'CanZoomAbs'           => 'Mo??na zbli??a?? ca??kowicie',
    'CanZoomCon'           => 'Mo??na zbli??a?? ci??gle',
    'CanZoomRel'           => 'Mo??na zbli??a?? relatywnie',
    'Cancel'               => 'Anuluj',
    'CancelForcedAlarm'    => 'Anuluj wymuszony alarm',
    'CaptureHeight'        => 'Wysoko???? obrazu',
    'CaptureMethod'        => 'Metoda przechwytywania',
    'CapturePalette'       => 'Paleta kolor??w obrazu',
    'CaptureResolution'    => 'Rozdzielczo???? nagrywania',
    'CaptureWidth'         => 'Szeroko???? obrazu',
    'Cause'                => 'Przyczyna',
    'CheckMethod'          => 'Metoda sprawdzenia alarmu',
    'ChooseDetectedCamera' => 'Wybierz wykryt?? kamer??',
    'ChooseFilter'         => 'Wybierz filtr',
    'ChooseLogFormat'      => 'Wybierz format log??w',
    'ChooseLogSelection'   => 'Wybierz spos??b wybierania log??w',
    'ChoosePreset'         => 'Wybierz ustawienie',
    'Clear'                => 'Wyczy????',
    'CloneMonitor'         => 'Klonuj',
    'Close'                => 'Zamknij',
    'Colour'               => 'Nasycenie',
    'Command'              => 'Polecenie',
    'Component'            => 'Komponent',
    'ConcurrentFilter'     => 'Uruchom filtr r??wnolegle',
    'Config'               => 'Konfiguracja',
    'ConfiguredFor'        => 'Ustawiona',
    'ConfirmDeleteEvents'  => 'Jeste?? pewien, ??e chcesz usun???? zaznaczone zdarzenia?',
    'ConfirmPassword'      => 'Potwierd?? has??o',
    'ConjAnd'              => 'i',
    'ConjOr'               => 'lub',
    'Console'              => 'Konsola',
    'ContactAdmin'         => 'Skontaktuj si?? z Twoim administratorem w sprawie szczeg??????w.',
    'Continue'             => 'Kontynuuj',
    'Contrast'             => 'Kontrast',
    'Control'              => 'Kontrola',
    'ControlAddress'       => 'Adres sterowania',
    'ControlCap'           => 'Mo??liwo???? sterowania',
    'ControlCaps'          => 'Mo??liwo???? sterowania',
    'ControlDevice'        => 'Kontrola urz??dzenia',
    'ControlType'          => 'Typ sterowania',
    'Controllable'         => 'Sterowana',
    'Current'              => 'Obecny',
    'Cycle'                => 'Podgl??d cykliczny',
    'CycleWatch'           => 'Cykl podgl??du',
    'DateTime'             => 'Data/Czas',
    'Day'                  => 'Dzie??',
    'Debug'                => 'Debug',
    'DefaultRate'          => 'Domy??lna szybko????',
    'DefaultScale'         => 'Skala domy??lna',
    'DefaultView'          => 'Widok domy??lny',
    'Deinterlacing'        => 'Usuwanie przeplotu',
    'Delay'                => 'Op????nienie',
    'Delete'               => 'Usu??',
    'DeleteAndNext'        => 'Usu?? &amp; nast??pny',
    'DeleteAndPrev'        => 'Usu?? &amp; poprzedni',
    'DeleteSavedFilter'    => 'Usu?? zapisany filtr',
    'Description'          => 'Opis',
    'DetectedCameras'      => 'Wykryte kamery',
    'DetectedProfiles'     => 'Wykryte profile',
    'Device'               => 'Urz??dzenie',
    'DeviceChannel'        => 'Numer wej??cia w urz??dzeniu',
    'DeviceFormat'         => 'System TV',
    'DeviceNumber'         => 'Numer urz??dzenia',
    'DevicePath'           => '??cie??ka urz??dzenia',
    'Devices'              => 'Urz??dzenia',
    'Dimensions'           => 'Rozmiary',
    'DisableAlarms'        => 'Wy????cz alarm',
    'Disk'                 => 'Dysk',
    'Display'              => 'Wygl??d',
    'Displaying'           => 'Wy??wietlanie',
    'DoNativeMotionDetection'=> 'Wykonaj natywne wykrywanie ruchu',
    'Donate'               => 'Prosz?? zr??b darowizn??',
    'DonateAlready'        => 'Nie, ju?? wykona??em darowizn??',
    'DonateEnticement'     => 'U??ywasz ZoneMinder ju?? od jakiego?? czasu i mam nadziej??, ??e jest to przydatne uzupe??nienie bezpiecze??stwa w domu lub w miejscu pracy. Mimo ??e ZoneMinder jest i pozostanie darmowy i otwarty, to tworzenie go i wsparcie kosztuje. Je??li chcesz wesprze?? przysz??y rozw??j i nowe funkcje, we?? pod uwag?? darowizn??. Darowizna jest oczywi??cie opcjonalna, ale bardzo ceniona i mo??esz przekaza?? darowizny tak du??o lub tak ma??o, jak chcesz. <br> <br> Je??li chcesz przekaza?? darowizn??, wybierz opcj?? poni??ej lub przejd?? do https://zoneminder.com/donate/ w przegl??darce. <br> <br> Dzi??kujemy za korzystanie z ZoneMinder i nie zapomnij odwiedzi?? for??w na ZoneMinder.com, aby uzyska?? pomoc lub sugestie, jak sprawi??, by korzystanie z ZoneMinder by??o jeszcze lepsze.',
    'DonateRemindDay'      => 'Jeszcze nie, przypomnij za 1 dzie??',
    'DonateRemindHour'     => 'Jeszcze nie, przypomnij za 1 godzin??',
    'DonateRemindMonth'    => 'Jeszcze nie, przypomnij za 1 miesi??c',
    'DonateRemindNever'    => 'Nie, nie chc?? wykona?? darowizny, nigdy nie przypominaj',
    'DonateRemindWeek'     => 'Jeszcze nie, przypomnij za 1 tydzie??',
    'DonateYes'            => 'Tak, chc?? wykona?? darowizn?? teraz',
    'Download'             => 'Pobierz',
    'DownloadVideo'        => 'Pobierz wideo',
    'DuplicateMonitorName' => 'Duplikuj nazw?? ',
    'Duration'             => 'Czas trwania',
    'Edit'                 => 'Edycja',
    'EditLayout'           => 'Edytuj uk??ad',
    'Email'                => 'Email',
    'EnableAlarms'         => 'W????cz alarmy',
    'Enabled'              => 'Aktywny',
    'EnterNewFilterName'   => 'Wpisz now?? nazw?? filtra',
    'Error'                => 'B????d',
    'ErrorBrackets'        => 'B????d, prosz?? sprawdzi?? ilo???? nawias??w otwieraj??cych i zamykaj??cych',
    'ErrorValidValue'      => 'B????d, prosz?? sprawdzi?? czy wszystkie warunki maj?? poprawne warto??ci',
    'Etc'                  => 'itp',
    'Event'                => 'Zdarzenie',
    'EventFilter'          => 'Filtr zdarze??',
    'EventId'              => 'Nr zdarzenia',
    'EventName'            => 'Nazwa zdarzenia',
    'EventPrefix'          => 'Prefiks zdarzenia',
    'Events'               => 'Zdarzenia',
    'Exclude'              => 'Wyklucz',
    'Execute'              => 'Wykonaj',
    'Exif'                 => 'Zapisz dane EXIF do obrazu',
    'Export'               => 'Eksport',
    'ExportDetails'        => 'Eksport szczeg??????w zdarzenia',
    'ExportFailed'         => 'Eksport nie powi??d?? si??',
    'ExportFormat'         => 'Rodzaj archiwum',
    'ExportFormatTar'      => 'Tar',
    'ExportFormatZip'      => 'Zip',
    'ExportFrames'         => 'Eksport szczeg??????w klatki',
    'ExportImageFiles'     => 'Eksport plik??w obrazowych (klatek)',
    'ExportLog'            => 'Eksport log??w',
    'ExportMiscFiles'      => 'Eksport innych plik??w (je??li dost??pne)',
    'ExportOptions'        => 'Opcje eksportu',
    'ExportSucceeded'      => 'Eksport zako??czony pomy??lnie',
    'ExportVideoFiles'     => 'Eksport plik??w video (je??li dost??pne)',
    'Exporting'            => 'Eksportowanie',
    'FPS'                  => 'fps',
    'FPSReportInterval'    => 'Raport (ramek/s)',
    'FTP'                  => 'FTP',
    'Far'                  => 'Daleko',
    'FastForward'          => 'Szybkie przewijanie',
    'Feed'                 => 'Dostarcz',
    'Ffmpeg'               => 'FFmpeg',
    'File'                 => 'Plik',
    'Filter'               => 'Filtr',
    'FilterArchiveEvents'  => 'Archiwizuj wszystkie pasuj??ce',
    'FilterDeleteEvents'   => 'Usu?? wszystkie pasuj??ce',
    'FilterEmailEvents'    => 'Wysy??aj poczt?? wszystkie pasuj??ce',
    'FilterExecuteEvents'  => 'Wywo??uj komend?? dla wszystkich pasuj??cych',
    'FilterLog'            => 'Filtr log??w',
    'FilterMessageEvents'  => 'Wy??wietlaj komunikat na wszystkie pasuj??ce',
    'FilterMoveEvents'     => 'Przenie?? wszystkie pasuj??ce',
    'FilterPx'             => 'Filtr Px',
    'FilterUnset'          => 'Musisz okre??li?? szeroko???? i wysoko???? filtra',
    'FilterUpdateDiskSpace'=> 'Zaktualizuj zaj??to???? dysku',
    'FilterUploadEvents'   => 'Wysy??aj wszystkie pasuj??ce',
    'FilterVideoEvents'    => 'Utw??rz nagranie dla zaznaczonych',
    'Filters'              => 'Filtry',
    'First'                => 'Pierwszy',
    'FlippedHori'          => 'Odwr???? poziomo',
    'FlippedVert'          => 'Odwr???? pionowo',
    'FnMocord'             => 'Wykr. ruchu z nagrywaniem',
    'FnModect'             => 'Wykr. ruchu',
    'FnMonitor'            => 'Monitorowanie',
    'FnNodect'             => 'Zew. zdarzania',
    'FnNone'               => 'Wy????czony',
    'FnRecord'             => 'Nagrywanie',
    'Focus'                => 'Skupienie',
    'ForceAlarm'           => 'Wymu?? alarm',
    'Format'               => 'Format',
    'Frame'                => 'Ramka',
    'FrameId'              => 'Nr. ramki',
    'FrameRate'            => 'Tempo ramek',
    'FrameSkip'            => 'Pomi?? ramk??',
    'Frames'               => 'Ramki',
    'Func'                 => 'Funkcja',
    'Function'             => 'Funkcja',
    'Gain'                 => 'Wzmocnienie',
    'General'              => 'Og??lne',
    'GenerateDownload'     => 'Generowanie pobierania',
    'GenerateVideo'        => 'Generowanie wideo',
    'GeneratingVideo'      => 'Generuj?? wideo',
    'GoToZoneMinder'       => 'Przejd?? na ZoneMinder.com',
    'Grey'                 => 'Cz/b',
    'Group'                => 'Grupa',
    'Groups'               => 'Grupy',
    'HasFocusSpeed'        => 'Ma pr??dko???? skupiania',
    'HasGainSpeed'         => 'Ma pr??dko???? wzmocnienia',
    'HasHomePreset'        => 'Ma ustawienia pocz??tkowej pozycji',
    'HasIrisSpeed'         => 'Ma pr??dko???? ust. ogniskowej',
    'HasPanSpeed'          => 'Ma pr??dko???? panoramy',
    'HasPresets'           => 'Ma ustawienia predefiniowane',
    'HasTiltSpeed'         => 'Ma pr??dko???? odchylania',
    'HasTurboPan'          => 'Ma turbo panoram??',
    'HasTurboTilt'         => 'Ma turbo odchylanie',
    'HasWhiteSpeed'        => 'Ma pr??dko???? balansu bieli',
    'HasZoomSpeed'         => 'Ma pr??dko???? zbli??enia',
    'High'                 => 'Wysoko????',
    'HighBW'               => 'Wys.&nbsp;prz.',
    'Home'                 => 'Pocz??tkowa pozycja',
    'Hostname'             => 'Nazwa hosta',
    'Hour'                 => 'Godzina',
    'Hue'                  => 'Odcie??',
    'Id'                   => 'Nr',
    'Idle'                 => 'Bezczynny',
    'Ignore'               => 'Ignoruj',
    'Image'                => 'Obraz',
    'ImageBufferSize'      => 'Rozmiar bufora obrazu (ramek)',
    'Images'               => 'Obrazy',
    'In'                   => 'In',
    'Include'              => 'Do????cz',
    'Inverted'             => 'Odwr??cony',
    'Iris'                 => 'Ogniskowa',
    'KeyString'            => '??a??cuch klucza',
    'Label'                => 'Etykieta',
    'Language'             => 'J??zyk',
    'Last'                 => 'Ostatni',
    'Layout'               => 'Uk??ad',
    'Level'                => 'Poziom',
    'Libvlc'               => 'Libvlc',
    'LimitResultsPost'     => 'wynik??w;', // This is used at the end of the phrase 'Limit to first N results only'
    'LimitResultsPre'      => 'Ogranicz do pocz??tkowych', // This is used at the beginning of the phrase 'Limit to first N results only'
    'Line'                 => 'Linia',
    'LinkedMonitors'       => 'Po????czone monitory',
    'List'                 => 'Lista',
    'ListMatches'          => 'Poka?? pasuj??ce',
    'Load'                 => 'Obc.',
    'Local'                => 'Lokalny',
    'Log'                  => 'Logi',
    'LoggedInAs'           => 'Zalogowany jako',
    'Logging'              => 'Logowanie',
    'LoggingIn'            => 'Logowanie',
    'Login'                => 'Login',
    'Logout'               => 'Wyloguj',
    'Logs'                 => 'Logi',
    'Low'                  => 'niska',
    'LowBW'                => 'Nis.&nbsp;prz.',
    'Main'                 => 'G????wny',
    'Man'                  => 'Podr.',
    'Manual'               => 'Podr??cznik',
    'Mark'                 => 'Znacznik',
    'Max'                  => 'Maks.',
    'MaxBandwidth'         => 'Maks. przepustowo????',
    'MaxBrScore'           => 'Maks.<br/>wynik',
    'MaxFocusRange'        => 'Maks. zakres skupiania',
    'MaxFocusSpeed'        => 'Maks. pr??dko???? skupiania',
    'MaxFocusStep'         => 'Maks. krok skupiania',
    'MaxGainRange'         => 'Maks. zakres wzmocnienia',
    'MaxGainSpeed'         => 'Maks. pr??dko???? wzmocnienia',
    'MaxGainStep'          => 'Maks. krok wzmocnienia',
    'MaxIrisRange'         => 'Maks. zakres ust. ogniskowej',
    'MaxIrisSpeed'         => 'Maks. pr??dko???? ust. ogniskowej',
    'MaxIrisStep'          => 'Maks. krok ust. ogniskowej',
    'MaxPanRange'          => 'Maks. zakres panoramy',
    'MaxPanSpeed'          => 'Maks. pr??dko???? panoramy',
    'MaxPanStep'           => 'Maks. krok panoramy',
    'MaxTiltRange'         => 'Maks. zakres odchylania',
    'MaxTiltSpeed'         => 'Maks. pr??dko???? odchylania',
    'MaxTiltStep'          => 'Maks. krok odchylania',
    'MaxWhiteRange'        => 'Maks. zakres balansu bieli',
    'MaxWhiteSpeed'        => 'Maks. pr??dko???? balansu bieli',
    'MaxWhiteStep'         => 'Maks. krok balansu bieli',
    'MaxZoomRange'         => 'Maks. zakres zbli??enia',
    'MaxZoomSpeed'         => 'Maks. pr??dko???? zbli??enia',
    'MaxZoomStep'          => 'Maks. krok zbli??enia',
    'MaximumFPS'           => 'Maks. FPS',
    'Medium'               => '??rednia',
    'MediumBW'             => '??red.&nbsp;prz.',
    'Message'              => 'Tre????',
    'MinAlarmAreaLtMax'    => 'Minimalna powierzchnia alarmu powinna by?? mniejsza ni?? maksymalna',
    'MinAlarmAreaUnset'    => 'Musisz okre??li?? minimaln?? liczb?? pikseli alarmu',
    'MinBlobAreaLtMax'     => 'Minimalny obszar plamki powinien by?? mniejszy od maksymalnego obszaru plamki',
    'MinBlobAreaUnset'     => 'Musisz okre??li?? minimaln?? liczb?? pikseli plamki',
    'MinBlobLtMinFilter'   => 'Minimalna powierzchnia plamki powinna by?? mniejsza lub r??wna minimalnej powierzchni filtra',
    'MinBlobsLtMax'        => 'Najmniejsze plamki powinny by?? mniejsze od najwi??kszych plamek' ,
    'MinBlobsUnset'        => 'Musisz okre??li?? minimaln?? liczb?? plamek',
    'MinFilterAreaLtMax'   => 'Minimalna powierzchnia filtra powinna by?? mniejsza ni?? maksymalna',
    'MinFilterAreaUnset'   => 'Musisz okre??li?? minimaln?? liczb?? pikseli filtra',
    'MinFilterLtMinAlarm'  => 'Minimalna powierzchnia filtra powinna by?? mniejsza lub r??wna minimalnej powierzchni alarmu',
    'MinFocusRange'        => 'Min. zakres skupiania',
    'MinFocusSpeed'        => 'Min. pr??dko???? skupiania',
    'MinFocusStep'         => 'Min. krok skupiania',
    'MinGainRange'         => 'Min. zakres wzmocnienia',
    'MinGainSpeed'         => 'Min. pr??dko???? wzmocnienia',
    'MinGainStep'          => 'Min. krok wzmocnienia',
    'MinIrisRange'         => 'Min. zakres ust. ogniskowej',
    'MinIrisSpeed'         => 'Min. pr??dko???? ust. ogniskowej',
    'MinIrisStep'          => 'Min. krok ust. ogniskowej',
    'MinPanRange'          => 'Min. zakres panoramy',
    'MinPanSpeed'          => 'Min. pr??dko???? panoramy',
    'MinPanStep'           => 'Min. krok panoramy',
    'MinPixelThresLtMax'   => 'Najmniejsze progi pikseli powinny by?? mniejsze od najwi??kszych prog??w pikseli',
    'MinPixelThresUnset'   => 'Musisz okre??li?? minimalny pr??g pikseli',
    'MinTiltRange'         => 'Min zakres odchylania',
    'MinTiltSpeed'         => 'Min pr??dko???? odchylania',
    'MinTiltStep'          => 'Min krok odchylania',
    'MinWhiteRange'        => 'Min zakres balansu bieli',
    'MinWhiteSpeed'        => 'Min pr??dko???? balansu bieli',
    'MinWhiteStep'         => 'Min krok balansu bieli',
    'MinZoomRange'         => 'Min zakres zbli??enia',
    'MinZoomSpeed'         => 'Min pr??dko???? zbli??enia',
    'MinZoomStep'          => 'Min krok zbli??enia',
    'Misc'                 => 'Inne',
    'Mode'                 => 'Tryb',
    'Monitor'              => 'Monitor',
    'MonitorIds'           => 'Numery monitor??w',
    'MonitorPreset'        => 'Predefiniowane ustawienia ',
    'MonitorPresetIntro'   => 'Wybierz odpowiednie ustawienie wst??pne z poni??szej listy.<br><br>Pami??taj, ??e mo??e to zast??pi?? wszystkie warto??ci skonfigurowane dla tego monitora.<br><br>',
    'MonitorProbe'         => 'Predefiniowane ustawienia monitor??w',
    'MonitorProbeIntro'    => 'Poni??sza lista pokazuje wykryte kamery analogowe i sieciowe oraz informacj??, czy s?? one ju?? u??ywane lub dost??pne do wyboru.<br/><br/>Wybierz ????dany wpis z poni??szej listy.<br/><br/>Nale??y pami??ta??, ??e nie wszystkie kamery mog??y zosta?? wykryte i wyb??r tutaj kamery mo??e zast??pi?? wszystkie warto??ci skonfigurowane dla bie????cego monitora.<br/><br/>',
    'Monitors'             => 'Monitory',
    'Montage'              => 'Podgl??d wszystich kamer na raz',
    'MontageReview'        => 'Podgl??d wszystich kamer Alternatywny',
    'Month'                => 'Miesi??c',
    'More'                 => 'Poka?? wi??cej',
    'MotionFrameSkip'      => 'Pomijanie ramek wykrycia ruchu',
    'Move'                 => 'Przesu??',
    'Mtg2widgrd'           => '2-kolumnowa siatka',
    'Mtg3widgrd'           => '3-kolumnowa siatka',
    'Mtg3widgrx'           => '3-kolumnowa siatka, skalowana, powi??kszana na alarm',
    'Mtg4widgrd'           => '4-kolumnowa siatka',
    'MtgDefault'           => 'Domy??lny',
    'MustBeGe'             => 'musi by?? wi??ksze lub r??wne od',
    'MustBeLe'             => 'musi by?? mniejsze lub r??wne od',
    'MustConfirmPassword'  => 'Musisz potwierdzi?? has??o',
    'MustSupplyPassword'   => 'Musisz poda?? has??o',
    'MustSupplyUsername'   => 'Musisz poda?? nazw?? u??ytkownika',
    'Name'                 => 'Nazwa',
    'Near'                 => 'W pobli??u',
    'Network'              => 'Sie??',
    'New'                  => 'Nowy',
    'NewGroup'             => 'Nowa grupa',
    'NewLabel'             => 'Nowa etykieta',
    'NewPassword'          => 'Nowe has??o',
    'NewState'             => 'Nowy stan',
    'NewUser'              => 'nowy',
    'Next'                 => 'Nast??pny',
    'No'                   => 'Nie',
    'NoDetectedCameras'    => 'Nie wykryto kamer',
    'NoDetectedProfiles'   => 'Brak wykrytych profili',
    'NoFramesRecorded'     => 'Brak zapisanych ramek dla tego zdarzenia',
    'NoGroup'              => 'Brak grupy',
    'NoSavedFilters'       => 'Brak zapisanych filtr??w',
    'NoStatisticsRecorded' => 'Brak zapisanych statystyk dla tego zdarzenia/ramki',
    'None'                 => 'Brak',
    'NoneAvailable'        => 'Niedost??pne',
    'Normal'               => 'Normalny',
    'Notes'                => 'Uwagi',
    'NumPresets'           => 'Liczba ustawie?? predefiniowanych',
    'Off'                  => 'Wy????cz',
    'On'                   => 'W????cz',
    'OnvifCredentialsIntro'=> 'Podaj nazw?? u??ytkownika i has??o dla wybranej kamery.<br/>Je??li nie utworzono ??adnego u??ytkownika dla kamery, u??ytkownik podany tutaj zostanie utworzony z podanym has??em.<br/><br/>',
    'OnvifProbe'           => 'ONVIF',
    'OnvifProbeIntro'      => 'Poni??sza lista pokazuje wykryte kamery ONVIF i informacje, czy s?? one ju?? u??ywane lub dost??pne do wyboru.<br/><br/>Wybierz ????dany wpis z listy poni??ej.<br/><br/>Nale??y pami??ta??, ??e nie wszystkie kamery mog?? zosta?? wykryte, a wyb??r kamery z poni??szej listy mo??e zast??pi?? wszystkie warto??ci skonfigurowane dla bie????cego monitora.<br/><br/>',
    'OpEq'                 => 'r??wny',
    'OpGt'                 => 'wi??ksze od',
    'OpGtEq'               => 'wi??ksze lub r??wne od',
    'OpIn'                 => 'w zestawie',
    'OpIs'                 => 'jest',
    'OpIsNot'              => 'nie jest',
    'OpLt'                 => 'mniejsze od',
    'OpLtEq'               => 'mniejsze lub r??wne od',
    'OpMatches'            => 'pasuj??ce',
    'OpNe'                 => 'r????ne od',
    'OpNotIn'              => 'brak w zestawie',
    'OpNotMatches'         => 'nie pasuj??ce',
    'Open'                 => 'Otw??rz',
    'OptionHelp'           => 'OpcjePomoc',
    'OptionRestartWarning' => 'Te zmiany nie przynios?? natychmiastowego efektu\ndop??ki system pracuje. Kiedy zako??czysz robi?? zmiany\nprosz?? koniecznie zrestartowa?? ZoneMinder.',
    'OptionalEncoderParam' => 'Opcjonalne parametry enkodera',
    'Options'              => 'Opcje',
    'OrEnterNewName'       => 'lub wpisz now?? nazw??',
    'Order'                => 'Kolejno????',
    'Orientation'          => 'Orientacja',
    'Out'                  => 'Wyj??cie',
    'OverwriteExisting'    => 'Nadpisz istniej??ce',
    'Paged'                => 'Stronicowane',
    'Pan'                  => 'Panoramiczny',
    'PanLeft'              => 'Przesu?? w lewo',
    'PanRight'             => 'Przesu?? w prawo',
    'PanTilt'              => 'Panorama/Odchylenie',
    'Parameter'            => 'Parametr',
    'Password'             => 'Has??o',
    'PasswordsDifferent'   => 'Has??a: nowe i potwierdzone s?? r????ne!',
    'Paths'                => '??cie??ki',
    'Pause'                => 'Pauza',
    'Phone'                => 'Telefon',
    'PhoneBW'              => 'Tel.&nbsp;prz.',
    'Pid'                  => 'PID',
    'PixelDiff'            => 'R????nica pikseli',
    'Pixels'               => 'pikseli',
    'Play'                 => 'Odtw??rz',
    'PlayAll'              => 'Odtw??rz wszystkie',
    'PleaseWait'           => 'Prosz?? czeka??',
    'Plugins'              => 'Dodatki',
    'Point'                => 'Punkt',
    'PostEventImageBuffer' => 'Bufor obraz??w po zdarzeniu',
    'PreEventImageBuffer'  => 'Bufor obraz??w przed zdarzeniem',
    'PreserveAspect'       => 'Zachowaj proporcje',
    'Preset'               => 'Predefiniowane ustawienie',
    'Presets'              => 'Predefiniowane ustawienia',
    'Prev'                 => 'Poprzedni',
    'Probe'                => 'Wykrywanie',
    'ProfileProbe'         => 'Wykrywanie strumienia',
    'ProfileProbeIntro'    => 'Poni??sza lista pokazuje istniej??ce profile strumieni wybranej kamery.<br/><br/>Wybierz ????dany wpis z listy poni??ej.<br/><br/>Nale??y pami??ta??, ??e ZoneMinder nie mo??e skonfigurowa?? dodatkowych profili i ??e wyb??r tutaj kamery mo??e zast??pi?? wszystkie warto??ci skonfigurowane dla bie????cego monitora.<br/><br/>',
    'Progress'             => 'Post??p',
    'Protocol'             => 'Protok????',
    'RTSPDescribe'         => 'U??yj URL no??nika odpowiedzi RTSP',
    'RTSPTransport'        => 'Protok???? transportu RTSP',
    'Rate'                 => 'Tempo',
    'Real'                 => 'Rzeczywista',
    'RecaptchaWarning'     => 'Tw??j tajny klucz reCaptcha jest nieprawid??owy. Popraw to lub reCaptcha nie zadzia??a',
    'Record'               => 'Zapis',
    'RecordAudio'          => 'Zapisuj d??wi??k ze zdarzeniem',
    'RefImageBlendPct'     => 'Miks z obrazem odniesienia',
    'Refresh'              => 'Od??wie??',
    'Remote'               => 'Zdalny',
    'RemoteHostName'       => 'Nazwa hostu zdalnego',
    'RemoteHostPath'       => '??cie??ka hostu zdalnego ',
    'RemoteHostPort'       => 'Port hostu zdalnego ',
    'RemoteHostSubPath'    => 'Pod??cie??ka hostu zdalnego',
    'RemoteImageColours'   => 'Kolory obrazu zdalnego',
    'RemoteMethod'         => 'Rodzaj zdalnego po????czenia',
    'RemoteProtocol'       => 'Zdalny protok????',
    'Rename'               => 'Zmie?? nazw??',
    'Replay'               => 'Odtwarzaj',
    'ReplayAll'            => 'Wszystko',
    'ReplayGapless'        => 'Wszystko i powtarzaj',
    'ReplaySingle'         => 'Bie????ce zdarzenie',
    'ReportEventAudit'     => 'Raport zdarze??',
    'Reset'                => 'Resetuj',
    'ResetEventCounts'     => 'Kasuj licznik zdarze??',
    'Restart'              => 'Restart',
    'Restarting'           => 'Restartuj??',
    'RestrictedCameraIds'  => 'Numery kamer',
    'RestrictedMonitors'   => 'Monitory z ograniczeniami',
    'ReturnDelay'          => 'Op????nienie odpowiedzi',
    'ReturnLocation'       => 'Lokalizacja powrotu',
    'Rewind'               => 'Przewijanie',
    'RotateLeft'           => 'Obr???? w lewo',
    'RotateRight'          => 'Obr???? w prawo',
    'RunLocalUpdate'       => 'Prosz?? uruchom skrypt zmupdate.pl w celu aktualizacji',
    'RunMode'              => 'Tryb pracy',
    'RunState'             => 'Stan pracy',
    'Running'              => 'Pracuje',
    'Save'                 => 'Zapisz',
    'SaveAs'               => 'Zapisz jako',
    'SaveFilter'           => 'Zapisz filtr',
    'SaveJPEGs'            => 'Zapisz pliki JPEG',
    'Scale'                => 'Skala',
    'Score'                => 'Wynik',
    'Secs'                 => 'Sekund',
    'Sectionlength'        => 'D??ugo???? sekcji',
    'Select'               => 'Wybierz',
    'SelectFormat'         => 'Wybierz format',
    'SelectLog'            => 'Wybierz log',
    'SelectMonitors'       => 'Wybierz monitory',
    'SelfIntersecting'     => 'Kraw??dzie wielok??t??w nie mog?? si?? przecina??',
    'Set'                  => 'Ustaw',
    'SetNewBandwidth'      => 'Ustaw now?? przepustowo????',
    'SetPreset'            => 'Ustaw ust. predefiniowane',
    'Settings'             => 'Ustawienia',
    'ShowFilterWindow'     => 'Poka?? okno filtru',
    'ShowTimeline'         => 'Poka?? o?? czasu',
    'SignalCheckColour'    => 'Kolor testu sygna??u',
    'SignalCheckPoints'    => 'Punkty kontroli sygna??u',
    'Size'                 => 'Rozmiar',
    'SkinDescription'      => 'Zmie?? domy??ln?? sk??rk?? dla tego komputera',
    'Sleep'                => 'U??pij',
    'SortAsc'              => 'rosn??co',
    'SortBy'               => 'Sortuj po',
    'SortDesc'             => 'malej??co',
    'Source'               => '??r??d??o',
    'SourceColours'        => 'Kolor ??r??d??a',
    'SourcePath'           => '??cie??ka ??r??d??owa',
    'SourceType'           => 'Typ ??r??d??a',
    'Speed'                => 'Pr??dko????',
    'SpeedHigh'            => 'Wysoka pr??dko????',
    'SpeedLow'             => 'Niska pr??dko????',
    'SpeedMedium'          => '??rednia pr??dko????',
    'SpeedTurbo'           => 'Turbo pr??dko????',
    'Start'                => 'Start',
    'State'                => 'Stan',
    'Stats'                => 'Statystyki',
    'Status'               => 'Status',
    'StatusConnected'      => 'Nagrywanie',
    'StatusNotRunning'     => 'Nie pracuje',
    'StatusRunning'        => 'Nie nagrywa',
    'StatusUnknown'        => 'Nieznany',
    'Step'                 => 'Krok',
    'StepBack'             => 'Krok w ty??',
    'StepForward'          => 'Krok w prz??d',
    'StepLarge'            => 'Du??y krok',
    'StepMedium'           => '??redni krok',
    'StepNone'             => 'Brak kroku',
    'StepSmall'            => 'Ma??y krok',
    'Stills'               => 'Podgl??d klatek',
    'Stop'                 => 'Stop',
    'Stopped'              => 'Zatrzymany',
    'StorageArea'          => 'Magazyn',
    'StorageScheme'        => 'Schemat',
    'Stream'               => 'Odtwarzacz',
    'StreamReplayBuffer'   => 'Bufor odtwarzania strumienia',
    'Submit'               => 'Zatwierd??',
    'System'               => 'System',
    'SystemLog'            => 'Logi systemu',
    'TargetColorspace'     => 'Przestrze?? kolor??w ??r??d??a',
    'Tele'                 => 'Tel',
    'Thumbnail'            => 'Miniaturka',
    'Tilt'                 => 'Odchylenie',
    'Time'                 => 'Czas',
    'TimeDelta'            => 'R????nica czasu',
    'TimeStamp'            => 'Znak czasu',
    'Timeline'             => 'O?? czasu',
    'TimelineTip1'         => 'Przeci??gnij kursor myszki na wykresie, aby wy??wietli?? obraz migawki i szczeg????y zdarzenia.',
    'TimelineTip2'         => 'Kliknij na kolorowe fragmenty wykresu, aby zobaczy?? wydarzenie.',
    'TimelineTip3'         => 'Kliknij w t??o, aby przybli??y?? si?? do mniejszego okresu opartego wok???? wykonanego klikni??cia..',
    'TimelineTip4'         => 'U??yj opcji poni??ej, w celu nawigacji.',
    'Timestamp'            => 'Czas',
    'TimestampLabelFormat' => 'Format etykiety czasu',
    'TimestampLabelSize'   => 'Rozmiar czcionki',
    'TimestampLabelX'      => 'Wsp. X etykiety czasu',
    'TimestampLabelY'      => 'Wsp. Y etykiety czasu',
    'Today'                => 'Dzi??',
    'Tools'                => 'Narz??dzia',
    'Total'                => 'Ca??o????',
    'TotalBrScore'         => 'Ca??kowity<br/>wynik',
    'TrackDelay'           => '??led?? op????nienia',
    'TrackMotion'          => '??led?? ruch',
    'Triggers'             => 'Wyzwalacze',
    'TurboPanSpeed'        => 'Turbo pr??dko???? panoramy',
    'TurboTiltSpeed'       => 'Turbo pr??dko???? odchylenia',
    'Type'                 => 'Typ',
    'Unarchive'            => 'Usu?? z archiwum',
    'Undefined'            => 'Niezdefiniowany',
    'Units'                => 'Jednostki',
    'Unknown'              => 'Nieznany',
    'Update'               => 'Aktualizuj',
    'UpdateAvailable'      => 'Jest dost??pne uaktualnienie ZoneMinder ',
    'UpdateNotNecessary'   => 'Nie jest wymagane uaktualnienie',
    'Updated'              => 'Zaktualizowane',
    'Upload'               => 'Wysy??anie',
    'UseFilter'            => 'U??yj filtru',
    'UseFilterExprsPost'   => '&nbsp;wyra??enie&nbsp;filtru', // This is used at the end of the phrase 'use N filter expressions'
    'UseFilterExprsPre'    => 'U??yj&nbsp;', // This is used at the beginning of the phrase 'use N filter expressions'
    'UsedPlugins'          => 'U??yte dodatki',
    'User'                 => 'U??ytkownik',
    'Username'             => 'Nazwa u??ytkownika',
    'Users'                => 'U??ytkownicy',
    'V4L'                  => 'V4L',
    'V4LCapturesPerFrame'  => 'Przechwycenia na ramk??',
    'V4LMultiBuffer'       => 'Multi buforowanie',
    'Value'                => 'Warto????',
    'Version'              => 'Wersja',
    'VersionIgnore'        => 'Zignoruj t?? wersj??',
    'VersionRemindDay'     => 'Przypomnij po 1 dniu',
    'VersionRemindHour'    => 'Przypomnij po 1 godzinie',
    'VersionRemindNever'   => 'Nie przypominaj o nowych wersjach',
    'VersionRemindWeek'    => 'Przypomnij po 1 tygodniu',
    'Video'                => 'Eksport wideo',
    'VideoFormat'          => 'Format nagrania',
    'VideoGenFailed'       => 'Generowanie filmu wideo nie powiod??o si??!',
    'VideoGenFiles'        => 'Lista wygenerowanych plik??w:',
    'VideoGenNoFiles'      => 'Nie odnaleziono plik??w wideo',
    'VideoGenParms'        => 'Parametry generowania filmu wideo',
    'VideoGenSucceeded'    => 'Wygenerowano pomy??lnie!',
    'VideoSize'            => 'Rozmiar filmu wideo',
    'VideoWriter'          => 'Spos??b zapisu wideo',
    'View'                 => 'Podgl??d',
    'ViewAll'              => 'Poka?? wszystko',
    'ViewEvent'            => 'Poka?? zdarzenie',
    'ViewPaged'            => 'Poka?? stronami',
    'Wake'                 => 'Obud??',
    'WarmupFrames'         => 'Ignorowane ramki',
    'Watch'                => 'podgl??d',
    'Web'                  => 'Sie??',
    'WebColour'            => 'Kolor strony',
    'WebSiteUrl'           => 'URL strony',
    'Week'                 => 'Tydzie??',
    'White'                => 'Biel',
    'WhiteBalance'         => 'Balans bieli',
    'Wide'                 => 'Szeroko????',
    'X'                    => 'X',
    'X10'                  => 'X10',
    'X10ActivationString'  => 'X10: ??a??cuch aktywuj??cy',
    'X10InputAlarmString'  => 'X10: ??a??cuch wej??cia alarmu',
    'X10OutputAlarmString' => 'X10: ??a??cuch wyj??cia alarmu',
    'Y'                    => 'Y',
    'Yes'                  => 'Tak',
    'YouNoPerms'           => 'Nie masz uprawnie?? na dost??p do tego zasobu.',
    'Zone'                 => 'Strefa',
    'ZoneAlarmColour'      => 'Kolor alarmu (Red/Green/Blue)',
    'ZoneArea'             => 'Obszar strefy',
    'ZoneExtendAlarmFrames' => 'Rozszerz licznik ramek alarmowych',
    'ZoneFilterSize'       => 'Szeroko????/wysoko???? filtra (piksele)',
    'ZoneMinMaxAlarmArea'  => 'Min/Max obszar alarmu',
    'ZoneMinMaxBlobArea'   => 'Min/Max obszar plamki',
    'ZoneMinMaxBlobs'      => 'Min/Max plamki',
    'ZoneMinMaxFiltArea'   => 'Min/Max obszar filtrowany',
    'ZoneMinMaxPixelThres' => 'Min/Max pr??g pikseli (0-255)',
    'ZoneMinderLog'        => 'Log ZoneMinder',
    'ZoneOverloadFrames'   => 'Liczba ignorowanych ramek po przeci????eniu alarmu',
    'Zones'                => 'Strefy',
    'Zoom'                 => 'Powi??kszenie',
    'ZoomIn'               => 'Przybli??',
    'ZoomOut'              => 'Oddal',
);

// Complex replacements with formatting and/or placements, must be passed through sprintf
$CLANG = array(
    'CurrentLogin'         => 'Aktualny login \'%1$s\'',
    'EventCount'           => '%1$s %2$s',
    'LastEvents'           => 'Ostatnie %1$s %2$s',
    'LatestRelease'        => 'Najnowsza wersja to v%1$s, Ty posiadasz v%2$s.',
    'MonitorCount'         => '%1$s %2$s',
    'MonitorFunction'      => 'Monitor %1$s Funkcja',
    'RunningRecentVer'     => 'Uruchomi??e?? najnowsz?? wersj?? ZoneMinder, v%s.',
    'VersionMismatch'      => 'Niezgodno???? wersji, wersja systemu %1$s, bazy danych %2$s.',
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
    'Event'                => array( 0=>'Zdarze??', 1=>'Zdarzenie', 2=>'Zdarzenia'),
    'Monitor'              => array( 0=>'Monitor??w', 1=>'Monitor', 2=>'Monitory'),
);

// You will need to choose or write a function that can correlate the plurality string arrays
// with variable counts. This is used to conjugate the Vlang arrays above with a number passed
// in to generate the correct noun form.

// This is an version that could be used in the Polish language
//
function zmVlang( $langVarArray, $count )
{
    $secondlastdigit = substr( $count, -2, 1 );
    $lastdigit = substr( $count, -1, 1 );
    if ( $count == 1 )
    {
        return( $langVarArray[1] );
    }
    if (($secondlastdigit == 0)|( $secondlastdigit == 1))
    {
        return( $langVarArray[0] );
    }
    if ( $secondlastdigit >= 2)
    {
        switch ( $lastdigit )
        {
            case 0 :
            case 1 :
            case 5 :
            case 6 :
            case 7 :
            case 8 :
            case 9 :
            {
                return( $langVarArray[0] );
                break;
            }
            case 2 :
            case 3 :
            case 4 :
            {
                return( $langVarArray[2] );
                break;
            }
        }
    }
    die( 'B????D! zmVlang nie mo??e skorelowac ??a??cucha!' );
}

// This is an example of how the function is used in the code which you can uncomment and
// use to test your custom function.
// $monitors = 12; // Choose any number
// echo $monitors." ";
// echo zmVlang( $zmVlangMonitor, $monitors);

// In this section you can override the default prompt and help texts for the options area
// These overrides are in the form show below where the array key represents the option name minus the initial ZM_
// So for example, to override the help text for ZM_LANG_DEFAULT do
$OLANG = array(
	'OPTIONS_FFMPEG' => array(
		'Help' => "Parametry z tego pola s?? przekazywane do FFmpeg. Wiele parametr??w mo??e by?? rozdzielone przez ,~~ ".
		          "Przyk??ady (nie wpisuj cytat??w)~~~~".
		          "\"allowed_media_types=video\" Ustaw typ danych na ????danie z kamery (audio, video, data)~~~~".
		          "\"reorder_queue_size=nnn\" Ustaw liczb?? pakiet??w do buforowania do obs??ugi zmienionych pakiet??w~~~~".
		          "\"loglevel=debug\" Ustaw gadatliwo???? FFmpeg (quiet, panic, fatal, error, warning, info, verbose, debug)"
	),
	'OPTIONS_LIBVLC' => array(
		'Help' => "Parametry w tym polu s?? przekazywane do libVLC. Wiele parametr??w mo??e by?? rozdzielone przez ,~~ ".
		          "Przyk??ady (nie wpisuj cytat??w)~~~~".
		          "\"--rtp-client-port=nnn\" Ustaw port lokalny, kt??ry ma by?? u??ywany dla danych rtp~~~~".
		          "\"--verbose=2\" Ustaw gadatliwo???? libVLC"
	),

//    'LANG_DEFAULT' => array(
//        'Prompt' => "This is a new prompt for this option",
//        'Help' => "This is some new help for this option which will be displayed in the popup window when the ? is clicked"
//    ),
);

?>
