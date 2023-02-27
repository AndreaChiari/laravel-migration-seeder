<main>
    <ul>
        @foreach($trains as $train)
        <div class="card d-flex flex-row">
            <div class="me-5">
                <h4>TRAIN COMPANY:</h4>
                <P>{{$train->company}}</P>
            </div> 
            <div class="me-5">
                <h4>STARTING TIME:</h4>
                <P>{{$train->starting_time}}</P>
            </div> 
            <div class="me-5">
                <h4>DESTINATION TIME:</h4>
                <P>{{$train->destination_time}}</P>
            </div> 
            <div class="me-5">
                <h4>TRAIN NUMBER:</h4>
                <P>{{$train->train_number}}</P>
            </div>               
            <div class="me-5">
                <h4>DELAY:</h4>
                @if ($train->is_delay === 0)
                <p>il treno e' in ritardo</p>
                @elseif ($train->is_delay === 1)
                <p>il treno e' in orario</p>
                @endif
            </div>                                                               
        </div>
        @endforeach
    </ul>
</main>
