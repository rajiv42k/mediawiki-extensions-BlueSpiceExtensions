<?php
/**
 * Internationalisation file for Review
 *
 * Part of BlueSpice for MediaWiki
 *
 * @author     Stephan Muggli <muggli@hallowelt.biz>

 * @package    BlueSpice_Extensions
 * @subpackage Review
 * @copyright  Copyright (C) 2012 Hallo Welt! - Medienwerkstatt GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License v2 or later
 * @filesource
 */

$messages = array();

$messages['en'] = array(
	'prefs-Review'     => 'Review',
	'bs-review-extension-description' => 'Adds review functionality to pages.',
	'bs-review-ext_review' => 'Review',
	'bs-review-menu_entry' => 'Edit review',
	'bs-review-vote' => 'No editing allowed / Ignore reviewer order',
	'bs-review-sign' => 'No editing allowed/ Follow reviewer order',
	'bs-review-comment' => 'Editing allowed / Ignore reviewer order',
	'bs-review-workflow' => 'Editing allowed / Follow reviewer order',
	'bs-review-date_' => 'Not all participants have voted.',
	'bs-review-agreed' => 'All participants have agreed.',
	'bs-review-denied_' => 'At least one participant has disagreed.',
	'bs-review-accepted' => 'Accepted',
	'bs-review-rejected' => 'Rejected',
	'bs-review-abstain' => 'Abstained',
	'bs-review-to_be_reviewed' => 'You have $1 articles to review: ',
	'bs-review-review_finished' => 'This article has been reviewed.',
	'bs-review-unknown' => 'unknown',
	'bs-review-please_review' => 'Please review this page:',
	'bs-review-reviewed_till' => 'This page is being reviewed from <br/><b>$1</b> to <b>$2</b>.',
	'bs-review-reviewed_till_extra' => '<br />Created by <b>$1</b>',
	'bs-review-active_workflow' => 'Active review',
	'bs-review-status' => 'State',
	'bs-review-no_assigned' => 'No review has been assigned.',
	'bs-review-assessor' => 'Assessor',
	'bs-review-action' => 'Action',
	'bs-review-no_edit_no_order' => '(no edit / no order)',
	'bs-review-no_edit_with_order' => '(no edit / order)',
	'bs-review-with_edit_no_order' => '(edit / no order)',
	'bs-review-with_edit_with_order' => '(edit / order)',
	'bs-review-change' => 'change',
	'bs-review-assign' => 'assign',
	'bs-review-delete_workflow' => 'delete review',
	'bs-review-startdate' => 'start date',
	'bs-review-enddate' => 'end date',
	'bs-review-save_success' => 'The review was assigned successfully.',
	'bs-review-save_error' => 'An error occurred while saving.',
	'bs-review-save_removed' => 'The review was deleted successfully.',
	'bs-review-save_nosteps' => 'You did not enter any review steps',
	'bs-review-save_noid' => 'No page ID was sent.',
	'bs-review-save_norights' => 'You do not have the neccessary rights.',
	'bs-review-review_error' => 'An error occurred.',
	'bs-review-review_permissions_error' => 'You don\'t have the permission to execute this action (\'$1\' needed).',
	'bs-review-review_secondtime' => 'An error occurred. Possibly, you are trying to review the page the second time.',
	'bs-review-review_saved' => 'Your vote was saved.',
	'bs-review-mail-accept-header' => '$1: $4 has accepted $2',
	'bs-review-mail-deny-header' => '$1: $4 has rejected $2',
	'bs-review-mail-deny-and-restart-header' => '$1: $4 has rejected $2',
	'bs-review-mail-greeting' => "Hello $1,\n\n",
	'bs-review-mail-accept-body' => "the user $4 has reacted to your review and accepted the changes.",
	'bs-review-mail-deny-body' => "the user $4 has reacted to your review and rejected the changes.",
	'bs-review-mail-deny-and-restart-body' => 'the user $4 has reacted to your review and rejected the changes. The review will be restarted automatically.',
	'bs-review-mail-invite-footer' => "\n\nThanks for your participation,\n$1\n\nThis message was created automatically.",
	'bs-review-mail-review-footer' => "\n\nThis message was created automatically.",
	'bs-review-mail-link-to-page' => "\n\nYou can find the article at this URL:\n<a href=\"$1\">$1</a>",
	'bs-review-mail-invite-header' => '$1: Please review $2',
	'bs-review-mail-invite-body' => "the user $1 has invited you to review the article $2.",
	'bs-review-mail-finish-header' => '$1: Review finished',
	'bs-review-mail-finish-body' => "the user $3 has reacted to your review on \"$2\" and accepted the changes. The review is now finished.\n\nYou can find the article at this URL: $3\n",
	'bs-review-mail-finish-and-review-header' => '$1: Review finished',
	'bs-review-mail-finish-and-review-body' => "the user $3 has reacted to your review on \"$2\" and accepted the changes. The review is now finished and got marked as stable.\n\nYou can find the article at this URL: $3\n",
	'bs-review-mail-finish-no-flagged-revs-body' => 'bs-review-mail-finish-no-flagged-revs-body', //deprecated?
	'bs-review-mail-comment' => "\nA comment for you was entered:\n\"$1\"",
	'bs-review-specialpage-title' => "Review for \"$1\"",
	'bs-review-specialpage-subtitle' => "← $1",
	'bs-review-statebar-top' => "Review",
	'bs-review-statebar-body-header' => "Review",
	'bs-review-statebar-body-do-review' => 'Please review this page',
	'bs-review-i-agree'                  => 'Agree',
	'bs-review-i-dismiss'                => 'Disagree',
	'bs-review-i-delegate'               => 'Delegate',
	'bs-review-i-redelegate'             => 'Redelegate',
	'bs-review-here-are-your-workflows'  => 'The following pages have to be reviewd by you. Please do this by using the links in the expanded statebar.',
	'bs-review-specialpage-no-article'   => "This page shows quality assurance processes for certain wiki pages. Unfortunately, you have not specified a particular page.",
	'bs-review-not-allowed'              => 'Access to this page is not allowed.',
	'bs-review-startdate-missing'        => 'Please enter a start date.',
	'bs-review-enddate-missing'          => 'Please enter an end date.',
	'bs-review-startdate-after-enddate'  => 'The start date is after the end date.',
	'bs-review-no-reviewers'             => 'Please enter at least one reviewer.',
	'bs-review-comment-too-long'         => 'The comment cannot be longer than 255 characters.',
	'bs-review-user-not-found'           => 'Please use only existing users as reviewers.',
	'bs-review-save_tmpl_success'        => "The template was saved successfully.",
	'bs-review-save_tmpl_error'          => "The template could not be saved. Please check if you have the required permissions to save templates.",
	'bs-review-delete_tmpl_success'      => "The template was deleted successfully.",
	'bs-review-delete_tmpl_error'        => "The template could not be deleted. You don't have the required permissions or you're not the owner of the template.",
	'bs-review-created-review'           => 'has started a review process on $1.',
	'bs-review-modified-review'          => 'has changed a review process on $1.',
	'bs-review-deleted-review'           => 'has deleted a review process on $1.',
	'bs-review-approved-review'          => 'has accepted at a review process on $1.',
	'bs-review-denied-review'            => 'has denied at a review process on $1.',
	'bs-review-finished-review'          => 'has finished a review process on $1.',
	'bs-review-logpage'                  => 'Review log',
	'bs-review-logpagetext'              => 'This is the log of review processes.',
	'bs-review-Review'                   => 'Review',
	'bs-review-pref-CheckOwner'          => 'Only the owner of a review process may change it',
	'bs-review-pref-ShowNameInTooltip'   => 'Show names of the participants',
	'bs-review-pref-EmailNotifyOwner'    => 'Notify the owner of a review process about changes',
	'bs-review-pref-EmailNotifyReviewer' => 'Notify the reviewer of a review process about his attendance',
	'bs-review-pref-ShowAssessor'        => 'Show the assessor of a review process',
	'bs-review-ext_review'               => 'Workflow',
	'bs-review-title_page'               => 'Page',
	'bs-review-title_user'               => 'Owner',
	'bs-review-title_userlist'           => 'Assessor',
	'bs-review-title_status'             => 'Status',
	'bs-review-title_date'               => 'Date',
	'bs-review-vote'                     => 'Vote',
	'bs-review-sign'                     => 'Sign',
	'bs-review-comment'                  => 'Comment',
	'bs-review-workflow'                 => 'Workflow',
	'bs-review-rejected'                 => 'Rejected',
	'bs-review-accepted'                 => 'Accepted',
	'bs-review-expired'                  => 'Expired',
	'bs-review-noworkflows'              => 'No workflows',
	'bs-review-noaccess'                 => 'You do not have access to see this page',
	'bs-review-all'                      => 'All',
	'bs-review-mine'                     => 'Mine',
	'bs-review-date'                     => '',
	'bs-review-status'                   => 'OK',
	'bs-review-pending'                  => 'In progress',
	'bs-review-denied'                   => 'Returned, to be reviewed again',
	'bs-review-nothing'                  => 'In progress',
	'bs-review-statebartopreview'        => 'Review',
	'bs-review-statebarbodyreview'       => 'Review process',
	'bs-review-statebarbodydoreview'     => 'Review process action',
	'bs-review-no-valid-user'            => 'This is not a valid user or no userobject is given.',
	'review'                             => 'Review',
	'review-desc'                        => 'Adds workflow functionality to pages',
	'bs-review-specialreview-header'     => '{{plural:$1|Reviews of $2|Review overview}}',
	'bs-review-commentinputlabel'        => 'Your comment',
	'bs-review-ownercomment'             => 'Comment of $1',
	'bs-review-comments' => 'Comments',

	//Permissions
	//'workflowedit' and 'workflowlist' don't need 'action-*'-messages as there
	//is no UI to display them yet.
	'action-workflowview' => 'to access this interface',
	'right-workflowview' => 'See interface components of the Review extension',
	'right-workflowedit' => 'Create a new and modify an existing Review workflow',
	'right-workflowlist' => 'Show the list of workflows on the Review specialpage',

	//Javascript
	'bs-review-title' => 'Review',
	'bs-review-updateRow' => 'Update',
	'bs-review-cancelRow' => 'Cancel',
	'bs-review-btnAddReviewer' => 'Add reviewer',
	'bs-review-btnEditReviewer' => 'Edit reviewer',
	'bs-review-btnRemoveReviewer' => 'Remove reviewer',
	'bs-review-btnMoveUp' => 'Move up',
	'bs-review-btnMoveDown' => 'Move down',
	'bs-review-btnOk' => 'Ok',
	'bs-review-btnCancel' => 'Cancel',
	'bs-review-colStatus' => 'Status',
	'bs-review-colReviewer' => 'Reviewer',
	'bs-review-colDelegatedTo' => 'Delegated to',
	'bs-review-colComment' => 'Comment',
	'bs-review-lblStartdate' => 'Start date',
	'bs-review-lblEnddate' => 'End date',
	'bs-review-btnCreate' => 'Create',
	'bs-review-btnSave' => 'Save',
	'bs-review-btnDelete' => 'Delete',
	'bs-review-noReviewAssigned' => 'This page has no review assigned.',
	'bs-review-headerActions' => 'Actions',
	'bs-review-titleAddReviewer' => 'Add reviewer',
	'bs-review-titleEditReviewer' => 'Edit reviewer',
	'bs-review-labelUsername' => 'Reviewer',
	'bs-review-labelComment' => 'Comment',
	'bs-review-titleStatus' => 'Status',
	'bs-review-labelTemplate' => 'Template',
	'bs-review-labelTemplateLoad' => 'Load',
	'bs-review-labelTemplateSaveForMe' => 'Save for myself',
	'bs-review-labelTemplateSaveForAll' => 'Save for everyone',
	'bs-review-labelTemplateDelete' => 'Delete',
	'bs-review-templateName' => 'Name of the template',
	'bs-review-confirm-delete-step' => 'Do you really want to delete this step?',
	'bs-review-header-page_title' => 'Pahe',
	'bs-review-header-owner_name' => 'Owner',
	'bs-review-header-assessors' => 'Assessors',
	'bs-review-header-accepted_text' => 'State',
	'bs-review-header-startdate' => 'Start',
	'bs-review-header-enddate' => 'End',
	'bs-review-confirm-delete-review' => 'Do you really want to delete this review?',
	'bs-review-overviewpanel-alloption' => '(all)',
);

$messages['de'] = array(
	'prefs-Review'                       => 'Begutachtung',
	'bs-review-extension-description'    => 'Einem Artikel kann ein Begutachtungsprozesses zugeordnet werden, z.B. das Überprüfen des Artikels durch einen Nutzer.',
	'bs-review-ext_review'               => 'Begutachtung',
	'bs-review-menu_entry'               => 'Begutachtung bearbeiten',
	'bs-review-vote'                     => 'Bearbeiten nicht erlaubt / Gutachter-Reihenfolge nicht beachten',
	'bs-review-sign'                     => 'Bearbeiten nicht erlaubt / Gutachter-Reihenfolge beachten',
	'bs-review-comment'                  => 'Bearbeiten erlaubt / Gutachter-Reihenfolge nicht beachten',
	'bs-review-workflow'                 => 'Bearbeiten erlaubt / Gutachter-Reihenfolge beachten',
	'bs-review-date_'                    => 'Nicht alle Beteiligten haben abgestimmt.',
	'bs-review-agreed'                   => 'Alle Beteiligten haben zugestimmt.',
	'bs-review-denied_'                  => 'Mindestens einer der Beteiligten hat abgelehnt.',
	'bs-review-accepted'                 => 'Akzeptiert',
	'bs-review-rejected'                 => 'Abgelehnt',
	'bs-review-abstain'                  => 'Enthalten',
	'bs-review-to_be_reviewed'           => 'Du hast noch $1 Seiten zu begutachten: ',
	'bs-review-review_finished'          => 'Diese Seite wurde begutachtet.',
	'bs-review-unknown'                  => 'unbekannt',
	'bs-review-please_review'            => 'Bitte begutachte diese Seite:',
	'bs-review-reviewed_till'            => 'Diese Seite wird von <b>$1</b> bis <b>$2</b> begutachtet.',
	'bs-review-reviewed_till_extra'      => '<br />Der Prozess wurde von <b>$1</b> angestoßen',
	'bs-review-active_workflow'          => 'Aktiver Begutachtungsprozess',
	'bs-review-status'                   => 'Status',
	'bs-review-no_assigned'              => 'Es ist noch kein Begutachtungsprozess zugeordnet.',
	'bs-review-assessor'                 => 'Begutachter',
	'bs-review-action'                   => 'Aktion',
	'bs-review-no_edit_no_order'         => '(keine Bearbeitung / keine Reihenfolge)',
	'bs-review-no_edit_with_order'       => '(keine Bearbeitung / mit Reihenfolge)',
	'bs-review-with_edit_no_order'       => '(mit Bearbeitung / keine Reihenfolge)',
	'bs-review-with_edit_with_order'     => '(mit Bearbeitung / mit Reihenfolge)',
	'bs-review-change'                   => 'ändern',
	'bs-review-assign'                   => 'zuweisen',
	'bs-review-delete_workflow'          => 'Begutachtungsprozess löschen',
	'bs-review-startdate'                => 'Startdatum',
	'bs-review-enddate'                  => 'Enddatum',
	'bs-review-save_success'             => 'Der Begutachtungsprozess wurde erfolgreich eingetragen.',
	'bs-review-save_error'               => 'Es ist ein Fehler beim Speichern aufgetreten.',
	'bs-review-save_removed'             => 'Der Begutachtungsprozess wurde erfolgreich gelöscht',
	'bs-review-save_nosteps'             => 'Du hast keine Schritte eingetragen',
	'bs-review-save_noid'                => 'Es wurde keine SeitenID übertragen',
	'bs-review-save_norights'            => 'Du hast nicht die erforderliche Berechtigung',
	'bs-review-review_error'             => 'Es ist ein Fehler aufgetreten',
	'bs-review-review_permissions_error' => 'Du hast nicht die benötigten Berechtigungen, um diese Aktion auszuführen (\'$1\' wird benötigt).',
	'bs-review-review_secondtime'        => 'Es ist ein Fehler aufgetreten. Möglicherweise versuchst Du, eine Seite zum zweiten Mal zu begutachten',
	'bs-review-review_saved'             => 'Die Begutachtung wurde gespeichert',
	'bs-review-mail-accept-header'       => '$1: $4 hat dem Artikel $2 zugestimmt',
	'bs-review-mail-deny-header'         => '$1: $4 hat den Artikel $2 abgelehnt',
	'bs-review-mail-deny-and-restart-header' => '$1: $4 hat den Artikel $2 abgelehnt',
	'bs-review-mail-greeting'            => "Hallo $1,\n\n",
	'bs-review-mail-accept-body'         => "der Benutzer $4 hat auf Deine Begutachtungsanfrage reagiert und den Änderungen zugestimmt.",
	'bs-review-mail-deny-body'           => "der Benutzer $4 hat auf Deine Begutachtungsanfrage reagiert und die Änderungen abgelehnt.",
	'bs-review-mail-deny-and-restart-body' => 'der Benutzer $4 hat auf Deine Begutachtungsanfrage reagiert und die Änderungen abgelehnt. Die Begutachtung wird automatisch neu gestartet.',
	'bs-review-mail-invite-footer'       => "\n\nVielen Dank für Deine Mitarbeit,\n$1\n\nHinweis:Diese Nachricht wurde automatisch erstellt.",
	'bs-review-mail-review-footer'       => "\n\nHinweis:Diese Nachricht wurde automatisch erstellt.",
	'bs-review-mail-link-to-page'        => "\n\nDu kannst den Artikel unter dieser URL aufrufen:\n<a href=\"$1\">$1</a>",
	'bs-review-mail-invite-header'       => '$1: Bitte begutachte den Artikel $2',
	'bs-review-mail-invite-body'         => "der Benutzer $1 bittet Dich, den Artikel $2 zu begutachten.",
	'bs-review-mail-finish-header'       => '$1: Begutachtung abgeschlossen',
	'bs-review-mail-finish-body'         => "der Benutzer $3 hat auf Deine Begutachtungsanfrage für \"$2\" reagiert und den Änderungen zugestimmt. Die Begutachtung ist damit abgeschloßen.\n\nDu kannst den Artikel unter dieser URL aufrufen: $3\n",
	'bs-review-mail-finish-and-review-header'       => '$1: Begutachtung abgeschlossen',
	'bs-review-mail-finish-and-review-body'         => "der Benutzer $3 hat auf Deine Begutachtungsanfrage für \"$2\" reagiert und den Änderungen zugestimmt. Die Begutachtung ist damit abgeschloßen und der Artikel wurde als \"geprüft\" markiert.\n\nDu kannst den Artikel unter dieser URL aufrufen: $3\n",
	'bs-review-mail-finish-no-flagged-revs-body' => 'bs-review-mail-finish-no-flagged-revs-body', //deprecated?
	'bs-review-mail-comment'             => "\nEs wurde ein Kommentar für Dich eingetragen:\n\"$1\"",
	'bs-review-specialpage-title'        => "Begutachtung für \"$1\"",
	'bs-review-specialpage-subtitle'     => "← $1",
	'bs-review-statebar-top'             => "Begutachtung",
	'bs-review-statebar-body-header'     => "Begutachtung",
	'bs-review-statebar-body-do-review'  => 'Bitte begutachte diese Seite',
	'bs-review-i-agree'                  => 'Ich stimme zu',
	'bs-review-i-dismiss'                => 'Ich lehne ab',
	'bs-review-i-delegate'               => 'Delegieren',
	'bs-review-here-are-your-workflows'  => 'Auf den folgenden Seiten bist Du an einem Begutachtungsprozess beteiligt. Gib Deine Bewertung auf diesen Seiten in der Statusleiste ab.',
	'bs-review-not-allowed'              => 'Der Zugriff auf diese Seite ist nicht erlaubt.',
	'bs-review-startdate-missing'        => 'Bitte gib ein Startdatum an.',
	'bs-review-enddate-missing'          => 'Bitte gib ein Enddatum an.',
	'bs-review-startdate-after-enddate'  => 'Das Startdatum liegt nach dem Enddatum.',
	'bs-review-no-reviewers'             => 'Bitte gib mindestens einen Begutachter an.',
	'bs-review-comment-too-long'         => 'Der Kommentar darf nicht länger als 255 Zeichen sein.',
	'bs-review-user-not-found'           => 'Bitte gib nur existierende Nutzer als Begutachter an.',
	'bs-review-specialpage-no-article'   => "Diese Seite stellt Begutachtungsprozesse für bestimmte Wiki-Seiten dar. Du hast leider keine Seite angegeben.",
	'bs-review-save_tmpl_success'        => "Die Vorlage wurde erfolgreich gespeichert.",
	'bs-review-save_tmpl_error'          => "Die Vorlage konnte nicht gespeichert werden. Bitte prüfe, ob du die erforderlichen Rechte hast.",
	'bs-review-delete_tmpl_success'      => "Die Vorlage wurde erfolgreich gelöscht.",
	'bs-review-delete_tmpl_error'        => "Die Vorlage konnte nicht gelöscht werden. Du hast entweder nicht die entsprechenden Rechte oder bist nicht der Besitzer der Vorlage.",
	'bs-review-created-review'           => 'hat auf $1 einen Begutachtungsprozess gestartet.',
	'bs-review-modified-review'          => 'hat auf $1 einen Begutachtungsprozess verändert.',
	'bs-review-deleted-review'           => 'hat auf $1 einen Begutachtungsprozess entfernt.',
	'bs-review-approved-review'          => 'hat auf $1 bei einem Begutachtungsprozess zugestimmt.',
	'bs-review-denied-review'            => 'hat auf $1 bei einem Begutachtungsprozess abgelehnt.',
	'bs-review-finished-review'          => 'hat auf $1 einen Begutachtungsprozess abgeschlossen.',
	'bs-review-logpage'                  => 'QS-Logbuch',
	'bs-review-logpagetext'              => 'Dies ist das Logbuch der Begutachtungsprozesse.',
	'bs-review-Review'                   => 'Begutachtung',
	'bs-review-pref-CheckOwner'          => 'Nur der Besitzer eines Begutachtungsprozesses darf diesen ändern',
	'bs-review-pref-ShowNameInTooltip'   => 'Namen der Beteiligten anzeigen',
	'bs-review-pref-EmailNotifyOwner'    => 'Den Besitzer eines Begutachtungsprozesses per E-Mail über Änderungen benachrichtigen',
	'bs-review-pref-EmailNotifyReviewer' => 'Den Begutachter eines Begutachtungsprozesses per E-Mail über Änderungen benachrichtigen',
	'bs-review-pref-ShowAssessor'        => 'Den Begutachter eines Begutachtungsprozesses anzeigen',
	'bs-review-ext_review'               => 'Workflow',
	'bs-review-title_page'               => 'Seite',
	'bs-review-title_user'               => 'Besitzer',
	'bs-review-title_userlist'           => 'Begutachter',
	'bs-review-title_mode'               => 'Modus',
	'bs-review-title_status'             => 'Status',
	'bs-review-title_date'               => 'Datum',
	'bs-review-vote'                     => 'Abstimmung',
	'bs-review-sign'                     => 'Kenntnisnahme',
	'bs-review-comment'                  => 'Kommentar',
	'bs-review-workflow'                 => 'Workflow',
	'bs-review-rejected'                 => 'Abgelehnt',
	'bs-review-accepted'                 => 'Akzeptiert',
	'bs-review-expired'                  => 'Abgelaufen',
	'bs-review-noworkflows'              => 'Keine Workflows',
	'bs-review-noaccess'                 => 'Du hast keine Berechtigung diese Seite zu sehen',
	'bs-review-all'                      => 'Alle',
	'bs-review-mine'                     => 'Meine',
	'bs-review-date'                     => '',
	'bs-review-status'                   => 'OK',
	'bs-review-pending'                  => 'In Arbeit',
	'bs-review-denied'                   => 'Zurückgegeben, neu begutachten',
	'bs-review-nothing'                  => 'In Arbeit',
	'bs-review-statebartopreview'        => 'Begutachtung',
	'bs-review-statebarbodyreview'       => 'Begutachtungsprozess',
	'bs-review-statebarbodydoreview'     => 'Begutachtungsprozess-Aktion',
	'bs-review-no-valid-user'            => 'Dieser Benutzer ist unzulässig oder es ist kein Benutzerobjekt vorhanden.',
	'review' => 'Review',
	'review-desc' => 'Fügt Artikeln Workflow-Funktionen hinzu.',
	'bs-review-specialreview-header'     => '{{plural:$1|Begutachtungen für $2|Begutachtungsübersicht}}',
	'bs-review-commentinputlabel'        => 'Dein Kommentar',
	'bs-review-ownercomment'             => 'Kommentar von $1',
	'bs-review-comments' => 'Kommentare',

	//Permissions
	//'workflowedit' and 'workflowlist' don't need 'action-*'-messages as there
	//is no UI to display them yet.
	'action-workflowview' => 'diese Seite aufzurufen',
	'right-workflowview' => 'Oberflächenelemente der Review Erweiterung anzeigen',
	'right-workflowedit' => 'Review Workflows anlegen und bearbeiten',
	'right-workflowlist' => 'Die Liste der Workflows auf der Review Spezialseite ansehen',

	//Javascript
	'bs-review-title' => 'Begutachtung',
	'bs-review-updateRow' => 'Übernehmen',
	'bs-review-cancelRow' => 'Abbrechen',
	'bs-review-btnAddReviewer' => 'Begutachter hinzufügen',
	'bs-review-btnEditReviewer' => 'Begutachter bearbeiten',
	'bs-review-btnRemoveReviewer' => 'Begutachter löschen',
	'bs-review-btnMoveUp' => 'Nach oben',
	'bs-review-btnMoveDown' => 'Nach unten',
	'bs-review-btnOk' => 'Ok',
	'bs-review-btnCancel' => 'Abbrechen',
	'bs-review-colStatus' => 'Status',
	'bs-review-colReviewer' => 'Begutachter',
	'bs-review-colDelegatedTo' => 'Delegiert an',
	'bs-review-colComment' => 'Kommentar',
	'bs-review-lblStartdate' => 'Startdatum',
	'bs-review-lblEnddate' => 'Enddatum',
	'bs-review-btnCreate' => 'Erstellen',
	'bs-review-btnSave' => 'Speichern',
	'bs-review-btnDelete' => 'Löschen',
	'bs-review-btnCancel' => 'Abbrechen',
	'bs-review-noReviewAssigned' => 'Diese Seite hat derzeit keinen Begutachtungsprozess.',
	'bs-review-headerActions' => 'Aktionen',
	'bs-review-titleAddReviewer' => 'Begutachter hinzufügen',
	'bs-review-titleEditReviewer' => 'Begutachter bearbeiten',
	'bs-review-labelUsername' => 'Begutachter',
	'bs-review-labelComment' => 'Kommentar',
	'bs-review-titleStatus' => 'Status',
	'bs-review-labelTemplate' => 'Vorlage',
	'bs-review-labelTemplateLoad' => 'Laden',
	'bs-review-labelTemplateSaveForMe' => 'Für mich speichern',
	'bs-review-labelTemplateSaveForAll' => 'Für alle speichern',
	'bs-review-labelTemplateDelete' => 'Löschen',
	'bs-review-templateName' => 'Name der Vorlage',
	'bs-review-confirm-delete-step' => 'Möchtest du diesen Schritt wirklich löschen?',
	'bs-review-header-page_title' => 'Seite',
	'bs-review-header-owner_name' => 'Besitzer',
	'bs-review-header-assessors' => 'Begutachter',
	'bs-review-header-accepted_text' => 'Status',
	'bs-review-header-startdate' => 'Beginn',
	'bs-review-header-enddate' => 'Ende',
	'bs-review-confirm-delete-review' => 'Möchtest du diese Begutachtung wirklich löschen?',
	'bs-review-overviewpanel-alloption' => '(alle)',
);

$messages['de-formal'] = array(
	'bs-review-to_be_reviewed'           => 'Sie haben noch $1 Seiten zu begutachten: ',
	'bs-review-please_review'            => 'Bitte begutachten Sie diese Seite:',
	'bs-review-save_nosteps'             => 'Sie haben keine Schritte eingetragen',
	'bs-review-save_norights'            => 'Sie haben nicht die erforderliche Berechtigung',
	'bs-review-review_secondtime'        => 'Es ist ein Fehler aufgetreten. Möglicherweise versuchen Sie, eine Seite zum zweiten Mal zu begutachten',
	'bs-review-mail-accept-body'         => "der Benutzer $4 hat auf Ihre Begutachtungsanfrage reagiert und den Änderungen zugestimmt.",
	'bs-review-mail-deny-body'           => "der Benutzer $4 hat auf Ihre Begutachtungsanfrage reagiert und die Änderungen abgelehnt.",
	'bs-review-mail-deny-and-restart-body' => 'der Benutzer $4 hat auf Ihre Begutachtungsanfrage reagiert und die Änderungen abgelehnt. Die Begutachtung wird automatisch neu gestartet.',
	'bs-review-mail-invite-footer'       => "\n\nVielen Dank für Ihre Mitarbeit,\n$1\n\nHinweis:Diese Nachricht wurde automatisch erstellt.",
	'bs-review-mail-review-footer'       => "\n\nHinweis:Diese Nachricht wurde automatisch erstellt.",
	'bs-review-mail-link-to-page'        => "\n\nSie können den Artikel unter dieser URL aufrufen:\n<a href=\"$1\">$1</a>",
	'bs-review-mail-invite-header'       => '$1: Bitte begutachten Sie den Artikel $2',
	'bs-review-mail-invite-body'         => "der Benutzer $1 bittet Sie, den Artikel $2 zu begutachten.",
	'bs-review-mail-finish-body'         => "der Benutzer $3 hat auf Ihre Begutachtungsanfrage für \"$2\" reagiert und den Änderungen zugestimmt. Die Begutachtung ist damit abgeschloßen.\n\nSie können den Artikel unter dieser URL aufrufen: $3\n",
	'bs-review-mail-finish-and-review-header'       => '$1: Begutachtung abgeschlossen',
	'bs-review-mail-finish-and-review-body'         => "der Benutzer $3 hat auf Deine Begutachtungsanfrage für \"$2\" reagiert und den Änderungen zugestimmt. Die Begutachtung ist damit abgeschloßen und der Artikel wurde als \"geprüft\" markiert.\n\nSie können den Artikel unter dieser URL aufrufen: $3\n",
	'bs-review-mail-finish-no-flagged-revs-body' => 'bs-review-mail-finish-no-flagged-revs-body', //deprecated?
	'bs-review-mail-comment'             => "\nEs wurde ein Kommentar für Sie eingetragen:\n\"$1\"",
	'bs-review-statebar-body-do-review'  => 'Bitte begutachten Sie diese Seite',
	'bs-review-here-are-your-workflows'  => 'Auf den folgenden Seiten sind Sie an einem Begutachtungsprozess beteiligt. Geben Sie Ihre Bewertung auf diesen Seiten in der Statusleiste ab.',
	'bs-review-startdate-missing'        => 'Bitte geben Sie ein Startdatum an.',
	'bs-review-enddate-missing'          => 'Bitte geben Sie ein Enddatum an.',
	'bs-review-no-reviewers'             => 'Bitte geben Sie mindestens einen Begutachter an.',
	'bs-review-user-not-found'           => 'Bitte geben Sie nur existierende Nutzer als Begutachter an.',
	'bs-review-specialpage-no-article'   => "Diese Seite stellt Begutachtungsprozesse für bestimmte Wiki-Seiten dar. Sie haben leider keine Seite angegeben.",
	'bs-review-save_tmpl_error'          => "Die Vorlage konnte nicht gespeichert werden. Bitte prüfen Sie, ob Sie die erforderlichen Rechte haben.",
	'bs-review-delete_tmpl_error'        => "Die Vorlage konnte nicht gelöscht werden. Sie haben entweder nicht die entsprechenden Rechte oder sind nicht der Besitzer der Vorlage.",
	'bs-review-noaccess'                 => 'Sie haben keine Berechtigung diese Seite zu sehen',
	'bs-review-confirm-delete-step' => 'Möchten Sie diesen Schritt wirklich löschen?',
	'bs-review-confirm-delete-review' => 'Möchten Sie diese Begutachtung wirklich löschen?',
	'bs-review-commentinputlabel'        => 'Ihr Kommentar',
	'bs-review-review_permissions_error' => 'Sie haben nicht die benötigten Berechtigungen, um diese Aktion auszuführen (\'$1\' wird benötigt).',
);

$messages['qqq'] = array();