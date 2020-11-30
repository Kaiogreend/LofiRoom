<?php
 require_once '../model/cliente.php';
  $odjCliente = new Cliente();

  if(isset($_POST['delete_id'])){
      $id = $_POST['delete_id'];
  if($odjCliente->delete($id)){
       $odjCliente->redirect('../view/cliente.php');
       
  }
  }
 if(isset($_POST['insert'])){
    $nome = $_POST ['txtnome'];
    $email = $_POST ['txtemail'];
    $senha = $_POST ['txtsenha'];
if($odjCliente->insert($nome,$email,$senha)){
    $odjCliente->redirect('/lofiroom-v1/.');
}

 }
 if(isset($_POST['editar_id'])){
    $id = $_POST ['editar_id'];
    $nome = $_POST ['txtnome'];
    $email = $_POST ['txtemail'];
    $senha = $_POST ['txtsenha'];
if($odjCliente->update($nome, $email, $senha,$id)){
    $odjCliente->redirect('../view/cliente.php');
}
 }
 

 ?>