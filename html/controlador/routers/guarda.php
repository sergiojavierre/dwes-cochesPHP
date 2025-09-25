<?

if ($_POST['matricula'] != "" && $_POST['modelo'] != "") {

    $matricula = $_POST['matricula'];
    $modelo = $_POST['modelo'];

    header('Location: ../../');
} else {
    echo 'no has mandado nada';
}
