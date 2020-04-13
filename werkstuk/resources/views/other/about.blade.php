@extends('../layouts/about')
@section('content')
    <div id="background" class="mt-5 position-relative">
    </div>

    <div class="position-absolute mt-5" style="margin-left: 15%;">
        <a href="{{route('home')}}">Return to website</a>
        <h1 class="mt-4">About Dots&Pix</h1>
    </div>

    <div class="mb-5" style="padding-top: 270px; margin-left: 15%;">
        <h5>Used resources</h5>
        <ul>
            <li>Lines visual: <a href="https://www.vantajs.com/?effect=net" target="_blank">https://www.vantajs.com/?effect=net</a></li>
            <li>Bootstrap custom input file name: <a href="https://github.com/Johann-S/bs-custom-file-input" target="_blank">https://github.com/Johann-S/bs-custom-file-input</a></li>
            <li>Stack Overflow
                <ul>
                    <li><a href="https://stackoverflow.com/questions/46206992/convert-image-to-base-64-string-with-laravel/46207246" target="_blank">Convert image to base64 format</a></li>
                    <li><a href="https://stackoverflow.com/questions/48903572/display-blob-image-laravel-4" target="_blank">Use BLOB as image source</a></li>
                    <li><a href="https://stackoverflow.com/questions/37161505/laravel-get-name-of-file" target="_blank">Get name of uploaded file</a></li>
                    <li><a href="https://stackoverflow.com/questions/52053696/how-to-add-column-on-table-using-query-builder-in-laravel" target="_blank">Add column to table with custom query</a></li>
                    <li><a href="https://stackoverflow.com/questions/16597392/how-do-you-get-the-path-to-the-laravel-storage-folder" target="_blank">Get path to storage folder</a></li>
                    <li><a href="https://stackoverflow.com/questions/40587546/how-to-highlight-current-page-with-bootstrap-in-laravel-5-2" target="_blank">Highlight current page with Bootstrap</a></li>
                    <li><a href="https://stackoverflow.com/questions/31114918/laravel-5-dbseed-the-username-and-password-but-not-authenticating-on-login" target="_blank">Encrypt seeded user password</a></li>
                </ul>
            </li>
        </ul>

        <h6 class="text-muted" style="margin-top: 100px;">Project by Tim Willaert</h6>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
    <script src="https://www.vantajs.com/dist/vanta.net.min.js"></script>
    <script>
        VANTA.NET({
        el: "#background",
        mouseControls: false,
        touchControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xbbbbbb,
        backgroundColor: 0xffffff,
        points: 20,
        spacing: 30,
        maxDistance: 35
        });
    </script>
@endsection
