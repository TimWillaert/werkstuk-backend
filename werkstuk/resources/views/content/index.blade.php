@extends('../layouts.index')
@section('content')
<div id="background" style="height: 83vh; width: 100%;">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
        <img src="../public/dots&pixlogo.png" style="height: 150px">
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
<script src="https://www.vantajs.com/dist/vanta.net.min.js"></script>
<script>
    VANTA.NET({
    el: "#background",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0xbbbbbb,
    backgroundColor: 0xffffff,
    points: 10,
    spacing: 20,
    maxDistance: 25
    });
</script>
@endsection
