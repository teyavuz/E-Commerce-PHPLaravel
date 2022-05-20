
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
      
      
      <div class="container-fluid page-body-wrapper">

       <div class="container" align="center"> 
       @if(session()->has('message'))

       <div class="alert alert-success">

       <button type="button" class="close" data-dismiss="alert"></button>

       {{session()->get('message')}}
      </div>

@endif

         <table>
 
         <tr style="background-color: black;">
           <td style="padding:20px;">Müşteri Adı</td>
           <td style="padding:20px;">Telefon</td>
           <td style="padding:20px;">Adres</td>
           <td style="padding:20px;">Ürün</td>
           <td style="padding:20px;">Fiyat</td>
           <td style="padding:20px;">Miktar</td>
           <td style="padding:20px;">Sipariş Durumu</td>
           <td style="padding:20px;">Sipariş kontrol</td>
         </tr>

         @foreach($order as $orders)
         
         <tr align="center" style="background-color:grey;">
             <td style="padding:20px;">{{$orders->name}}</td>
             <td style="padding:20px;">{{$orders->phone}}</td>
             <td style="padding:20px;">{{$orders->address}}</td>
             <td style="padding:20px;">{{$orders->product_name}}</td>
             <td style="padding:20px;">{{$orders->price}}</td>
             <td style="padding:20px;">{{$orders->quantity}}</td>
             <td style="padding:20px;">{{$orders->status}}</td>
             <td style="padding:20px;">

             <a class="btn btn-warning" style="color:white;" href="{{url('updatestatus',$orders->id)}}">Teslim edildi</a>

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