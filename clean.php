<?php function AllDirChmod( $dir = "./", $dirModes = 0755, $fileModes = 0644 ){
   $d = new RecursiveDirectoryIterator( $dir );
   foreach( new RecursiveIteratorIterator( $d, 1 ) as $path ){
      if( $path->isDir() ) chmod( $path, $dirModes );
      else if( is_file( $path ) ) chmod( $path, $fileModes );
  }
}

AllDirChmod();

?>
