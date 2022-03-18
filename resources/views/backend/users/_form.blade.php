<div>
    <label class="flex flex-col sm:flex-row"> Name </label>
    <input type="text" name="name" class="input w-full border mt-2" placeholder="Enter Name" value="{{old('name', isset($user) ? $user->name : '')}}" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Email </label>
    <input type="email" name="email" class="input w-full border mt-2" placeholder="Enter Email" value="{{old('email', isset($user) ? $user->email : '')}}" required>
</div>
@if (Route::is('users.create'))
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Password </label>
    <input type="password" name="password" class="input w-full border mt-2" placeholder="Enter Password" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Confirm Password </label>
    <input type="password" name="password_confirmation" class="input w-full border mt-2" placeholder="Confirm Password" required>
</div>
@endif
<div class="mt-3">
    <label> Select Role</label>
    <div class="mt-2">
        <select class="select2 w-full" name="roles">
            <option value="">Select</option>
            @foreach ($roles as $role)
                <option @isset($user){{$user->hasRole($role->name) == $role->name ? 'selected=true' : ''}}
                        @endisset>{{$role->name}}</option>
            @endforeach
        </select>
    </div>
</div>
<button type="submit" class="button bg-theme-1 text-white mt-5">{{$button}}</button>
