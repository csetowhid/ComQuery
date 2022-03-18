<div>
    <label class="flex flex-col sm:flex-row"> Title </label>
    <input type="text" name="title" class="input w-full border mt-2" placeholder="Enter Quiz Title" value="{{old('name', isset($quiz) ? $quiz->title : '')}}" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Exam Duration </label>
    <input type="number" name="exam_duration" class="input w-full border mt-2" placeholder="Enter Exam Duration Time In Minute" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Url </label>
    <input type="url" name="url" class="input w-full border mt-2" placeholder="Enter Share Address">
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Description </label>
    <textarea class="summernote" name="description" placeholder="Enter Description"></textarea>
</div>
<button type="submit" class="button bg-theme-1 text-white mt-5">{{$button}}</button>
