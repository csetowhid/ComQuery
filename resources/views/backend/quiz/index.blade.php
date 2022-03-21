<x-backend.app>
    <x-slot name="title">{{$title}}</x-slot>
    <div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
            <div class="intro-y flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    Quiz Report
                </h2>
                <a href="{{route('quiz.create')}}" class="button w-32 mr-2 mb-2 flex ml-auto items-center justify-center bg-theme-1 text-white"><i data-feather="plus-circle" class="w-4 h-4 mr-2"></i> Create</a>
            </div>
            <!-- BEGIN: Datatable -->
            <div class="intro-y datatable-wrapper box p-5 mt-5">
                <table class="table table-report table-report--bordered display datatable w-full">
                    <thead>
                    <tr>
                        <th class="border-b-2 text-center whitespace-no-wrap">SL</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Title</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Exam Duration</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Url</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">Description</th>
                        <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($quizs as $quiz)
                        <tr>
                            <td class="border-b">
                                <div class="text-center whitespace-no-wrap">{{$loop->iteration}}</div>
                            </td>
                            <td class="border-b">
                                <div class="text-center whitespace-no-wrap">{{$quiz->title}}</div>
                            </td>
                            <td class="border-b">
                                <div class="text-center whitespace-no-wrap">{{$quiz->exam_duration}} Min</div>
                            </td>
                            <td class="border-b">
                                <div class="text-center whitespace-no-wrap">{{$quiz->url}}</div>
                            </td>
                            <td class="border-b">
                                <div class="text-center whitespace-no-wrap">{!! $quiz->description !!}</div>
                            </td>

                            <td class="border-b w-5">
                                <div class="flex sm:justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{route('quiz.edit',$quiz->id)}}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="font-medium whitespace-no-wrap text-center">No Data Found</div>
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-backend.app>
