ALTER TABLE /*$wgDBprefix*/bs_review ADD `rev_abortable` TINYINT( 3 ) UNSIGNED NOT NULL DEFAULT '0' AFTER `rev_sequential`;