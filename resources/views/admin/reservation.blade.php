<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        table
        {
            border:1px solid skyblue;
            margin:auto;
            width:1000px;
            margin-top:100px;
        }

        th
        {
            color:white;
            font-weight:bold;
            font-size:18px;
            text-align:center;
            background-color:skyblue;
            padding:10px;

        }

        td
        {
            color:white;
            font-weight:bold;
            text-align:center;
            padding:10px;
        }


    </style>
  </head>
  <body>
 

        @include('admin.header')
        @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">



          <table>
            <tr>
                <th>Phone Number</th>
                <th>No of guest</th>
                <th>Date</th>
                <th>Time</th>
                
            </tr>

            @foreach($book as $book)

            <tr>
                <td>{{$book->phone}}</td>
                <td>{{$book->guest}}</td>
                <td>{{$book->date}}</td>
                <td>{{$book->time}}</td>

            </tr>

            @endforeach

          </table>

          </div>  
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>