<div>
    <label class="flex flex-col sm:flex-row"> Title </label>
    <input type="text" name="title" class="input w-full border mt-2" placeholder="Enter Quiz Title" value="{{old('name', isset($quiz) ? $quiz->title : '')}}" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Exam Duration </label>
    <input type="number" name="exam_duration" class="input w-full border mt-2" placeholder="Exam Duration Time In Minute" min="0" value="{{old('exam_duration', isset($quiz) ? $quiz->exam_duration : '')}}" required>
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Url </label>
    <input type="url" name="url" class="input w-full border mt-2" placeholder="Enter Share Address" value="{{old('url', isset($quiz) ? $quiz->url : '')}}">
</div>
<div class="mt-3">
    <label class="flex flex-col sm:flex-row"> Description </label>
    <textarea class="summernote" name="description" value="{{old('description')}}">{{ isset($quiz) ? $quiz->description: ''}}</textarea>
</div>
<button type="submit" class="button bg-theme-1 text-white mt-5">{{$button}}</button>
