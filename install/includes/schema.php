<?php
function get_db_schema($prefix) {
	// Tables.
	$app_tables = "CREATE TABLE ".$prefix."_user(
  username VARCHAR(16) NOT NULL,
  email VARCHAR(255) NULL,
  password VARCHAR(255) NOT NULL,
  create_time TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (username),
  UNIQUE INDEX username_UNIQUE (username ASC),
  UNIQUE INDEX email_UNIQUE (email ASC)
  )";


	$queries = $app_tables; //concatenate more queries as you need
	return $queries;
}

