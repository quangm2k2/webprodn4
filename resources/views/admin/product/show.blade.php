@extends('admin.layout.master')

@section('title', 'Product Details')

@section('body')
    <!-- Main -->
    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Product
                        <div class="page-title-subheading">
                            View, create, update, delete and manage.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body display_data">

                        <div class="position-relative row form-group">
                            <label for="" class="col-md-4 text-md-right col-form-label">Images</label>
                            <div class="col-md-8 col-xl-7">
                                <ul class="text-nowrap overflow-auto" id="images">
                                    @foreach($product->productImages as $productImage)
                                    <li class="d-inline-block mr-1" style="position: relative;">
                                        <img style="height: 150px;" src="./front/img/products/{{$productImage->path}}"
                                            alt="Image">
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="brand_id"
                                class="col-md-4 text-md-right col-form-label">Product Images</label>
                            <div class="col-md-8 col-xl-7">
                                <p><a href="./product-image.html">Manage images</a></p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="brand_id"
                                class="col-md-4 text-md-right col-form-label">Product Details</label>
                            <div class="col-md-8 col-xl-7">
                                <p><a href="./product-detail.html">Manage details</a></p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="brand_id"
                                class="col-md-4 text-md-right col-form-label">Brand</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->brand->name}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="product_category_id"
                                class="col-md-4 text-md-right col-form-label">Category</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->ProductCategory->name}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-4 text-md-right col-form-label">Name</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->name}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="content"
                                class="col-md-4 text-md-right col-form-label">Content</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->content}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="price"
                                class="col-md-4 text-md-right col-form-label">Price</label>
                            <div class="col-md-8 col-xl-7">
                                <p>${{$product->price}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="discount"
                                class="col-md-4 text-md-right col-form-label">Discount</label>
                            <div class="col-md-8 col-xl-7">
                                <p>${{$product->discount}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="qty"
                                class="col-md-4 text-md-right col-form-label">Qty</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->qty}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="weight"
                                class="col-md-4 text-md-right col-form-label">Weight</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->weight}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="sku"
                                class="col-md-4 text-md-right col-form-label">SKU</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->sku}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="tag"
                                class="col-md-4 text-md-right col-form-label">Tag</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->tag}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="featured"
                                class="col-md-4 text-md-right col-form-label">Featured</label>
                            <div class="col-md-8 col-xl-7">
                                @if($product->featured)
                                    <div class="badge badge-success mt-2">
                                        Yes
                                    </div>
                                @else
                                    <div class="badge badge-danger mt-2">
                                        No
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="description"
                                class="col-md-4 text-md-right col-form-label">Description</label>
                            <div class="col-md-8 col-xl-7">
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection
