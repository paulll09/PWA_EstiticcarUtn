<?php

namespace App\Controllers;

use App\Models\AutosModel;

class StockController extends BaseController
{
    protected $autosModel;

    public function __construct()
    {
        $this->autosModel = new AutosModel();
    }

    public function index()
    {
        $autos = $this->autosModel->findAll();
        return view('stock/catalogo', ['autos' => $autos]);
    }

    public function agregarAuto()
    {
        return view('admin/agregar_auto_view', [
            'titulo' => 'Agregar Auto'
        ]);
    }

    public function verDetalles($id_auto)
    {
        $auto = $this->autosModel->find($id_auto);

        if (!$auto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Auto no encontrado.");
        }

        return view('stock/caracteristicas', ['auto' => $auto]);
    }

    public function guardarAuto()
    {
        helper(['form', 'url']);

        $imagen = $this->request->getFile('imagen');
        if ($imagen->isValid() && !$imagen->hasMoved()) {
            $nombreImagen = $imagen->getRandomName();
            $imagen->move('uploads/autos/', $nombreImagen);
        } else {
            $nombreImagen = null;
        }

        $this->autosModel->save([
            'marca' => $this->request->getPost('marca'),
            'modelo' => $this->request->getPost('modelo'),
            'kilometraje' => $this->request->getPost('kilometraje'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'imagen' => $nombreImagen
        ]);

        return redirect()->to('catalogo');
    }
}
