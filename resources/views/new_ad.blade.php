@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ajouter une annonce') }}</div>

                <div class="card-body">
                    <form action="new_ad/save" method='post'>
                        @csrf
                        <div class="form-group">
                            <label for="title">Titre :</label>
                            <input type="text" id="title" class="form-control" name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Prix(€) :</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>

                        <div class="form-group">
                            <label for="picture">Photo :</label>
                            <input style="border:none" type="file" class="form-control" name="picture" id="picture">
                        </div>
                        <input type="submit" value='poster'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection