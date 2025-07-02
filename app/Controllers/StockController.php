<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class StockController extends BaseController
{
    protected $productosModel;

    public function __construct()
    {
        $this->productosModel = new ProductosModel();
    }

    public function index()
    {
        $productos = $this->productosModel->findAll();
        return view('stock/index', ['productos' => $productos]);
    }

    public function verDetalle($productoId)
    {
        $producto = $this->productosModel->find($productoId);

        if (! $producto) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('stock/detalle', [
            'titulo' => 'Detalle del producto',
            'producto' => $producto
        ]);
    }

    public function actualizarStockForm($productoId = 0)
    {
        $producto = $productoId ? $this->productosModel->find($productoId) : null;

        return view('stock/form', [
            'titulo' => $producto ? 'Editar producto' : 'Nuevo producto',
            'producto' => $producto
        ]);
    }

    public function actualizarStock($productoId = 0)
    {
        $datos = [
            'nombre'      => $this->request->getPost('nombre'),
            'precio'      => $this->request->getPost('precio'),
            'stock'       => $this->request->getPost('stock'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        if ($productoId) {
            $this->productosModel->update($productoId, $datos);
            $mensaje = 'Producto actualizado';
        } else {
            $this->productosModel->insert($datos);
            $mensaje = 'Producto creado';
        }

        return redirect()->to(site_url('stock'))->with('mensaje', $mensaje);
    }

   /* / public function borrar($productoId)
    {
        $this->productosModel->delete($productoId);
        return redirect()->to(site_url('stock'))->with('mensaje', 'Producto eliminado');
    }
        */
}
