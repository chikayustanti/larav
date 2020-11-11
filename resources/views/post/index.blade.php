@extends('post')

@section('main')
{{-- <div class="row">
    <form action="{{ url("/") }}" class="form-inline" method="GET">
<div class="form-group mx-sm-3 mb-2">
    <input value="{{Request::get('keyword')}}" name="keyword" type="text" class="form-control" placeholder="by name">
</div>
<button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</div> --}}

<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
            </thead>
            <tbody id="content">
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
        $.get("https://jsonplaceholder.typicode.com/posts?fbclid=IwAR3X9mI7_lwkr63xm1vgTbNkgmjalQST1l1-QgNH1tpQ1t03kBLu5PX9598",function(data,status){
            console.log(data);
            data.forEach(element => {
            tr = "<tr>";
                tr+="<td>"+element.id+"</td>";
                tr+="<td>"+element.title+"</td>";
                tr+="<td>"+element.body+"</td>";
                tr += "</tr>";
            $("#content").append(tr);    
            });
            
        });
    });
</script>
@endsection