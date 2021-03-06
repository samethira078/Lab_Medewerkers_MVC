<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //echo "<pre>";
    //print_r($employees);
    //echo "</pre>";
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', ['employees' => $employees]);
}

function create(){
	render('employee/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
	if(isset( $_POST['name']) && isset( $_POST['num'])){
		createEmployee($_POST);
	}
    //2. Bouw een url op en redirect hierheen
	render('employee/store');

}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee

}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

    //2. Bouw een url en redirect hierheen

}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
	$delete = deleteEmployee($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
	echo $id." is verwijderd!";
	render('employee/delete');

}

function destroy($id){
    //1. Delete een medewerker uit de database

	//2. Bouw een url en redirect hierheen
    
}
?>