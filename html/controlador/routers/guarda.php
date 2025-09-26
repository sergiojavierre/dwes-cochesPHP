<?

include_once __DIR__ . "/../../modelo/Coche.php";
include_once __DIR__ . "/../dao/DAOCochesMySQL.php";

if ($_POST['matricula'] != "" && $_POST['modelo'] != "") {

    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];

    $dao = new DAOCochesMySQL();
    $coche = new Coche($matricula, $modelo);
    $dao->guarda($coche);

    header('Location: ../../');
} else {
    echo 'no has mandado nada';
}
