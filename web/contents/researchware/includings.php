<?php
$files = glob(  "contents/researchware/entities". '/*.php' );
foreach ( $files as $file )
	require_once( $file );