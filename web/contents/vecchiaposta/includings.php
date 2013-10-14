<?php
$files = glob(  "contents/vecchiaposta/entities". '/*.php' );
foreach ( $files as $file )
	require_once( $file );