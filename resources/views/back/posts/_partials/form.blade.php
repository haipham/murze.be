{!! csrf_field() !!}

<div class="form-line">
    <label class="form-label" for="title">Title:</label>
    <input class="form-text-input" name="title" value="{{ old('title', $post->title) }}">
    @if($errors->has('title'))
        <div class="validation-error">{{ $errors->first('title') }}</div>
    @endif
</div>

<div class="form-line">
    <label class="form-label" for="text">Text:</label>
    <textarea class="form-text-input markdown-editor" rows="15" name="text">{{ old('text', $post->markdown) }}</textarea>
    @if($errors->has('text'))
        <div class="validation-error">{{ $errors->first('text') }}</div>
    @endif
</div>

<div class="form-line">
    <label class="form-label" for="publish_date">Publish date:</label>
    <input class="form-text-input" name="publish_date" value="{{ old('publish_date', $post->publish_date->format('Y-m-d')) }}">
    @if($errors->has('publish_date'))
        <div class="validation-error">{{ $errors->first('publish_date') }}</div>
    @endif
</div>

<div class="form-line form-checkbox">
    <input class="" name="published" value="1" type="checkbox" {{ $post->published ? 'checked' : '' }}> Published
</div>

<div class="form-line">
    <button type="submit" class="btn btn-blue">{{ $submitText }}</button>
</div>