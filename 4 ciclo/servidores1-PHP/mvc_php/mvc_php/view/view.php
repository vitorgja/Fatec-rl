<?

class View {

public function listarUsuarios($vetor) {

$tab = "<table><thead><td>CD_USU</td><td>NOME</td></thead>";
foreach($vetor as $usuario) {
$tab = $tab . "<tr><td>" . $usuario->getId() . "</td><td>" . $usuario->getLogin() . "</td></tr>";
}

$tab = $tab . "</table>";
$data = $tab;
require_once "dinamica.html";

}


public function menu($vmenu) {
     $tab = "<ul>";
     foreach($vmenu as $menu) {
          $tab = $tab . "<li><a href='http://valeriachaves.zz.mu/" .$menu . "/'>" . $menu . "</li>";
     }

     $tab = $tab . "</ul>";
     $data = $tab;
     require_once "dinamica.html";
}

}

?>