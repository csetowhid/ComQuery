<x-backend.app>
    <x-slot name="title">{{$title}}</x-slot>
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Permission Report
                </h2>
                <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="button w-32 mr-2 mb-2 flex ml-auto items-center justify-center bg-theme-1 text-white"><i data-feather="plus-circle" class="w-4 h-4 mr-2"></i> Create</a>
                <div class="modal" id="header-footer-modal-preview">
                    <div class="modal__content">
                        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                            <h2 class="font-medium text-base mr-auto">
                                Create New Permission
                            </h2>
                            <a data-dismiss="modal" href="javascript:;" class="items-center text-gray-700 hidden sm:flex right-0 top-0"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                        </div>
                        <form class="validate-form" method="post" action="{{route('permission.store')}}">
                            @csrf
                                <div class="intro-y col-span-12 lg:col-span-6">
                                    <div class="intro-y box">
                                        <div class="p-5" id="basic-datepicker">
                                            <div class="preview">
                                                    <div>
                                                        <label class="flex flex-col sm:flex-row"> Name </label>
                                                        <input type="text" name="name" class="input w-full border mt-2" placeholder="Enter Permission Name" required>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5 py-3 text-right border-t border-gray-200">
                                    <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                    <button type="submit" class="button w-20 bg-theme-1 text-white">Create</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Datatable -->
            <div class="intro-y datatable-wrapper box p-5 mt-5">
                <table class="table table-report table-report--bordered display datatable w-full">
                    <thead>
                        <tr>
                            <th class="border-b-2 whitespace-no-wrap">Permission Name</th>
                            <th class="border-b-2 text-center whitespace-no-wrap">Guard</th>
                            <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($permissions))
                        @foreach($permissions as $permission)
                            <tr>
                                <td class="border-b">
                                    <div class="font-medium whitespace-no-wrap">{{$permission->name}}</div>
                                </td>
                                <td class="border-b">
                                    <div class="font-medium whitespace-no-wrap">{{$permission->guard_name}}</div>
                                </td>

                                <td class="border-b w-5">
                                    <div class="flex sm:justify-center items-center">
                                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend.app>
