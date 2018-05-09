@extends('layouts.app')

@section('content')

   
                <div class="col-md-12 card border-dark mb-3" >
                  <div class="card-header">Dashboard</div>
                  <div class="card-body">
                    <h4 class="card-title">Reportar Incidencia</h4>
                      <form>
                      <fieldset>
                        
                           <div class="form-group">
                              <label for="exampleSelect1">Categoria</label>
                              <select class="form-control" id="category" name="category">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="exampleSelect1">Urgencia</label>
                              <select class="form-control" id="urgency" name="urgency">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="exampleSelect1">Asignar a: </label>
                              <select class="form-control" id="asign" name="asign">
                                <option>G</option>
                                <option>A</option>
                                <option>M</option>
                                <option>E</option>
                                <option>S</option>
                              </select>
                            </div>


                        
                        <div class="form-group">
                          <label for="exampleTextarea">titulo</label>
                          <textarea class="form-control" id="title" name="title" rows="1"></textarea>
                        </div>
                        <div class="form-group">

                          <div class="form-group">
                          <label for="exampleTextarea">Descripcion</label>
                          <textarea class="form-control" id="description" name="description" rows="6"></textarea>
                        </div>
                        <div class="form-group">

                          <label for="exampleInputFile">File input</label>
                          <input class="form-control-file" id="InputFile" name="InputFile" aria-describedby="fileHelp" type="file">
                          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Publicar</button>
                        </div>
                      
                    </form>
                    
                  </div>
                </div>
                
    

@endsection