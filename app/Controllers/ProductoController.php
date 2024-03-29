<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductoModel;

class ProductoController extends ResourceController
{

    protected $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }


    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $productos = $this->productoModel->orderBy('nombre', 'desc')->findAll();
        
        $data = [
            'productos' => $productos
        ];

        return $this->response->setJSON($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        
    }




    public function new()
    {
       
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();

        $image = $this->request->getFile('imagen');

        if ($image) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/productos', $newName);
            $data['imagen'] = $newName;
        }

        if ($this->productoModel->insert($data)) {
            return $this->respondCreated($data);
        } else {
            return $this->fail($this->productoModel->errors());
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
