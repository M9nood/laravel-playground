@extends('../layouts/dashboard')
@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
        <h1 class="title">
            Welcome to Laravel Playground
        </h1>
        <h2 class="subtitle">
            Primary subtitle
        </h2>
        </div>
    </div>
</section>
<div class="container dashboard-content">
    <div class="columns is-multiline">
        <div class="column is-12-mobile is-3-desktop">
            <article class="message is-link">
                <div class="message-header">
                    <p>Form</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                    <ul>
                        <li>Form</li>
                    </ul>
                </div>
            </article>
        </div>
        <div class="column is-12-mobile is-3-desktop">
            <article class="message is-success">
                <div class="message-header">
                    <p>Hello World</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                   gfd
                </div>
            </article>
        </div>
        <div class="column is-12-mobile is-3-desktop">
            <article class="message is-warning">
                <div class="message-header">
                    <p>Hello World</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                   sdf
                </div>
            </article>
        </div>
        <div class="column is-12-mobile is-3-desktop">
            <article class="message is-danger">
                <div class="message-header">
                    <p>Test</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                    <ul>
                        <li ><a href="/test/jstophp"> Js variable to php</a></li>
                        <li ><a href="/test/jscallphpfunction"> JS Call PH function</a></li>
                    </ul>
                </div>
            </article>
        </div>
        <div class="column is-12-mobile is-3-desktop">
            <article class="message is-dark">
                <div class="message-header">
                    <p>API</p>
                    <button class="delete" aria-label="delete"></button>
                </div>
                <div class="message-body">
                    <ul>
                        <li ><a href="/freshdesk"> Freshdesk</a></li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</div>



@endsection