<div class="mt-3">
    <label> Select Quiz</label>
    <div class="mt-2">
        <select class="select2 w-full" name="quiz_id">
            <option value="">Select</option>
            @foreach ($quizes as $quiz)
                <option value="{{$quiz->id}}">{{$quiz->title}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Question Name </label>
    <textarea class="summernote" name="question_name" value="{{old('question_name')}}"></textarea>
</div>

<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Question Mark </label>
    <input type="number" name="per_question_mark" class="input w-full border mt-2" placeholder="Enter Per Question Mark" required>
</div>

<button class="button mb-2 flex ml-auto items-center justify-center bg-theme-9 text-white" type="button" onclick="create()"><i data-feather="plus-circle" class="h-4"></i></button>
<div class="flex flex-row">
    <!----- Input ----->
    <div class="mt-3 w-full">
        <label class="flex flex-col sm:flex-row"> Options </label>
        <div class="mt-3">
            <label class="flex flex-col sm:flex-row"> Option 1 </label>
            <input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value">
        </div>
        <div class="mt-3">
            <label class="flex flex-col sm:flex-row"> Option 2 </label>
            <input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value">
        </div>
        <div class="mt-3">
            <label class="flex flex-col sm:flex-row"> Option 3 </label>
            <input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value">
        </div>
        <div class="mt-3">
            <label class="flex flex-col sm:flex-row"> Option 4 </label>
            <input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value">
        </div>
    </div>

    <!----- Answer ----->
    <div class="mt-3 w-full">
        <label> Correct Answer</label>
        <div class="flex items-center text-gray-700 mt-12">
            <input type="checkbox" class="input border mr-2" id="vertical-checkbox-chris-evans" name="correct_answer" value="1">
            <label class="cursor-pointer select-none">Option 1</label>
        </div>
        <div class="flex items-center text-gray-700 mt-16">
            <input type="checkbox" class="input border mr-2" id="vertical-checkbox-liam-neeson" name="correct_answer" value="2">
            <label class="cursor-pointer select-none" for="vertical-checkbox-liam-neeson">Option 2</label>
        </div>
        <div class="flex items-center text-gray-700 mt-16">
            <input type="checkbox" class="input border mr-2" id="vertical-checkbox-daniel-craig" name="correct_answer" value="3">
            <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Option 3</label>
        </div>
        <div class="flex items-center text-gray-700 mt-12">
            <input type="checkbox" class="input border mr-2" id="vertical-checkbox-daniel-craig" name="correct_answer" value="4">
            <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Option 4</label>
        </div>
    </div>
</div>

<span id="writeroot"></span>

<div id="readroot" style="display: none">
        <button class="button flex ml-auto items-center justify-center bg-theme-6 text-white" type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);"><i data-feather="minus-circle" class="h-4"></i></button>

    <!----- Input ----->

    <div class="flex flex-row">
        <div class="w-full">
            <label class="flex flex-col sm:flex-row">  </label>
            <input type="text" name="options[]" class="input w-full border mt-2" placeholder="Enter Option Value">
        </div>

        <!----- Answer ----->
        <div class="w-full mt-10">
            <input type="checkbox" class="input border mr-2" id="vertical-checkbox-chris-evans" name="correct_answer" value="1">
            <label class="cursor-pointer select-none">Option 1</label>
        </div>
    </div>

</div>

<div class="mt-3">
    <label>Multiple Answer</label>
    <div class="flex items-center text-gray-700 mt-2">
        <input type="radio" class="input border mr-2" id="vertical-radio-chris-evans" name="is_multiple_answers" value="1">
        <label class="cursor-pointer select-none" for="vertical-radio-chris-evans">Yes</label>
    </div>
    <div class="flex items-center text-gray-700 mt-2">
        <input type="radio" class="input border mr-2" id="vertical-radio-liam-neeson" name="is_multiple_answers" value="0">
        <label class="cursor-pointer select-none" for="vertical-radio-liam-neeson">No</label>
    </div>
</div>

<button type="submit" class="button bg-theme-1 text-white mt-5">{{$button}}</button>
