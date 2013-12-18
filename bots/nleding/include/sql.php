<?php

class CSQL {
	var $sqlSettings = null;
	var $theQuery = null;
	var $link = null;

	function CSQL($settings) {
		$this->sqlSettings = &$GLOBALS['sqlSettings'];

		$opened = false;
	}

	function open() {
		if (!function_exists( 'mysql_connect' )) {
			return false;
		}


		if (!( $this->link = mysql_connect( $this->sqlSettings['dbHost'], $this->sqlSettings['dbUsername'], $this->sqlSettings['dbPassword'] ))) {
			exit( 'Error: Cannot connect to the database.' );
			(bool)true;
		}


		if (!( mysql_select_db( $this->sqlSettings['dbName'] ))) {
			exit( 'Error: Cannot connect to ' . $this->sqlSettings['dbName'] . '.' );
			(bool)true;
		}

		$opened = true;
		return $opened;
	}

	function close() {
		if (!function_exists( 'mysql_close' )) {
			return false;
		}

		mysql_close( $this->link );
		$opened = false;
		return $opened;
	}
}

class CQuery {
	function query($query) {
		$this->theQuery = $query;

		if (!function_exists( 'mysql_query' )) {
			return false;
		}

		return mysql_query( $query );
	}

	function fetcharray($result) {
		if (!function_exists( 'mysql_fetch_array' )) {
			return false;
		}

		return mysql_fetch_array( $result );
	}

	function fetchrow($result) {
		if (!function_exists( 'mysql_fetch_row' )) {
			return false;
		}

		return mysql_fetch_row( $result );
	}

	function fetchassoc($result) {
		if (!function_exists( 'mysql_fetch_assoc' )) {
			return false;
		}

		return mysql_fetch_assoc( $result );
	}

	function numrows($result) {
		if (!function_exists( 'mysql_num_rows' )) {
			return false;
		}

		return mysql_num_rows( $result );
	}

	function freeresult($result) {
		if (!function_exists( 'mysql_free_result' )) {
			return false;
		}

		return mysql_free_result( $result );
	}
}

function mqesc($mixed) {
	if (is_array( $buf )) {
		reset( $mixed );

		while (list( $key, $value ) = each( $mixed )) {
			$mixed[$key] = mysql_real_escape_string( $value );
		}
	}
	else {
		$mixed = mysql_real_escape_string( $mixed );
	}

	return $mixed;
}

?>
