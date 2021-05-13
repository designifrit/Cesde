<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
	public function index()
	{	
        $task = new TaskModel();	// Instancia la clase TaskModel
        $resultTask = $task -> readTasks();	// Lee los datos o tasks de la BD

		// Trae los datos a través de un Array asociativo
		$data = array(
			"tasks" => $resultTask
		);
		
		// Muestra las Views en el orden especificado
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('task_view', $data);
		echo view('layouts/footer');
	}

	public function create(){
		// Permite restringir o permitir contenido a través de las cookies
		// En este caso por medio del inicio de sessión del usuario
		$session = session();

		// Muestra las Views en el orden especificado
		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('create_task_view');
		echo view('layouts/footer');
	}

	public function addTask(){
		$taskModel = new TaskModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos
		
		// A través de $request obtiene los datos en POST desde el formulario
		$task = $request -> getPost('task');
		$description = $request -> getPost('description');
		$imageUrl = $request -> getPost('imageUrl');

		echo $description;
		echo $imageUrl;
		
		$taskModel -> addTask($task, $description, $imageUrl);	// Almacenar los datos en la BD
		return redirect() -> to('/public/task');	// Redirigir a la View > task
	}

	public function deleteTask(){
		$taskModel = new TaskModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$id = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$taskModel -> deleteTask($id);	// Como ya se obtuvo el $id, se elimina de la base de datos

		return redirect() -> to('/public/task');
	}

	public function updateTask(){
		$taskModel = new TaskModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		$id = $request -> getGet('id');	// A través del $request obtiene el id con GET, que es enviado por el botón
		$task = $taskModel -> updateTask($id);

		echo view('layouts/header');
		echo view('layouts/nav');
		echo view('update_task', array("task" => $task[0]));	// Pasa el arreglo a la vista como un objeto []
		echo view('layouts/footer');
	}

	public function updateEditedTask(){
		$taskModel = new TaskModel();	// Instancia la clase TaskModel
		$request = \Config\Services::request();	// Activa el servicio de web services para poder obtener los datos

		// A través de $request obtiene los datos
		$id = $request -> getGet('id');
		$task = $request -> getPost('task');
		$description = $request -> getPost('description');
		$imageUrl = $request -> getPost('imageUrl');

		$taskModel -> updateEditedTask($id, $task, $description, $imageUrl);	// Almacenar los datos en la BD

		return redirect() -> to('/public/task');
	}
}