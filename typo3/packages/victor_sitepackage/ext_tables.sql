CREATE TABLE tx_victorsitepackage_domain_model_project (

    title varchar(255) DEFAULT '' NOT NULL,

    description text,

    tech_stack varchar(255) DEFAULT '' NOT NULL,

    github_url varchar(255) DEFAULT '' NOT NULL,

    demo_url varchar(255) DEFAULT '' NOT NULL,

    featured smallint(5) unsigned DEFAULT '0'

);