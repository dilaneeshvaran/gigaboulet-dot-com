@extends('layout.master')
@section('title')
Contact
@endsection
@section('script')
<meta name="csrf-token" content="{{ csrf_token() }}">

<script type="text/javascript">
    function callbackThen(response) {
        // read Promise object
        response.json().then(function(data) {
            console.log(data);
            if(data.success && data.score > 0.5) {
                console.log('valid recpatcha');
            } else {
                document.getElementById('registerForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    alert('recpatcha error');
                });
            }
        });
    }
    
    function callbackCatch(error){
        console.error('Error:', error)
    }
    </script>
        
    {!! htmlScriptTagJsApi([
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch',
    ]) !!}
@endsection
@section('content')
<!-- {{-- Contact --}} -->

<section class="contact_section">
    <div class="wrapper">
        <div class="contact_section_content">
            <div class="right_col">
                        @if(session()->has('status'))
                            <div class="alert alert-success">
                                {{ session()->get('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul class="mb-0 mt-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form   method="POST" action="{{ url('contacts') }}">
                                @csrf
                                <div class="element">
                                    <label for="name" class="form-label">Nom</label>
                                    <input type="string" name="name" class="form-control" required>
                                </div>
                                <div class="element">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control"  placeholder="name@example.com" required>
                                </div>
                                <div class="element">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" name="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-warning ">Envoyer</button>
                </form>
            </div>
            <div class="left_col">
                <div class="img"></div>        
            </div>
        </div>

                
            </div>

        </div>
        
    </div>
</section>
@endsection