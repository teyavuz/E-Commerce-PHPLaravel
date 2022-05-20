
<!DOCTYPE html>
<html lang="en">
  <head>
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

       <div class="container" align="center">
          <h1 class="title">Ürün Ekle</h1>

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert"></button>
          
          {{session()->get('message')}}
          </div>

          @endif
          
        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
            @csrf

        <div style="padding:15px;">
            <label>Product Title:</label>
            <input style="color: black;" type="text" name="title" placeholder="Ürün ismini Gir" required="">
        </div>

        <div style="padding:15px;">
            <label>Fiyat:</label>
            <input style="color: black;" type="text" name="price" placeholder="Fiyat belirle" required="">
        </div>

        <div style="padding:15px;">
            <label>Açıklama:</label>
            <input style="color: black;" type="text" name="description" placeholder="Açıklama gir" required="">
        </div>

        <div style="padding:15px;">
            <label>Miktar:</label>
            <input style="color: black;" type="text" name="quantity" placeholder="Ürün miktar sayısı" required="">
        </div>

        <div style="padding:15px;">
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