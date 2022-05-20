
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      @include('admin.css')

      <style type="text/css">
         .title
         {
            color: white;
            padding-top: 25px;
            font-size: 25px;
         }

         label{
             display: inline-block;
             width: 120px;
         }
  
      </style>    
  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
      
      <div class="container-fluid page-body-wrapper">

       <div class="container" text-align="center">
          <h1 class="title">Ürün Ekle</h1>

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert"></button>
          
          {{session()->get('message')}}
          </div>

          @endif
          
        <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf

        <div style="padding:15px;">
            <label>Ürün İsmi:</label>
            <input style="color: black;" type="text" name="title" value="{{$data->title}}" required="">
        </div>

        <div style="padding:15px;">
            <label>Fiyat:</label>
            <input style="color: black;" type="text" name="price" value="{{$data->price}}" required="">
        </div>

        <div style="padding:15px;">
            <label>Açıklama:</label>
            <input style="color: black;" type="text" name="description" value="{{$data->description}}" required="">
        </div>

        <div style="padding:15px;">
            <label>Miktar:</label>
            <input style="color: black;" type="text" name="quantity" value="{{$data->quantity}}" required="">
        </div>

        <div style="padding:15px;">
            <label>Eski Fotoğraf:</label>
            <img height="100"; width="100" src="/productimage/{{$data->image}}" alt="">
        </div>

        <div style="padding:15px;">
        <label for="">Fotoğrafı Değiştirin</label>
            <input style="color: white;" type="file" name="file">
        </div>

        <div style="padding:15px;">
            <input class="btn btn-primary" type="submit" name="submit">
        </div>

 </form>
       </div>

      </div>


      @include('admin.script')
        <!-- partial -->
  </body>
</html>