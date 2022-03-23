<div class="mt-3">
    <label> Select Quiz</label>
    <div class="mt-2">
        <select class="select2 w-full" name="quiz_id" required>
            <option value="">Select</option>
            @foreach ($quizes as $quiz)
                <option value="{{$quiz->id}}">{{$quiz->title}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Question Name </label>
    <textarea class="summernote" name="question_name" value="{{old('question_name')}}" required></textarea>
</div>

<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Question Mark </label>
    <input type="number" name="per_question_mark" class="input w-full border mt-2" placeholder="Enter Per Question Mark" min="0" required>
</div>

<button class="button mb-2 flex ml-auto items-center justify-center bg-theme-9 text-white" type="button" onclick="create()"><i data-feather="plus-circle" class="h-4"></i></button>
<div class="flex flex-wrap">
   <div class="w-full">
        <!----- Input ----->
        <div class="flex">
            <label class="w-1/2"> Options </label>
            <label class="w-1/2 pl-4"> Correct Answer</label>
        </div>

        <div class="flex flex-wrap items-center mt-2">
            <label class="flex flex-col sm:flex-row w-full"> Option 1 </label>
                <input type="text" name="options[]" class="input-field input border border-gray-300" placeholder="Enter Option Value">
                <div class="flex items-center text-gray-700 ml-4">
                    <input type="checkbox" class="input border" id="vertical-checkbox-chris-evans" name="correct_answer[]" value="1" >
                    <label class="cursor-pointer select-none pl-1">Option 1</label>
                </div>
        </div>
        <div class="flex flex-wrap items-center mt-2">
            <label class="flex flex-col sm:flex-row w-full"> Option 2 </label>
                <input type="text" name="options[]" class="input-field input border border-gray-300" placeholder="Enter Option Value">
                <div class="flex items-center text-gray-700 ml-4">
                    <input type="checkbox" class="input border" id="vertical-checkbox-chris-evans" name="correct_answer[]" value="1" >
                    <label class="cursor-pointer select-none pl-1">Option 2</label>
                </div>
        </div>
        <div class="flex flex-wrap items-center mt-2">
            <label class="flex flex-col sm:flex-row w-full"> Option 3 </label>
                <input type="text" name="options[]" class="input-field input border border-gray-300" placeholder="Enter Option Value">
                <div class="flex items-center text-gray-700 ml-4">
                    <input type="checkbox" class="input border" id="vertical-checkbox-chris-evans" name="correct_answer[]" value="1" >
                    <label class="cursor-pointer select-none pl-1">Option 3</label>
                </div>
        </div>
        <div class="flex flex-wrap items-center mt-2">
            <label class="flex flex-col sm:flex-row w-full"> Option 4 </label>
                <input type="text" name="options[]" class="input-field input border border-gray-300" placeholder="Enter Option Value">
                <div class="flex items-center text-gray-700 ml-4">
                    <input type="checkbox" class="input border" id="vertical-checkbox-chris-evans" name="correct_answer[]" value="1" >
                    <label class="cursor-pointer select-none pl-1">Option 4</label>
                </div>
        </div>
   </div>
</div>

<span id="writeroot"></span>

<div id="readroot" style="display: none">
        <button class="button flex ml-auto items-center justify-center bg-theme-6 text-white" type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);"><i data-feather="minus-circle" class="h-4"></i></button>

    <!----- Input ----->

    <div class="flex flex-wrap items-center gap-4 mt-1">
        <label class="flex flex-col sm:flex-row w-full"> Option 4 </label>
            <input type="text" name="options[]" class="input-field input border border-gray-300" placeholder="Enter Option Value">
            <div class="flex items-center text-gray-700">
                <input type="checkbox" class="input border" id="vertical-checkbox-chris-evans" name="correct_answer[]" value="1" >
                <label class="cursor-pointer select-none pl-1">Option 4</label>
            </div>
    </div>

</div>

<div class="mt-3">
    <label>Multiple Answer</label>
    <div class="flex items-center text-gray-700 mt-2">
        <input type="radio" class="input border mr-2" id="vertical-radio-chris-evans" name="is_multiple_answers" value="1" required>
        <label class="cursor-pointer select-none" for="vertical-radio-chris-evans">Yes</label>
    </div>
    <div class="flex items-center text-gray-700 mt-2">
        <input type="radio" class="input border mr-2" id="vertical-radio-liam-neeson" name="is_multiple_answers" value="0" required>
        <label class="cursor-pointer select-none" for="vertical-radio-liam-neeson">No</label>
    </div>
</div>

<div class="mt-3">
    <label> Question Type</label>
    <div class="mt-2">
        <select class="select2 w-full" name="question_type" required>
            <option value="">Select</option>
            <option value="single">Single </option>
            <option value="objective">Objective</option>
        </select>
    </div>
</div>

<button type="submit" class="button bg-theme-1 text-white mt-5">{{$button}}</button>
