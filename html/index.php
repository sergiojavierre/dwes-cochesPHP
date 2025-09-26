<?

include "./componentes/nav.php";


include_once "./controlador/dao/DAOCochesMySQL.php";


$dao = new DAOCochesMySQL();
$coches = $dao->lista();

$filtro = $_GET['filtro'] ?? '';

?>

<ul>
    <? foreach ($coches as $coche) : ?>

        <?
        if ($filtro == '' || $coche->matricula == $filtro) {
            echo '<li>' . $coche->matricula . ' - ' . $coche->modelo . '</li>';
        }
        ?>
    <? endforeach; ?>
</ul>