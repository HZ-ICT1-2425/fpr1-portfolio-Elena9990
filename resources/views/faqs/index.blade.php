<x-layout.main>
    <x-ui.notifications></x-ui.notifications>
    <x-slot name="title"> faq </x-slot>
    <h1 id="questions-header">FAQ</h1>

    <!--the main content of the page-->
    <main class="faq-main">
        <!--questions and answers-->
        <h3>Are there any questions?</h3>
        @if($faqs->isEmpty())
            <div id="message-empty-faq">
                This FAQ is empty.
            </div>
        @else
        <div>
            <p>
                @foreach($faqs as $faq)
                    <x-faq.faq-item :faq="$faq"></x-faq.faq-item>
                @endforeach
            </p>
        </div>
        @endif
        <a href="{{ route('faqs.create') }}" id="create-post-button">Create new FAQ</a>
    </main>
</x-layout.main>

