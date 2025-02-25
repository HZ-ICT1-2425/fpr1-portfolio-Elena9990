<x-layout.main>
    <x:slot:title>Create post</x:slot:title>
    <div class="box">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h1 id="form-header">Create a New Blog Post</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
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
                    <input type="text" name="title" placeholder="Write your title" class="input" autofocus value="{{old('title')}}">
                </div>
            </div>

            <div class="field">
                <label for="slug" class="label">Slug</label>
                <div class="control">
                    <input type="text" name="slug" placeholder="Write your slug" class="input" value="{{old('slug')}}">
                </div>
            </div>

            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <x-ui.wysiwyg name="body" rows="15" placeholder="Write your body" value="{{ old('body') }}"></x-ui.wysiwyg>
                </div>
            </div>

            <div class="field">
                <label for="summary" class="label">Summary</label>
                <div class="control">
                    <input type="text" name="summary" placeholder="Write your summary" class="input" value="{{old('summary')}}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary" id="submit-form-button">Submit</button>
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

