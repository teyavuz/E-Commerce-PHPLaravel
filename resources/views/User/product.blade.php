
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Yeni Ürünlerimiz</h2>
              <a href="{{url('redirectproduct')}}"
                >bütün ürünleri görün -> <i class="fa fa-angle-right"></i
              ></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding=10px;">

                @csrf

                <input class="form-control" type="search" name="search" placeholder="Ara">
                <input type="submit" value="Ara" class="btn btn-success">
              </form>

            </div>
          </div>
          @foreach($data as $product)

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt="" /></a>
              <div class="down-content">

                <a href="#"><h4>{{$product->title}}</h4></a>

                <p>
                  {{$product->description}}
                </p>
              </div>
              <div style="margin-left:10px;">

                <h6 style="text-align: right; margin-right:20px;">{{$product->price}}</h6>
                
              <form action="{{url('addcart',$product->id)}}" method="POST">
              @csrf
              <hr>
              <input type="number" style="width:120px" value="1" min="1" class="form-control" name="quantity">
              <br>
              <input class="btn btn-warning" style="width:120px; margin-bottom:20px;" type="submit" value="Sepete Ekle">

              </form>

              </div>
            </div>
          </div>

          @endforeach


          @if(method_exists($data,'link'))

          <div class="d-flex justify-content-center">

          {{!! $data->links() !!}}

          </div>
          @endif


        </div>
      </div>
    </div>

