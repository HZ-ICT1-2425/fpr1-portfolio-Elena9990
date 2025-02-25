<x-layout.main>
    <x:slot:title>Create FAQ</x:slot:title>
    <div class="box">
        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <h1 id="form-header">Create a New FAQ</h1>
            <br>
            <h2>
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
                <label for="question" class="label">Question</label>
                <div class="control">
                    <input type="text" name="question" placeholder="Write your question" class="input" autofocus value="{{old('question')}}">
                </div>
            </div>

            <div class="field">
                <label for="answer" class="label">Answer</label>
                <div class="control">
                    <input type="text" name="answer" placeholder="Write your answer" class="input" value="{{old('answer')}}">
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

