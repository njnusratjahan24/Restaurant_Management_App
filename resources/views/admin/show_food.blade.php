<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        table
        {
            border:1px solid skyblue;
            margin:auto;
            width:800px;
        }
        th
        {
           background:skyblue;
           color:white;
           padding: 10px;
           margin:10px;
        }

    </style>
  </head>
  <body>
 

        @include('admin.header')
        @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <div>
          <table>
            <tr>
                <th>Food title</th>
                <th>Details</th>
                <th>price</th>
                <th>Image</th>
                <th>delete</th>
                <th>Update</th>
            </tr>

            @foreach($data as $data)

            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->detail}}</td>
                <td>{{$data->price}}</td>
                <td>
                    <img width="150" src="food_img/{{$data->image}}" alt="">

                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('delete_food',$data->id)}}">Delete</a>
 
                </td>
                <td>
                    <a class="btn btn-warning" href="{{url('update_food',$data->id)}}">Update</a>
                </td>

            
            </tr>
            @endforeach

          </table>


          </div>

          </div>  
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>