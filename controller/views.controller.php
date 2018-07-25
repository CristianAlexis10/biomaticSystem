<?php
	class ViewsController{
		private $master;
		private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		$this->doizer = new DoizerController;
	 	}
		function main(){
			require_once "views/modules/index.php";
		}
		function users(){
			if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 1) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/user/user.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function profileAdmin(){
			if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 1) {
				$data = $this->master->selectBy("usuario",array("usu_codigo",$_SESSION['USER']['ID']));
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/profile.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function viewUpdateUser(){
			if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 1) {
				$data = $this->master->selectBy("usuario",array("usu_codigo",$_GET['data']));
				$_SESSION['USER_UPDATE'] = $_GET['data'];
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/user/update.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function groups(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/groups/index.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function collaborators(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/groups/collaborators.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function viewGroup(){
			if (isset($_SESSION['USER']['ROL'])) {
				$datagrupo = $this->master->selectBy("grupos",array("gru_codigo",$_GET['data']));
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/groups/detail.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function projects(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/projects/index.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function detailProyect(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/projects/detail.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function program(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/program/index.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function actas(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/actas/actas.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("Location:inicio");
			}
		}
		function detailActas(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/actas/detail.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function assistance(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/assistance/assistance.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function reports(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/report/report.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function purchases(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/purchases/purchases.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function publication(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/publication/publication.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function articles(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/article/article.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function aliados(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/aliados/aliados.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
		function alumns(){
			if (isset($_SESSION['USER']['ROL'])) {
				require 'views/include/scope.header.php';
				require 'views/modules/admin/product/alumns/alumns.php';
				require_once "views/include/scope.footer.php";
			}else {
				session_destroy();
				header("location:inicio");
			}
		}
	}
?>
