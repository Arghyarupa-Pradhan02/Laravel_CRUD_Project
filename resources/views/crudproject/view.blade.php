<button id="demo1"><a href="{{route('crudproject.index')}}">Home</a></button>

<div class="panel-content">
    <div class="mb-3">
        <label for="">Firstname : {{$data->first_name}}</label>
    </div>
    <div class="mb-3">
        <label for="">Lastname : {{$data->last_name}}</label>
    </div>
    <div class="mb-3">
        <label for="">Gender : {{$data->gender}}</label>
    </div>
    <div class="mb-3">
        <label for="">Email : {{$data->email}}</label>
    </div>
    <div class="mb-3">
        <label for="">Qualification : {{$data->qualification}}</label>
    </div>
    <div class="mb-3">
        <label for="">Image : <img src=" {{$data->image}}" alt="" width="50px" height="50px"></label>
    </div>
</div>