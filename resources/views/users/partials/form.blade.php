<div class="row">
    <div class="mb-3 col-md-6">
        <label class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control border border-2 p-2" value='{{ old('nome', @$user->name) }}'>
        @error('nome')
    <p class='text-danger inputerror'>{{ $message }} </p>
    @enderror
    </div>
    
    <div class="mb-3 col-md-6">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control border border-2 p-2" value='{{ old('email', @$user->email) }}'>
        @error('email')
        <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>


    <div class="col-md-6 mb-3">
        <label>Role </label>
        <select name="role" class="form-control border border-2 p-2" id="role" {{@$is_show == 1 ? "disabled" : ""}}>
            <option value=""> Select Role </option>
            @foreach($roles as $key => $role)
            <option value="{{@$role->id}}" {{old('role', @$user->role_id) == @$role->id ? "selected" : ""}}> {{ucfirst(@$role->name)}} </option>
            @endforeach
        </select>
        @error('role')
        <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>

    <div class="col-lg-6 form-group">
    </div>


    
     @if (@$user->id && @$is_show != 1)
    <div class="col-md-12">
        <p class="text-danger" style="font-size: inherit;"><b>Note:</b> Add password only if you want to change it.</p>
    </div>
    @endif

    <div class="mb-3 col-md-6">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control border border-2 p-2">
        @error('password')
        <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>

    <div class="mb-3 col-md-6">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control border border-2 p-2">
        @error('password_confirmation')
        <p class='text-danger inputerror'>{{ $message }} </p>
        @enderror
    </div>
</div>