<x-layout.main>
    <x:slot:title>Edit post</x:slot:title>
    <div class="box">
        <form action="{{ route('faqs.update', ['faq' => $faq->id])}}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="title is-4">Edit your FAQ</h1>
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
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" class="input" autofocus value="{{old('question', $faq->question)}}">
                </div>
            </div>

            <div class="field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" class="input" value="{{old('answer', $faq->answer) }}">
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

