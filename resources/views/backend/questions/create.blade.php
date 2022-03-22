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
        var counter = 5;
        function create() {
            counter++;
            var newFields = document.getElementById('readroot').cloneNode(true);
            newFields.id = '';
            newFields.style.display = 'block';
            var newField = newFields.childNodes;
            for (var i=0;i<newField.length;i++) {
                var theName = newField[i].name
                if (theName)
                    newField[i].name = theName + counter;
            }
            var insertHere = document.getElementById('writeroot');
            insertHere.parentNode.insertBefore(newFields,insertHere);
            document.getElementById('ov').innerText = counter;
        }
    </script>
        {{-- <script>
            function deleteRow(btn) {
                /* ----- Input Remove ----- */
                    var rowCount = myTable.rows.length;
                    var row = btn.parentNode.parentNode;
                    row.parentNode.removeChild(row);

                    // var rowCount = optionTable.rows.length;
                    // var row = btn.parentNode.parentNode;
                    // row.parentNode.removeChild(row);
            }
            var optionValue = 5;
            var checkValue = 5;

            function createRow() {

                /* ----- Input Add ----- */
                var table = document.getElementById("myTable");
                var rowCount = myTable.rows.length;

                var row = table.insertRow(rowCount -1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                cell1.style.width="100%";
    

                cell1.innerHTML = '<div class="mt-3"><label class="flex flex-col sm:flex-row"> Option '+ optionValue++ +' </label><input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value"></div>';

                cell2.innerHTML = '<button onclick="deleteRow(this)" class="button mt-10 flex ml-auto items-center justify-center bg-theme-6 text-white"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> </button>';


                /* ----- Checkbox Add ----- */

                var tableOp = document.getElementById("optionTable");
                var rowCount = optionTable.rows.length;

                var row = tableOp.insertRow(rowCount -1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                cell1.style.width="100%";
    

                cell1.innerHTML = '<div class="flex items-center text-gray-700 mt-2"><input type="checkbox" class="input border mr-2" id="vertical-checkbox-daniel-craig" name="correct_answer" value="4"><label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Option '+ checkValue++ +'</label></div>';
                
                // cell2.innerHTML = '<button onclick="deleteRow(this)" class="button mt-10 flex ml-auto items-center justify-center bg-theme-6 text-white"><svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> </button>';

            }

        </script> --}}
    @endpush
</x-backend.app>
