@extends('../../layouts/dashboard')
<?php 
 $msg = 'Hi!';
?>
@section('content')
<div class="container">
    <a  onclick="actionb('Clciked.')" class="button is-link">Link</a>
</div>

<script>
 
    $( document ).ready(function() {
        var q1 = "Eiei"
    });

    function actionb(md){
        <?php $dm = '<b>Hi</b>'; ?>
        alert(('{{$dm}}').innerHTML)
    }
</script>



@endsection