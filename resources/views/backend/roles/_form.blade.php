<div>
    <label class="flex flex-col sm:flex-row"> Name </label>
    <input type="text" name="name" class="input w-full border mt-2" placeholder="Enter Role Name" value="{{old('name', isset($role) ? $role->name : '')}}" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Permissions </label>
    @forelse($permissions->chunk(4) as $allpermission)
        @foreach($allpermission as $permission)
            <div class="flex items-center text-gray-700 mt-2">
                <input type="checkbox" name="permissions[]" class="input border mr-2" id="vertical-checkbox-chris-evans" value="{{$permission->id}}" @if(isset($role)) {{$role->hasPermissionTo($permission->name) ? 'checked' : '' }} @endif>
                <label class="cursor-pointer select-none pt-1">{{$permission->name}}</label>
            </div>
        @endforeach
    @empty
        <label class="mt-2"> No Permission Found </label>
    @endforelse
</div>
<button type="submit" class="button bg-theme-1 text-white mt-5">{{$button}}</button>
