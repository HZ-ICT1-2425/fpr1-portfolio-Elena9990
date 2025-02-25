<x-layout.main>
    <x:slot:title>Edit post</x:slot:title>
    <div class="box">
        <form action="{{ route('posts.update', ['slug' => $post->slug]) }}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="title is-4">Edit your post</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Save'
            </h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Here are all the form fields --}}
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" name="title" class="input" autofocus value="{{old('title', $post->title)}}">
                </div>
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control">
                    <input type="text" name="slug" class="input" value="{{old('slug', $post->slug) }}">
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <x-ui.wysiwyg name="body" rows="15" value="{{ old('body', $post->body) }}"></x-ui.wysiwyg>
                </div>
            </div>

            <div class="field">
                <label for="summary" class="label">Summary</label>
                <div class="control">
                    <input type="text" name="summary" class="input" value="{{old('summary', $post->summary)}}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" id="submit-form-button">Save</button>
                </div>
                <div class="control">
                    <a type="button" href="{{ url()->previous() }}" id="submit-form-button-cancel">Cancel</a>
                </div>
                <div class="control">
                    <button type="reset" class="button is-primary" id="submit-form-button-reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>

