@extends('layout/plantilla')

@section('tittle','Articulos')

@section('contain')
    <div class="row">
        <div class="card">
        <br>

            <div class="card-header">
                <h5 class="card-title" align ="center">Articulos</h5>
            </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-circle btn-primary" data-bs-toggle="modal" data-bs-target="#frmCreateArt" title="Guardar"><i class="fa fa-plus" aria-hidden="true"></i></button> 
                        </div>
                        <p class="card-text">
                            <div class="table table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Articulo</th>
                                        <th>Precio</th>
                                        <th>Estatus</th>
                                        <th>Disponible</th>
                                        <th></th>                             
                                    </thead> 
                                    <tbody>
                                        @foreach ($datos as $item)

                                        <tr>
                                            <td>{{ $item->Name }}</td>
                                            <td>{{ $item->Price }}</td>
                                            <td>{{ $item->Estatus }}</td>
                                            <td>{{ $item->Stock }}</td>
                                            <td>  
                                                <form action="{{route('articulos.destroy',$item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="btn btn-circle btn-danger" title="Eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i></button> 
                                                </form>
  
                                                <form action="{{route('articulos.edit',$item->id)}}" method="GET">
                                                    <button type="submit" class="btn btn-circle btn-primary" data-bs-toggle="modal" data-bs-target="#frmACTArt" title="Editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> 
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>  
                                </table>
                            </div>
                        </p>
                </div>
            </div> 
        </div>
        @include('ArtNew')
@endsection

