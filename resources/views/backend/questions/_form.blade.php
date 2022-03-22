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

<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Options </label>
</div>
<button class="button w-32 mr-2 mb-2 flex ml-auto items-center justify-center bg-theme-1 text-white" type="button" onclick="createRow()"><i data-feather="plus-circle" class="w-4 h-4 mr-2"></i> Add</button>
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

<!-----Options---->
<table id="myTable">
    <tr>
        <td></td>
    </tr>
</table>
<!-----Options---->
<div class="mt-3">
    <label> Correct Answer</label>
    <div class="mt-2">
        <select class="select2 w-full" name="correct_answer">
            <option value="">Select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
        </select>
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
