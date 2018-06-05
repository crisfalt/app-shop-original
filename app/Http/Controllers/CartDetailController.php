<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CartDetail;

/*
* @resource CartDetailController
* Clase del controlador
*/
class CartDetailController extends Controller
{
    /*
    * @method __construct - Metodo constructor de la clase , adiccional activa el middleware de autenticacion
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    * @method store - Metodo que almacena un detalle en el carrito de compras
    * @param Request $request - parametro que cotiene los campos necesarios para almacenar el detalle
    */
    public function store(Request $request)
    {
    	$cartDetail = new CartDetail();
    	$cartDetail->cart_id = auth()->user()->cart->id;
    	$cartDetail->product_id = $request->product_id;
    	$cartDetail->quantity = $request->quantity;
    	$cartDetail->save();

		$notification = 'El producto se ha cargado a tu carrito de compras exitosamente!';
    	return back()->with(compact('notification'));
    }

    /*
    * @method destroy - Metodo que elimina un detalle en el carrito de compras
    * @param Request $request - parametro que cotiene el id del carrito a eliminar
    */
    public function destroy(Request $request)
    {
    	$cartDetail = CartDetail::find($request->cart_detail_id);
    	
    	if ($cartDetail->cart_id == auth()->user()->cart->id)
    		$cartDetail->delete();

    	$notification = 'El producto se ha eliminado del carrito de compras correctamente.';
    	return back()->with(compact('notification'));
    }
}
