   @if(isset($subscribers_emails))
                @foreach($subscribers_emails as $subscribers)
                    <div class="row  text-center">
                        <div position="center">
                            <p>{{ $subscribers->id }}</p>
                            <p><em>{{ $subscribers->email }}</em></p>
                        </div>
                    </div>
                @endforeach
            @endif