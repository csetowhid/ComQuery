<x-backend.app>
    <x-slot name="title">{{$title}}</x-slot>
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    User Create
                </h2>
                <a href="{{route('users.index')}}" class="button w-32 mr-2 mb-2 flex ml-auto items-center justify-center bg-theme-1 text-white"><i data-feather="list" class="w-4 h-4 mr-2"></i> Users</a>
            </div>
            <!-- BEGIN: Datatable -->
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-10">
                    <!-- BEGIN: Form Validation -->
                    <div class="intro-y box">
                        <div class="p-5" id="basic-datepicker">
                            <div class="preview">
                                <form class="validate-form" method="post" action="{{route('users.store')}}">
                                    @csrf
                                    @include("backend.users._form", ["button" => "Create"])
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END: Form Validation -->
                </div>
            </div>
        </div>
    </div>
</x-backend.app>
