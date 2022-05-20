
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
      

      <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">

       <div class="container" align="center">

       @if(session()->has('message'))

<div class="alert alert-warning">

<button type="button" class="close" data-dismiss="alert"></button>

{{session()->get('message')}}
</div>

@endif
      
       <table>
         
         <tr style="background-color: grey;">
             <td style="padding:20px">İsim</td>
             <td style="padding:20px">Ücret</td>
             <td style="padding:20px">Miktar</td>
             <td style="padding-left:170px">Açıklama</td>
             <td style="padding:20px">Fotoğraf</td>
             <td style="padding:20px">Güncelle</td>
             <td style="padding:20px">Sil</td>
         </tr>

         @foreach($data as $product)

         <tr align="center" style="background-color: gray;">
             <td>{{$product->title}}</td>
             <td>{{$product->price}}</td>
             <td>{{$product->quantity}}</td>
             <td>{{$product->description}}</td>
             <td>

             <img height="100px" width="100px" src="/productimage/{{$product->image}}">

             </td>

             <td>
                 <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Güncelle</a>
             </td>

             <td>
                 <a class="btn btn-danger" onclick="return confirm('Silmek İstediğine Emin Misiniz?')" href="{{url('deleteproduct',$product->id)}}">Sil</a>
             </td>
         </tr>

          @endforeach

       </table>
       
       </div> 
      
      </div>

      @include('admin.script')
        <!-- partial -->
  </body>
</html>