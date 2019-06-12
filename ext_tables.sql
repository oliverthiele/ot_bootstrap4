CREATE TABLE tt_content (
	bootstrap_col_xs int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_sm int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_md int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_lg int(11) DEFAULT '0' NOT NULL,
	bootstrap_col_xl int(11) DEFAULT '0' NOT NULL,

	bootstrap_css_outer varchar(255) NOT NULL DEFAULT '',
	bootstrap_css_inner varchar(255) NOT NULL DEFAULT '',

	disable_div_wrapper tinyint(1) unsigned DEFAULT '0' NOT NULL,
);
