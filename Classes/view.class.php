<?php 

/* DBZ VIEW */

class View {
  
    public function __construct () { }
    
	// menu list of table link
	public static function MenuDB ($array_db) {
		$menu = "<div id='menudb'>";
	    foreach ($array_db as $K => $DB) {
			$menu .= " <a href='?DB=".$DB[0]."'> ".strtoupper($DB[0])." /</a>";
      }
	  $menu .="<HR /></div>";
	  return $menu;
	}
	
    // menu list of table link
    public static function MenuTable ($db_name, $array_table) {
      $menu = "<div id='menutable'>
	  <b>Database : ".$db_name."</b><hr />";
      
      foreach ($array_table as $K => $TABLE) {
        $menu .= " <li><a href='?DB=".$db_name."&TB=".$TABLE[0]."'>".strtoupper($TABLE[0])."</a></li>";
      }
      
      $menu .= "</div>";
      
      return $menu;
    }
	
	// field item
	public static function MenuField ($tb_name, $array_field, $array_contenu) {
		$menu = "<div id='menufield'><b>Table : ".$tb_name."</b><hr />";
		
		foreach ($array_field as $K => $FIELD) {
			$menu .= " ".strtoupper($FIELD[0])." ";
		}
      
	  foreach ($array_contenu as $K => $CONTENU) {
			$menu .= strtoupper($CONTENU[0]);
		}
		$menu .= "</div>";
      
		return $menu;
	}
    
    // html final rendering
    public static function HTML ($title, $contener) {
      echo "<html>
      <head>
        <title>".$title."</title>
        <link rel='stylesheet' type='text/css' href='Fichiers/css/style.css' />
      </head>
      <body>
        <img src='Fichiers/images/logo.jpg' id='logo' /><br /><hr />
        </hr><div class='container'>".$contener."</div>
      </body>
      </html>";
    }
    
}

?>