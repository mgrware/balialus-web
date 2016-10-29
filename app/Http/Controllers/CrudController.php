<?php
class CrudController extends \BaseController {
   public function index()
    {
        $katalog = DB::table('katalog')->paginate(5);
        $katalog =
        [
            'katalog' => $katalog
        ];
        return View::make('crud.index', $katalog);
    }
 
}