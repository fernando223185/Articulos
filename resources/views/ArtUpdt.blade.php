
@extends('layout/plantilla')

@section('tittle','Articulos')

@section('contain')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Articulos</h5>
            </div>
                    <div class="card-body">
                       
                        <p class="card-text">
                        <form action= "{{ route('articulos.update', $art->id) }}" method="POST">
                        @csrf 
                          @method("PUT")
                          <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="">Nombre del articulo</label>
                                    <div class="input-group">
                                        <input class="form-control" name="Name" type="text" required value="{{$art->Name}}">
                                    </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="">Precio</label>
                                <input type= "number" class="form-control" name="Price" required value="{{$art->Price}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                            <label for="">Estatus</label>
                              <select data-placeholder="Selecciona un Estatus" name="Estatus" class="form-control" >
                                    <option value="ALTA" {{ $art->Estatus === 'ALTA' ? 'selected' : '' }}>ALTA</option>
                                    <option value="BAJA" {{ $art->Estatus === 'BAJA' ? 'selected' : '' }}>BAJA</option>
                                 </select>                           
                                 </div>
                            <div class="form-group col-sm-6">
                                <label for="">Disponible</label>
                                <input type= "number" class="form-control" name="Stock" required value="{{$art->Stock}}">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                          <br>
                             <a href="{{route('articulos.index')}}" class="btn btn-circle btn-secondary" ><i class="fa fa-chevron-left"></i></a>
                             <button type="submit" class="btn btn-circle btn-primary" ><i class="fa fa-floppy-o"></i></button>
                        </div>
                        </div>
                       
                        </form>
                        </p>
                </div>
            </div> 
        </div>
@endsection

