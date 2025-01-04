<form method="post" action="{{ route('crudproject.update', [$data->id]) }}" enctype="multipart/form-data" style="padding: 20px; margin: 20px; border: 1px solid #ccc; border-radius: 8px;">
    @csrf

    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" value="{{ $data->first_name }}" style="margin-bottom: 10px;">
    </div>

    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" value="{{ $data->last_name }}" style="margin-bottom: 10px;">
    </div>

    <div class="form-group">
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" {{ $data->gender === 'male' ? 'checked' : '' }}>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" {{ $data->gender === 'female' ? 'checked' : '' }}>
        <label for="female">Female</label>
        <input type="radio" id="others" name="gender" value="others" {{ $data->gender === 'others' ? 'checked' : '' }}>
        <label for="others">Others</label>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" name="email" value="{{ $data->email }}" style="margin-bottom: 10px;">
    </div>

    <div class="form-group">
        <label for="qualifications">Qualifications:</label>
        <input type="text" class="form-control" name="qualifications" value="{{ $data->qualification }}" style="margin-bottom: 10px;">
    </div>

    <div class="form-group">
        <label for="image">Image:</label><br>
        <input type="file" class="form-control" name="image" style="margin-bottom: 10px;">
        <img src="{{ $data->image }}" alt="" style="width: 50px; height: 50px; margin-top: 5px;">
    </div>

    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
</form>
