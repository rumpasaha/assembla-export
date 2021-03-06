<?php

/*
 * FileSender www.filesender.org
 * 
 * Copyright (c) 2009-2012, AARNet, Belnet, HEAnet, SURFnet, UNINETT
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 
 * *	Redistributions of source code must retain the above copyright
 * 	notice, this list of conditions and the following disclaimer.
 * *	Redistributions in binary form must reproduce the above copyright
 * 	notice, this list of conditions and the following disclaimer in the
 * 	documentation and/or other materials provided with the distribution.
 * *	Neither the name of AARNet, Belnet, HEAnet, SURFnet and UNINETT nor the
 * 	names of its contributors may be used to endorse or promote products
 * 	derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/* ---------------------------------
 * FR_fr Language File
 * ---------------------------------
 * 
 */
// main menu items
$lang["_ADMIN"] = "Administration";
$lang["_NEW_UPLOAD"] = "Envoyer fichier";
$lang["_VOUCHERS"] = "Inviter une personne";
$lang["_LOGON"] = "Connexion";
$lang["_LOG_OFF"] = "Déconnexion";
$lang["_MY_FILES"] = "Mes fichiers";

// page titles
$lang["_HOME"] = "Accueil";
$lang["_ABOUT"] = "À propos";
$lang["_HELP"] = "Aide";
$lang["_VOUCHER_CANCELLED"] = "Ticket annulé";
$lang["_DELETE_VOUCHER"] = "Supprimer ticket";
$lang["_UPLOAD_COMPLETE"] = "Votre fichier a été téléchargé et un message a été envoyé.";
$lang["_UPLOAD_PROGRESS"] = "Progrès du téléchargement";
$lang["_DOWNLOAD"] = "Téléchargement";
$lang["_CANCEL_UPLOAD"] = "Annuler téléchargement";

// admin
$lang["_PAGE"] = "Page";
$lang["_UP"] = "Haut";
$lang["_DOWN"] = "Bas";
$lang["_FILES"] = "Fichiers";
$lang["_DRIVE"] = "Disque";
$lang["_TOTAL"] = "Total";
$lang["_USED"] = "Utilisé";
$lang["_AVAILABLE"] = "Disponible";
$lang["_TEMP"] = "Temp"; // as in Temporary files

$lang["_WELCOME"] = "Bienvenu"; 
$lang["_WELCOMEGUEST"] = "Bienvenu invité"; 

// admin tab names
$lang["_GENERAL"] = "Général";
$lang["_UPLOADS"] = "Téléchargements vers serveur";
$lang["_DOWNLOADS"] = "Téléchargements vers clients";
$lang["_ERRORS"] = "Erreurs";
$lang["_FILES_AVAILABLE"] = "Fichiers disponibles";
$lang["_ACTIVE_VOUCHERS"] = "Tickets actifs";
$lang["_COMPLETE_LOG"] = "Logs complets";


// Form Fields
$lang["_TO"] = "À";
$lang["_FROM"] = "De";
$lang["_SIZE"] = "Taille";
$lang["_CREATED"] = "Créé";
$lang["_FILE_NAME"] = "Nom de fichier";
$lang["_SUBJECT"] = "Suject";
$lang["_EXPIRY"] = "Expiration";
$lang["_MESSAGE"] = "Message";
$lang["_TYPE"] = "Type";
			
$lang["_TERMS_OF_AGREEMENT"] = "Conditions générales d'utilisation";
$lang["_SHOW_TERMS"] = "Afficher les conditions";
$lang["_SHOWHIDE"] = "Afficher/Cacher";
$lang["_SELECT_FILE"] = "Fichier à télécharger";
$lang["_UPLOADING_WAIT"] = "Téléchargement en cours - veuillez attendre...";
			
// Flash button menu
$lang["_UPLOAD"] = "Envoyer un fichier";
$lang["_BROWSE"] = "Naviguer";
$lang["_CANCEL"] = "Annuler";
$lang["_OPEN"] = "Ouvrir";
$lang["_CLOSE"] = "Fermer";
$lang["_OK"] = "Ok";
$lang["_SEND"] = "Envoyer";
$lang["_DELETE"] = "Supprimer";
$lang["_YES"] = "Oui";
$lang["_NO"] = "Non";
			
$lang["_INVALID_MISSING_EMAIL"] = "Adresse mail non valide ou absente";	
$lang["_INVALID_EXPIRY_DATE"] = "Date d'expiration non valide";	
$lang["_INVALID_FILE"] = "Fichier non valide";	
$lang["_INVALID_FILEVOUCHERID"] = "Fichier ou ID de ticket non valide";	
$lang["_INVALID_FILESIZE_ZERO"] = "Taille de fichier ne peut pas être 0. Veuillez choisir un autre fichier.";
$lang["_INVALID_FILE_EXT"] = "Extension de fichier non valide.";
$lang["_INVALID_TOO_LARGE_1"] = "La taille de fichier ne peut pas être plus grande que";
$lang["_AUTH_ERROR"] = "Vous n'êtes plus authentifié. <br />Votre session est peut-être expirée ou il y a eu une erreur de serveur. <br /><br />Veuillez vous réauthentifier et réessayer.";	
$lang["_SELECT_ANOTHER_FILE"] = "Veuillez choisir un autre fichier.";
$lang["_INVALID_VOUCHER"] = "Ce ticket n'est plus valide. <br />Veuillez contacter la personne qui vous a envoyée le ticket.";
$lang["_SELECT_FILE"] = "Choisissez votre fichier.";
$lang["_INVALID_FILE_NAME"] = "Le nom du fichier que vous téléchargez n'est pas valide. Veuillez renommer le fichier et réessayer.";
$lang["_INVALID_SIZE_USEHTML5"] = "Veuillez choisir un autre fichier ou utiliser un navigateur compatible HTML5 pour télécharger des fichiers plus grands.";
$lang["_ACCEPTTOC"] = "J'accepte les conditions générales de ce service.";	
$lang["_AGREETOC"] = "Vous DEVEZ accepter les conditions générales.";
$lang["_FILE_TO_BE_RESENT"] = "Fichier à être réenvoyé";
$lang["_ERROR_UPLOADING_FILE"] = "Erreur de téléchargement du fichier";
$lang["_MAXEMAILS"] = "Le nombre maximal accepté d'adresses email est ";
$lang["_INVALID_DATE_FORMAT"] = "Format de date non valide.";
$lang["_DISK_SPACE_ERROR"] = "Il n'y a plus assez d'espace disque. Veuillez contacter l'administrateur du service ou télécharger un fichier plus petit.";
			
			
$lang["_LOGOUT_COMPLETE"] = "Déconnexion réussie";
			
// vouchers
$lang["_SEND_NEW_VOUCHER"] = "Un ticket permet à une personne quelconque de vous envoyer un fichier.<br />
Pour créer un ticket, entrez une adresse email et cliquez Envoyer ticket.<br />
Une email sera envoyée à la personne avec un lien sur le ticket.";
$lang["_EMAIL_SEPARATOR_MSG"] = "Multiples adresses email séparées , ou ;";
			
$lang["_NO_FILES"] = "Il n'y a pas de fichiers disponibles pour l'instant.";
$lang["_ARE_YOU_SURE"] = "Êtes-vous certain ?";
$lang["_DELETE_FILE"] = "Supprimer fichier";
$lang["_EMAIL_SENT"] = "Message envoyé";
$lang["_EXPIRY_DATE"] = "Date d'expiration";
$lang["_FILE_SIZE"] = "Taille de fichier";
$lang["_FILE_RESENT"] = "Fichier réenvoyé";	
$lang["_MESSAGE_RESENT"] = "Message réenvoyé";			
$lang["_ME"] = "Moi";
$lang["_SEND_VOUCHER"] = "Envoyer ticket";
$lang["_RE_SEND_EMAIL"] = "Ré-envoyer email";
$lang["_NEW_RECIPIENT"] = "Ajouter un nouveau destinataire";
$lang["_SEND_VOUCHER_TO"] = "Envoyer ticket à";
$lang["_START_DOWNLOAD"] = "Démarrer téléchargement";
$lang["_VOUCHER_SENT"] = "Ticket envoyé";
$lang["_VOUCHER_DELETED"] = "Ticket supprimé";
$lang["_VOUCHER_CANCELLED"] = "Ce ticket a été annulé.";
$lang["_STARTED_DOWNLOADING"] = "Votre fichier devrait commencer d'être téléchargé.";

// files
$lang["_FILE_DELETED"] = "Fichier supprimé";
// steps
$lang["_STEP1"] = "Entrez les adresses email des destinataires";
$lang["_STEP2"] = "Séléctionnez la date d'expiration";
$lang["_STEP3"] = "Choisissez un fichier";
$lang["_STEP4"] = "Cliquez Envoyer";
$lang["_HTML5Supported"] = "Téléchargements de plus de 2GO supportés";
$lang["_HTML5NotSupported"] = "Téléchargements de plus de 2GO <br />non supportés!";			
	
// site about
$lang["_ABOUT_TEXT"] = "À propos ..."; // overide in config/EN_AU.php
// site help
$lang["_HELP_TEXT"] = "Aide ..."; // overide in config/EN_AU.php

$lang["_OPTIONAL"] = "Optionnel";
			
// confirmation
$lang["_CONFIRM_DELETE_FILE"] = "Êtes-vous sûr de vouloir supprimer ce fichier ?";
$lang["_CONFIRM_DELETE_VOUCHER"] = "Êtes-vous sûr de vouloir supprimer ce ticket ?";

$lang["_AUPTERMS"] = "Conditions générales du services";

// standard date display format
$lang['datedisplayformat'] = "d/m/Y"; // Format for displaying date/time, use PHP date() format string syntax 

// datepicker localization
$lang["_DP_closeText"] = 'OK'; // Done
$lang["_DP_prevText"] = 'Préc'; //Prev
$lang["_DP_nextText"] = 'Proc'; // Next
$lang["_DP_currentText"] = 'Aujourd\'hui'; // Today
$lang["_DP_monthNames"] = "['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre']";
$lang["_DP_monthNamesShort"] = "['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun','Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec']";
$lang["_DP_dayNames"] = "['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi']";
$lang["_DP_dayNamesShort"] = "['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam']";
$lang["_DP_dayNamesMin"] = "['Di','Lu','Ma','Me','Je','Ve','Sa']";
$lang["_DP_weekHeader"] = 'Sem';
$lang["_DP_dateFormat"] = 'dd/mm/yy';
$lang["_DP_firstDay"] = '1';
$lang["_DP_isRTL"] = 'false';
$lang["_DP_showMonthAfterYear"] = 'false';
$lang["_DP_yearSuffix"] = '';

?>
