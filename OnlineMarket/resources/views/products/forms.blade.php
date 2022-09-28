<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$product->name ?? old('name')}}">
</div>
@error('name')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="{{$product->price ?? old('price')}}">
</div>
@error('price')
<span class="text-danger">{{$message}}</span>
@enderror
<div class="mb-3">
    <label for="desc" class="form-label">Desc</label>
    <input type="text" class="form-control" id="desc" name="desc" value="{{$product->desc ?? old('desc')}}">
</div>
@error('desc')
<span class="text-danger">{{$message}}</span>
@enderror
