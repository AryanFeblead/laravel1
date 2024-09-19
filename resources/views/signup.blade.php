@include('common.header')
@if($errors->any())
@foreach($errors->all() as $error)
<div>
    {{$error}}
</div>
@endforeach
@endif
<h1 class='text-center'>Welcome Signup</h1>
<div class="container">
    <form id="prod_form" action="addUser" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="prod_name" name="name" aria-describedby="emailHelp">
          <div id="prod_nameval">
            Please choose a product name.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Product Image</label>
          <input type="file" class="form-control" id="prod_img" name="prod_img[]" multiple>
          <div id="prod_imgval">
            Please choose a product image.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Product Quantity</label>
          <input type="number" class="form-control" id="prod_qun" aria-describedby="emailHelp" name="prod_qun">
          <div id="prod_qunval">
            Please choose a product quantity.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Product Price</label>
          <input type="number" class="form-control" id="prod_price" name="prod_price"
            aria-describedby="emailHelp">
          <div id="prod_priceval">
            Please choose a product price.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Product Details</label>
          <textarea name="prod_detail" class="form-control" id="prod_detail"></textarea>
          <div id="prod_detailval">
            Please choose a product detail.
          </div>
        </div>
        <button class="btn btn-primary">Add Product</button>
      </form>
</div>