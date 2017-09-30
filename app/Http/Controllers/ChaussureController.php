<?php 

namespace App\Http\Controllers;


use App\Chaussure;
use App\Commande;
use App\Http\Request;

class ChaussureController extends Controller
{

  /**
   * //
   *
   * @return La liste de toutes les chaussures + ...
   */
  public function index() /*damien return $listeChaussures ( all) + $listeMarque + $listeTaille  */
  {
      $ShoesAll = Chaussure::get();
      return view('admin.chaussures.index',compact($ShoesAll));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * @param Une nouvelle chaussure
   *
   * @return True, si ça s'est bien passé
   */
  public function store(Request $request)
  {
      $shoes = Chaussure::create($request->all());
      return redirect('Admin.chaussures.index'); //TODO Ajouter la redirection vers l'ajout d'une chaussure
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  $id de la chaussure à mettre à jour
   * @return $id de la chaussure modifiée
   */
  public function update($id, Request $request)
  {
    $shoes = Chaussure::findOrFail($id);
    $shoes->update($request->all());
    return redirect('Admin.chaussures.index', $id); //TODO Ajouter la redirection vers la page d'edition de chaussure
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>