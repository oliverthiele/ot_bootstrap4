CREATE TABLE tt_content (
    bootstrap_col_xs int(11) DEFAULT '0' NOT NULL,
    bootstrap_col_sm int(11) DEFAULT '0' NOT NULL,
    bootstrap_col_md int(11) DEFAULT '0' NOT NULL,
    bootstrap_col_lg int(11) DEFAULT '0' NOT NULL,
    bootstrap_col_xl int(11) DEFAULT '0' NOT NULL,

    bootstrap_css_outer varchar(255) NOT NULL DEFAULT '',
    bootstrap_css_inner varchar(255) NOT NULL DEFAULT '',
    bootstrap_shadow varchar(20) NOT NULL DEFAULT '',

    animation_type varchar(30) NOT NULL DEFAULT '',
    animation_delay tinyint(1) DEFAULT '0' NOT NULL,
    animation_speed int(11) DEFAULT '0' NOT NULL,
    animation_offset varchar(4) NOT NULL DEFAULT '90%',

    disable_div_wrapper tinyint(1) unsigned DEFAULT '0' NOT NULL,
);

CREATE TABLE pages (
    disable_page_header tinyint(1) unsigned DEFAULT '0' NOT NULL,
);
