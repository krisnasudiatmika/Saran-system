@extends('welcome')

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" style="text/css">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" style="text/css">


<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tujuan</th>
                <th>Nama Devisi</th>
                <th>User Pengirim</th>
                <th>Pesan</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($saran as $item)
            <tr>
            <td>{{$item->tujuan}}</td>
            <td>{{$item->nama_tujuan}}</td>
            <td>{{$item->user}}</td>
            <td>{{$item->pesan}}</td>
          
            </tr>
            @endforeach
           
         
        </tbody>
        <tfoot>
            <tr>
                <th>Tujuan</th>
                <th>Nama Devisi</th>
                <th>User Pengirim</th>
                <th>Pesan</th>
                
            </tr>
        </tfoot>
    </table>
    
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    
@endsection