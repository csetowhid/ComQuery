<x-backend.app>
    <x-slot name="title">{{$title}}</x-slot>
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Question Create
                </h2>
                <a href="{{route('questions.index')}}" class="button w-32 mr-2 mb-2 flex ml-auto items-center justify-center bg-theme-1 text-white"><i data-feather="list" class="w-4 h-4 mr-2"></i> Questions</a>
            </div>
            <!-- BEGIN: Datatable -->
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-12">
                    <!-- BEGIN: Form Validation -->
                    <div class="intro-y box max-w-3xl mx-auto">
                        <div class="p-5" id="basic-datepicker">
                            <div class="preview">
                                <form class="validate-form" method="post" action="{{route('questions.store')}}">
                                    @csrf
                                    @include("backend.questions._form", ["button" => "Create"])
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END: Form Validation -->
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function deleteRow(btn) {
                var rowCount = myTable.rows.length;
                    var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);
            }
            // Add Row -
            var optionValue = 5;

            function createRow() {
                var table = document.getElementById("myTable");
                var rowCount = myTable.rows.length;

                var row = table.insertRow(rowCount -1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                cell1.style.width="100%";
    

                cell1.innerHTML = '<div class="mt-3"><label class="flex flex-col sm:flex-row"> Option '+ optionValue++ +' </label><input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value"></div>';

                cell2.innerHTML = '<button onclick="deleteRow(this)" class="button w-32 mt-10 flex ml-auto items-center justify-center bg-theme-1 text-white"><i data-feather="plus-circle" class="w-10 h-5 mr-2"></i> close </button>';

            }

        </script>
    @endpush
</x-backend.app>
