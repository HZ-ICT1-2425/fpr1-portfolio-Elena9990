<details>
<summary>
        {{ $faq->question }}
   </summary>
<ul>
    {!! $faq->answer !!}
</ul>
    <h6><i>Created at: {!! $faq->created_at->format('d.m.Y, H:i') !!}</i></h6>
    <h6><i>Updated at: {!! $faq->updated_at->format('d.m.Y, H:i') !!}</i></h6>
    <button id="edit-post-button" onclick="window.location.href='{{ route('faqs.edit', ['faq' => $faq->id]) }}'">Edit</button>
    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
        @csrf
        @method('DELETE')
        <button type="submit" id="delete-post-button">Delete</button>
    </form>
</details>
