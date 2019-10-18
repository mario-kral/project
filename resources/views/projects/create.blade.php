@extends ('layout')
@section ('content')
    <h1 class="title">Create a New Project</h1>
    <form method="POST" action="/projects" style="margin-bottom: lem;">
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Project title" value="{{ old('title') }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="title">Description</label>
            <div class="control">
                <textarea name="description" placeholder="Project title" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}"> {{ old('description') }}</textarea>
            </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
        @if ($errors->any())
           <div class="notification is-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                    @endforeach
                </ul>
           </div>
        @endif
    </form>
@endsection

