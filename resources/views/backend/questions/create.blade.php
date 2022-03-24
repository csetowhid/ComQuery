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
            if (rowCount <= 1) {
                window.alert("There is only row, that you can not delete.");
            } else {
                var row = btn.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
        }
        // Add Row -
        let counter = 5;
        let counter2 = 5;
        let optionValue = 5;
        function create() {
        var table = document.getElementById("myTable");
        var rowCount = myTable.rows.length;

        var row = table.insertRow(rowCount -1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.style.width="100%";

        cell1.innerHTML = '<div class="items flex flex-wrap items-center gap-4 mt-1"><label class="flex flex-col sm:flex-row w-full cngval"> Option '+ counter++ +' </label><input type="text" name="options[]" class="input-field input border border-gray-300" placeholder="Enter Option Value"><div class="flex items-center text-gray-700"><input type="checkbox" class="input border" id="vertical-checkbox-chris-evans" name="correct_answer[]" value="'+ counter2++ +'" ><label class="cursor-pointer select-none pl-1 cngval">Option '+ optionValue++ +' </label></div></div>';

        cell2.innerHTML = '<button onclick=\"deleteRow(this)\" type=\"button\" class=\"btn btn-danger\"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-theme-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"> <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg></button>';
        
        }
    </script>
    @endpush
</x-backend.app>
